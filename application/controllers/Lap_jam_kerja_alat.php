<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_jam_kerja_alat extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/index','laporan/lap_jam_kerja_alat/index');
	}
}