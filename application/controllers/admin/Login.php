<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth', 'auth');
        $this->load->model('m_web', 'web');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/login', $data);
    }
    public function forget()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/forget_password', $data);
    }
    public function password_baru()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $this->load->view('admin/ubah_password', $data);
    }
    public function auth()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $pass = htmlspecialchars($this->input->post('password'));
        $cek_login = $this->auth->cek_login_admin($email);
        if ($cek_login == FALSE) {
            $this->session->set_flashdata('error', 'Email yang Anda masukan tidak terdaftar.');
            redirect('admin/login');
        } else {
            if (password_verify($pass, $cek_login->password)) {
                $this->session->set_userdata('id', $cek_login->id);
                $this->session->set_userdata('email', $cek_login->email);
                $this->session->set_userdata('login', 'Admin');
                $this->session->set_userdata('name', 'Admin');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username Atau Password Salah');
                redirect('admin/login');
            }
        }
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
    public function aktifasi()
    {
        $this->load->view("admin/aktifasi");
    }
    public function lupa_password()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->forget();
        } else {
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->auth->getUserInfoByEmail($clean);

            if (!$userInfo) {
                $this->session->set_flashdata('sukses', 'email address salah, silakan coba lagi.');
                redirect(site_url('login'), 'refresh');
            }

            //build token   

            $token = $this->auth->insertToken($userInfo->id);
            $qstring = $this->base64url_encode($token);
            $url = site_url() . 'admin/login/password_baru/' . $qstring;
            $link = '<a href="' . $url . '">' . $url . '</a>';

            //build token
            $email_penerima = $this->web->get_email()->row();
            $email = $this->input->post('email', true);
            $this->load->library('email'); //panggil library email codeigniter
            $config = [
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'protocol'  => 'mail',
                'smtp_host' => 'mail.vidiracoaching.com',
                'smtp_user' => $email_penerima->email_web,
                'smtp_pass'   => $email_penerima->password,
                'smtp_port'   => 465,
                'crlf'    => "\r\n",
                'newline' => "\r\n"
            ];

            $message =  "
            <html>
            <head>
            <title>Reset Password</title>
            </head>
            <body>
            <h2>Reset password akun anda</h2>
            <p>Your Account:</p>
            <p>Email: " . $email . "</p>
            <p>klik link untuk reset password akun anda.</p>
            <h4>" . $link . "</h4>
            </body>
            </html>
            ";

            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($config['smtp_user']);
            $this->email->to($email);
            $this->email->subject('Reset Password'); //subjek email
            $this->email->message($message);
            $email1 = $this->email->send();
            if (!$email1) {
                $this->session->set_flashdata('error', 'Gagal memproses, Silahkan ulangi');
                redirect('admin/login/forget');
            } else {
                $this->session->set_flashdata('msg', 'Silahkan cek email anda');
                redirect('admin/login/forget');
            }
        }
    }
    public function reset_password()
    {
        $token = $this->input->post('token', true);
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password tidak boleh kosong!'));
        $this->form_validation->set_rules('passconf', 'Password', 'required|matches[password]', array(
            'required' => 'Password tidak boleh kosong!',
            'matches'     => 'Password tidak sama'
        ));
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Password tidak sama');
            $link = "admin/login/password_baru/" . $token;
            redirect(str_replace(' ', '', $link));
        } else {
            $token1 = $this->base64url_decode($token);
            $cleanToken = $this->security->xss_clean($token1);
            $user_info = $this->auth->isTokenValid($cleanToken);

            if (!$user_info) {
                $this->session->set_flashdata('error', 'Token tidak valid atau kadaluarsa');
                $link = "admin/login/password_baru/" . $token;
                redirect(str_replace(' ', '', $link));
            } else {
                $post = $this->input->post(NULL, TRUE);
                $cleanPost = $this->security->xss_clean($post);
                $hashed = password_hash($cleanPost['password'], PASSWORD_DEFAULT);
                $cleanPost['password'] = $hashed;
                $cleanPost['email'] = $user_info->email;
                $cleanPost['id'] = $user_info->id;
                unset($cleanPost['passconf']);
                if ($this->auth->getUserInfoByEmail($cleanPost['email']) != null) {
                    if (!$this->auth->updatePassword($cleanPost)) {
                        $this->session->set_flashdata('error', 'Update password gagal.');
                        $link = "admin/login/password_baru/" . $token;
                        redirect(str_replace(' ', '', $link));
                    } else {
                        $this->session->set_flashdata('msg', 'Password anda sudah diperbaharui. Silakan login.');
                        redirect('admin/login');
                    }
                } else {
                    if (!$this->auth->updatePassword($cleanPost)) {
                        $this->session->set_flashdata('error', 'Update password gagal.');
                        $link = "admin/login/password_baru/" . $token;
                        redirect(str_replace(' ', '', $link));
                    } else {
                        $this->session->set_flashdata('msg', 'Password anda sudah diperbaharui. Silakan login.');
                        redirect('admin/login');
                    }
                }
            }
        }
    }
    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}
