<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function akses_gambar($id, $data)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('feature2_home', $data);
        return true;
    }
    public function akses_gambar_id($id, $data)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('feature2_home_id', $data);
        return true;
    }
    public function update_header_testimoni($id, $data)
    {
        $this->db->where('id_about', $id);
        $this->db->update('about', $data);
        return true;
    }
    public function update_galeri($id, $data)
    {
        $this->db->where('id_galeri', $id);
        $this->db->update('galeri', $data);
        return true;
    }
    public function update_header($id, $data)
    {
        $this->db->where('id_home', $id);
        $this->db->update('home', $data);
        return true;
    }
    public function update_profile($id, $data)
    {
        $this->db->where('id_about', $id);
        $this->db->update('about', $data);
        return true;
    }
    public function update_header_feature2_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_home', $data);
        return true;
    }
    public function update_header_feature2_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_home_id', $data);
        return true;
    }
    public function update_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_home', $data);
        return true;
    }
    public function update_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_home_id', $data);
        return true;
    }
    public function update_feature4($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature4_home', $data);
        return true;
    }
    public function update_feature4_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature4_home_id', $data);
        return true;
    }
    public function update_feature2($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature2_home', $data);
        return true;
    }
    public function update_feature2_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature2_home_id', $data);
        return true;
    }
    public function update_feature3($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature3_home', $data);
        return true;
    }
    public function update_feature3_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature3_home_id', $data);
        return true;
    }
    public function update_feature5($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature5_home', $data);
        return true;
    }
    public function update_feature5_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature5_home_id', $data);
        return true;
    }
    public function get_feature4_home()
    {
        $query = $this->db->get('feature4_home');
        return $query;
    }
    public function get_feature4_home_id()
    {
        $query = $this->db->get('feature4_home_id');
        return $query;
    }
    public function get_feature5_home()
    {
        $query = $this->db->get('feature5_home');
        return $query;
    }
    public function get_feature5_home_id()
    {
        $query = $this->db->get('feature5_home_id');
        return $query;
    }
    public function get_feature3_home()
    {
        $query = $this->db->get('feature3_home');
        return $query;
    }
    public function get_feature3_home_id()
    {
        $query = $this->db->get('feature3_home_id');
        return $query;
    }
    public function get_feature2_home()
    {
        $query = $this->db->get('feature2_home');
        return $query;
    }
    public function get_feature2_home_id()
    {
        $query = $this->db->get('feature2_home_id');
        return $query;
    }
    public function get_feature_en()
    {
        $query = $this->db->get('feature_home');
        return $query;
    }
    public function get_feature_id()
    {
        $query = $this->db->get('feature_home_id');
        return $query;
    }
    public function get_header_feature2_en()
    {
        $query = $this->db->get('header_feature_home');
        return $query;
    }
    public function get_header_feature2_id()
    {
        $query = $this->db->get('header_feature_home_id');
        return $query;
    }
    public function create_home($data)
    {
        $this->db->insert('home', $data);
    }
    public function create_feature4($data)
    {
        $this->db->insert('feature4_home', $data);
    }
    public function create_feature4_id($data)
    {
        $this->db->insert('feature4_home_id', $data);
    }
    public function create_feature_en($data)
    {
        $this->db->insert('feature_about_en', $data);
    }
    public function create_feature_id($data)
    {
        $this->db->insert('feature_about_id', $data);
    }
    public function delete_header($id)
    {
        $this->db->where('id_home', $id);
        $this->db->delete('home');
    }
    public function delete_feature4($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature4_home');
    }
    public function delete_feature4_id($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature4_home_id');
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
    public function get_by_id_galeri($id)
    {
        $this->db->from('galeri');
        $this->db->where('id_galeri', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_header($id)
    {
        $this->db->from('home');
        $this->db->where('id_home', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_feature4($id)
    {
        $this->db->from('feature4_home');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_feature4_id($id)
    {
        $this->db->from('feature4_home_id');
        $this->db->where('id_feature', $id);
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
