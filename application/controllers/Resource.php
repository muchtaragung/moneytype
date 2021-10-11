<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resource extends CI_Controller
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
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        if ($this->uri->segment(1) == 'id') {
            $data['title'] = 'Resource';
            // $data['resource_us'] = $this->res->get_resource_us()->result();
            $data['recent'] = $this->res->get_resource_id_limit()->result();
            $data['archives'] = $this->res->archives_id()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            //konfigurasi pagination
            $config['base_url'] = site_url('resource'); //site url
            $config['total_rows'] = $this->db->count_all('blog'); //total row
            $config['per_page'] = 10;  //show record per halaman
            $config["uri_segment"] = 2;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);

            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center mb-5 text-warning"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

            //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
            // $data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);
            $data['resource_id'] = $this->res->get_resource_id_web($config["per_page"], $data['page'])->result();
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'Resource';
            // $data['resource_us'] = $this->res->get_resource_us()->result();
            $data['recent'] = $this->res->get_resource_us_limit()->result();
            $data['archives'] = $this->res->archives()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            //konfigurasi pagination
            $config['base_url'] = site_url('resource'); //site url
            $config['total_rows'] = $this->db->count_all('blog'); //total row
            $config['per_page'] = 10;  //show record per halaman
            $config["uri_segment"] = 2;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);

            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center mb-5 text-warning"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

            //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
            // $data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);
            $data['resource_us'] = $this->res->get_resource_us_web($config["per_page"], $data['page'])->result();
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function detail_resource($slug)
    {
        if ($this->uri->segment(1) == 'id') {
            $data['title'] = 'Resource';
            $data['resource_id_detail'] = $this->res->get_resource_id_detail($slug)->row();
            $data['komen'] = $this->res->list_komen_id($slug)->result();
            $data['recent'] = $this->res->get_resource_id_limit()->result();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['archives'] = $this->res->archives_id()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/detail_id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'Resource';
            $data['resource_us_detail'] = $this->res->get_resource_us_detail($slug)->row();
            $data['komen'] = $this->res->list_komen_us($slug)->result();
            $data['recent'] = $this->res->get_resource_us_limit()->result();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['archives'] = $this->res->archives()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/detail_us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function archive($month)
    {
        if ($this->uri->segment(1) == 'id') {
            $data['title'] = 'Resource';
            $data['resource_id_archive'] = $this->res->get_resource_id_archive($month)->result();
            $data['recent'] = $this->res->get_resource_id_limit()->result();
            $data['archives'] = $this->res->archives_id()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/archive_id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'Resource';
            $data['resource_us_archive'] = $this->res->get_resource_us_archive($month)->result();
            $data['recent'] = $this->res->get_resource_us_limit()->result();
            $data['archives'] = $this->res->archives()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/archive_us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function category($nama_kategori)
    {
        if ($this->uri->segment(1) == 'id') {
            $data['title'] = 'Resource';
            $data['resource_id_kategori'] = $this->res->get_resource_id_kategori($nama_kategori)->result();
            $data['recent'] = $this->res->get_resource_id_limit()->result();
            $data['archives'] = $this->res->archives_id()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/category_id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $data['title'] = 'Resource';
            $data['resource_us_kategori'] = $this->res->get_resource_us_kategori($nama_kategori)->result();
            $data['recent'] = $this->res->get_resource_us_limit()->result();
            $data['archives'] = $this->res->archives()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/category_us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function search()
    {
        if ($this->uri->segment(1) == 'id') {
            $slug = $this->input->post('search', true);
            $data['title'] = 'Resource';
            $data['resource_id_search'] = $this->res->get_resource_id_search($slug)->result();
            $data['recent'] = $this->res->get_resource_id_limit()->result();
            $data['archives'] = $this->res->archives_id()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/search_id', $data);
            $this->load->view('web/layout/footer', $data);
        } else {
            $slug = $this->input->post('search', true);
            $data['title'] = 'Resource';
            $data['resource_us_search'] = $this->res->get_resource_us_search($slug)->result();
            $data['recent'] = $this->res->get_resource_us_limit()->result();
            $data['archives'] = $this->res->archives()->result_array();
            $data['resource'] = $this->res->get_resource_header()->row();
            $data['kategori'] = $this->res->get_kategori()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['logo'] = $this->web->get_logo()->row();
            $data['sosmed'] = $this->web->get_sosmed()->result();
            $data['contact'] = $this->web->get_contact()->row();
            $data['recent_footer'] = $this->res->get_resource_en_footer()->result();
            $data['galeri'] = $this->web->get_galeri_web()->result();
            $data['status'] = $this->web->get_galeri_web()->row();
            $this->load->view('web/layout/header', $data);
            $this->load->view('web/layout/navbar', $data);
            $this->load->view('web/resource/search_us', $data);
            $this->load->view('web/layout/footer', $data);
        }
    }
    public function add_komen()
    {
        if ($this->uri->segment(1) == 'id') {
            $slug = $this->input->post('slug', true);
            $data = array(
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => $this->input->post('email', true),
                'website' => htmlspecialchars($this->input->post('web', true)),
                'komen' => $this->input->post('komen', true),
                'tgl' => date('Y-m-d H:i:s'),
                'id_blog' => $this->input->post('id_blog', true),
                'akses' => 0,
            );
            $this->res->create_komen_id($data);
            $this->session->set_flashdata('msg', 'Komentar berhasil di tambah, mohon menunggu untuk disetujui');
            redirect('id/resource/artikel/' . $slug . '');
        } else {
            $slug = $this->input->post('slug', true);
            $data = array(
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => $this->input->post('email', true),
                'website' => htmlspecialchars($this->input->post('web', true)),
                'komen' => $this->input->post('komen', true),
                'tgl' => date('Y-m-d H:i:s'),
                'id_blog' => $this->input->post('id_blog', true),
                'akses' => 0,
            );
            $this->res->create_komen_us($data);
            $this->session->set_flashdata('msg', 'Comment added successfully, please wait for approval');
            redirect('resource/artikel/' . $slug . '');
        }
    }
}
