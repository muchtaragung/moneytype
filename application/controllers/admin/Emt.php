<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->model('M_emt', 'emt');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['type'] = $this->emt->get_type_us()->result();
        $data['feature'] = $this->emt->get_feature_us()->result();
        $data['emt'] = $this->emt->get_emt_us()->row();
        $data['header_feature'] = $this->emt->get_header_feature_emt_us()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/emt/emt_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['type'] = $this->emt->get_type_id()->result();
        $data['feature'] = $this->emt->get_feature_id()->result();
        $data['emt'] = $this->emt->get_emt_id()->row();
        $data['header_feature'] = $this->emt->get_header_feature_emt_id()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/emt/emt_id', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add_type()
    {


        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->create_type($data);
        $this->session->set_flashdata('msg', 'Type berhasil di tambah');
        redirect('admin/emt');
    }
    public function add_type_id()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->create_type_id($data);
        $this->session->set_flashdata('msg', 'Type berhasil di tambah');
        redirect('admin/emt/id');
    }
    public function add_feature_en()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->create_feature_en($data);
        $this->session->set_flashdata('msg', 'Feature berhasil di tambah');
        redirect('admin/emt');
    }
    public function add_feature_id()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->create_feature_id($data);
        $this->session->set_flashdata('msg', 'Feature berhasil di tambah');
        redirect('admin/emt/id');
    }
    public function update_bg()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/emt');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'bg' => $file
        );
        $this->emt->update_bg($id, $data);
        $this->session->set_flashdata('msg', 'Background Feature berhasil diupdate');
        redirect('admin/emt');
    }
    public function update_bg_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/emt/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'bg' => $file
        );
        $this->emt->update_bg($id, $data);
        $this->session->set_flashdata('msg', 'Background Feature berhasil diupdate');
        redirect('admin/emt/id');
    }
    public function update_header()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/emt');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->emt->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header The Eight Money Types berhasil diupdate');
        redirect('admin/emt');
    }
    public function update_header_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/emt/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->emt->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header The Eight Money Types berhasil diupdate');
        redirect('admin/emt/id');
    }
    public function update_profile()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/emt');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_feature' => $file,
            'feature' => $this->input->post('feature', true),
            'sub_feature' =>  $this->input->post('konten', true)
        );
        $this->emt->update_profile($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/emt');
    }
    public function update_profile_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/emt/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_feature' => $file,
            'feature_id' => $this->input->post('feature', true),
            'sub_feature_id' =>  $this->input->post('konten', true)
        );
        $this->emt->update_profile($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/emt/id');
    }
    public function update_type()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->update_type_us($id, $data);
        $this->session->set_flashdata('msg', 'Type berhasil diupdate');
        redirect('admin/emt');
    }
    public function update_type_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->update_type_id($id, $data);
        $this->session->set_flashdata('msg', 'Type berhasil diupdate');
        redirect('admin/emt/id');
    }
    public function update_feature_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->update_feature_en($id, $data);
        $this->session->set_flashdata('msg', 'Feature berhasil diupdate');
        redirect('admin/emt');
    }
    public function update_feature_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->update_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature berhasil diupdate');
        redirect('admin/emt/id');
    }
    public function update_header_feature_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true),
        );
        $this->emt->update_header_feature_en($id, $data);
        $this->session->set_flashdata('msg', 'Header Feature berhasil diupdate');
        redirect('admin/emt');
    }
    public function update_header_feature_id()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->emt->update_header_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Header Feature berhasil diupdate');
        redirect('admin/emt/id');
    }
    public function delete_type($id)
    {
        $this->emt->delete_type($id);
        $this->session->set_flashdata('msg', 'Type berhasil dihapus');
        redirect('admin/emt');
    }
    public function delete_type_id($id)
    {
        $this->emt->delete_type_id($id);
        $this->session->set_flashdata('msg', 'Type berhasil dihapus');
        redirect('admin/emt/id');
    }
    public function delete_feature_en($id)
    {
        $this->emt->delete_feature_en($id);
        $this->session->set_flashdata('msg', 'Feature berhasil dihapus');
        redirect('admin/emt');
    }
    public function delete_feature_id($id)
    {
        $this->emt->delete_feature_id($id);
        $this->session->set_flashdata('msg', 'Feature berhasil dihapus');
        redirect('admin/emt/id');
    }
    public function ajax_type_us($id)
    {
        $data = $this->emt->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_type_id($id)
    {
        $data = $this->emt->get_by_id_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_en($id)
    {
        $data = $this->emt->get_feature_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id($id)
    {
        $data = $this->emt->get_feature_id_by_id($id);
        echo json_encode($data);
    }
}
