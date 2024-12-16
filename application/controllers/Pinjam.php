<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Pinjam extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model(['ModelUser', 'ModelAlat', 'ModelPinjam']);
    }

    public function index()
    {
        $data['judul'] = "Data Pinjam";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->ModelPinjam->joinData();

        $this->load->view('templates-admin/header', $data);
        $this->load->view('admin/tables', $data);
        $this->load->view('templates-admin/footer');
    }

    public function pinjamAct($alat)
    {
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $nohp = $this->input->post('nohp');
        $waktupinjam = $this->input->post('waktupinjam');

        $tglsekarang = date('Y-m-d');
        $databooking = [
            'nama' => $nama,
            'nik' => $nik,
            'no_hp' => $nohp,
            'waktu_pinjam' => $waktupinjam,
            'tgl_pinjam' => $tglsekarang,
            'id_alat' => $alat,
            'status' => 'Pinjam',
        ];
        $this->ModelPinjam->simpanPinjam($databooking);

        $this->session->set_flashdata('pesan', '<div class="alert alert-message alert-success" role="alert">Data Peminjaman Berhasil Disimpan</div>');
        redirect('Pinjam');
    }

    public function ubahStatus($no_pinjam)
    {
        $tglsekarang = date('Y-m-d');
        $this->ModelPinjam->updateData([
            'status' => 'Kembali',
            'tgl_pengembalian' => $tglsekarang,
        ], [
            'no_pinjam' => $no_pinjam,
        ]);

        $this->session->set_flashdata('pesan', '<div class="alert alert-message alert-success" role="alert">Data Peminjaman Berhasil dirubah</div>');
        redirect('Pinjam');
    }
}
