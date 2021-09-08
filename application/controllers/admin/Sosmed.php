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
        $data['sosmed'] = $this->web->get_sosmed()->result();
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/sosmed', $data);
        $this->load->view('admin/layout/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules(
            'nama_sosmed',
            'Sosial Media',
            'required|is_unique[sosial_media.nama_sosmed]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('warning', 'Sosial media sudah tersedia');
            redirect('admin/sosmed');
        } else {
            $sosmed = $this->input->post('nama_sosmed', true);
            switch ($sosmed) {
                case "Facebook":
                    $icon = 'fab fa-facebook-square';
                    break;
                case "Twitter":
                    $icon = 'fab fa-twitter';
                    break;
                case "Instagram":
                    $icon = 'fab fa-instagram';
                    break;
                case "Youtube":
                    $icon = 'fab fa-youtube';
                    break;
                case "Linkedin":
                    $icon = 'fab fa-linkedin';
                    break;
                case "Tiktok":
                    $icon = 'fab fa-tiktok';
                    break;
            }

            $data = array(
                'nama_sosmed' => $sosmed,
                'link' =>  $this->input->post('link', true),
                'icon' => $icon
            );
            $this->web->create_sosmed($data);
            $this->session->set_flashdata('msg', 'Sosmed berhasil di tambah');
            redirect('admin/sosmed');
        }
    }
    public function update()
    {
        $id = $this->input->post('id', true);
        $sosmed = $this->input->post('link');
        $data = array(
            'link' =>  $sosmed
        );
        $this->web->update_sosmed($id, $data);
        $this->session->set_flashdata('msg', 'Sosmed berhasil diupdate');
        redirect('admin/sosmed');
    }
    public function delete($id)
    {
        $this->web->delete_sosmed($id);
        $this->session->set_flashdata('msg', 'Sosmed berhasil dihapus');
        redirect('admin/sosmed');
    }
}
