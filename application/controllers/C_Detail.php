<?php 

class C_detail extends CI_Controller{
	public function index($id)
	{
		$data ['alat'] = $this->m_booking->tampil_data_where(['id' => $id],'alat')->result();
		$this->load->view('templates/header');
		$this->load->view('detail',$data);
		$this->load->view('templates/footer');

	}
}