<?php

class tanggal extends CI_Controller {

	public function index()
	{
		$this->load->view('templates-admin/header');
		$this->load->view('admin/calendar');
		$this->load->view('templates-admin/footer');
	}
}