<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman_m extends CI_Model
{
    private $_table = "peminjaman";

    public $id_peminjaman;
    public $kode_transaksi;
    public $id_vendor;
    public $id_alat;
    public $status;
    public $id_user;

    public function rules_peminjaman()
    {
        return [
            [
                'field' => 'fvendor',
                'label' => 'Vendor',
                'rules' => 'required'
            ],
            [
                'field' => 'falat',
                'label' => 'Alat',
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
    public function rules_edit_peminjaman()
    {
        return [
            [
                'field' => 'fvendor',
                'label' => 'Vendor',
                'rules' => 'required'
            ],
            [
                'field' => 'falat',
                'label' => 'Alat',
                'rules' => 'required'
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
        $this->db->join('alat', 'alat.id_alat = peminjaman.id_alat', 'left');
        $this->db->join('user', 'user.id_user = peminjaman.id_user', 'left');
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
        $this->db->join('alat', 'alat.id_alat = peminjaman.id_alat', 'left');
        $this->db->join('user', 'user.id_user = peminjaman.id_user', 'left');

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
        $query = $this->db->get();
        return $query->row();
    }
    public function add_peminjaman()
    {
        $post = $this->input->post();
        $this->id_peminjaman = uniqid('out-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->id_vendor = $post['fvendor'];
        $this->id_alat = $post['falat'];
        $this->id_user = $this->session->userdata('id_user');
        $this->status = 0;
        $this->no_urut = $this->cek_kode_transaksi();

        $this->db->insert($this->_table, $this);
    }
    public function edit_peminjaman($id)
    {
        $post = $this->input->post();
        $this->db->set('id_vendor', $post['fvendor']);
        $this->db->set('id_alat', $post['falat']);
        $this->db->where('id_peminjaman', $id);
        $this->db->update($this->_table);
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
    public function cek_kode_transaksi()
    {
        $query = $this->db->query("SELECT MAX(no_urut) as kode from peminjaman");
        $hasil = $query->row();
        $kode = $hasil->kode;
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $newkode = $kode + 1;
        return $newkode;
    }
}

/* End of file peminjaman_m.php */
