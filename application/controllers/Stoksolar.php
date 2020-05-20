<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stoksolar extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/index','laporan/stoksolar/index');
	}
}