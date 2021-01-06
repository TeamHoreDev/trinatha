<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengembalian_m extends CI_Model
{

    private $_table = "pengembalian";

    public $id_pengembalian;
    public $kode_transaksi;
    public $id_peminjaman;

    public function rules_pengembalian()
    {
        return [
            [
                'field' => 'fsolar_in',
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
        ];
    }
    public function get_all_5k()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = pengembalian.kode_transaksi', 'left');
        $this->db->join('peminjaman', 'peminjaman.id_peminjaman = pengembalian.id_peminjaman', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = peminjaman.id_vendor', 'left');
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
        $this->db->join('solar', 'solar.kode_transaksi = pengembalian.kode_transaksi', 'left');
        $this->db->join('peminjaman', 'peminjaman.id_peminjaman = pengembalian.id_peminjaman', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = peminjaman.id_vendor', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('solar.tangki', 8000);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function add_pengembalian()
    {
        $post = $this->input->post();
        $this->id_pengembalian = uniqid('out-');
        $this->id_peminjaman = $post['fid_peminjaman'];
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_alat', $id);
        $this->db->update($this->_table);
    }
}

/* End of file pengembalian_m.php */
