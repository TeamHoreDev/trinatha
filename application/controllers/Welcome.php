<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('View File', $data, FALSE);
		$this->load->model('Model File');
	}

}

/* End of file Welcome.php */
