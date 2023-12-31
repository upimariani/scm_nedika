<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }


    public function index()
    {
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/Laporan/vLaporan');
        $this->load->view('Admin/Layout/footer');
    }
    public function lap_harian_transaksi()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/Laporan/harian', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function lap_bulanan_transaksi()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/Laporan/bulanan', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function lap_tahunan_transaksi()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_tahunan_transaksi($tahun)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/Laporan/tahunan', $data);
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cLaporan.php */
