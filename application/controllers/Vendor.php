<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('vendor_m');
    }


    public function index()
    {
        $data['vendor'] = $this->vendor_m->get_all();
        $this->template->load('shared/index', 'master/vendor/index', $data);
    }
    public function create()
    {
        $vendor  = $this->vendor_m;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'master/vendor/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $vendor->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data vendor berhasil disimpan!');
                redirect('vendor', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('alat');
        $vendor  = $this->vendor_m;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules());

        if ($validation->run() == FALSE) {
            $data['vendor'] = $this->vendor_m->get_by_id($id);
            if (!$data['vendor']) {
                $this->session->set_flashdata('error', 'Data vendor tidak ditemukan!');
                redirect('vendor', 'refresh');
            }
            $this->template->load('shared/index', 'master/vendor/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $vendor->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data vendor berhasil diupdate!');
                redirect('vendor', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data vendor tidak ada yang diupdate!');
                redirect('vendor', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->vendor_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data vendor berhasil dihapus!');
            redirect('vendor', 'refresh');
        }
    }
}

/* End of file Vendor.php */
