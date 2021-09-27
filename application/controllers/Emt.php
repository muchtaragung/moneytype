<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emt extends CI_Controller
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
        if ($this->uri->segment(1) == "id") {
            $data['title'] = 'The Eight Money type';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/emt/id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'The Eight Money type';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/emt/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
}
