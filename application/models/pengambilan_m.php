<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengambilan_m extends CI_Model
{
    private $_table = "pengambilan";

    public $id_pengambilan;
    public $kode_transaksi;
    public $id_alat;
    public $operator;
    public $jam;

    public function rules_pengambilan()
    {
        return [
            [
                'field' => 'falat',
                'label' => 'Kode Alat',
                'rules' => 'required'
            ],
            [
                'field' => 'foperator',
                'label' => 'Nama Operator',
                'rules' => 'required'
            ],
            [
                'field' => 'fsolar_out',
                'label' => 'Quantity',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'ftangki',
                'label' => 'Tangki',
                'rules' => 'required'
            ],
            [
                'field' => 'ftanggal',
                'label' => 'Tanggal',
                'rules' => 'required'
            ],
            [
                'field' => 'fjam',
                'label' => 'Jam Pengambilan',
                'rules' => 'required'
            ],
        ];
    }
    public function get_all_5k()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = pengambilan.kode_transaksi', 'left');
        $this->db->join('alat', 'alat.id_alat = pengambilan.id_alat', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('solar.tangki', 5000);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_8k()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = pengambilan.kode_transaksi', 'left');
        $this->db->join('alat', 'alat.id_alat = pengambilan.id_alat', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('solar.tangki', 8000);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function add_pengambilan()
    {
        $post = $this->input->post();
        $this->id_pengambilan = uniqid('out-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->id_alat = $post['falat'];
        $this->operator = $post['foperator'];
        $this->jam = $post['fjam'];
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_alat', $id);
        $this->db->update($this->_table);
    }
}

/* End of file pengambilan_m.php */
