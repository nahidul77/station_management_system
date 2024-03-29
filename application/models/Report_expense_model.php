<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report_expense_model extends CI_Model
{

    public function report($data = NULL)
    {
        if (empty($data['expense_report'])) :
            redirect('report_expense/view');
        else :
            #----------------------------------------#
            #--------starts of date condition -------#
            #----------------------------------------#
            $now = new DateTime();
            switch ($data['expense_report']):
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
            $this->db->from("expense_data");
            $this->db->where("date BETWEEN '$date_1' AND '$date_2'", NULL, FALSE);
            $this->db->where("active", 1);
            $this->db->order_by("date", 'desc');
            $expense = $this->db->get()->result();
            #~~~~~~~~~~~~~INFLOW~~~~~~~~~~~~~~#

            #~~~~~~~~~~~~~OUTFLOW~~~~~~~~~~~~~#
            $this->db->select("expense_data.*, expense_list.expense_name");
            $this->db->from("expense_data");
            $this->db->join("expense_list", 'expense_list.expense_id = expense_data.expense_id');
            $this->db->where("date BETWEEN '$date_1' AND '$date_2'", NULL, FALSE);
            $this->db->where("expense_data.active", 1);
            $this->db->order_by("date", 'desc');
            $expense_list = $this->db->get()->result();
            #~~~~~~~~~~~~~OUTFLOW~~~~~~~~~~~~~#
            return array('expense' => $expense, 'expense_list' => $expense_list);
        endif;
    }
}
