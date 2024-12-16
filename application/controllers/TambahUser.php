<?php

class TambahUser extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Tambah User';
		$data ['alat'] = $this->m_booking->tampil_data()->result();
		$this->load->view('templates-admin/header',$data);
		$this->load->view('admin/tambah_user',$data);
		$this->load->view('templates-admin/footer');
	}
}