<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fule_type_model extends CI_Model
{

	public function fule_type()
	{
		$query = "SELECT *
				FROM `fuel_type` 
				WHERE active NOT LIKE '2' order by fuel_type_id desc";
		return $this->db->query($query)
			->result();
	}

	public function edit_type($type_id = '')
	{
		return $this->db->select('*')
			->from('fuel_type')
			->where('fuel_type_id', $type_id)
			->get()
			->result();
	}

	public function delete_type($type_id)
	{
		return $this->db->set('active', 2)
			->where('fuel_type_id', $type_id)
			->update('fuel_type');
	}

	public function save($data)
	{
		if (!empty($data['fuel_type_id'])) {
			$this->db->where('fuel_type_id', $data['fuel_type_id']);
			$this->db->update('fuel_type', $data);
		} else {
			$this->db->insert('fuel_type', $data);
		}
	}
}
