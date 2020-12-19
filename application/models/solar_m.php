<?php
defined('BASEPATH') or exit('No direct script access allowed');

class solar_m extends CI_Model
{
    private $_table = "solar";

    public $id_transaksi;
    public $kode_transaksi;
    public $jenis_transaksi;
    public $tanggal;
    public $tangki;
    public $solar_in;
    public $solar_out;
    public $deleted;

    public function get_all()
    {
        $this->db->select('*');
        $this->db->where('deleted', 0);
        $this->db->from($this->_table);
        $this->db->order_by('id_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ["id_alat" => $id])->row();
    }
    public function add_solar_in()
    {
        $post = $this->input->post();
        $this->id_transaksi = uniqid('tr-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->jenis_transaksi = $post['fjenis_transaksi'];
        $this->tanggal = $post['ftanggal'];
        $this->tangki = $post['ftangki'];
        $this->solar_in = $post['fsolar_in'];
        $this->solar_out = 0;
        $this->no_urut = $this->cek_kode_transaksi();
        $this->stok = $this->get_stok($post['ftangki']) + $post['fsolar_in'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function add_solar_out()
    {
        $post = $this->input->post();
        $this->id_transaksi = uniqid('tr-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->jenis_transaksi = $post['fjenis_transaksi'];
        $this->tanggal = $post['ftanggal'];
        $this->tangki = $post['ftangki'];
        $this->solar_in = 0;
        $this->solar_out = $post['fsolar_out'];
        $this->no_urut = $this->cek_kode_transaksi();
        $this->stok = $this->get_stok($post['ftangki']) - $post['fsolar_out'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_transaksi', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->kode_alat = $post['fkode_alat'];
        $this->nama_alat = $post['fnama_alat'];
        $this->id_alat = $post['fid_alat'];
        $this->deleted = 0;
        $this->db->update($this->_table, $this, array('id_alat' => $post['fid_alat']));
    }
    public function cek_kode_transaksi()
    {
        $query = $this->db->query("SELECT MAX(no_urut) as kode from solar");
        $hasil = $query->row();
        $kode = $hasil->kode;
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $newkode = $kode + 1;
        return $newkode;
    }
    public function get_stok($tangki)
    {
        $query = $this->db->query("SELECT stok FROM solar WHERE tangki= '$tangki' AND deleted = 0 ORDER BY id_transaksi DESC LIMIT 1");
        $hasil = $query->row();
        return $hasil->stok;
    }
}

/* End of file solar_m.php */
