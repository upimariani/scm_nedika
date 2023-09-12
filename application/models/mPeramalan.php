<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPeramalan extends CI_Model
{
	public function bb()
	{
		$this->db->select('*');
		$this->db->from('bahan_baku');
		return $this->db->get()->result();
	}
	public function detail_peramalan($id_bb)
	{
		return $this->db->query("SELECT SUM(qty) as jumlah, tgl_transaksi, MONTH(tgl_transaksi) as bulan, bahan_baku.id_bb FROM `po_bb` JOIN po_dbb ON po_bb.id_po_bb=po_dbb.id_po_bb JOIN bahan_baku ON bahan_baku.id_bb = po_dbb.id_bb WHERE bahan_baku.id_bb='" . $id_bb . "' GROUP BY MONTH(tgl_transaksi), bahan_baku.id_bb")->result();
	}
}

/* End of file mPeramalan.php */
