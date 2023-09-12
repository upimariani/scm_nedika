<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSupplier');
		$this->load->model('mTransaksi');
	}

	public function index()
	{
		$data = array(
			'supplier' => $this->mSupplier->select(),
			'transaksi' => $this->mTransaksi->transaksi_admin()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/TransaksiSupplier/vTransaksi', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function pesan_supplier($id_supplier = NULL)
	{
		$id_supplier = $this->input->post('supplier');
		$data = array(
			'bb' => $this->mTransaksi->bahanbaku($id_supplier),
			'id_supplier' => $id_supplier
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/TransaksiSupplier/vCreateTransaksi', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function addtocart()
	{
		$data = array(
			'id' => $this->input->post('bahanbaku'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'qty' => $this->input->post('qty'),
			'stok' => $this->input->post('stok')
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Bahan Baku Berhasil Masuk Keranjang!');


		$id_supplier = $this->input->post('id_supplier');
		$data = array(
			'bb' => $this->mTransaksi->bahanbaku($id_supplier),
			'id_supplier' => $id_supplier
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/TransaksiSupplier/vCreateTransaksi', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function hapus($id, $id_supplier)
	{
		$this->cart->remove($id);
		$data = array(
			'bb' => $this->mTransaksi->bahanbaku($id_supplier),
			'id_supplier' => $id_supplier
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/TransaksiSupplier/vCreateTransaksi', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function selesai()
	{
		$data = array(
			'id_user' => $this->session->userdata('id'),
			'id_supplier' => $this->input->post('id_supplier'),
			'tgl_transaksi' => date('Y-m-d'),
			'total_bayar' => $this->cart->total(),
			'stat_bayar' => '0',
			'bukti_bayar' => '0',
			'status_order' => '0',
			'alamat_pengiriman' => $this->input->post('alamat')
		);
		$this->mTransaksi->insert_po_bb($data);

		$id_po_bb = $this->db->query("SELECT MAX(id_po_bb) as id_po_bb FROM `po_bb`")->row();

		foreach ($this->cart->contents() as $key => $value) {
			$pesanan = array(
				'id_po_bb' => $id_po_bb->id_po_bb,
				'id_bb' => $value['id'],
				'qty' => $value['qty']
			);
			$this->mTransaksi->insert_pesanan($pesanan);
		}
		$this->cart->destroy();
		$this->session->set_flashdata('success', 'Transaksi berhasil Dikirim!');
		redirect('Gudang/cTransaksi');
	}
	public function detail_transaksi($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksi->detail_transaksi($id)
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/TransaksiSupplier/vDetailTransaksi', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function bayar($id)
	{
		$config['upload_path']          = './asset/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 50000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('bayar')) {
			$data = array(
				'error' => $this->upload->display_errors(),
				'transaksi' => $this->mTransaksi->detail_transaksi($id)
			);
			$this->load->view('Gudang/Layout/head');
			$this->load->view('Gudang/Layout/aside');
			$this->load->view('Gudang/TransaksiSupplier/vDetailTransaksi', $data);
			$this->load->view('Gudang/Layout/footer');
		} else {

			$upload_data =  $this->upload->data();
			$data = array(
				'bukti_bayar' => $upload_data['file_name'],
				'stat_bayar' => '1',
				'status_order' => '1'
			);
			$this->mTransaksi->bayar($id, $data);
			$this->session->set_flashdata('success', 'Transaksi Berhasil Dikirim!!!');
			redirect('Gudang/cTransaksi', 'refresh');
		}
	}
	public function pesanan_diterima($id)
	{


		$status = array(
			'status_order' => '4'
		);
		$this->db->where('id_po_bb', $id);
		$this->db->update('po_bb', $status);
		$this->session->set_flashdata('success', 'Data Transaksi Berhasil Diterima!');
		redirect('Gudang/cTransaksi', 'refresh');
	}
}

/* End of file cTransaksi.php */
