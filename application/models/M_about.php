<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_about extends CI_Model
{
    public function update_testimoni($id, $data)
    {
        $this->db->where('id_testimoni', $id);
        $this->db->update('testimoni', $data);
        return true;
    }
    public function update_header_testimoni($id, $data)
    {
        $this->db->where('id_about', $id);
        $this->db->update('about', $data);
        return true;
    }
    public function update_header($id, $data)
    {
        $this->db->where('id_about', $id);
        $this->db->update('about', $data);
        return true;
    }
    public function update_profile($id, $data)
    {
        $this->db->where('id_about', $id);
        $this->db->update('about', $data);
        return true;
    }
    public function update_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_about_en', $data);
        return true;
    }
    public function update_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_about_id', $data);
        return true;
    }
    public function get_testimoni()
    {
        $query = $this->db->get('testimoni');
        return $query;
    }
    public function get_feature_en()
    {
        $query = $this->db->get('feature_about_en');
        return $query;
    }
    public function get_feature_id()
    {
        $query = $this->db->get('feature_about_id');
        return $query;
    }
    public function create_testimoni($data)
    {
        $this->db->insert('testimoni', $data);
    }
    public function create_feature_en($data)
    {
        $this->db->insert('feature_about_en', $data);
    }
    public function create_feature_id($data)
    {
        $this->db->insert('feature_about_id', $data);
    }
    public function delete_testimoni($id)
    {
        $this->db->where('id_testimoni', $id);
        $this->db->delete('testimoni');
    }
    public function delete_feature_en($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_about_en');
    }
    public function delete_feature_id($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_about_id');
    }
    public function get_by_id($id)
    {
        $this->db->from('testimoni');
        $this->db->where('id_testimoni', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_en_by_id($id)
    {
        $this->db->from('feature_about_en');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_id_by_id($id)
    {
        $this->db->from('feature_about_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
}
