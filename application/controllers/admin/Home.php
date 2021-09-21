<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
        $data['home'] = $this->web->get_home()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/home/home_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['home'] = $this->web->get_home()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/home/home_id', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update_id()
    {
        if (empty($_FILES['image']['name'])) {
            $file = $this->input->post('image_old', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("image")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/home/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'image' => $file,
            'masthead_id' => $this->input->post('masthead', true)
        );
        $this->web->update_home($id, $data);
        $this->session->set_flashdata('msg', 'Data berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_us()
    {
        if (empty($_FILES['image']['name'])) {
            $file = $this->input->post('image_old', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("image")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/home');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'image' => $file,
            'masthead_us' => $this->input->post('masthead', true)
        );
        $this->web->update_home($id, $data);
        $this->session->set_flashdata('msg', 'Data berhasil diupdate');
        redirect('admin/home');
    }
}
