<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vendor_model extends CI_Model
{


	public function vendor()
	{
		return $this->db->select('*')
			->from('add_vendor')
			->where_not_in('active', 2)
			->order_by('vendor_id', 'desc')
			->get()
			->result();
	}

	public function edit_vendor($vendor_id = '')
	{
		return $this->db->select('*')
			->from('add_vendor')
			->where('vendor_id', $vendor_id)
			->get()
			->result();
	}

	function delete_vendor($vendor_id)
	{
		return $this->db->set('active', 2)
			->where('vendor_id', $vendor_id)
			->update('add_vendor');
	}

	public function save($data)
	{
		$data['posting_id'] = $this->session->userdata('user_id');
		if (!empty($data['vendor_id'])) {
			$this->db->where('vendor_id', $data['vendor_id']);
			$this->db->update('add_vendor', $data);
		} else {
			$this->db->insert('add_vendor', $data);
		}
	}

	public function vendor_name_list()
	{
		$query = $this->db->select('vendor_id,vendor_name')
			->from('add_vendor')
			->where('active', 1)
			->order_by('vendor_name', 'asc')
			->get()
			->result();
		$vendor[''] = lang("SELECT_VENDOR_NAME");
		foreach ($query as $value) {
			$vendor[$value->vendor_id] = $value->vendor_name;
		}
		return $vendor;
	}
}
