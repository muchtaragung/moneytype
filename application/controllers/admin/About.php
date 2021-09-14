<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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
        $data['about'] = $this->web->get_about()->row();
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/about', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/admin/assets/icon";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/about');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'gambar' => $file,
            'isi' =>  $this->input->post('isi', TRUE),
        );
        $this->web->update_about($id, $data);
        $this->session->set_flashdata('msg', 'About berhasil diupdate');
        redirect('admin/about');
    }
    public function delete($id)
    {
        $this->web->delete_sosmed($id);
        $this->session->set_flashdata('msg', 'Sosmed berhasil dihapus');
        redirect('admin/sosmed');
    }
}
