<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPeramalan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPeramalan');
	}

	public function index()
	{
		$data = array(
			'bb' => $this->mPeramalan->bb()
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/vPeramalan', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
	public function detail_peramalan($id_bb)
	{
		$data = array(
			'peramalan' => $this->mPeramalan->detail_peramalan($id_bb)
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/vDetailPeramalan', $data);
		$this->load->view('Pimpinan/Layout/footer', $data);
	}
}

/* End of file cPeramalan.php */
