<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengambilan_m extends CI_Model
{
    private $_table = "pengambilan";

    public $id_pengambilan;
    public $kode_transaksi;
    public $id_alat;
    public $id_user;
    public $keterangan;
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
                'field' => 'fketerangan',
                'label' => 'Keterangan',
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
        $this->db->join('user', 'user.id_user = pengambilan.id_user', 'left');
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
        $this->db->join('user', 'user.id_user = pengambilan.id_user', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('solar.tangki', 8000);
        $this->db->from($this->_table);
        $this->db->order_by('solar.kode_transaksi', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = pengambilan.kode_transaksi', 'left');
        $this->db->join('alat', 'alat.id_alat = pengambilan.id_alat', 'left');
        $this->db->where('solar.deleted', 0);
        $this->db->where('pengambilan.id_pengambilan', $id);
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->row();
    }
    public function add_pengambilan()
    {
        $post = $this->input->post();
        $this->id_pengambilan = uniqid('out-');
        $this->kode_transaksi = $post['fkode_transaksi'];
        $this->id_alat = $post['falat'];
        $this->jam = $post['fjam'];
        $this->keterangan = $post['fketerangan'];
        $this->id_user = $this->session->userdata('id_user');
        $this->no_urut = $this->cek_kode_transaksi();

        $this->db->insert($this->_table, $this);
    }
    public function edit_pengambilan($id)
    {
        $post = $this->input->post();
        $this->db->set('id_alat', $post['falat']);
        $this->db->set('keterangan', $post['fketerangan']);
        $this->db->set('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_pengambilan', $id);
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
        $query = $this->db->query("SELECT MAX(no_urut) as kode from pengambilan");
        $hasil = $query->row();
        $kode = $hasil->kode;
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $newkode = $kode + 1;
        return $newkode;
    }
}

/* End of file pengambilan_m.php */
