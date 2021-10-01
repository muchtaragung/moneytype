<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->model('M_fp', 'fp');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['fp'] = $this->fp->get_fp_us()->row();
        $data['header_feature'] = $this->fp->get_header_feature_us()->row();
        $data['header_feature3'] = $this->fp->get_header_feature3_us()->row();
        $data['header_feature5'] = $this->fp->get_header_feature5_us()->row();
        $data['feature1'] = $this->fp->get_feature_us()->result();
        $data['feature2'] = $this->fp->get_feature2_us()->row();
        $data['feature3'] = $this->fp->get_feature3_us()->result();
        $data['feature4'] = $this->fp->get_feature4_us()->result();
        $data['feature5'] = $this->fp->get_feature5_us()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/fp/fp_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['fp'] = $this->fp->get_fp_id()->row();
        $data['header_feature'] = $this->fp->get_header_feature_id()->row();
        $data['header_feature3'] = $this->fp->get_header_feature3_id()->row();
        $data['header_feature5'] = $this->fp->get_header_feature5_id()->row();
        $data['feature1'] = $this->fp->get_feature_id()->result();
        $data['feature2'] = $this->fp->get_feature2_id()->row();
        $data['feature3'] = $this->fp->get_feature3_id()->result();
        $data['feature4'] = $this->fp->get_feature4_id()->result();
        $data['feature5'] = $this->fp->get_feature5_id()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/fp/fp_id', $data);
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->fp->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/fp');
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->fp->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function update_header_feature_en1()
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_header_feature_us($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_header_feature_id1()
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_header_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function add_feature_en1()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/fp');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_en($data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil di tambah');
        redirect('admin/fp');
    }
    public function add_feature_id1()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/fp/id');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_id($data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil di tambah');
        redirect('admin/fp/id');
    }
    public function update_feature_en1()
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_en1($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_feature_id1()
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_id1($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function ajax_feature_en1($id)
    {
        $data = $this->fp->get_feature_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id1($id)
    {
        $data = $this->fp->get_feature_id_by_id($id);
        echo json_encode($data);
    }
    public function delete_feature_en1($id)
    {
        $this->fp->delete_feature_en1($id);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil dihapus');
        redirect('admin/fp');
    }
    public function delete_feature_id1($id)
    {
        $this->fp->delete_feature_id1($id);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil dihapus');
        redirect('admin/fp/id');
    }
    public function update_feature2_us()
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature2_us($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_feature2_id()
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature2_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function update_header_feature_en3()
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_header_feature3_us($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_header_feature_id3()
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_header_feature3_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function add_feature_en3()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/fp');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_en3($data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil di tambah');
        redirect('admin/fp');
    }
    public function add_feature_id3()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/fp/id');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_id3($data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil di tambah');
        redirect('admin/fp/id');
    }
    public function update_feature_en3()
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_en3($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_feature_id3()
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_id3($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function ajax_feature_en3($id)
    {
        $data = $this->fp->get_feature3_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id3($id)
    {
        $data = $this->fp->get_feature3_id_by_id($id);
        echo json_encode($data);
    }
    public function delete_feature_en3($id)
    {
        $this->fp->delete_feature_en3($id);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil dihapus');
        redirect('admin/fp');
    }
    public function delete_feature_id3($id)
    {
        $this->fp->delete_feature_id3($id);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil dihapus');
        redirect('admin/fp/id');
    }
    public function add_feature_en4()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_en4($data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil di tambah');
        redirect('admin/fp');
    }
    public function add_feature_id4()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_id4($data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil di tambah');
        redirect('admin/fp/id');
    }
    public function update_feature_en4()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_en4($id, $data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_feature_id4()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_id4($id, $data);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function ajax_feature_en4($id)
    {
        $data = $this->fp->get_feature4_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id4($id)
    {
        $data = $this->fp->get_feature4_id_by_id($id);
        echo json_encode($data);
    }
    public function delete_feature_en4($id)
    {
        $this->fp->delete_feature_en4($id);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil dihapus');
        redirect('admin/fp');
    }
    public function delete_feature_id4($id)
    {
        $this->fp->delete_feature_id4($id);
        $this->session->set_flashdata('msg', 'Feature 4 berhasil dihapus');
        redirect('admin/fp/id');
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'bg' => $file
        );
        $this->fp->update_bg($id, $data);
        $this->session->set_flashdata('msg', 'Background Feature 5 berhasil diupdate');
        redirect('admin/fp');
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'bg' => $file
        );
        $this->fp->update_bg($id, $data);
        $this->session->set_flashdata('msg', 'Background Feature 5 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function update_header_feature_en5()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_header_feature_us5($id, $data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_header_feature_id5()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_header_feature_id5($id, $data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function add_feature_en5()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/fp');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_en5($data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil di tambah');
        redirect('admin/fp');
    }
    public function add_feature_id5()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/fp/id');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->create_feature_id5($data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil di tambah');
        redirect('admin/fp/id');
    }
    public function update_feature_en5()
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
                redirect('admin/fp');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_en5($id, $data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil diupdate');
        redirect('admin/fp');
    }
    public function update_feature_id5()
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
                redirect('admin/fp/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->fp->update_feature_id5($id, $data);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil diupdate');
        redirect('admin/fp/id');
    }
    public function ajax_feature_en5($id)
    {
        $data = $this->fp->get_feature5_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id5($id)
    {
        $data = $this->fp->get_feature5_id_by_id($id);
        echo json_encode($data);
    }
    public function delete_feature_en5($id)
    {
        $this->fp->delete_feature_en5($id);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil dihapus');
        redirect('admin/fp');
    }
    public function delete_feature_id5($id)
    {
        $this->fp->delete_feature_id5($id);
        $this->session->set_flashdata('msg', 'Feature 5 berhasil dihapus');
        redirect('admin/fp/id');
    }
}
