<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fule_type extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if ($user_id == NULL) {
			redirect('admin');
		}
		$this->load->model('fule_type_model');
	}

	//=================this fubction for view fule type list(start) ===================//
	public function index()
	{
		$data['m_fuel'] = "active";
		$data['types'] = $this->fule_type_model->fule_type();
		$data['content'] = $this->load->view('pages/fule_type_view', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=================this fubction for view fule rate list(End) ===================//

	//=============== This function for create/insert fule type (Start) =============================//


	public function create()
	{
		$data['m_fuel'] = "active";
		$data['types'] = (object) array('fuel_type_id' => '', 'fuel_type_name' => '');
		$data['content'] = $this->load->view('pages/fule_type_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=============== This function for create/insert fule type (Start) =============================//



	//=============== This function for Save fule type (Start) =============================//


	public function save()
	{
		$data['m_fuel'] = "active";
		$fuel_type_id = $this->input->post('fuel_type_id');
		$fuel_type_name = trim($this->input->post('fuel_type_name')); //this name for get fule
		$is_active = trim($this->input->post('active')); //this name for get fule

		// $data['v_id'] = $this->fule_rate_model->get_vehicle_model();
		$data['types'] = (object) array('fuel_type_id' => $fuel_type_id, 'fuel_type_name' => $fuel_type_name);
		//============================ for form validation (start) ====================//
		$this->form_validation->set_rules('fuel_type_name', 'type Name', 'required');
		$this->form_validation->set_rules('active', 'Is Active', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('pages/fule_type_form', $data, TRUE);
			$this->load->view('wrapper_main', $data);
		} else {
			$saveData = array(
				'fuel_type_id' => $fuel_type_id,
				'type_name' => $fuel_type_name,
				'active' => $is_active
			);
			$this->fule_type_model->save($saveData);
			if (!empty($fuel_type_id)) {
				$this->session->set_flashdata('success', 'Update Successfully');
			} else {
				$this->session->set_flashdata('success', 'Save Successfully');
			}

			redirect('fule_type');
		}
	}
	//=============== This function for Save Fuel Rate (End) =============================//

	//================this Function for edit Fuel Rate(Start) ============================//


	public function type_edit($fuel_type_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		}
		#
		$data['m_fuel'] = "active";
		$typeList = $this->fule_type_model->edit_type($fuel_type_id);
		$data['types'] = $typeList[0];
		$data['content'] = $this->load->view('pages/fule_type_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//================this Function for edit Fuel Rate(End) ============================//
	//================this Function for Delete Fuel Rate(Start) ============================//

	public function delete_type($v_fuel_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		} else {
			$this->fule_type_model->delete_type($v_fuel_id);
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('fule_type');
		}
		#

	}
	//================this Function for Delete Fuel Rate(End) ============================//


}
