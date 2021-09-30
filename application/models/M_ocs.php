<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_ocs extends CI_Model
{
    public function get_ocs_us()
    {
        $query = $this->db->get('ocs');
        return $query;
    }
    public function get_ocs_id()
    {
        $query = $this->db->get('ocs');
        return $query;
    }
    public function get_type_us()
    {
        $query = $this->db->get('type_ocs');
        return $query;
    }
    public function get_type_id()
    {
        $query = $this->db->get('type_ocs_id');
        return $query;
    }
    public function get_header_feature_ocs_us()
    {
        $query = $this->db->get('header_feature_ocs');
        return $query;
    }
    public function get_header_feature_ocs_id()
    {
        $query = $this->db->get('header_feature_ocs_id');
        return $query;
    }
    public function get_feature_us()
    {
        $query = $this->db->get('feature_ocs');
        return $query;
    }
    public function get_feature_id()
    {
        $query = $this->db->get('feature_ocs_id');
        return $query;
    }

    public function update_header_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_ocs', $data);
        return true;
    }
    public function update_header_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_ocs_id', $data);
        return true;
    }
    public function update_type_us($id, $data)
    {
        $this->db->where('id_type', $id);
        $this->db->update('type_ocs', $data);
        return true;
    }
    public function update_type_id($id, $data)
    {
        $this->db->where('id_type', $id);
        $this->db->update('type_ocs_id', $data);
        return true;
    }
    public function update_header_testimoni($id, $data)
    {
        $this->db->where('id_ocs', $id);
        $this->db->update('ocs', $data);
        return true;
    }
    public function update_header($id, $data)
    {
        $this->db->where('id_ocs', $id);
        $this->db->update('ocs', $data);
        return true;
    }
    public function update_bg($id, $data)
    {
        $this->db->where('id_ocs', $id);
        $this->db->update('ocs', $data);
        return true;
    }
    public function update_profile($id, $data)
    {
        $this->db->where('id_ocs', $id);
        $this->db->update('ocs', $data);
        return true;
    }
    public function update_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_ocs', $data);
        return true;
    }
    public function update_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_ocs_id', $data);
        return true;
    }

    public function create_type($data)
    {
        $this->db->insert('type_ocs', $data);
    }
    public function create_type_id($data)
    {
        $this->db->insert('type_ocs_id', $data);
    }

    public function create_feature_en($data)
    {
        $this->db->insert('feature_ocs', $data);
    }
    public function create_feature_id($data)
    {
        $this->db->insert('feature_ocs_id', $data);
    }
    public function delete_type($id)
    {
        $this->db->where('id_type', $id);
        $this->db->delete('type_ocs');
    }
    public function delete_type_id($id)
    {
        $this->db->where('id_type', $id);
        $this->db->delete('type_ocs_id');
    }
    public function delete_feature_en($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_ocs');
    }
    public function delete_feature_id($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_ocs_id');
    }
    public function get_by_id($id)
    {
        $this->db->from('type_ocs');
        $this->db->where('id_type', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_id($id)
    {
        $this->db->from('type_ocs_id');
        $this->db->where('id_type', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_en_by_id($id)
    {
        $this->db->from('feature_ocs');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_feature_id_by_id($id)
    {
        $this->db->from('feature_ocs_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
}
