<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('solar_m');
	}


	public function index()
	{
		$data['stok_5000'] = $this->solar_m->get_stok('5000');
		$data['stok_8000'] = $this->solar_m->get_stok('8000');
		$this->template->load('shared/index', 'dashboard/dashboard', $data);
	}
}
