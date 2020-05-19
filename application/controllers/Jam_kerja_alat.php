<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jam_kerja_alat extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/index','transaksi/jam_kerja_alat/index');
	}
}