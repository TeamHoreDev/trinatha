<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman_m extends CI_Model
{
    private $_table = "peminjaman";

    public $id_peminjaman;
    public $kode_transaksi;
    public $id_vendor;
    public $status;

    public function rules_peminjaman()
    {
        return [
            [
                'field' => 'fvendor',
                'label' => 'Vendor',
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
        ];
    }
    public function get_all_5k()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = peminjaman.kode_transaksi', 'left');
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
        $this->db->join('solar', 'solar.kode_transaksi = peminjaman.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = peminjaman.id_vendor', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('solar.tangki', 8000);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_belum_kembali()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = peminjaman.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = peminjaman.id_vendor', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('peminjaman.status', 0);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = peminjaman.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = peminjaman.id_vendor', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('peminjaman.id_peminjaman', $id);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->row();
    }
    public function add_peminjaman()
    {
        $post = $this->input->post();
        $this->id_peminjaman = uniqid('out-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->id_vendor = $post['fvendor'];
        $this->status = 0;
        $this->db->insert($this->_table, $this);
    }
    public function update_status($id)
    {
        $this->db->set('status', 1);
        $this->db->where('id_peminjaman', $id);
        $this->db->update($this->_table);
    }
    public function update_status_0($kode)
    {
        $this->db->set('status', 0);
        $this->db->where('kode_transaksi', $kode);
        $this->db->update($this->_table);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_alat', $id);
        $this->db->update($this->_table);
    }
}

/* End of file peminjaman_m.php */
