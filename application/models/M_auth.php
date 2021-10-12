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
    public function updatePassword($cleanPost)
    {
        $this->db->where('email', $cleanPost['email']);
        $this->db->update('admin', array('password' => $cleanPost['password']));
        return true;
    }
    public function getUserInfo($id)
    {
        $q = $this->db->get_where('admin', array('id' => $id), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        } else {
            error_log('no user found getUserInfo(' . $id . ')');
            return false;
        }
    }

    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('admin', array('email' => $email), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        }
    }

    public function insertToken($email, $id)
    {
        // $token = substr(sha1(rand()), 0, 30;
        $date = date('Y-m-d');

        $string = array(
            'token' => $email,
            'id_admin' => $id,
            'created' => $date
        );
        $query = $this->db->insert_string('tokens', $string);
        $this->db->query($query);
        return $email . $id;
    }

    public function isTokenValid($token)
    {


        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $token,
            // 'tokens.id_admin' => $uid
        ), 1);

        if ($this->db->affected_rows() > 0) {
            $row = $q->row();

            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if ($createdTS != $todayTS) {
                return false;
            }

            $user_info = $this->getUserInfo($row->id);
            return $user_info;
        } else {
            return false;
        }
    }
}
