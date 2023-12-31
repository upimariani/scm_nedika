<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksiSupplier');
		$this->load->model('mTransaksi');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksiSupplier->select()
		);
		$this->load->view('Supplier/Layout/head');
		$this->load->view('Supplier/Layout/aside');
		$this->load->view('Supplier/TransaksiSupplier/vTransaksi', $data);
		$this->load->view('Supplier/Layout/footer');
	}
	public function detail_transaksi($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksi->detail_transaksi($id)
		);
		$this->load->view('Supplier/Layout/head');
		$this->load->view('Supplier/Layout/aside');
		$this->load->view('Supplier/TransaksiSupplier/vDetailTransaksi', $data);
		$this->load->view('Supplier/Layout/footer');
	}
	public function konfirmasi($id)
	{
		$data = array(
			'status_order' => '2'
		);
		$this->mTransaksiSupplier->update_status($id, $data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil Dikonfirmasi!!');
		redirect('Supplier/cTransaksi/detail_transaksi/' . $id);
	}
	public function kirim($id)
	{
		$data = array(
			'status_order' => '3'
		);
		$this->mTransaksiSupplier->update_status($id, $data);
		$this->session->set_flashdata('success', 'Transaksi Berhasil Dikirim!!');
		redirect('Supplier/cTransaksi/detail_transaksi/' . $id);
	}
	public function tolak_pesanan($id)
	{
		$data = array(
			'status_order' => '9'
		);
		$this->mTransaksiSupplier->update_status($id, $data);
		$this->session->set_flashdata('success', 'Transaksi Ditolak!!');
		redirect('Supplier/cTransaksi');
	}
	public function hapus_transaksi($id)
	{
		$this->db->where('id_po_bb', $id);
		$this->db->delete('po_bb');

		$this->db->where('id_po_bb', $id);
		$this->db->delete('po_dbb');
		$this->session->set_flashdata('success', 'Data Transaksi Berhasil Dihapus!');
		redirect('Supplier/cTransaksi');
	}
}

/* End of file cTransaksi.php */
