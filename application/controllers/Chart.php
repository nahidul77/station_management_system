<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('chart_model');
    }

    public function index()
    {
        $result = $this->chart_model->triping();
        $dayOfWeek = [];
        foreach ($result as $key => $data) {
            $input = $data->profit;
            $date = $data->date;
            $unixTimestamp = strtotime($date);
            $dayOfWeek[] = date('l', $unixTimestamp);
            $dayOfWeek[] = $data->totals;
            $dayOfWeek[] = $input;
        }
        echo json_encode($dayOfWeek);
    }
    public function customer()
    {
        $customer = $this->chart_model->customer();
        $vehicle = $this->chart_model->vehile();
        $driver = $this->chart_model->driver();
        $vendor = $this->chart_model->vendor();


        $customer = array(
            'vendor' => $vendor,
            'customer' => $customer,
            'vehicle' => $vehicle,
            'driver' => $driver,
        );
        echo json_encode($customer);
    }
}
