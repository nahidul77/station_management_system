<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report_general extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect('admin');
        }
        $this->load->model(array('report_general_model'));
    }

    public function index()
    {
        $data['report'] = (object)array(
            'general_report' => $this->input->post('general_report'),
            'date_1'            => $this->input->post('date_1'),
            'date_2'            => $this->input->post('date_2'),
        );
        $data['content'] = $this->load->view('pages/report_general', $data, TRUE);
        $this->load->view('wrapper_main', $data);
    }

    public function generate()
    {
        $data['report'] = (object)$report = array(
            'general_report' => $this->input->post('general_report'),
            'date_1'            => $this->input->post('date_1'),
            'date_2'            => $this->input->post('date_2'),
        );

        $data['result']  = $this->report_general_model->report($report);
        // die(var_dump($data));
        $data['content'] = $this->load->view('pages/report_general', $data, TRUE);
        $this->load->view('wrapper_main', $data);
    }
}
