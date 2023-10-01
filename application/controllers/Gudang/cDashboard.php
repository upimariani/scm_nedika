<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$data = array(
			'stok_bb' => $this->db->query("SELECT SUM(qty) as qty, bahan_baku.id_bb, nama_bb FROM `po_dbb` JOIN bahan_baku ON bahan_baku.id_bb=po_dbb.id_bb GROUP BY bahan_baku.id_bb")->result()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/vDashboard', $data);
		$this->load->view('Gudang/Layout/footer');
	}
}

/* End of file cDashboard.php */
