<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->model('M_user', 'user');
    $this->load->model('M_web', 'web');
    $this->load->model('M_about', 'about');
    $this->load->model('M_res', 'res');
    $this->load->model('M_emt', 'emt');
    $this->load->model('M_home', 'home');
    $this->load->helper('security');
    $this->load->library('form_validation');
  }
  public function redirect($uri = null)
  {
    if ($uri == null) {
      redirect('id');
    } else {
      $this->index();
    }
  }
  public function index()
  {

    $data['title'] = 'Home';
    $data['home'] = $this->web->get_home()->row();
    $data['title'] = 'About';
    $data['logo'] = $this->web->get_logo()->row();
    $data['sosmed'] = $this->web->get_sosmed()->result();
    $data['contact'] = $this->web->get_contact()->row();
    $data['about'] = $this->web->get_about()->row();
    $data['testimoni'] = $this->about->get_testimoni()->result();
    $data['feature_en'] = $this->about->get_feature_en()->result();
    $data['feature_id'] = $this->about->get_feature_id()->result();
    $data['galeri'] = $this->web->get_galeri_web()->result();
    $data['status_galeri'] = $this->web->get_galeri_web()->row();
    if ($this->uri->segment(1) == "id") {
      $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
      $data['home'] = $this->web->get_home()->result();
      $data['feature'] = $this->home->get_feature_id()->row();
      $data['header_feature2'] = $this->home->get_header_feature2_id()->row();
      $data['feature2'] = $this->home->get_feature2_home_id()->row();
      $data['status'] = $this->home->get_feature2_home_id()->row();
      $data['feature3'] = $this->home->get_feature3_home_id()->row();
      $data['feature4'] = $this->home->get_feature4_home_id()->result();
      $data['feature5'] = $this->home->get_feature5_home_id()->row();
      $this->load->view('web/home/id', $data);
    } else {
      $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
      $data['home'] = $this->web->get_home()->result();
      $data['feature'] = $this->home->get_feature_en()->row();
      $data['header_feature2'] = $this->home->get_header_feature2_en()->row();
      $data['feature2'] = $this->home->get_feature2_home()->row();
      $data['status'] = $this->home->get_feature2_home()->row();
      $data['feature3'] = $this->home->get_feature3_home()->row();
      $data['feature4'] = $this->home->get_feature4_home()->result();
      $data['feature5'] = $this->home->get_feature5_home()->row();
      $this->load->view('web/home/en', $data);
    }
  }
  public function finish()
  {
    $data['title'] = 'Money Type Quiz';
    $data['logo'] = $this->web->get_logo()->row();
    $data['sosmed'] = $this->web->get_sosmed()->result();
    $data['contact'] = $this->web->get_contact()->row();
    $data['galeri'] = $this->web->get_galeri_web()->result();
    $data['status'] = $this->web->get_galeri_web()->row();
    $data['emt'] = $this->emt->get_emt_us()->row();
    $this->load->view('web/layout/header', $data);
    $this->load->view('web/layout/navbar', $data);
    if ($this->uri->segment(1) == "id") {
      $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
      $this->load->view('web/finish/id', $data);
    } else {
      $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
      $this->load->view('web/finish/us', $data);
    }
    $this->load->view('web/layout/footer', $data);
  }
  public function polling()
  {
    $uri = $this->input->post('uri', true);
    $user = array(
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'email' => $this->input->post('email', true),
      'phone' => htmlspecialchars($this->input->post('phone', true))
    );
    $this->user->tambah_user_polling($user);
    $id_user = $this->db->insert_id();
    $kata = array(
      'kata1' => $this->input->post('kata1'),
      'kata2' => $this->input->post('kata2'),
      'kata3' => $this->input->post('kata3'),
      'kata4' => $this->input->post('kata4'),
      'kata5' => $this->input->post('kata5'),
      'kata6' => $this->input->post('kata6'),
      'kata7' => $this->input->post('kata7'),
      'kata8' => $this->input->post('kata8'),
      'kata9' => $this->input->post('kata9'),
      'kata10' => $this->input->post('kata10'),
      'kata11' => $this->input->post('kata11'),
      'kata12' => $this->input->post('kata12'),
    );
    foreach ($kata as $key => $val) {
      if (!empty($val)) {
        $kata1 = array(
          'kata' => $val,
          'id_user' => $id_user
        );
        $this->db->insert('polling', $kata1);
      }
    }
    if ($uri != "id") {
      $this->session->set_flashdata('msg', 'Thank you, the data was successfully recorded');
      redirect('' . base_url() . '');
    } else {
      $this->session->set_flashdata('msg', 'Terima kasih, data berhasil direkam');
      redirect('' . base_url() . $uri . '');
    }
  }
}
