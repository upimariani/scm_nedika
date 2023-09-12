<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBbKeluar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mBbKeluar');
	}

	public function index()
	{
		$data = array(
			'bb_keluar' => $this->mBbKeluar->BbKeluar(),
			'bb' => $this->mBbKeluar->bb()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/BahanBakuKeluar/vBbKeluar', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function bb_keluar()
	{
		$data = array(
			'id_po_dbb' => $this->input->post('bb'),
			'tgl_keluar' => date('Y-m-d'),
			'qty_keluar'  => $this->input->post('qty')
		);
		$this->mBbKeluar->insert($data);

		//update stok
		$id = $this->input->post('bb');
		$qty_seb = $this->input->post('stok');
		$qty_kel = $this->input->post('qty');
		$qty = $qty_seb - $qty_kel;
		$stok = array(
			'qty' => $qty
		);
		$this->db->where('id_po_dbb', $id);
		$this->db->update('po_dbb', $stok);


		$this->session->set_flashdata('success', 'Bahan Baku Keluar Berhasil Disimpan!');
		redirect('Gudang/cBbKeluar');
	}
}

/* End of file cBbKeluar.php */
