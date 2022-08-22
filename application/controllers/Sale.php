<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if ($user_id == NULL) {
			redirect('admin');
		}
		$this->load->model('sale_model');
	}

	//=================this fubction for view fule rate list(start) ===================//
	public function index()
	{
		$data['m_sale'] = "active";
		$data['sales'] = $this->sale_model->sale();
		$data['content'] = $this->load->view('pages/sale_view', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=================this fubction for view fule rate list(End) ===================//

	//=============== This function for create/insert fule rate (Start) =============================//


	public function create()
	{
		$data['m_sale'] = "active";
		$data['fuel_types'] = $this->sale_model->fuel_name_dropdown();
		$data['v_types'] = $this->sale_model->v_type_dropdown();
		$data['sales'] = (object) array('sale_id' => '', 'invoice_id' => '', 'fuel_id' => '', 'v_type' => '', 'customer_name' => '', 'customer_phone' => '', 'sell_unit' => '', 'amount' => '', 'date' => '');
		$data['content'] = $this->load->view('pages/sale_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=============== This function for create/insert fule rate (Start) =============================//



	//=============== This function for Save fule rate (Start) =============================//


	public function save()
	{
		// die(var_dump($this->input->post()));
		$last_stock = (int) $this->input->post('stock');
		$sale_id = $this->input->post('sale_id'); //this id for get fule rate id
		// $v_id = trim($this->input->post('v_id'));//this name for get vehicle registration no
		$fuel_id    = trim($this->input->post('fuel_id')); //this name for get fule
		$v_type     = (int) trim($this->input->post('v_type')); //this name for get fule
		$amount      = (int) trim($this->input->post('amount')); //this name for get fule
		$customer_name        = trim($this->input->post('customer_name')); //this name for get fule
		$customer_phone    = trim($this->input->post('customer_phone')); //this name for get fule
		$sell_unit   = (int) trim($this->input->post('sell_unit')); //this name for get fule
		$stock   =  $last_stock - $sell_unit; //this name for get fule
		$date    = date('Y-m-d'); //this name for get fule
		$invoice_id    = 'ST-' . random_int(100000, 999999); //this name for get fule

		$data['fuel_types'] = $this->sale_model->fuel_name_dropdown();
		$data['v_types'] = $this->sale_model->v_type_dropdown();
		// $data['v_id'] = $this->fule_rate_model->get_vehicle_model();
		$data['sales'] = (object) array('fuel_id' => $fuel_id, 'invoice_id' => $invoice_id, 'v_type' => $v_type, 'amount' => $amount, 'customer_name' => $customer_name, 'customer_phone' => $customer_phone, 'sell_unit' => $sell_unit, 'date' => $date);
		//============================ for form validation (start) ====================//
		// $this->form_validation->set_rules('fuel_id', 'Fuel Type', 'required');
		// $this->form_validation->set_rules('v_type', 'Vehicle Type', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('customer_name', 'Customer Name', 'required');
		$this->form_validation->set_rules('customer_phone', 'Customer Phone', 'required');
		$this->form_validation->set_rules('sell_unit', 'Sell Unit', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('pages/sale_form', $data, TRUE);
			$this->load->view('wrapper_main', $data);
		} else {
			$saveData = array(
				'fuel_id' => $fuel_id,
				'invoice_id' => $invoice_id,
				'v_type' => $v_type,
				'amount' => $amount,
				'customer_name' => $customer_name,
				'customer_phone' => $customer_phone,
				'sell_unit' => $sell_unit,
				'date' => $date
			);
			$this->sale_model->save($saveData);

			if (!empty($sale_id)) {
				$this->session->set_flashdata('success', 'Update Successfully');
			} else {
				$stockData['fuel_id'] = $fuel_id;
				$stockData['stock'] = $stock;
				$this->sale_model->update_stock($stockData);

				$this->session->set_flashdata('success', 'Save Successfully');
			}

			redirect('sale');
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
