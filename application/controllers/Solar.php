<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solar extends CI_Controller
{

	public function penerimaan()
	{
		$this->template->load('shared/index', 'transaksi/solar/penerimaan');
	}
	public function create_penerimaan()
	{
		$this->template->load('shared/index', 'transaksi/solar/create_penerimaan');
	}
	public function pengambilan()
	{
		$this->template->load('shared/index', 'transaksi/solar/pengambilan');
	}
	public function create_pengambilan()
	{
		$this->template->load('shared/index', 'transaksi/solar/create_pengambilan');
	}
	public function peminjaman()
	{
		$this->template->load('shared/index', 'transaksi/solar/peminjaman');
	}
	public function create_peminjaman()
	{
		$this->template->load('shared/index', 'transaksi/solar/create_peminjaman');
	}
	public function pengembalian()
	{
		$this->template->load('shared/index', 'transaksi/solar/pengembalian');
	}
	public function create_pengembalian()
	{
		$this->template->load('shared/index', 'transaksi/solar/create_pengembalian');
	}
	public function test()
	{
		$this->template->load('shared/index', 'transaksi/solar/index');
	}
}
