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
        $this->load->model('M_home', 'home');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['home'] = $this->web->get_home()->result();
        $data['feature'] = $this->home->get_feature_en()->row();
        $data['header_feature2'] = $this->home->get_header_feature2_en()->row();
        $data['feature2'] = $this->home->get_feature2_home()->row();
        $data['status'] = $this->home->get_feature2_home()->row();
        $data['feature3'] = $this->home->get_feature3_home()->row();
        $data['feature4'] = $this->home->get_feature4_home()->result();
        $data['feature5'] = $this->home->get_feature5_home()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/home/home_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['home'] = $this->web->get_home()->result();
        $data['feature'] = $this->home->get_feature_id()->row();
        $data['header_feature2'] = $this->home->get_header_feature2_id()->row();
        $data['feature2'] = $this->home->get_feature2_home_id()->row();
        $data['status'] = $this->home->get_feature2_home_id()->row();
        $data['feature3'] = $this->home->get_feature3_home_id()->row();
        $data['feature4'] = $this->home->get_feature4_home_id()->result();
        $data['feature5'] = $this->home->get_feature5_home_id()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/home/home_id', $data);
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
            'nama' => $this->input->post('nama', true),
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
    public function ajax_galeri($id)
    {
        $data = $this->home->get_by_id_galeri($id);
        echo json_encode($data);
    }
    public function ajax_header($id)
    {
        $data = $this->home->get_by_id_header($id);
        echo json_encode($data);
    }
    public function ajax_feature4($id)
    {
        $data = $this->home->get_by_id_feature4($id);
        echo json_encode($data);
    }
    public function ajax_feature4_id($id)
    {
        $data = $this->home->get_by_id_feature4_id($id);
        echo json_encode($data);
    }
    public function add_header()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal ditambah');
            redirect('admin/home');
        }

        $data = array(
            'masthead_id' => $this->input->post('masthead_id'),
            'masthead_us' => $this->input->post('masthead_us'),
            'image' => $file,
            'font_size' => $this->input->post('font_size'),
            'color' => $this->input->post('color'),
        );
        $this->home->create_home($data);
        $this->session->set_flashdata('msg', 'Header berhasil ditambah');
        redirect('admin/home');
    }
    public function add_header_id()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal ditambah');
            redirect('admin/home/id');
        }

        $data = array(
            'masthead_id' => $this->input->post('masthead_id'),
            'masthead_us' => $this->input->post('masthead_us'),
            'image' => $file,
            'font_size' => $this->input->post('font_size'),
            'color' => $this->input->post('color'),
        );
        $this->home->create_home($data);
        $this->session->set_flashdata('msg', 'Header berhasil ditambah');
        redirect('admin/home/id');
    }
    public function delete_header($id)
    {
        $this->home->delete_header($id);
        $this->session->set_flashdata('msg', 'Header berhasil dihapus');
        redirect('admin/home');
    }
    public function delete_header_id($id)
    {
        $this->home->delete_header($id);
        $this->session->set_flashdata('msg', 'Header berhasil dihapus');
        redirect('admin/home/id');
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
                $this->session->set_flashdata('error', 'Header gagal di update');
                redirect('admin/home');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'masthead_id' => $this->input->post('masthead_id'),
            'masthead_us' => $this->input->post('masthead_us'),
            'image' => $file,
            'font_size' => $this->input->post('font_size'),
            'color' => $this->input->post('color'),
        );
        $this->home->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/home');
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
                $this->session->set_flashdata('error', 'Header gagal di update');
                redirect('admin/home/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'masthead_id' => $this->input->post('masthead_id'),
            'masthead_us' => $this->input->post('masthead_us'),
            'image' => $file,
            'font_size' => $this->input->post('font_size'),
            'color' => $this->input->post('color'),
        );
        $this->home->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_feature()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_feature_en($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_header_feature2_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_header_feature2_en($id, $data);
        $this->session->set_flashdata('msg', 'Header Feature 2 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_header_feature2_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_header_feature2_id($id, $data);
        $this->session->set_flashdata('msg', 'Header Feature 2 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_feature_ocs()
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
                $this->session->set_flashdata('error', 'Header gagal di update');
                redirect('admin/home');
            }
        }

        $id = 1;
        $data = array(
            'img_ocs' => $file,
            'header_ocs' => $this->input->post('header', true),
            'konten_ocs' => $this->input->post('konten', true),

        );
        $this->home->update_feature2($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature_fp()
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
                $this->session->set_flashdata('error', 'Header gagal di update');
                redirect('admin/home');
            }
        }

        $id = 1;
        $data = array(
            'img_fp' => $file,
            'header_fp' => $this->input->post('header', true),
            'konten_fp' => $this->input->post('konten', true),

        );
        $this->home->update_feature2($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature_mc()
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
                $this->session->set_flashdata('error', 'Header gagal di update');
                redirect('admin/home');
            }
        }

        $id = 1;
        $data = array(
            'img_mc' => $file,
            'header_mc' => $this->input->post('header', true),
            'konten_mc' => $this->input->post('konten', true),

        );
        $this->home->update_feature2($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature_ocs_id()
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
                $this->session->set_flashdata('error', 'gambar gagal di update');
                redirect('admin/home/id');
            }
        }

        $id = 1;
        $data = array(
            'img_ocs' => $file,
            'header_ocs' => $this->input->post('header', true),
            'konten_ocs' => $this->input->post('konten', true),

        );
        $this->home->update_feature2_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_feature_fp_id()
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
                redirect('admin/home/id');
            }
        }

        $id = 1;
        $data = array(
            'img_fp' => $file,
            'header_fp' => $this->input->post('header', true),
            'konten_fp' => $this->input->post('konten', true),

        );
        $this->home->update_feature2_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_feature_mc_id()
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
                redirect('admin/home/id');
            }
        }

        $id = 1;
        $data = array(
            'img_mc' => $file,
            'header_mc' => $this->input->post('header', true),
            'konten_mc' => $this->input->post('konten', true),

        );
        $this->home->update_feature2_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function gambar_allow($id)
    {
        // $id = $this->input->post('id', true);
        $data = array(
            'akses' => 1
        );
        $this->home->akses_gambar($id, $data);
        $this->session->set_flashdata('msg', 'Gambar ditampilkan');
        redirect('admin/home');
    }
    public function gambar_denied($id)
    {
        // $id = $this->input->post('id', true);
        $data = array(
            'akses' => 0
        );
        $this->home->akses_gambar($id, $data);
        $this->session->set_flashdata('msg', 'Gambar tidak ditampilkan');
        redirect('admin/home');
    }
    public function gambar_allow_id($id)
    {
        // $id = $this->input->post('id', true);
        $data = array(
            'akses' => 1
        );
        $this->home->akses_gambar_id($id, $data);
        $this->session->set_flashdata('msg', 'Gambar ditampilkan');
        redirect('admin/home/id');
    }
    public function gambar_denied_id($id)
    {
        // $id = $this->input->post('id', true);
        $data = array(
            'akses' => 0
        );
        $this->home->akses_gambar_id($id, $data);
        $this->session->set_flashdata('msg', 'Gambar tidak ditampilkan');
        redirect('admin/home/id');
    }
    public function update_feature3()
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
                $this->session->set_flashdata('error', 'Feature 3 gagal di update');
                redirect('admin/home');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_feature3($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature3_id()
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
                $this->session->set_flashdata('error', 'Feature 3 gagal di update');
                redirect('admin/home/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_feature3_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function add_feature4()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di update');
            redirect('admin/home');
        }

        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->home->create_feature4($data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil ditambah');
        redirect('admin/home');
    }
    public function add_feature4_id()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di update');
            redirect('admin/home/id');
        }

        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->home->create_feature4_id($data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil ditambah');
        redirect('admin/home/id');
    }
    public function update_feature4()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/home');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->home->update_feature4($id, $data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature4_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/home/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->home->update_feature4_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function delete_feature4($id)
    {
        $this->home->delete_feature4($id);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil dihapus');
        redirect('admin/home');
    }
    public function delete_feature4_id($id)
    {
        $this->home->delete_feature4_id($id);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil dihapus');
        redirect('admin/home/id');
    }
    public function update_feature5()
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
                $this->session->set_flashdata('error', 'Feature 5 gagal di update');
                redirect('admin/home');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_feature5($id, $data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil diupdate');
        redirect('admin/home');
    }
    public function update_feature5_id()
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
                $this->session->set_flashdata('error', 'Feature 5 gagal di update');
                redirect('admin/home/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header'),
            'konten' => $this->input->post('konten'),
        );
        $this->home->update_feature5_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil diupdate');
        redirect('admin/home/id');
    }
    public function update_galeri()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/galeri";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Galeri gagal di update');
                redirect('admin/home/galeri');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'nama' => $this->input->post('nama', true),
            'img' => $file,
            'id_admin' => $this->input->post('id_admin', true),
            'akses' => $this->input->post('akses', true),
        );
        $this->home->update_galeri($id, $data);
        $this->session->set_flashdata('msg', 'Galeri berhasil diupdate');
        redirect('admin/home/galeri');
    }
}
