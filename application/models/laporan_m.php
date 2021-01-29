<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan_m extends CI_Model
{
    private $_table = 'solar';

    public function rules()
    {
        return [
            [
                'field' => 'ftangki',
                'label' => 'Tangki',
                'rules' => 'required'
            ],
            [
                'field' => 'ftgl_awal',
                'label' => 'Tanggal Awal',
                'rules' => 'required'
            ],
            [
                'field' => 'ftgl_akhir',
                'label' => 'Tanggal Akhir',
                'rules' => 'required'
            ],
        ];
    }
    public function rules_jam_kerja()
    {
        return [
            [
                'field' => 'falat',
                'label' => 'Alat',
                'rules' => 'required'
            ],
            [
                'field' => 'ftgl_awal',
                'label' => 'Tanggal Awal',
                'rules' => 'required'
            ],
            [
                'field' => 'ftgl_akhir',
                'label' => 'Tanggal Akhir',
                'rules' => 'required'
            ],
        ];
    }
    public function get_penerimaan($tgl_awal, $tgl_akhir, $tangki, $vendor)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('penerimaan', 'penerimaan.kode_transaksi = solar.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = penerimaan.id_vendor', 'left');
        if ($tangki != 'all') {
            $this->db->where('solar.tangki', $tangki);
        }
        $this->db->where('solar.tanggal >=', $tgl_awal);
        $this->db->where('solar.tanggal <=', $tgl_akhir);
        if ($vendor != 'all') {
            $this->db->where('penerimaan.id_vendor', $vendor);
        }
        $this->db->where('solar.jenis_transaksi', 'penerimaan');
        $this->db->order_by('solar.kode_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_pemakaian($tgl_awal, $tgl_akhir, $tangki, $alat)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('pengambilan', 'pengambilan.kode_transaksi = solar.kode_transaksi', 'left');
        $this->db->join('alat', 'alat.id_alat = pengambilan.id_alat', 'left');
        if ($tangki != 'all') {
            $this->db->where('solar.tangki', $tangki);
        }
        $this->db->where('solar.tanggal >=', $tgl_awal);
        $this->db->where('solar.tanggal <=', $tgl_akhir);
        if ($alat != 'all') {
            $this->db->where('pengambilan.id_alat', $alat);
        }
        $this->db->where('solar.jenis_transaksi', 'pengambilan');
        $this->db->order_by('solar.kode_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_jam_kerja($tgl_awal, $tgl_akhir, $alat)
    {
        $this->db->select('*');

        $this->db->from($this->_table);
        $this->db->join('pengambilan', 'pengambilan.kode_transaksi = solar.kode_transaksi', 'left');
        $this->db->join('alat', 'alat.id_alat = pengambilan.id_alat', 'left');
        if ($alat != 'all') {
            $this->db->where('pengambilan.id_alat', $alat);
        }
        $this->db->where('solar.tanggal >=', $tgl_awal);
        $this->db->where('solar.tanggal <=', $tgl_akhir);
        $this->db->where('solar.jenis_transaksi', 'pengambilan');
        // $this->db->select_sum('solar_out');
        $this->db->order_by('solar.kode_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_total_penerimaan($tgl_awal, $tgl_akhir, $tangki, $vendor)
    {
        $this->db->select_sum('solar_in');
        $this->db->from($this->_table);
        $this->db->join('penerimaan', 'penerimaan.kode_transaksi = solar.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = penerimaan.id_vendor', 'left');
        $this->db->where('solar.tangki', $tangki);
        $this->db->where('solar.tanggal >=', $tgl_awal);
        $this->db->where('solar.tanggal <=', $tgl_akhir);
        if ($vendor != 'all') {
            $this->db->where('penerimaan.id_vendor', $vendor);
        }
        $this->db->where('solar.jenis_transaksi', 'penerimaan');
        $this->db->order_by('solar.kode_transaksi', 'asc');
        $query = $this->db->get();
        $row = $query->row();
        return $row->solar_in;
    }
    public function get_total($tgl_awal, $tgl_akhir, $alat, $tangki)
    {
        $this->db->select_sum('solar_out');
        $this->db->from($this->_table);
        $this->db->join('pengambilan', 'pengambilan.kode_transaksi = solar.kode_transaksi', 'left');
        $this->db->join('alat', 'alat.id_alat = pengambilan.id_alat', 'left');
        if ($alat != 'all') {
            $this->db->where('pengambilan.id_alat', $alat);
        }
        $this->db->where('solar.tangki', $tangki);
        $this->db->where('solar.tanggal >=', $tgl_awal);
        $this->db->where('solar.tanggal <=', $tgl_akhir);
        $this->db->where('solar.jenis_transaksi', 'pengambilan');
        $this->db->order_by('solar.kode_transaksi', 'asc');
        $query = $this->db->get();
        $row = $query->row();
        return $row->solar_out;
    }
}

/* End of file laporan_m.php */
