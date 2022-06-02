<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fule_unit_model extends CI_Model
{

	public function fule_unit()
	{
		$query = "SELECT *
				FROM `fuel_unit` 
				WHERE active NOT LIKE '2' order by unit_id desc";
		return $this->db->query($query)
			->result();
	}

	public function edit_unit($unit_id = '')
	{
		return $this->db->select('*')
			->from('fuel_unit')
			->where('unit_id', $unit_id)
			->get()
			->result();
	}

	public function delete_unit($unit_id)
	{
		return $this->db->set('active', 2)
			->where('unit_id', $unit_id)
			->update('fuel_unit');
	}

	public function save($data)
	{
		if (!empty($data['unit_id'])) {
			$this->db->where('unit_id', $data['unit_id']);
			$this->db->update('fuel_unit', $data);
		} else {
			$this->db->insert('fuel_unit', $data);
		}
	}
}
