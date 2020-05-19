<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solar extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/index','transaksi/solar/index');
	}
}