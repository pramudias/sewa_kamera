<?php

class TambahPinjam extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Tambah Pinjam';
		$data['alat'] = $this->m_booking->tampil_data()->result();
		$data['kategori'] = [];

		foreach ($data['alat'] as $e) {
		if (!array_key_exists($e->kategori, $data['kategori'])) {
		$data['kategori'][$e->kategori] = [];
		}
		$data['kategori'][$e->kategori][] = $e;
		}
		$this->load->view('templates-admin/header',$data);
		$this->load->view('admin/tambah_data_pinjam',$data);
		$this->load->view('templates-admin/footer');
	}
}