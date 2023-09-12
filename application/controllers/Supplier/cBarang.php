<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBarang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mBarang');
	}

	public function index()
	{
		$data = array(
			'barang' => $this->mBarang->select()
		);
		$this->load->view('Supplier/Layout/head');
		$this->load->view('Supplier/Layout/aside');
		$this->load->view('Supplier/Barang/vBarang', $data);
		$this->load->view('Supplier/Layout/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required');
		$this->form_validation->set_rules('harga', 'Harga Barang', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('stok', 'Stok Barang', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('Supplier/Layout/head');
			$this->load->view('Supplier/Layout/aside');
			$this->load->view('Supplier/Barang/vCreateBarang');
			$this->load->view('Supplier/Layout/footer');
		} else {

			$data = array(
				'id_supplier' => $this->session->userdata('id'),
				'nama_bb' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'stok_supplier' => $this->input->post('stok'),
				'harga_bb' => $this->input->post('harga')
			);
			$this->mBarang->insert($data);
			$this->session->set_flashdata('success', 'Data Barang Berhasil Ditambahkan!!!');
			redirect('Supplier/cBarang', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok produk', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'barang' => $this->mBarang->edit($id)
			);
			$this->load->view('Supplier/Layout/head');
			$this->load->view('Supplier/Layout/aside');
			$this->load->view('Supplier/Barang/vUpdateBarang', $data);
			$this->load->view('Supplier/Layout/footer');
		} else {
			$data = array(
				'id_supplier' => $this->session->userdata('id'),
				'nama_bb' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'stok_supplier' => $this->input->post('stok'),
				'harga_bb' => $this->input->post('harga')
			);
			$this->mBarang->update($id, $data);
			$this->session->set_flashdata('success', 'Data Barang Berhasil Diperbaharui!!!');
			redirect('Supplier/cBarang', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mBarang->delete($id);
		$this->session->set_flashdata('success', 'Data Barang Berhasil Dihapus!!!');
		redirect('Supplier/cBarang', 'refresh');
	}
}

/* End of file cBarang.php */
