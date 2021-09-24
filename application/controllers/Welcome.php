<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->model('M_user', 'user');
		$this->load->model('M_web', 'web');
		$this->load->model('M_res', 'res');
		$this->load->helper('security');
		$this->load->library('form_validation');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Contact';
		$data['contact'] = $this->web->get_contact()->row();
		$data['logo'] = $this->web->get_logo()->row();
		$data['sosmed'] = $this->web->get_sosmed()->result();
		$data['contact'] = $this->web->get_contact()->row();
		$this->load->view('web/layout/header', $data);
		$this->load->view('web/layout/navbar', $data);
		$this->load->view('web/resource');
		$this->load->view('web/layout/footer', $data);
	}
	public function detail_resource()
	{
		$data['title'] = 'Contact';
		$data['resource'] = $this->res->get_resource_us_id(1)->row();
		$data['contact'] = $this->web->get_contact()->row();
		$data['logo'] = $this->web->get_logo()->row();
		$data['sosmed'] = $this->web->get_sosmed()->result();
		$data['contact'] = $this->web->get_contact()->row();
		$this->load->view('web/layout/header', $data);
		$this->load->view('web/layout/navbar', $data);
		$this->load->view('web/detail_resource', $data);
		$this->load->view('web/layout/footer', $data);
	}
}
