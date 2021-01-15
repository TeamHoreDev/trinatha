<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('alat_m');
    }


    public function index()
    {
        $data['alat'] = $this->alat_m->get_all();
        $this->template->load('shared/index', 'master/alat/index', $data);
    }
    public function create()
    {
        $alat  = $this->alat_m;
        $validation = $this->form_validation;
        $validation->set_rules($alat->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'master/alat/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $alat->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data alat berhasil disimpan!');
                redirect('alat', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('alat');
        $alat  = $this->alat_m;
        $validation = $this->form_validation;
        $validation->set_rules($alat->rules());

        if ($validation->run() == FALSE) {
            $data['alat'] = $this->alat_m->get_by_id($id);
            if (!$data['alat']) {
                $this->session->set_flashdata('error', 'Data alat tidak ditemukan!');
                redirect('alat', 'refresh');
            }
            $this->template->load('shared/index', 'master/alat/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $alat->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data alat berhasil diupdate!');
                redirect('alat', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data alat tidak ada yang diupdate!');
                redirect('alat', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->alat_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data alat berhasil dihapus!');
            redirect('alat', 'refresh');
        }
    }
}

/* End of file Alat.php */
