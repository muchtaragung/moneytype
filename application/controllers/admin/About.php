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
        $this->load->model('M_about', 'about');
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
        $data['testimoni'] = $this->about->get_testimoni()->result();
        $data['feature_en'] = $this->about->get_feature_en()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/about/about_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['about'] = $this->web->get_about()->row();
        $data['logo'] = $this->web->get_logo()->row();
        $data['testimoni'] = $this->about->get_testimoni()->result();
        $data['feature_id'] = $this->about->get_feature_id()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/about/about_id', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add_testimoni()
    {

        // $a = $this->input->post('img', true);
        // var_dump($a);
        // die;

        $config['upload_path'] = "./assets/icon";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("img")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            if ($this->uri->segment(3) == null) {
                redirect('admin/about');
            } else {
                redirect('admin/about/id');
            }
        }
        $data = array(
            'nama' => $this->input->post('nama', true),
            'job' =>  $this->input->post('job', true),
            'testimoni' => $this->input->post('testimoni', true),
            'img' => $file
        );
        $this->about->create_testimoni($data);
        $this->session->set_flashdata('msg', 'Testimoni berhasil di tambah');
        if ($this->uri->segment(3) == null) {
            redirect('admin/about');
        } else {
            redirect('admin/about/id');
        }
    }
    public function add_feature_en()
    {
        $config['upload_path'] = "./assets/icon";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("icon")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/about');
        }
        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->about->create_feature_en($data);
        $this->session->set_flashdata('msg', 'Feature berhasil di tambah');
        redirect('admin/about');
    }
    public function add_feature_id()
    {
        $config['upload_path'] = "./assets/icon";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("icon")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/about');
        }
        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->about->create_feature_id($data);
        $this->session->set_flashdata('msg', 'Feature berhasil di tambah');
        redirect('admin/about/id');
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
                if ($this->uri->segment(3) == null) {
                    redirect('admin/about');
                } else {
                    redirect('admin/about/id');
                }
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->about->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        if ($this->uri->segment(3) == null) {
            redirect('admin/about');
        } else {
            redirect('admin/about/id');
        }
    }
    public function update_header_testimoni()
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
                if ($this->uri->segment(3) == null) {
                    redirect('admin/about');
                } else {
                    redirect('admin/about/id');
                }
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_testimoni' => $file
        );
        $this->about->update_header_testimoni($id, $data);
        $this->session->set_flashdata('msg', 'Header Testimoni berhasil diupdate');
        if ($this->uri->segment(3) == null) {
            redirect('admin/about');
        } else {
            redirect('admin/about/id');
        }
    }
    public function update_profile()
    {
        // $d = $this->input->post('phone', true);
        // var_dump($d);
        // die;
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
                if ($this->uri->segment(3) == null) {
                    redirect('admin/about');
                } else {
                    redirect('admin/about/id');
                }
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_profile' => $file,
            'header_profile' => $this->input->post('header_profile', true),
            'profile' =>  $this->input->post('profile', true),
            'phone' => $this->input->post('phone', true)
        );
        if ($this->about->update_profile($id, $data)) {
            $this->session->set_flashdata('msg', 'Profile berhasil diupdate');
            if ($this->uri->segment(3) == null) {
                redirect('admin/about');
            } else {
                redirect('admin/about/id');
            }
        } else {
            $this->session->set_flashdata('error', 'Profile gagal diupdate');
            if ($this->uri->segment(3) == null) {
                redirect('admin/about');
            } else {
                redirect('admin/about/id');
            }
        }
    }
    public function update_profile_id()
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
                redirect('admin/about/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'header_profile_id' => $this->input->post('header_profile', true),
            'profile_id' =>  $this->input->post('profile', true),
            'img_profile' => $file
        );
        $this->about->update_profile($id, $data);
        $this->session->set_flashdata('msg', 'Profile berhasil diupdate');

        redirect('admin/about/id');
    }
    public function update_testimoni()
    {
        if (empty($_FILES['img']['name'])) {
            $file = $this->input->post('img_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/icon";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("img")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                if ($this->uri->segment(3) == null) {
                    redirect('admin/about');
                } else {
                    redirect('admin/about/id');
                }
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'nama' => $this->input->post('nama', true),
            'job' =>  $this->input->post('job', true),
            'testimoni' => $this->input->post('testimoni', true),
            'img' => $file
        );
        $this->about->update_testimoni($id, $data);
        $this->session->set_flashdata('msg', 'Testimoni berhasil diupdate');
        if ($this->uri->segment(3) == null) {
            redirect('admin/about');
        } else {
            redirect('admin/about/id');
        }
    }
    public function update_feature_en()
    {
        if (empty($_FILES['icon']['name'])) {
            $file = $this->input->post('icon_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/icon";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("icon")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/about');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->about->update_feature_en($id, $data);
        $this->session->set_flashdata('msg', 'Feature berhasil diupdate');
        redirect('admin/about');
    }
    public function update_feature_id()
    {
        if (empty($_FILES['icon']['name'])) {
            $file = $this->input->post('icon_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/icon";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("icon")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/about/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'title' => $this->input->post('title', true),
            'konten' =>  $this->input->post('konten', true),
            'icon' => $file
        );
        $this->about->update_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature berhasil diupdate');
        redirect('admin/about/id');
    }
    public function delete_testimoni($id)
    {
        $this->about->delete_testimoni($id);
        $this->session->set_flashdata('msg', 'Testimoni berhasil dihapus');
        if ($this->uri->segment(3) == null) {
            redirect('admin/about');
        } else {
            redirect('admin/about/id');
        }
    }
    public function delete_feature_en($id)
    {
        $this->about->delete_feature_en($id);
        $this->session->set_flashdata('msg', 'Feature berhasil dihapus');
        redirect('admin/about');
    }
    public function delete_feature_id($id)
    {
        $this->about->delete_feature_id($id);
        $this->session->set_flashdata('msg', 'Feature berhasil dihapus');
        redirect('admin/about/id');
    }
    public function ajax_testimoni($id)
    {
        $data = $this->about->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_en($id)
    {
        $data = $this->about->get_feature_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id($id)
    {
        $data = $this->about->get_feature_id_by_id($id);
        echo json_encode($data);
    }
}
