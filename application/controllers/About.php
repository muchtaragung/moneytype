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
        $this->load->model('M_about', 'about');
        $this->load->model('M_res', 'res');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'About';
        $data['logo'] = $this->web->get_logo()->row();
        $data['sosmed'] = $this->web->get_sosmed()->result();
        $data['contact'] = $this->web->get_contact()->row();
        $data['about'] = $this->web->get_about()->row();
        $data['testimoni'] = $this->about->get_testimoni()->result();
        $data['feature_en'] = $this->about->get_feature_en()->result();
        $data['feature_id'] = $this->about->get_feature_id()->result();
        $data['galeri'] = $this->web->get_galeri_web()->result();
        $data['status'] = $this->web->get_galeri_web()->row();
        $this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/navbar', $data);
        if ($this->uri->segment(1) == "id") {
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $this->load->view('web/about/id', $data);
        } else {
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $this->load->view('web/about/us', $data);
        }
        $this->load->view('web/layout/footer', $data);
    }
}
