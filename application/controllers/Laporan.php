<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_m');
		$this->load->model('alat_m');
	}


	public function penerimaan()
	{
		$laporan  = $this->laporan_m;
		$validation = $this->form_validation;
		$validation->set_rules($laporan->rules());
		if ($validation->run() == FALSE) {
			$this->template->load('shared/index', 'laporan/penerimaan/index');
		} else {
			$data['tangki'] = $this->input->post('ftangki');
			$data['tgl_awal'] = $this->input->post('ftgl_awal');
			$data['tgl_akhir'] = $this->input->post('ftgl_akhir');
			$data['result'] = $this->laporan_m->get_penerimaan($data['tgl_awal'], $data['tgl_akhir'], $data['tangki']);
			$this->template->load('shared/index', 'laporan/penerimaan/preview', $data);
		}
	}
	public function pemakaian()
	{
		$laporan  = $this->laporan_m;
		$validation = $this->form_validation;
		$validation->set_rules($laporan->rules());
		if ($validation->run() == FALSE) {
			$this->template->load('shared/index', 'laporan/pemakaian/index');
		} else {
			$data['tangki'] = $this->input->post('ftangki');
			$data['tgl_awal'] = $this->input->post('ftgl_awal');
			$data['tgl_akhir'] = $this->input->post('ftgl_akhir');
			$data['result'] = $this->laporan_m->get_pemakaian($data['tgl_awal'], $data['tgl_akhir'], $data['tangki']);
			// return var_dump($data['result']);
			$this->template->load('shared/index', 'laporan/pemakaian/preview', $data);
		}
	}
	public function jam_kerja()
	{
		$laporan  = $this->laporan_m;
		$validation = $this->form_validation;
		$validation->set_rules($laporan->rules_jam_kerja());
		if ($validation->run() == FALSE) {
			$data['alat'] = $this->alat_m->get_all();
			$this->template->load('shared/index', 'laporan/jam_kerja/index', $data);
		} else {
			$data['alat'] = $this->input->post('falat');
			$data['tgl_awal'] = $this->input->post('ftgl_awal');
			$data['tgl_akhir'] = $this->input->post('ftgl_akhir');

			$data['total'] = $this->laporan_m->get_total($data['tgl_awal'], $data['tgl_akhir'], $data['alat']);
			$data['result'] = $this->laporan_m->get_jam_kerja($data['tgl_awal'], $data['tgl_akhir'], $data['alat']);
			// echo json_encode($data['total']);
			$this->template->load('shared/index', 'laporan/jam_kerja/preview', $data);
		}
	}
}

/* End of file Laporan.php */
