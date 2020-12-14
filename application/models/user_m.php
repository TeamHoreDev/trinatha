<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{

    private $_table = "user";

    public $id_user;
    public $nik;
    public $nama_user;
    public $telepon;
    public $email;
    public $role;
    public $username;
    public $password;
    public function rules()
    {
        return [
            [
                'field' => 'fnama_user',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ],
            [
                'field' => 'fnik',
                'label' => 'Nik',
                'rules' => 'required|is_unique[user.nik]|numeric'
            ],
            [
                'field' => 'ftelepon',
                'label' => 'Telepon',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'femail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'frole',
                'label' => 'Role',
                'rules' => 'required'
            ],
            [
                'field' => 'fusername',
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]'
            ],
            [
                'field' => 'fpassword',
                'label' => 'Password',
                'rules' => 'required'
            ],
        ];
    }
    public function rules_update()
    {
        return [
            [
                'field' => 'fnama_user',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ],
            [
                'field' => 'fnik',
                'label' => 'Nik',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'ftelepon',
                'label' => 'Telepon',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'femail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'frole',
                'label' => 'Role',
                'rules' => 'required'
            ],
            [
                'field' => 'fusername',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'fpassword',
                'label' => 'Password',
                'rules' => 'required'
            ],
        ];
    }
    public function get_all()
    {
        return $this->db->get_where($this->_table, ["deleted" => 0])->result();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_user = uniqid('user-');
        $this->nama_user = $post['fnama_user'];
        $this->nik = $post['fnik'];
        $this->telepon = $post['ftelepon'];
        $this->email = $post['femail'];
        $this->role = $post['frole'];
        $this->username = $post['fusername'];
        $this->password = md5($post['fpassword']);
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_user', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->id_user = $post['fid_user'];
        $this->nama_user = $post['fnama_user'];
        $this->nik = $post['fnik'];
        $this->telepon = $post['ftelepon'];
        $this->email = $post['femail'];
        $this->role = $post['frole'];
        $this->username = $post['fusername'];
        $this->password = md5($post['fpassword']);
        $this->deleted = 0;
        $this->db->update($this->_table, $this, array('id_user' => $post['fid_user']));
    }
}

/* End of file user_m.php */
