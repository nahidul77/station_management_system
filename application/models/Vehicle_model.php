<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle_model extends CI_Model
{

	public function save($data)
	{
		$data['posting_id'] = $this->session->userdata('user_id');
		if (!empty($data['v_type_id'])) {
			$this->db->where('v_type_id', $data['v_type_id']);
			$this->db->update('vehicle_type', $data);
		} else {
			$this->db->insert('vehicle_type', $data);
		}
	}

	public function vehicle_list()
	{
		return $this->db->select('*')
			->from('vehicle_type')
			->where_not_in('active', 2)
			->order_by('v_type_id', 'desc')
			->get()
			->result();
	}

	public function vehicle_type_edit($v_type_id)
	{
		return $this->db->select('*')
			->from('vehicle_type')
			->where('v_type_id', $v_type_id)
			->get()
			->result();
	}

	public function delete_vehicle($v_type_id)
	{
		return $this->db->set('active', 2)
			->where('v_type_id', $v_type_id)
			->update('vehicle_type');
	}
	//**********************************VEHICLE TYPE (END) ****************************//



	//******************************************  VEHICLE INFORMATION ********************************************************//
	public function get_vehicle_type()
	{
		$this->db->where('active', '1');
		$query = $this->db->order_by('v_type', 'asc')->get('vehicle_type');
		$typelist = $query->result();
		$types[''] = lang("SELECT_VEHICLE_TYPE");
		if (!empty($typelist)) {
			foreach ($typelist as $type) {
				$types[$type->v_type_id] = $type->v_type;
			} //Foreach
		}
		return $types;
	}

	public function vehicle_info_save($data)
	{
		$data['posting_id'] = $this->session->userdata('user_id');
		if (!empty($data['v_id'])) {
			$this->db->where('v_id', $data['v_id']);
			if ($this->db->update('vehicle_info', $data)) {
				return true;
			}
		} else {
			if ($this->db->insert('vehicle_info', $data)) {
				return true;
			}
		}
	}

	public function info_list()
	{
		return $this->db->select("*,(select v_type from vehicle_type where vehicle_type.v_type_id = vehicle_info.v_type) as v ")
			->from('vehicle_info')
			->where_not_in('active', 2)
			->order_by('v_id', 'desc')
			->get()
			->result();
	}

	public function vehicle_info_edit($v_id)
	{
		return $this->db->select('*')
			->from('vehicle_info')
			->where('v_id', $v_id)
			->get()
			->result();
	}

	public function vehicle_info_delete($v_id)
	{
		return $this->db->set('active', 2)
			->where('v_id', $v_id)
			->update('vehicle_info');
	}
	//****************************************** VEHICLE INFORMATION (END) ====================//


}
