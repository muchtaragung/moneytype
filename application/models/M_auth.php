<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model

{
    public function cek_login_admin($email)
    {

        $hasil = $this->db->where('email', $email)->get('admin');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
    public function cek_password()
    {
        $hasil = $this->db->where('id', $this->session->userdata('id'))->get('admin');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
    public function update_password($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
        return $this->db->affected_rows();
    }
}
