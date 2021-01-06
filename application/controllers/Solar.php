<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('solar_m');
		$this->load->model('vendor_m');
		$this->load->model('penerimaan_m');
		$this->load->model('pengambilan_m');
		$this->load->model('alat_m');
		$this->load->model('peminjaman_m');
		$this->load->model('pengembalian_m');
	}


	public function penerimaan()
	{
		$data['penerimaan5k'] = $this->penerimaan_m->get_all_5k();
		$data['penerimaan8k'] = $this->penerimaan_m->get_all_8k();
		$this->template->load('shared/index', 'transaksi/solar/penerimaan', $data);
	}
	public function create_penerimaan()
	{
		$solar  = $this->solar_m;
		$penerimaan  = $this->penerimaan_m;
		$validation = $this->form_validation;
		$validation->set_rules($penerimaan->rules_penerimaan());
		if ($validation->run() == FALSE) {
			$data['kode'] = $this->solar_m->cek_kode_transaksi();
			$data['vendor'] = $this->vendor_m->get_all();
			$data['stok_5000'] = $this->solar_m->get_stok('5000');
			$data['stok_8000'] = $this->solar_m->get_stok('8000');
			$this->template->load('shared/index', 'transaksi/solar/create_penerimaan', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$solar->add_solar_in($post);
			if ($this->db->affected_rows() > 0) {
				$penerimaan->add_penerimaan($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data penerimaan berhasil disimpan!');
					redirect('solar/penerimaan', 'refresh');
				}
			}
		}
	}
	public function pengambilan()
	{
		$data['pengambilan5k'] = $this->pengambilan_m->get_all_5k();
		$data['pengambilan8k'] = $this->pengambilan_m->get_all_8k();
		$this->template->load('shared/index', 'transaksi/solar/pengambilan', $data);
	}
	public function create_pengambilan()
	{
		$solar  = $this->solar_m;
		$pengambilan  = $this->pengambilan_m;
		$validation = $this->form_validation;
		$validation->set_rules($pengambilan->rules_pengambilan());
		if ($validation->run() == FALSE) {
			$data['kode'] = $this->solar_m->cek_kode_transaksi();
			$data['alat'] = $this->alat_m->get_all();
			$data['stok_5000'] = $this->solar_m->get_stok('5000');
			$data['stok_8000'] = $this->solar_m->get_stok('8000');
			$this->template->load('shared/index', 'transaksi/solar/create_pengambilan', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$solar->add_solar_out($post);
			if ($this->db->affected_rows() > 0) {
				$pengambilan->add_pengambilan($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data pengambilan berhasil disimpan!');
					redirect('solar/pengambilan', 'refresh');
				}
			}
		}
	}
	public function peminjaman()
	{
		$data['peminjaman5k'] = $this->peminjaman_m->get_all_5k();
		$data['peminjaman8k'] = $this->peminjaman_m->get_all_8k();
		$this->template->load('shared/index', 'transaksi/solar/peminjaman', $data);
	}
	public function create_peminjaman()
	{
		$solar  = $this->solar_m;
		$peminjaman  = $this->peminjaman_m;
		$validation = $this->form_validation;
		$validation->set_rules($peminjaman->rules_peminjaman());
		if ($validation->run() == FALSE) {
			$data['kode'] = $this->solar_m->cek_kode_transaksi();
			$data['vendor'] = $this->vendor_m->get_all();
			$data['stok_5000'] = $this->solar_m->get_stok('5000');
			$data['stok_8000'] = $this->solar_m->get_stok('8000');
			$this->template->load('shared/index', 'transaksi/solar/create_peminjaman', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$solar->add_solar_out($post);
			if ($this->db->affected_rows() > 0) {
				$peminjaman->add_peminjaman($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data peminjaman berhasil disimpan!');
					redirect('solar/peminjaman', 'refresh');
				}
			}
		}
	}
	public function pengembalian()
	{
		$data['pengembalian5k'] = $this->pengembalian_m->get_all_5k();
		$data['pengembalian8k'] = $this->pengembalian_m->get_all_8k();
		$this->template->load('shared/index', 'transaksi/solar/pengembalian', $data);
	}
	public function create_pengembalian()
	{
		$data['peminjaman'] = $this->peminjaman_m->get_belum_kembali();
		$this->template->load('shared/index', 'transaksi/solar/create_pengembalian', $data);
	}
	public function form_pengembalian($id)
	{
		$solar  = $this->solar_m;
		$pengembalian  = $this->pengembalian_m;
		$peminjaman = $this->peminjaman_m;
		$validation = $this->form_validation;
		$validation->set_rules($pengembalian->rules_pengembalian());
		if ($validation->run() == FALSE) {
			$data['stok_5000'] = $this->solar_m->get_stok('5000');
			$data['stok_8000'] = $this->solar_m->get_stok('8000');
			$data['kode'] = $this->solar_m->cek_kode_transaksi();
			$data['peminjaman'] = $this->peminjaman_m->get_by_id($id);
			$this->template->load('shared/index', 'transaksi/solar/create_pengembalian_form', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$solar->add_solar_in($post);
			if ($this->db->affected_rows() > 0) {
				$pengembalian->add_pengembalian($post);
				$peminjaman->update_status($id);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data pengembalian berhasil disimpan!');
					redirect('solar/pengembalian', 'refresh');
				}
			}
		}
	}
	public function test()
	{
		$this->template->load('shared/index', 'transaksi/solar/index');
	}

	public function delete($id)
	{
		$this->solar_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data transaksi berhasil dihapus!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function delete_pengembalian($id, $kode)
	{
		$this->solar_m->delete($id);
		$this->peminjaman_m->update_status_0($kode);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data transaksi berhasil dihapus!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
