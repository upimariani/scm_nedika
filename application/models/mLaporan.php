<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{

	public function lap_harian_transaksi($tanggal, $bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('po_bb');
		$this->db->join('po_dbb', 'po_bb.id_po_bb = po_dbb.id_po_bb', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id_bb = po_dbb.id_bb', 'left');

		$this->db->where('po_bb.status_order=4');
		$this->db->where('DAY(po_bb.tgl_transaksi)', $tanggal);
		$this->db->where('MONTH(po_bb.tgl_transaksi)', $bulan);
		$this->db->where('YEAR(po_bb.tgl_transaksi)', $tahun);
		return $this->db->get()->result();
	}
	public function lap_bulanan_transaksi($bulan, $tahun)
	{

		$this->db->select('*');
		$this->db->from('po_bb');
		$this->db->join('po_dbb', 'po_bb.id_po_bb = po_dbb.id_po_bb', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id_bb = po_dbb.id_bb', 'left');

		$this->db->where('po_bb.status_order=4');
		$this->db->where('MONTH(po_bb.tgl_transaksi)', $bulan);
		$this->db->where('YEAR(po_bb.tgl_transaksi)', $tahun);
		return $this->db->get()->result();
	}
	public function lap_tahunan_transaksi($tahun)
	{
		$this->db->select('*');
		$this->db->from('po_bb');
		$this->db->join('po_dbb', 'po_bb.id_po_bb = po_dbb.id_po_bb', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id_bb = po_dbb.id_bb', 'left');


		$this->db->where('po_bb.status_order=4');
		$this->db->where('YEAR(po_bb.tgl_transaksi)', $tahun);
		return $this->db->get()->result();
	}
}

/* End of file mlaporan.php */
