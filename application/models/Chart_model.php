<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chart_model extends CI_Model
{



       public function triping()
       {

              $today = date("Y-m-d");
              return $this->db->select('date, COUNT(*) AS totals, SUM(fare_rent) as profit')
                     ->from('trip')
                     ->where('date >= DATE(NOW()) + INTERVAL -6 DAY')
                     ->or_where('date', $today)
                     ->group_by('date')
                     ->get()
                     ->result();
       }

       public function trip1()
       {
              $today = date("Y-m-d");
              return $this->db->select('date, COUNT(*) AS totals, SUM(fare_rent) as profit')
                     ->from('trip')
                     ->where('date >= DATE(NOW()) + INTERVAL -6 DAY')
                     ->or_where('date', $today)
                     ->group_by('date')
                     ->get()
                     ->result();
       }
       public function trip()
       {
              return $this->db->select('*')
                     ->from('trip')
                     ->get()
                     ->num_rows();
       }
       public function customer()
       {
              return $this->db->select('*')
                     ->from('add_company')
                     ->where('active <> 2')
                     ->get()
                     ->num_rows();
       }
       public function vendor()
       {
              return $this->db->select('*')
                     ->from('add_vendor')
                     ->where('active <> 2')
                     ->get()
                     ->num_rows();
       }
       public function vehile()
       {
              return $this->db->select('*')
                     ->from('vehicle_info')
                     ->where('active <> 2')
                     ->get()
                     ->num_rows();
       }
       public function driver()
       {
              return       $this->db->select('*')
                     ->from('driver_info')
                     ->where('active <> 2')
                     ->get()
                     ->num_rows();
       }
}
