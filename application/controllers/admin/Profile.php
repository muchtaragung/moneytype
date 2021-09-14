<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_auth', 'auth');
        $this->load->model('M_web', 'web');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/profile');
        $this->load->view('admin/layout/footer');
    }
    public function update_password()
    {
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password tidak boleh kosong!'));
        $this->form_validation->set_rules('password_baru', 'Password', 'required', array(
            'required' => 'Password tidak boleh kosong!'
        ));
        $this->form_validation->set_rules('repassword', 'Password', 'required|matches[password_baru]', array(
            'required' => 'Password tidak boleh kosong!',
            'matches'     => 'Password tidak sama'
        ));
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $id = $this->session->userdata('id');
            $pass = htmlspecialchars($this->input->post('password', true));
            $cek_password = $this->auth->cek_password($id);

            if (password_verify($pass, $cek_password->password)) {
                $pb = password_hash($this->input->post('password_baru', true), PASSWORD_DEFAULT);
                $data = array(
                    'password' => $pb,
                );
                $this->auth->update_password($data, $id);
                $this->session->set_flashdata('msg', 'Password berhasil diubah.');
                redirect('admin/profile');
            } else {
                $this->session->set_flashdata('error', 'Password yang Anda masukan salah.');
                redirect('admin/profile');
            }
        }
    }
}
