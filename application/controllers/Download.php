<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('laporan_m');
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }

    public function penerimaan($tgl_awal, $tgl_akhir, $tangki, $vendor)
    {
        $data['vendor'] = $vendor;
        $data['tgl_awal'] = $tgl_awal;
        $data['tgl_akhir'] = $tgl_akhir;
        $data['tangki'] = $tangki;
        $data['total'] = $this->laporan_m->get_total_penerimaan($tgl_awal, $tgl_akhir, $tangki, $vendor);
        $data['result'] = $this->laporan_m->get_penerimaan($tgl_awal, $tgl_akhir, $tangki, $vendor);
        $this->load->view('pdf/penerimaan', $data);
    }
    public function pemakaian($tgl_awal, $tgl_akhir, $tangki, $alat)
    {
        $data['total'] = $this->laporan_m->get_total($tgl_awal, $tgl_akhir, $alat, $tangki);
        $data['alat'] = $alat;
        $data['tgl_awal'] = $tgl_awal;
        $data['tgl_akhir'] = $tgl_akhir;
        $data['tangki'] = $tangki;
        $data['result'] = $this->laporan_m->get_pemakaian($tgl_awal, $tgl_akhir, $tangki, $alat);
        $this->load->view('pdf/pemakaian', $data);
    }
    public function jam_kerja($tgl_awal, $tgl_akhir, $alat)
    {
        $data['tgl_awal'] = $tgl_awal;
        $data['tgl_akhir'] = $tgl_akhir;
        $data['alat'] = $alat;
        $data['total'] = $this->laporan_m->get_total($tgl_awal, $tgl_akhir, $alat);
        $data['result'] = $this->laporan_m->get_jam_kerja($tgl_awal, $tgl_akhir, $alat);
        $this->load->view('pdf/jam_kerja', $data);
    }
}

/* End of file Pdf.php */
