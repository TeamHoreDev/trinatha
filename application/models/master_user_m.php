<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user_m extends CI_Model
{
    private $_table = "tb_master_user";

    public $MasterUserId;
    public $Nik;
    public $NamaLengkap;
    public $Telepon;
    public $Email;
    public $Username;
    public $Password;
    public $Level;

    public function rules()
    {
        return [

            ['field' => 'Nik',
            'label' => 'Nik',
            'rules' => 'required|numeric'],

            ['field' => 'NamaLengkap',
            'label' => 'NamaLengkap',
            'rules' => 'required'],

            ['field' => 'Telepon',
            'label' => 'Telepon',
            'rules' => 'required|numeric'],

            ['field' => 'Email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'Username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'Password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'Level',
            'label' => 'Level',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["MasterUserId" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->MasterUserId = uniqid('');
        $this->Nik = $post["Nik"];
        $this->NamaLengkap = $post["NamaLengkap"];
        $this->Telepon = $post["Telepon"];
        $this->Email = $post["Email"];
        $this->Username = $post["Username"];
        $this->Password = md5($post["Password"]);
        $this->Level = $post["Level"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($post)
    {
        $post = $this->input->post();
        $this->MasterUserId = $post["MasterUserId"];
        $this->Nik = $post["Nik"];
        $this->NamaLengkap = $post["NamaLengkap"];
        $this->Telepon = $post["Telepon"];
        $this->Email = $post["Email"];
        $this->Username = $post["Username"];
        $this->Password = md5($post["Password"]);
        $this->Level = $post["Level"];
        return $this->db->update($this->_table, $this, array('MasterUserId' => $post['MasterUserId']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("MasterUserId" => $id));
    }
}