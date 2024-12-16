<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($this->session->userdata('role_id') == 2) {
                        redirect('Home');
                    }else{
                        redirect('Admin');
                    }
                } else {
                    $this->session->set_flashdata('messageLogin', '<div class="flex flex-col items-center       justify-center">
                    <div class="flex items-center justify-center gap-3 rounded-lg bg-gray-700 p-3 text-red-500">
                    <div><span class="font-medium">Wrong Password!</span></div>
                    </div>');
                    redirect('');
                }
            } else {
                $this->session->set_flashdata('messageLogin', '<div class="flex flex-col items-center       justify-center">
                <div class="flex items-center justify-center gap-3 rounded-lg bg-gray-700 p-3 text-red-500">
                <div><span class="font-medium">This Email has not been Activated!</span></div>
                </div>');
                redirect('');
            }
        } else {
            $this->session->set_flashdata('messageLogin', '<div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center gap-3 rounded-lg bg-gray-700 p-3 text-red-500">
            <div><span class="font-medium">Email is not registered!</span></div>
            </div>');
            redirect('');
        }
    }

    public function registration()
    {
        
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Dont Match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            redirect('');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'tanggal_input' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('messageRegis', '<div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center gap-3 rounded-lg bg-gray-700 p-3 text-green-500">
            <div><span class="font-medium">Success alert!</span> Your account has been created! Please Login.</div>
            </div>');
            redirect('');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
