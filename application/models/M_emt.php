<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_emt extends CI_Model
{
    public function get_emt_us()
    {
        $query = $this->db->get('emt');
        return $query;
    }
    public function get_emt_id()
    {
        $query = $this->db->get('emt');
        return $query;
    }
    public function get_type_us()
    {
        $query = $this->db->get('type_emt');
        return $query;
    }
    public function get_type_id()
    {
        $query = $this->db->get('type_emt_id');
        return $query;
    }
    public function get_header_feature_emt_us()
    {
        $query = $this->db->get('header_feature_emt');
        return $query;
    }
    public function get_header_feature_emt_id()
    {
        $query = $this->db->get('header_feature_emt_id');
        return $query;
    }
    public function get_feature_us()
    {
        $query = $this->db->get('feature_emt');
        return $query;
    }
    public function get_feature_id()
    {
        $query = $this->db->get('feature_emt_id');
        return $query;
    }

    public function update_header_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_emt', $data);
        return true;
    }
    public function update_header_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_emt_id', $data);
        return true;
    }
    public function update_type_us($id, $data)
    {
        $this->db->where('id_type', $id);
        $this->db->update('type_emt', $data);
        return true;
    }
    public function update_type_id($id, $data)
    {
        $this->db->where('id_type', $id);
        $this->db->update('type_emt_id', $data);
        return true;
    }
    public function update_header_testimoni($id, $data)
    {
        $this->db->where('id_emt', $id);
        $this->db->update('emt', $data);
        return true;
    }
    public function update_header($id, $data)
    {
        $this->db->where('id_emt', $id);
        $this->db->update('emt', $data);
        return true;
    }
    public function update_bg($id, $data)
    {
        $this->db->where('id_emt', $id);
        $this->db->update('emt', $data);
        return true;
    }
    public function update_profile($id, $data)
    {
        $this->db->where('id_emt', $id);
        $this->db->update('emt', $data);
        return true;
    }
    public function update_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_emt', $data);
        return true;
    }
    public function update_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_emt_id', $data);
        return true;
    }
    public function get_testimoni()
    {
        $query = $this->db->get('testimoni');
        return $query;
    }

    public function create_type($data)
    {
        $this->db->insert('type_emt', $data);
    }
    public function create_type_id($data)
    {
        $this->db->insert('type_emt_id', $data);
    }

    public function create_feature_en($data)
    {
        $this->db->insert('feature_emt', $data);
    }
    public function create_feature_id($data)
    {
        $this->db->insert('feature_emt_id', $data);
    }
    public function delete_type($id)
    {
        $this->db->where('id_type', $id);
        $this->db->delete('type_emt');
    }
    public function delete_type_id($id)
    {
        $this->db->where('id_type', $id);
        $this->db->delete('type_emt_id');
    }
    public function delete_feature_en($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_emt');
    }
    public function delete_feature_id($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_emt_id');
    }
    public function get_by_id($id)
    {
        $this->db->from('type_emt');
        $this->db->where('id_type', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_id($id)
    {
        $this->db->from('type_emt_id');
        $this->db->where('id_type', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_en_by_id($id)
    {
        $this->db->from('feature_emt');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_id_by_id($id)
    {
        $this->db->from('feature_emt_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
}
