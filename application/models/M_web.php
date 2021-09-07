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
        $query = $this->db->get('sosial_media');
        return $query;
    }
    public function update_sosmed($id, $data)
    {
        $this->db->where('id_sosmed', $id);
        $this->db->update('sosial_media', $data);
        return true;
    }
}
