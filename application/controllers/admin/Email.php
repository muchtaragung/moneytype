<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['email'] = $this->web->get_email()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/email', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'email' =>  $this->input->post('email', true),
        );
        $this->web->update_email($id, $data);
        $this->session->set_flashdata('msg', 'Email berhasil diupdate');
        redirect('admin/email');
    }
}
