<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fule_rate extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if ($user_id == NULL) {
			redirect('admin');
		}
		$this->load->model('fule_rate_model');
	}

	//=================this fubction for view fule rate list(start) =====================//
	public function index()
	{
		$data['m_fuel'] = "active";
		$data['rates'] = $this->fule_rate_model->fule_rate();
		$data['content'] = $this->load->view('pages/fule_rate_view', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=================this fubction for view fule rate list(End) ===================//

	//=============== This function for create/insert fule rate (Start) =============================//


	public function create()
	{
		$data['m_fuel'] = "active";
		$data['fuel_types'] = $this->fule_rate_model->fuel_type_dropdown();
		$data['fuel_units'] = $this->fule_rate_model->fuel_unit_dropdown();
		$data['rates'] = (object) array('fuel_id' => '', 'fuel_name' => '', 'fuel_type_id' => '', 'unit_id' => '', 'stock' => '', 'buy_price' => '', 'sell_price' => '');
		$data['content'] = $this->load->view('pages/fule_rate_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=============== This function for create/insert fule rate (Start) =============================//



	//=============== This function for Save fule rate (Start) =============================//


	public function save()
	{
		$data['m_fuel'] = "active";
		$fuel_id = $this->input->post('fuel_id'); //this id for get fule rate id
		// $v_id = trim($this->input->post('v_id'));//this name for get vehicle registration no
		$fuel_name    = trim($this->input->post('fuel_name')); //this name for get fule
		$fuel_type_id = trim($this->input->post('fuel_type_id')); //this name for get fule
		$unit_id      = trim($this->input->post('unit_id')); //this name for get fule
		$stock        = trim($this->input->post('stock')); //this name for get fule
		$buy_price    = trim($this->input->post('buy_price')); //this name for get fule
		$sell_price   = trim($this->input->post('sell_price')); //this name for get fule
		$is_active    = trim($this->input->post('active')); //this name for get fule

		// $data['v_id'] = $this->fule_rate_model->get_vehicle_model();
		$data['rates'] = (object) array('fuel_id' => $fuel_id, 'fuel_name' => $fuel_name, 'fuel_type_id' => $fuel_type_id, 'unit_id' => $unit_id, 'stock' => $stock, 'buy_price' => $buy_price, 'sell_price' => $sell_price);
		//============================ for form validation (start) ====================//
		$this->form_validation->set_rules('fuel_name', 'Fuel Name', 'required');
		$this->form_validation->set_rules('active', 'Is Active', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('pages/fule_rate_form', $data, TRUE);
			$this->load->view('wrapper_main', $data);
		} else {
			$saveData = array(
				'fuel_id' => $fuel_id,
				'fuel_name' => $fuel_name,
				'fuel_type_id' => $fuel_type_id,
				'unit_id' => $unit_id,
				'stock' => $stock,
				'buy_price' => $buy_price,
				'sell_price' => $sell_price,
				'active' => $is_active
			);
			$this->fule_rate_model->save($saveData);
			if (!empty($fuel_id)) {
				$this->session->set_flashdata('success', 'Update Successfully');
			} else {
				$this->session->set_flashdata('success', 'Save Successfully');
			}

			redirect('fule_rate');
		}
	}
	//=============== This function for Save Fuel Rate (End) =============================//

	//================this Function for edit Fuel Rate(Start) ============================//


	public function rate_edit($v_fuel_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		}
		#
		$data['m_fuel'] = "active";
		$data['fuel_types'] = $this->fule_rate_model->fuel_type_dropdown();
		$data['fuel_units'] = $this->fule_rate_model->fuel_unit_dropdown();
		$rateList = $this->fule_rate_model->edit_rate($v_fuel_id);
		$data['rates'] = $rateList[0];
		$data['content'] = $this->load->view('pages/fule_rate_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}

	public function get_price_by_fuel_id($v_fuel_id = '')
	{
		echo json_encode($this->fule_rate_model->edit_rate($v_fuel_id));
	}
	//================this Function for edit Fuel Rate(End) ============================//
	//================this Function for Delete Fuel Rate(Start) ============================//

	public function delete_rate($v_fuel_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		} else {
			$this->fule_rate_model->delete_rate($v_fuel_id);
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('fule_rate');
		}
		#

	}
	//================this Function for Delete Fuel Rate(End) ============================//


}
