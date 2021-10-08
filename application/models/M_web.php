<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_web extends CI_Model
{
    public function get_komen_us()
    {
        $this->db->select('*');
        $this->db->from('komen_blog_us');
        $this->db->where('akses=1');
        return $this->db->count_all_results();
    }
    public function get_komen_id()
    {
        $this->db->select('*');
        $this->db->from('komen_blog_id');
        $this->db->where('akses=1');
        return $this->db->count_all_results();
    }
    public function update_logo($id, $data)
    {
        $this->db->where('id_logo', $id);
        $this->db->update('logo', $data);
        return true;
    }
    public function get_logo()
    {
        $query = $this->db->get('logo');
        return $query;
    }
    public function get_sosmed()
    {
        $this->db->order_by('nama_sosmed', 'DESC');
        $query = $this->db->get('sosial_media');
        return $query;
    }
    public function create_sosmed($data)
    {
        $this->db->insert('sosial_media', $data);
    }
    public function delete_sosmed($id)
    {
        $this->db->delete('sosial_media', array('id_sosmed' => $id));
    }
    public function update_sosmed($id, $data)
    {
        $this->db->where('id_sosmed', $id);
        $this->db->update('sosial_media', $data);
        return true;
    }
    public function get_contact()
    {
        $query = $this->db->get('contact');
        return $query;
    }
    public function get_galeri()
    {
        $query = $this->db->get('galeri');
        return $query;
    }
    public function get_galeri_web()
    {
        // $this->db->where('akses=1');
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get('galeri');
        return $query;
    }
    public function create_galeri($data)
    {
        $this->db->insert('galeri', $data);
    }
    public function delete_galeri($id)
    {
        $this->db->delete('galeri', array('id_galeri' => $id));
    }
    public function update_contact($id, $data)
    {
        $this->db->where('id_contact', $id);
        $this->db->update('contact', $data);
        return true;
    }
    public function akses_galeri($id, $data)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('galeri', $data);
        return true;
    }
    public function update_image_contact($id, $data)
    {
        $this->db->where('id_contact', $id);
        $this->db->update('contact', $data);
        return true;
    }
    public function get_about()
    {
        $query = $this->db->get('about');
        return $query;
    }
    public function update_about($id, $data)
    {
        $this->db->where('id_about', $id);
        $this->db->update('about', $data);
        return true;
    }
    public function get_home()
    {
        $query = $this->db->get('home');
        return $query;
    }
    public function update_home($id, $data)
    {
        $this->db->where('id_home', $id);
        $this->db->update('home', $data);
        return true;
    }
    public function get_email()
    {
        $query = $this->db->get('email_penerima');
        return $query;
    }
    public function update_email($id, $data)
    {
        $this->db->where('id_email', $id);
        $this->db->update('email_penerima', $data);
        return true;
    }
    public function update_email_web($id, $data)
    {
        $this->db->where('id_email', $id);
        $this->db->update('email_penerima', $data);
        return true;
    }
}
