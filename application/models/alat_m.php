<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat_m extends CI_Model
{
    private $_table = "alat";

    public $id_alat;
    public $kode_alat;
    public $nama_alat;
    public $operator;
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fkode_alat',
                'label' => 'Kode Alat',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_alat',
                'label' => 'Nama Alat',
                'rules' => 'required'
            ],
            [
                'field' => 'foperator',
                'label' => 'Nama Operator',
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
        return $this->db->get_where($this->_table, ["id_alat" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_alat = uniqid('alat-');
        $this->kode_alat = $post['fkode_alat'];
        $this->nama_alat = $post['fnama_alat'];
        $this->operator = $post['foperator'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_alat', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->kode_alat = $post['fkode_alat'];
        $this->nama_alat = $post['fnama_alat'];
        $this->id_alat = $post['fid_alat'];
        $this->operator = $post['foperator'];
        $this->deleted = 0;
        $this->db->update($this->_table, $this, array('id_alat' => $post['fid_alat']));
    }
}

/* End of file Alat_m.php */
