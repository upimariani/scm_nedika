<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBbKeluar extends CI_Model
{
	public function BbKeluar()
	{
		$this->db->select('*');
		$this->db->from('bb_keluar');
		$this->db->join('po_dbb', 'bb_keluar.id_po_dbb = po_dbb.id_po_dbb', 'left');
		$this->db->join('po_bb', 'po_bb.id_po_bb = po_dbb.id_po_bb', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id_bb = po_dbb.id_bb', 'left');
		return $this->db->get()->result();
	}
	public function bb()
	{
		$this->db->select('*');
		$this->db->from('po_dbb');
		$this->db->join('bahan_baku', 'po_dbb.id_bb = bahan_baku.id_bb', 'left');
		$this->db->join('po_bb', 'po_bb.id_po_bb = po_dbb.id_po_bb', 'left');

		$this->db->where('qty!=0');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('bb_keluar', $data);
	}
}

/* End of file mBbKeluar.php */
