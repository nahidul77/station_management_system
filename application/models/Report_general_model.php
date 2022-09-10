<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report_general_model extends CI_Model
{

    public function report($data = NULL)
    {
        if (empty($data['general_report'])) :
            redirect('report_general/view');
        else :
            #----------------------------------------#
            #--------starts of date condition -------#
            #----------------------------------------#
            $now = new DateTime();
            switch ($data['general_report']):
                case 1:
                    #---LAST ONE MONTH REPORT--#  
                    $lastMonth = $now->sub(new DateInterval('P1M'));
                    $date_1 = $lastMonth->format('Y-m-d');
                    $date_2 = date("Y-m-d");
                    break;
                case 2:
                    #---LAST ONE MONTH REPORT--#  
                    $lastMonth = $now->sub(new DateInterval('P3M'));
                    $date_1 = $lastMonth->format('Y-m-d');
                    $date_2 = date("Y-m-d");
                    break;
                case 3:
                    #---LAST THREE MONTH REPORT--#  
                    $lastMonth = $now->sub(new DateInterval('P6M'));
                    $date_1 = $lastMonth->format('Y-m-d');
                    $date_2 = date("Y-m-d");
                    break;
                case 4:
                    #---LAST SIX MONTH REPORT--#  
                    $lastMonth = $now->sub(new DateInterval('P12M'));
                    $date_1 = $lastMonth->format('Y-m-d');
                    $date_2 = date("Y-m-d");
                    break;
                case 5:
                    #---LAST ONE YEAR REPORT--#  
                    $date_1 = date("Y-m-d", strtotime($data['date_1']));
                    $date_2 = date("Y-m-d", strtotime($data['date_2']));
                    break;
            endswitch;
            #----------------------------------------#
            #------ ends of date condition ---------#
            #----------------------------------------# 

            #~~~~~~~~~~~~~INFLOW~~~~~~~~~~~~~~#
            $this->db->select("*");
            $this->db->from("sale");
            // $this->db->where("date BETWEEN '$date_1' AND '$date_2'", NULL, FALSE);
            $this->db->order_by("date", 'desc');
            $general = $this->db->get()->result();
            #~~~~~~~~~~~~~INFLOW~~~~~~~~~~~~~~#

            #~~~~~~~~~~~~~OUTFLOW~~~~~~~~~~~~~#
            $this->db->select("count(sale.v_type) as total, vehicle_type.v_type as vehicle_name");
            $this->db->from("sale");
            $this->db->join("vehicle_type", 'vehicle_type.v_type_id = sale.v_type');
            // $this->db->where('date <=', $date_2);
            // $this->db->where('date >=', $date_1);
            // $this->db->where("date BETWEEN '$date_1' AND '$date_2'", NULL, FALSE);
            $this->db->group_by('sale.v_type');
            $vehicle_list = $this->db->get()->result();

            // $this->db->select("sale.*, vehicle_type.v_type");
            // $this->db->from("sale");
            // $this->db->join("vehicle_type", 'vehicle_type.v_type_id = sale.v_type');
            // $this->db->where("date BETWEEN '$date_1' AND '$date_2'", NULL, FALSE);
            // $this->db->order_by("date", 'desc');
            // $vehicle_list = $this->db->get()->result();

            // $vehicle_list = [];
            // $general = ["$date_1", "$date_2"];
            #~~~~~~~~~~~~~OUTFLOW~~~~~~~~~~~~~#
            return array('general' => $general, 'vehicle_list' => $vehicle_list);
        endif;
    }
}
