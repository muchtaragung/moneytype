<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resource extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_res', 'res');
        $this->load->model('M_web', 'web');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['resource_us'] = $this->res->get_resource_us()->result();
        $data['resource'] = $this->res->get_resource_header()->row();
        $data['kategori'] = $this->res->get_kategori()->result();
        $data['logo'] = $this->web->get_logo()->row();
        $data['komen'] = $this->res->list_komen_us_admin()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/resource/resource_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['resource_id'] = $this->res->get_resource_id()->result();
        $data['resource'] = $this->res->get_resource_header()->row();
        $data['kategori'] = $this->res->get_kategori()->result();
        $data['logo'] = $this->web->get_logo()->row();
        $data['komen'] = $this->res->list_komen_id_admin()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/resource/resource_id', $data);
        $this->load->view('admin/layout/footer');
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
                redirect('admin/resource');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->res->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/resource');
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
                redirect('admin/resource/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->res->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/resource/id');
    }
    public function edit_resource_en($id)
    {
        $data['resource'] = $this->res->get_resource_us_id($id)->row();
        $data['kategori'] = $this->res->get_kategori()->result();
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/resource/edit_resource_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit_resource_id($id)
    {
        $data['resource'] = $this->res->get_resource_id_id($id)->row();
        $data['kategori'] = $this->res->get_kategori()->result();
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/resource/edit_resource_id', $data);
        $this->load->view('admin/layout/footer');
    }
    public function kategori()
    {
        $data['kategori'] = $this->res->get_kategori()->result();
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/resource/kategori', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add_kategori()
    {
        $data = array(
            'nama_kategori' =>  $this->input->post('nama_kategori', true),
        );
        $this->res->create_kategori($data);
        $this->session->set_flashdata('msg', 'Kategori berhasil di tambah');
        redirect('admin/resource/kategori');
    }
    public function update_kategori()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'nama_kategori' =>  $this->input->post('nama_kategori', true),
        );
        $this->res->update_kategori($id, $data);
        $this->session->set_flashdata('msg', 'Kategori berhasil diupdate');
        redirect('admin/resource/kategori');
    }
    public function ajax_kategori($id)
    {
        $data = $this->res->get_by_id_kategori($id);
        echo json_encode($data);
    }
    public function ajax_resource_en($id)
    {
        $data = $this->res->get_by_id_resource_en($id);
        echo json_encode($data);
    }
    public function delete_kategori($id)
    {
        $this->res->delete_kategori($id);
        $this->session->set_flashdata('msg', 'Kategori berhasil dihapus');
        redirect('admin/resource/kategori');
    }
    public function add_resource_en()
    {

        // $a = $this->input->post('img', true);
        // var_dump($a);
        // die;

        $config['upload_path'] = "./assets/assets/blog";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("img")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/resource');
        }
        $slug = url_title($this->input->post('judul', true), 'dash', true);
        $data = array(
            'img' => $file,
            'judul' => $this->input->post('judul', true),
            'isi' =>  $this->input->post('isi', true),
            'tanggal_post' => date('Y-m-d'),
            'slug' => $slug,
            'id_kategori' => $this->input->post('kategori', true)

        );
        $this->res->create_resource($data);
        $this->session->set_flashdata('msg', 'Resource berhasil di tambah');
        redirect('admin/resource');
    }
    public function add_resource_id()
    {

        // $a = $this->input->post('img', true);
        // var_dump($a);
        // die;

        $config['upload_path'] = "./assets/assets/blog";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("img")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/resource/id');
        }
        $slug = url_title($this->input->post('judul', true), 'dash', true);
        $data = array(
            'img' => $file,
            'judul' => $this->input->post('judul', true),
            'isi' =>  $this->input->post('isi', true),
            'tanggal_post' => date('Y-m-d'),
            'slug' => $slug,
            'id_kategori' => $this->input->post('kategori', true)

        );
        $this->res->create_resource_id($data);
        $this->session->set_flashdata('msg', 'Resource berhasil di tambah');
        redirect('admin/resource/id');
    }
    public function update_resource()
    {
        if (empty($_FILES['img']['name'])) {
            $file = $this->input->post('img_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/blog";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("img")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/resource');
            }
        }
        $id = $this->input->post('id', true);
        $slug = url_title($this->input->post('judul', true), 'dash', true);
        $data = array(
            'img' => $file,
            'judul' => $this->input->post('judul', true),
            'isi' =>  $this->input->post('isi', true),
            'tanggal_post' => date('Y-m-d'),
            'slug' => $slug,
            'id_kategori' => $this->input->post('kategori', true)
        );
        $this->res->update_resource($id, $data);
        $this->session->set_flashdata('msg', 'Resource berhasil diupdate');
        redirect('admin/resource');
    }
    public function update_resource_id()
    {
        if (empty($_FILES['img']['name'])) {
            $file = $this->input->post('img_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/blog";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("img")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/resource/id');
            }
        }
        $id = $this->input->post('id', true);
        $slug = url_title($this->input->post('judul', true), 'dash', true);
        $data = array(
            'img' => $file,
            'judul' => $this->input->post('judul', true),
            'isi' =>  $this->input->post('isi', true),
            'tanggal_post' => date('Y-m-d'),
            'slug' => $slug,
            'id_kategori' => $this->input->post('kategori', true)
        );
        $this->res->update_resource_id($id, $data);
        $this->session->set_flashdata('msg', 'Resource berhasil diupdate');
        redirect('admin/resource/id');
    }
    public function delete_resource_en($id)
    {
        $this->res->delete_resource_en($id);
        $this->session->set_flashdata('msg', 'Resource berhasil dihapus');
        redirect('admin/resource');
    }
    public function delete_resource_id($id)
    {
        $this->res->delete_resource_id($id);
        $this->session->set_flashdata('msg', 'Resource berhasil dihapus');
        redirect('admin/resource/id');
    }
    public function update_status_id()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'akses' => $this->input->post('akses', true)
        );
        $this->res->update_status_id($id, $data);
        $this->session->set_flashdata('msg', 'Status berhasil diupdate');
        redirect('admin/resource/id');
    }
    public function update_status_us()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'akses' => $this->input->post('akses', true)
        );
        $this->res->update_status_us($id, $data);
        $this->session->set_flashdata('msg', 'Status berhasil diupdate');
        redirect('admin/resource');
    }
    public function delete_komen_id($id)
    {
        $this->res->delete_komen_id($id);
        $this->session->set_flashdata('msg', 'Komentar berhasil dihapus');
        redirect('admin/resource/id');
    }
    public function delete_komen_us($id)
    {
        $this->res->delete_komen_us($id);
        $this->session->set_flashdata('msg', 'Komentar berhasil dihapus');
        redirect('admin/resource');
    }
}
