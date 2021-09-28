<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends CI_Controller
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
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/logo', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        if (empty($_FILES['logo']['name'])) {
            $file = $this->input->post('logo_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/admin/assets/logo";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("logo")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Logo gagal di update');
                redirect('admin/logo');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'logo' => $file,
            'update_at' => date("Y-m-d h:i:s")
        );
        $this->web->update_logo($id, $data);
        $this->session->set_flashdata('msg', 'Logo berhasil diupdate');
        redirect('admin/logo');
    }
    public function update_footer()
    {
        if (empty($_FILES['logo']['name'])) {
            $file = $this->input->post('logo_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/admin/assets/logo";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("logo")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Logo gagal di update');
                redirect('admin/logo');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'logo_footer' => $file,
            'update_at' => date("Y-m-d h:i:s")
        );
        $this->web->update_logo($id, $data);
        $this->session->set_flashdata('msg', 'Logo berhasil diupdate');
        redirect('admin/logo');
    }
}
