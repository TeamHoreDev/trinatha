<?php
defined('BASEPATH') or exit('No direct script access allowed');

class vendor_m extends CI_Model
{
    private $_table = "vendor";

    public $id_vendor;
    public $nama_vendor;
    public $telepon_vendor;
    public $alamat;
    public $pic_vendor;
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_vendor',
                'label' => 'Nama Vendor',
                'rules' => 'required'
            ],
            [
                'field' => 'ftelepon_vendor',
                'label' => 'Telepon Vendor',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'falamat',
                'label' => 'Alamat Vendor',
                'rules' => 'required'
            ],
            [
                'field' => 'fpic_vendor',
                'label' => 'PIC Vendor',
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
        return $this->db->get_where($this->_table, ["id_vendor" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_vendor = uniqid('vendor-');
        $this->nama_vendor = $post['fnama_vendor'];
        $this->telepon_vendor = $post['ftelepon_vendor'];
        $this->alamat = $post['falamat'];
        $this->pic_vendor = $post['fpic_vendor'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_vendor', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->id_vendor = $post['fid_vendor'];
        $this->nama_vendor = $post['fnama_vendor'];
        $this->telepon_vendor = $post['ftelepon_vendor'];
        $this->alamat = $post['falamat'];
        $this->pic_vendor = $post['fpic_vendor'];
        $this->deleted = 0;
        $this->db->update($this->_table, $this, array('id_vendor' => $post['fid_vendor']));
    }
}

/* End of file vendor_m.php */
