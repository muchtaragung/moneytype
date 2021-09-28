<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth', 'auth');
        $this->load->model('m_web', 'web');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/login', $data);
    }
    public function auth()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $pass = htmlspecialchars($this->input->post('password'));
        $cek_login = $this->auth->cek_login_admin($email);
        if ($cek_login == FALSE) {
            $this->session->set_flashdata('error', 'Email yang Anda masukan tidak terdaftar.');
            redirect('admin/login');
        } else {
            if (password_verify($pass, $cek_login->password)) {
                $this->session->set_userdata('id', $cek_login->id);
                $this->session->set_userdata('email', $cek_login->email);
                $this->session->set_userdata('login', 'Admin');
                $this->session->set_userdata('name', 'Admin');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username Atau Password Salah');
                redirect('admin/login');
            }
        }
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
    public function aktifasi()
    {
        $this->load->view("admin/aktifasi");
    }
}
