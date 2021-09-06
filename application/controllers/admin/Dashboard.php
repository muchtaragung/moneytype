<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
}
