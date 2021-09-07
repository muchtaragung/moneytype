<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sosmed extends CI_Controller
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
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['sosmed'] = $this->web->get_sosmed()->row();
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/sosmed', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        $id = $this->input->post('id', true);
        if ($this->input->post('facebook') != null) {
            $sosmed = $this->input->post('facebook');
            $data = array(
                'facebook' =>  $sosmed
            );
            $this->web->update_sosmed($id, $data);
            $this->session->set_flashdata('msg', 'Facebook berhasil diupdate');
            redirect('admin/sosmed');
        } elseif ($this->input->post('twitter') != null) {
            $sosmed = $this->input->post('twitter');
            $data = array(
                'twitter' =>  $sosmed
            );
            $this->web->update_sosmed($id, $data);
            $this->session->set_flashdata('msg', 'Twitter berhasil diupdate');
            redirect('admin/sosmed');
        } elseif ($this->input->post('instagram') != null) {
            $sosmed = $this->input->post('instagram');
            $data = array(
                'instagram' =>  $sosmed
            );
            $this->web->update_sosmed($id, $data);
            $this->session->set_flashdata('msg', 'Instagram berhasil diupdate');
            redirect('admin/sosmed');
        }
    }
}
