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
        $this->load->model('M_ocs', 'ocs');
        $this->load->model('M_mc', 'mc');
        $this->load->model('M_fp', 'fp');
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
            $data['type'] = $this->ocs->get_type_id()->result();
            $data['feature'] = $this->ocs->get_feature_id()->result();
            $data['ocs'] = $this->ocs->get_ocs_id()->row();
            $data['header_feature'] = $this->ocs->get_header_feature_ocs_id()->row();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
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
            $data['type'] = $this->ocs->get_type_us()->result();
            $data['feature'] = $this->ocs->get_feature_us()->result();
            $data['ocs'] = $this->ocs->get_ocs_us()->row();
            $data['header_feature'] = $this->ocs->get_header_feature_ocs_us()->row();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
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
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();

            $data['fp'] = $this->fp->get_fp_id()->row();
            $data['header_feature'] = $this->fp->get_header_feature_id()->row();
            $data['header_feature3'] = $this->fp->get_header_feature3_id()->row();
            $data['header_feature5'] = $this->fp->get_header_feature5_id()->row();
            $data['feature1'] = $this->fp->get_feature_id()->result();
            $data['feature2'] = $this->fp->get_feature2_id()->row();
            $data['feature3'] = $this->fp->get_feature3_id()->result();
            $data['feature4'] = $this->fp->get_feature4_id()->result();
            $data['feature5'] = $this->fp->get_feature5_id()->result();
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
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $data['fp'] = $this->fp->get_fp_us()->row();
            $data['header_feature'] = $this->fp->get_header_feature_us()->row();
            $data['header_feature3'] = $this->fp->get_header_feature3_us()->row();
            $data['header_feature5'] = $this->fp->get_header_feature5_us()->row();
            $data['feature1'] = $this->fp->get_feature_us()->result();
            $data['feature2'] = $this->fp->get_feature2_us()->row();
            $data['feature3'] = $this->fp->get_feature3_us()->result();
            $data['feature4'] = $this->fp->get_feature4_us()->result();
            $data['feature5'] = $this->fp->get_feature5_us()->result();
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
            $data['feature1'] = $this->mc->get_feature_id()->result();
            $data['feature2'] = $this->mc->get_feature2_id()->result();
            $data['feature3'] = $this->mc->get_feature3_id()->result();
            $data['mc'] = $this->mc->get_mc_id()->row();
            $data['header3'] = $this->mc->get_header_feature3_id()->row();
            $data['header_feature'] = $this->mc->get_header_feature_ocs_id()->row();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
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
            $data['feature1'] = $this->mc->get_feature_us()->result();
            $data['feature2'] = $this->mc->get_feature2_us()->result();
            $data['feature3'] = $this->mc->get_feature3_us()->result();
            $data['header3'] = $this->mc->get_header_feature3_us()->row();
            $data['mc'] = $this->mc->get_mc_us()->row();
            $data['header_feature'] = $this->mc->get_header_feature_ocs_us()->row();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/mc/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
}
