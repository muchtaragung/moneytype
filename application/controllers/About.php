<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'About';
        $data['logo'] = $this->web->get_logo()->row();
        $data['sosmed'] = $this->web->get_sosmed()->row();
        $this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/navbar', $data);
        $this->load->view('web/about');
        $this->load->view('web/layout/footer', $data);
    }
}
