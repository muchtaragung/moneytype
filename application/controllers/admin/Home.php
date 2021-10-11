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
    public function galeri()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['galeri'] = $this->web->get_galeri()->result();
        $data['status'] = $this->web->get_galeri()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/home/galeri', $data);
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
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
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
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
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
    public function delete_galeri($id)
    {
        $this->web->delete_galeri($id);
        $this->session->set_flashdata('msg', 'Foto berhasil dihapus');
        redirect('admin/home/galeri');
    }
    public function add_galeri()
    {
        $config['upload_path'] = "./assets/assets/galeri";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di update');
            redirect('admin/home/galeri');
        }

        $data = array(
            'img' => $file,
            'id_admin' => 1,
            'akses' => 1,
        );
        $this->web->create_galeri($data);
        $this->session->set_flashdata('msg', 'Gambar berhasil ditambah');
        redirect('admin/home/galeri');
    }
    public function galeri_allow($id)
    {
        // $id = $this->input->post('id', true);
        $data = array(
            'akses' => 1
        );
        $this->web->akses_galeri($id, $data);
        $this->session->set_flashdata('msg', 'Galeri ditampilkan');
        redirect('admin/home/galeri');
    }
    public function galeri_denied($id)
    {
        // $id = $this->input->post('id', true);
        $data = array(
            'akses' => 0
        );
        $this->web->akses_galeri($id, $data);
        $this->session->set_flashdata('msg', 'Galeri tidak ditampilkan');
        redirect('admin/home/galeri');
    }
}
