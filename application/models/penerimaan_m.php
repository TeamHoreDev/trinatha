<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penerimaan_m extends CI_Model
{

    private $_table = "penerimaan";

    public $id_penerimaan;
    public $kode_transaksi;
    public $id_vendor;
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
    public function get_all()
    {
        $this->db->select('*');
        $this->db->join('solar', 'solar.kode_transaksi = penerimaan.kode_transaksi', 'left');
        $this->db->join('vendor', 'vendor.id_vendor = penerimaan.id_vendor', 'left');
        $this->db->where('solar.deleted', 0);
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
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_alat', $id);
        $this->db->update($this->_table);
    }
}

/* End of file penerimaan_m.php */
