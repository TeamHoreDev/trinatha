<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->template->load('shared/index', 'master/alat/index');
    }
}

/* End of file Alat.php */
