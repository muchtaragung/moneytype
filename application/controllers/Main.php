<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->helper('security');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('web/layout/header', $data);
    $this->load->view('web/layout/navbar');
    $this->load->view('web/home');
    $this->load->view('web/layout/footer');
  }
  public function finish()
  {
    $data['title'] = 'Money Type Quiz';
    $this->load->view('web/layout/header', $data);
    $this->load->view('web/layout/navbar');
    $this->load->view('web/finish');
    $this->load->view('web/layout/footer');
  }
}
