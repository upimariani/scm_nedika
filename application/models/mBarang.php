<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBarang extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('bahan_baku', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('bahan_baku');
		$this->db->where('id_supplier', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('bahan_baku');
		$this->db->where('id_bb', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_bb', $id);
		$this->db->update('bahan_baku', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_bb', $id);
		$this->db->delete('bahan_baku');
	}
}

/* End of file mBarang.php */
