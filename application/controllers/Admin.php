<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelAlat', 'ModelUser', 'ModelPinjam', 'm_booking']);
    }

    public function hapusAlat()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelAlat->hapusAlat($where);
        redirect('Admin');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['alat'] = $this->ModelAlat->getLimitAlat()->result_array();

        $this->load->view('templates-admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates-admin/footer');
    }
}
