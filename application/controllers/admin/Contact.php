<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->model('M_contact', 'contact');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['contact'] = $this->web->get_contact()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/contact', $data);
        $this->load->view('admin/layout/footer');
    }
    public function faq()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['faq'] = $this->contact->get_faq_en()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/faq/faq_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function faq_id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['faq'] = $this->contact->get_faq_id()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/faq/faq_id', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'email' =>  $this->input->post('email', true),
            'phone' =>  $this->input->post('phone', true),
            'alamat' =>  $this->input->post('alamat', true)
        );
        $this->web->update_contact($id, $data);
        $this->session->set_flashdata('msg', 'Contact berhasil diupdate');
        redirect('admin/contact');
    }
    public function update_image()
    {
        if (empty($_FILES['image']['name'])) {
            $file = $this->input->post('image_lama', TRUE);
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
                redirect('admin/contact');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'image' => $file
        );
        $this->web->update_image($id, $data);
        $this->session->set_flashdata('msg', 'Gambar berhasil diupdate');
        redirect('admin/contact');
    }

    public function add_faq_en()
    {
        $data = array(
            'tanya' => $this->input->post('tanya', true),
            'jawab' =>  $this->input->post('jawab', true)
        );
        $this->contact->create_faq_en($data);
        $this->session->set_flashdata('msg', 'FAQ berhasil di tambah');
        redirect('admin/contact/faq');
    }
    public function add_faq_id()
    {
        $data = array(
            'tanya' => $this->input->post('tanya', true),
            'jawab' =>  $this->input->post('jawab', true)
        );
        $this->contact->create_faq_id($data);
        $this->session->set_flashdata('msg', 'FAQ berhasil di tambah');
        redirect('admin/contact/faq_id');
    }
    public function ajax_faq_en($id)
    {
        $data = $this->contact->get_faq_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_faq_id($id)
    {
        $data = $this->contact->get_faq_id_by_id($id);
        echo json_encode($data);
    }
    public function update_faq_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'tanya' => $this->input->post('tanya', true),
            'jawab' =>  $this->input->post('jawab', true)
        );
        $this->contact->update_faq_en($id, $data);
        $this->session->set_flashdata('msg', 'FAQ berhasil diupdate');
        redirect('admin/contact/faq');
    }
    public function update_faq_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'tanya' => $this->input->post('tanya', true),
            'jawab' =>  $this->input->post('jawab', true)
        );
        $this->contact->update_faq_id($id, $data);
        $this->session->set_flashdata('msg', 'FAQ berhasil diupdate');
        redirect('admin/contact/faq_id');
    }
    public function delete_faq_en($id)
    {
        $this->contact->delete_faq_en($id);
        $this->session->set_flashdata('msg', 'FAQ berhasil dihapus');
        redirect('admin/contact/faq');
    }
    public function delete_faq_id($id)
    {
        $this->contact->delete_faq_id($id);
        $this->session->set_flashdata('msg', 'FAQ berhasil dihapus');
        redirect('admin/contact/faq_id');
    }
}
