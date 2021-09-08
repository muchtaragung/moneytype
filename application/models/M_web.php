<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_web extends CI_Model
{
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
    public function update_contact($id, $data)
    {
        $this->db->where('id_contact', $id);
        $this->db->update('contact', $data);
        return true;
    }
}
