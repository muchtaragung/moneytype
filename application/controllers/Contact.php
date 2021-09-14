<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
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
        $data['title'] = 'Contact';
        $data['contact'] = $this->web->get_contact()->row();
        $data['logo'] = $this->web->get_logo()->row();
        $data['sosmed'] = $this->web->get_sosmed()->result();
        $this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/navbar', $data);
        if ($this->uri->segment(1) == "id") {
            $this->load->view('web/contact/id', $data);
        } else {
            $this->load->view('web/contact/us', $data);
        }
        $this->load->view('web/layout/footer', $data);
    }
    public function email()
    {
        $email_penerima = $this->web->get_email()->row();
        $email = $this->input->post('email', true);
        $nama = $this->input->post('nama', true);
        $pesan = $this->input->post('message', true);
        $this->load->library('email'); //panggil library email codeigniter
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'mail',
            'smtp_host' => 'mail.vidiracoaching.com',
            'smtp_user' => 'demoinfo@vidiracoaching.com',  // Email gmail
            'smtp_pass'   => 'Demoinfo',  // Password gmail
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        $message = '
                    <html>
                        <head>
                            <title>User Contact Vidira Coahing</title>
                        </head>
                        <body>
                            <h2>Contact Vidira Coahing</h2>
                            <table>
                                <tr>
                                     <td width="150px">Name</td>
                                    <td>' . $nama . '</td>
                                </tr>
                                <tr>
                                    <td width="150px">Email</td>
                                    <td>' . $email . '</td>
                                </tr>
                        </table>
                        <hr>
                        <br>
                        <p>' . $pesan . '</p>
                </body>
          </html>
        ';
        $subjek = $this->input->post('subject', true);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']);
        $this->email->to($email_penerima->email);
        $this->email->subject($subjek); //subjek email
        $this->email->message($message);
        $email1 = $this->email->send();
        if (!$email1) {
            $this->session->set_flashdata('error', 'Gagal memproses, Silahkan ulangi');
            redirect('contact');
        } else {
            $this->session->set_flashdata('msg', 'Berhasil mengirim email');
            redirect('contact');
        }
    }
}