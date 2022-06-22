<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fule_rate_model extends CI_Model
{

	public function fule_rate()
	{
		return $this->db->select("fuel_rate.*, fuel_type.fuel_type_name, fuel_unit.unit_name")
			->from("fuel_rate")
			->join('fuel_type', 'fuel_type.fuel_type_id = fuel_rate.fuel_type_id', 'left')
			->join('fuel_unit', 'fuel_unit.unit_id = fuel_rate.unit_id', 'left')
			->where_not_in('fuel_rate.active', 2)
			->order_by('fuel_rate.fuel_id', 'desc')
			->get()
			->result();
		// $query = "SELECT *
		// 		FROM `fuel_rate` 
		// 		WHERE active NOT LIKE '2' order by fuel_id desc";
		// return $this->db->query($query)
		// 	->result();
	}

	public function edit_rate($fuel_id = '')
	{
		return $this->db->select('*')
			->from('fuel_rate')
			->where('fuel_id', $fuel_id)
			->get()
			->result();
	}

	public function delete_rate($fuel_id)
	{
		return $this->db->set('active', 2)
			->where('fuel_id', $fuel_id)
			->update('fuel_rate');
	}

	public function save($data)
	{
		if (!empty($data['fuel_id'])) {
			$this->db->where('fuel_id', $data['fuel_id']);
			$this->db->update('fuel_rate', $data);
		} else {
			$this->db->insert('fuel_rate', $data);
		}
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
