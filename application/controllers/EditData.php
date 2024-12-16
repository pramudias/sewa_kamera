<?php

class EditData extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Tambah Alat';
		$data ['alat'] = $this->m_booking->tampil_data()->result();
		$this->load->view('templates-admin/header',$data);
		$this->load->view('admin/edit_data',$data);
		$this->load->view('templates-admin/footer');
	}
}