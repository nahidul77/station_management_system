<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if ($user_id == NULL) {
			redirect('admin');
		}
		$this->load->model('vehicle_model');
	}
	//===================== vehicle type create (start) ===================================//
	public function vehicle_type_create()
	{
		$data['m_v_l'] = 'active';
		$data['vehicle_types'] = (object) array('v_type_id' => '', 'v_type' => '');
		$data['content'] = $this->load->view('pages/vehicle_type_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//=======================vehicle type create(end) ===================================//

	//==============================vehicle type list view(start)==============================//
	public function vehicle_type_list()
	{
		$data['m_v_l'] = 'active';
		$data['vehicle_types'] = $this->vehicle_model->vehicle_list();
		$data['content'] = $this->load->view('pages/vehicle_type_view', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}


	//==============================vehicle type list view (end)==============================//

	//==============================vehicle type save(start)==============================//
	public function vehicle_type_save()
	{
		$data['m_v_l'] = 'active';
		$v_type_id = $this->input->post('v_type_id');
		$v_type = trim($this->input->post('v_type')); //this name for get vehicle type
		$is_active = trim($this->input->post('active')); //this name for get vehicle type
		$data['vehicle_types'] = (object) array('v_type_id' => $v_type_id, 'v_type' => $v_type);
		//============================ for form validation (start) ====================//
		$this->form_validation->set_rules('v_type', 'Vehicle Type', 'trim|required');
		$this->form_validation->set_rules('active', 'Is Active', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('pages/vehicle_type_form', $data, TRUE);
			$this->load->view('wrapper_main', $data);
		} else {
			$saveData = array(
				'v_type_id' => $v_type_id,
				'v_type' => $v_type,
				'active' => $is_active,
			);
			$this->vehicle_model->save($saveData);
			if (!empty($v_type_id)) {
				$this->session->set_flashdata('success', display('updatesuccessfully'));
			} else {
				$this->session->set_flashdata('success', display('savesuccessfully'));
			}

			redirect('vehicle/vehicle_type_list');
		}
	}
	//==============================vehicle type save(end)==============================//

	//================================vehicle type edit(start)===============================//
	public function vehicle_type_edit($v_type_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		}
		#
		$data['m_v_l'] = 'active';
		$vehicleList = $this->vehicle_model->vehicle_type_edit($v_type_id);
		$data['vehicle_types'] = $vehicleList[0];
		$data['content'] = $this->load->view('pages/vehicle_type_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}


	//================================vehicle type edit(end)===============================//

	//================================vehicle type Delete(start)===============================//
	public function vehicle_type_delete($v_type_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		} else {
			$this->vehicle_model->delete_vehicle($v_type_id);
			$this->session->set_flashdata('success', display('deletesuccessfully'));
			redirect('vehicle/vehicle_type_list');
		}
		#


	}


	//================================vehicle type Delete(start)===============================//

	//***********************************************VEHICLE INFORMATION (START)*************************************//	

	//================================vehicle Information create(start)===============================//

	public function vehicle_information_create()
	{
		$data['m_v_li'] = 'active';
		$data['v_type'] = $this->vehicle_model->get_vehicle_type();
		$data['v_owner'] = array(0 => 'Hire', 1 => 'Own');
		$data['vehicle_infos'] = (object) array('v_id' => '', 'v_owner' => '', 'v_model_no' => '', 'v_registration_no' => '', 'v_chassis_no' => '', 'v_engine_no' => '', 'v_type' => '');
		$data['content'] = $this->load->view('pages/vehicle_information_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}


	//================================vehicle Information create (End)===============================//

	//=============================vehicle information save(start) ===================================//
	public function vehicle_information_save()
	{
		$data['m_v_li'] = 'active';
		$v_id = $this->input->post('v_id');
		$v_model_no = trim($this->input->post('v_model_no')); //this name for get vehicle model 
		$v_registration_no = trim($this->input->post('v_registration_no')); //this name for get reg no
		$v_chassis_no = trim($this->input->post('v_chassis_no')); //this name for get chess no
		$v_engine_no = trim($this->input->post('v_engine_no')); //this name for get engine no
		$v_type = $this->input->post('v_type'); //this name for get vehicle type from dropdown
		$v_owner = $this->input->post('v_owner'); //this name for get owner from dropdown
		$is_active = $this->input->post('active'); //this name for get owner from dropdown

		$data['v_type'] = $this->vehicle_model->get_vehicle_type();
		$data['v_owner'] = array(0 => 'Hire', 1 => 'Own');
		$data['vehicle_infos'] = (object) array('v_id' => $v_id, 'v_model_no' => $v_model_no, 'v_registration_no' => $v_registration_no, 'v_chassis_no' => $v_chassis_no, 'v_engine_no' => $v_engine_no, 'v_type' => $v_type, 'v_owner' => $v_owner);
		//============================ for form validation (start) ====================//
		$this->form_validation->set_rules('v_registration_no', 'Vehicle Registrarion NO', 'trim|required');
		$this->form_validation->set_rules('v_type', 'Vehicle Type', 'required');
		$this->form_validation->set_rules('v_owner', 'Vehicle Owner', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('pages/vehicle_information_form', $data, TRUE);
			$this->load->view('wrapper_main', $data);
		} else {
			$saveData = array(
				'v_id' => $v_id,
				'v_model_no' => $v_model_no,
				'v_registration_no' => $v_registration_no,
				'v_chassis_no' => $v_chassis_no,
				'v_engine_no' => $v_engine_no,
				'v_type' => $v_type,
				'v_owner' => $v_owner,
				'active' => $is_active
			);

			$this->vehicle_model->vehicle_info_save($saveData);
			if (!empty($v_id)) {
				$this->session->set_flashdata('success', display('updatesuccessfully'));
			} else {
				$this->session->set_flashdata('success', display('savesuccessfully'));
			}
			redirect('vehicle/vehicle_info_list');
		}
	}

	//=============================vehicle information save(end) ===================================//

	//=================================== vehicle information list (start)===================//

	public function vehicle_info_list()
	{
		$data['m_v_li'] = 'active';
		$data['vehicle_infos'] = $this->vehicle_model->info_list();
		$data['content'] = $this->load->view('pages/vehicle_information_view', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}

	//=================================== vehicle information list (end)===================//


	//======================================  vehicle information edit (Start)==========================//

	public function vehicle_info_edit($v_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		}
		#
		$data['m_v_li'] = 'active';
		$data['v_type'] = $this->vehicle_model->get_vehicle_type();
		$data['v_owner'] = array(0 => 'Hire', 1 => 'Own');
		$infoList = $this->vehicle_model->vehicle_info_edit($v_id);
		$data['vehicle_infos'] = $infoList[0];
		$data['content'] = $this->load->view('pages/vehicle_information_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//======================================  vehicle information  edit (Start)==========================//

	//======================================  vehicle information delete (Start)==========================//
	public function vehicle_info_delete($v_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		} else {
			$this->vehicle_model->vehicle_info_delete($v_id);
			$this->session->set_flashdata('success', display('deletesuccessfully'));
			redirect('vehicle/vehicle_info_list');
		}
		#

	}

	//======================================  vehicle information delete (end)==========================//

	//**********************************************VEHICLE INFORMATION (end)************************************************//

	//--------------------------------------------------------------------------------------------//


}
