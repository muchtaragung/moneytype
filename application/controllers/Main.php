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
    $this->load->helper('security');
    $this->load->library('form_validation');
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
    if ($this->uri->segment(1) == "id") {
      $this->load->view('web/home/id', $data);
    } else {
      $this->load->view('web/home/us', $data);
    }
  }
  public function finish()
  {
    $data['title'] = 'Money Type Quiz';
    $data['logo'] = $this->web->get_logo()->row();
    $data['sosmed'] = $this->web->get_sosmed()->result();
    $data['contact'] = $this->web->get_contact()->row();
    $this->load->view('web/layout/header', $data);
    $this->load->view('web/layout/navbar', $data);
    if ($this->uri->segment(1) == "id") {
      $this->load->view('web/finish/id', $data);
    } else {
      $this->load->view('web/finish/us', $data);
    }
    $this->load->view('web/layout/footer', $data);
  }
}
