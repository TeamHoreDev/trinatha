<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penerimaan_m extends CI_Model
{

    private $_table = "penerimaan";

    public $id_penerimaan;
    public $kode_transaksi;
    public $id_vendor;
    public $id_user;
    public $no_surat_jalan;

    public function rules_penerimaan()
    {
        return [
            [
                'field' => 'fvendor',
                'label' => 'Vendor',
                'rules' => 'required'
            ],
            [
                'field' => 'fno_surat_jalan',
                'label' => 'Nomor Surat Jalan',
                'rules' => 'required'
            ],
            [
                'field' => 'fsolar_in',
                'label' => 'Quantity',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'fvendor',
                'label' => 'Vendor',
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
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = penerimaan.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = penerimaan.id_vendor', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('penerimaan.id_penerimaan', $id);
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_all_5k()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = penerimaan.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = penerimaan.id_vendor', 'left');
        $this->db->join('user', 'user.id_user = penerimaan.id_user', 'left');
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
        $this->db->join('solar', 'solar.kode_transaksi = penerimaan.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = penerimaan.id_vendor', 'left');
        $this->db->join('user', 'user.id_user = penerimaan.id_user', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('solar.tangki', 8000);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function add_penerimaan()
    {
        $post = $this->input->post();
        $this->id_penerimaan = uniqid('in-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->id_vendor = $post['fvendor'];
        $this->no_surat_jalan = $post['fno_surat_jalan'];
        $this->id_user = $this->session->userdata('id_user');
        $this->no_urut = $this->cek_kode_transaksi();

        $this->db->insert($this->_table, $this);
    }
    public function edit_penerimaan($id)
    {
        $post = $this->input->post();
        $this->db->set('no_surat_jalan', $post['fno_surat_jalan']);
        $this->db->set('id_vendor', $post['fvendor']);
        $this->db->set('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_penerimaan', $id);
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
        $query = $this->db->query("SELECT MAX(no_urut) as kode from penerimaan");
        $hasil = $query->row();
        $kode = $hasil->kode;
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $newkode = $kode + 1;
        return $newkode;
    }
}

/* End of file penerimaan_m.php */
