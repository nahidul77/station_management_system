<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vendor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if ($user_id == NULL) {
			redirect('admin');
		}
		$this->load->model('vendor_model');
	}

	//==================this function for view comapany list (start) ========================//

	public function index()
	{
		$data['m_cmpny'] = 'active';
		$data['vendors'] = $this->vendor_model->vendor();
		$data['content'] = $this->load->view('pages/vendor_view', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//==================this function for view comapany list (start) ========================//


	//=============== This function for create vendor (Start) =============================//
	public function create()
	{
		$data['m_cmpny'] = 'active';
		$data['vendors'] = (object) array('vendor_id' => '', 'vendor_name' => '', 'vendor_address' => '', 'vendor_cell' => '', 'vendor_email' => '', 'vendor_web' => '');
		$data['content'] = $this->load->view('pages/vendor_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}

	//=============== This function for create vendor (End) =============================//

	//=============== This function for Save vendor (Start) =============================//


	public function save()
	{
		$data['m_cmpny'] = 'active';
		$vendor_id = $this->input->post('vendor_id'); //this name for get vendor id
		$vendor_name = trim($this->input->post('vendor_name')); //this name for get vendor name
		$vendor_address = trim($this->input->post('vendor_address')); //this name for get vendor address
		$vendor_cell = trim($this->input->post('vendor_cell')); //this name for get vendor cell no
		$vendor_email = trim($this->input->post('vendor_email')); //this name for get vendor e-mail
		$vendor_web = trim($this->input->post('vendor_web')); //this name for get vendor web
		$vendor_web = trim($this->input->post('vendor_web')); //this name for get vendor web
		$is_active = trim($this->input->post('active')); //this name for get vendor web

		$data['vendors'] = (object) array('vendor_id' => $vendor_id, 'vendor_name' => $vendor_name, 'vendor_address' => $vendor_address, 'vendor_cell' => $vendor_cell, 'vendor_email' => $vendor_email, 'vendor_web' => $vendor_web);
		//============================ for form validation (start) ====================//
		$this->form_validation->set_rules('vendor_name', 'vendor Name', 'trim|required');
		$this->form_validation->set_rules('vendor_cell', 'vendor Cell', 'trim');
		$this->form_validation->set_rules('vendor_email', 'vendor E-Mail', 'trim');
		$this->form_validation->set_rules('active', 'Is Active', 'required');



		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('pages/vendor_form', $data, TRUE);
			$this->load->view('wrapper_main', $data);
		} else {
			$saveData = array(
				'vendor_id' => $vendor_id,
				'vendor_name' => $vendor_name,
				'vendor_address' => $vendor_address,
				'vendor_cell' => $vendor_cell,
				'vendor_email' => $vendor_email,
				'vendor_web' => $vendor_web,
				'active' => $is_active
			);
			$this->vendor_model->save($saveData);

			if (!empty($vendor_id)) {
				$this->session->set_flashdata('success', display('updatesuccessfully'));
			} else {
				$this->session->set_flashdata('success', display('savesuccessfully'));
			}
			redirect('vendor');
		}
	}
	//=============== This function for Save vendor (End) =============================//

	//================this Function for edit vendor(Start) ============================//


	public function edit_vendor($vendor_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		}
		#
		$data['m_cmpny'] = 'active';
		$vendorList = $this->vendor_model->edit_vendor($vendor_id);
		$data['vendors'] = $vendorList[0];
		$data['content'] = $this->load->view('pages/vendor_form', $data, TRUE);
		$this->load->view('wrapper_main', $data);
	}
	//================this Function for edit vendor(End) ============================//

	//================this Function for Delete vendor(Start) ============================//

	public function delete_vendor($vendor_id = '')
	{
		if (
			$this->session->userdata('isLogin') == FALSE
			|| $this->session->userdata('user_type') != 9
		) {
			redirect('admin');
		} else {
			$this->vendor_model->delete_vendor($vendor_id);
			$this->session->set_flashdata('success', display('deletesuccessfully'));
			redirect('vendor');
		}
		#

	}
	//================this Function for Delete vendor(End) ============================//

}
