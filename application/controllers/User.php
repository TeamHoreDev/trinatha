<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('master_user_m');
        
    }

    public function index()
    {
    	$data['MasterUser'] = $this->master_user_m->getAll();
        $this->template->load('shared/index', 'master/user/index',$data);
    }

    public function add()
	{
		$this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');  
        $this->form_validation->set_message('numeric','%s Harus Berupa Angka!!!');    
        $MasterUser = $this->master_user_m;
        $validation = $this->form_validation;
        $validation->set_rules($MasterUser->rules());     
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('shared/index', 'master/user/index');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->master_user_m->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'User Berhasil Ditambahkan!');
                redirect('master/user/index','refresh');
            }
            
        }
	}

    public function edit($id=null)
    {
        if (!isset($id)) redirect('MasterUser');
        $MasterUser = $this->master_user_m;
        $validation = $this->form_validation;
        $validation->set_rules($MasterUser->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->master_user_m->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'User Berhasil Diupdate!');
            redirect('master/user/index','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data User Tidak Diupdate!');
            redirect('master/user/index','refresh');
        }
    }
    $data['MasterUser'] = $this->master_user_m->getById($id);
    if (!$data['MasterUser']) {
        $this->session->set_flashdata('error', 'Data User Tidak ditemukan!');
        redirect('master/user/index','refresh');
    }
    $this->template->load('shared/index', 'master/user/index',$data);
}
    public function delete($id)
    {
        $this->master_user_m->delete($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data User Berhsil Dihapus!');
            redirect('master/user/index','refresh');
        }
    }
}

/* End of file User.php */
