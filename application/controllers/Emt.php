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
        $this->load->model('M_emt', 'emt');
        $this->load->model('M_res', 'res');
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
            $data['type'] = $this->emt->get_type_id()->result();
            $data['feature'] = $this->emt->get_feature_id()->result();
            $data['emt'] = $this->emt->get_emt_id()->row();
            $data['header_feature'] = $this->emt->get_header_feature_emt_id()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/emt/id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'The Eight Money type';
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['type'] = $this->emt->get_type_us()->result();
            $data['feature'] = $this->emt->get_feature_us()->result();
            $data['emt'] = $this->emt->get_emt_us()->row();
            $data['header_feature'] = $this->emt->get_header_feature_emt_us()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/emt/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
}
