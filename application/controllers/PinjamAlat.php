<?php

class PinjamAlat extends CI_Controller {

	public function index($alat)
	{

		$data['judul'] = 'Pinjam Alat';
		$data ['alat'] = $this->m_booking->edit_barang(['alat.id'=>$alat],'alat')->row();
		$this->load->view('templates-admin/header',$data);
		$this->load->view('admin/pinjam_alat',$data);
		$this->load->view('templates-admin/footer');
	}
}