<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ocs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->model('M_res', 'res');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->uri->segment(1) == "id") {
            $data['title'] = 'One-Coin Service';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/ocs/id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'One-Coin Service';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/ocs/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function fp()
    {
        if ($this->uri->segment(1) == "id") {
            $data['title'] = 'Financial Planning';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/fp/id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'Financial Planning';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/fp/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function mc()
    {
        if ($this->uri->segment(1) == "id") {
            $data['title'] = 'Money Coaching';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/mc/id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'Money Coaching';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/mc/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
}
