<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
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
        $data['contact'] = $this->web->get_contact()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/contact', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'email' =>  $this->input->post('email', true),
            'phone' =>  $this->input->post('phone', true),
            'alamat' =>  $this->input->post('alamat', true)
        );
        $this->web->update_contact($id, $data);
        $this->session->set_flashdata('msg', 'Contact berhasil diupdate');
        redirect('admin/contact');
    }
}
