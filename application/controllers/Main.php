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
    $this->load->helper('security');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Home';
    $data['logo'] = $this->web->get_logo()->row();
    $data['sosmed'] = $this->web->get_sosmed()->result();
    $this->load->view('web/layout/header', $data);
    $this->load->view('web/layout/navbar', $data);
    $this->load->view('web/home');
    $this->load->view('web/layout/footer', $data);
  }
  public function finish()
  {
    $data['title'] = 'Money Type Quiz';
    $data['logo'] = $this->web->get_logo()->row();
    $data['sosmed'] = $this->web->get_sosmed()->result();
    $this->load->view('web/layout/header', $data);
    $this->load->view('web/layout/navbar', $data);
    $this->load->view('web/finish');
    $this->load->view('web/layout/footer', $data);
  }
}
