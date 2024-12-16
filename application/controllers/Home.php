<?php

class Home extends CI_Controller {

	public function index()
	{
		$data['alat'] = $this->m_booking->tampil_data()->result();
		$data['kategori'] = [];

		foreach ($data['alat'] as $e) {
		if (!array_key_exists($e->kategori, $data['kategori'])) {
		$data['kategori'][$e->kategori] = [];
		}
		$data['kategori'][$e->kategori][] = $e;
		}
		$this->load->view('templates/header');
		$this->load->view('menu',$data);
		$this->load->view('templates/footer');
	}
}