<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sale_model extends CI_Model
{

	public function sale()
	{
		return $this->db->select("sale.*, fuel_rate.*, vehicle_type.v_type, fuel_type.fuel_type_name")
			->from("sale")
			->join('fuel_rate', 'sale.fuel_id = fuel_rate.fuel_id', 'left')
			->join('vehicle_type', 'sale.v_type = vehicle_type.v_type_id', 'left')
			->join('fuel_type', 'fuel_rate.fuel_type_id = fuel_type.fuel_type_id', 'left')
			// ->where_not_in('fuel_rate.active', 2)
			->order_by('sale.sale_id', 'desc')
			->get()
			->result();
		// $query = "SELECT *
		// 		FROM `fuel_rate` 
		// 		WHERE active NOT LIKE '2' order by fuel_id desc";
		// return $this->db->query($query)
		// 	->result();
	}

	public function edit_sale($sale_id = '')
	{
		return $this->db->select('*')
			->from('sale')
			->where('sale_id', $sale_id)
			->get()
			->result();
	}

	public function get_fuel_stock($fuel_id = '')
	{
		return $this->db->select('stock')
			->from('fuel_rate')
			->where('fuel_id', $fuel_id)
			->get()
			->result();
	}

	public function delete_sale($sale_id)
	{
		return $this->db->delete('sale', array('sale_id' => $sale_id));
	}

	public function save($data)
	{
		if (!empty($data['sale_id'])) {
			$this->db->where('sale_id', $data['sale_id']);
			$this->db->update('sale', $data);
		} else {
			$this->db->insert('sale', $data);
		}
	}

	public function update_stock($data)
	{
		if (!empty($data['fuel_id'])) {
			$this->db->where('fuel_id', $data['fuel_id']);
			$this->db->update('fuel_rate', $data);
		}
	}

	public function fuel_name_dropdown()
	{
		$typelist = $this->db->select("fuel_id, fuel_name")
			->from('fuel_rate')
			->where('active', 1)
			->get()
			->result();
		$types[''] = "Select Fuel Type";
		if (!empty($typelist)) {
			foreach ($typelist as $type) {
				$types[$type->fuel_id] = $type->fuel_name;
			} //Foreach
		}
		return $types;
	}

	public function v_type_dropdown()
	{
		$unitlist = $this->db->select("v_type_id, v_type")
			->from('vehicle_type')
			->where('active', 1)
			->get()
			->result();
		$units[''] = "Select Vehicle Type";
		if (!empty($unitlist)) {
			foreach ($unitlist as $unit) {
				$units[$unit->v_type_id] = $unit->v_type;
			} //Foreach
		}
		return $units;
	}


	public function get_fuel_unit_model()
	{
		$query = $this->db->where('active', 1)->get('fuel_unit');
		$results = $query->result();
		if (!empty($results)) {
			foreach ($results as $unit) {
				$units[$unit->unit_id] = $unit->unit_id;
			}
		}
		return $units;
	}

	public function get_fuel_type_model()
	{
		$query = $this->db->where('active', 1)->get('fuel_type');
		$results = $query->result();
		if (!empty($results)) {
			foreach ($results as $type) {
				$types[$type->fuel_type_id] = $type->fuel_type_id;
			}
		}
		return $types;
	}
}
