<?php

class EditProfile extends CI_Controller {

	public function index()
	{	
		$this->load->view('templates/header');
		$this->load->view('edit_profile');
	}
}