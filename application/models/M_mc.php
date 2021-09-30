<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_mc extends CI_Model
{
    public function get_mc_us()
    {
        $query = $this->db->get('mc');
        return $query;
    }
    public function get_header_feature3_us()
    {
        $query = $this->db->get('header_feature3_mc');
        return $query;
    }
    public function get_header_feature3_id()
    {
        $query = $this->db->get('header_feature3_mc_id');
        return $query;
    }
    public function get_mc_id()
    {
        $query = $this->db->get('mc');
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
        $query = $this->db->get('header_feature2_mc');
        return $query;
    }
    public function get_header_feature_ocs_id()
    {
        $query = $this->db->get('header_feature2_mc_id');
        return $query;
    }
    public function get_feature_us()
    {
        $query = $this->db->get('feature_mc');
        return $query;
    }
    public function get_feature2_us()
    {
        $query = $this->db->get('feature2_mc');
        return $query;
    }
    public function get_feature3_us()
    {
        $query = $this->db->get('feature3_mc');
        return $query;
    }
    public function get_feature3_id()
    {
        $query = $this->db->get('feature3_mc_id');
        return $query;
    }
    public function get_feature_id()
    {
        $query = $this->db->get('feature_mc_id');
        return $query;
    }
    public function get_feature2_id()
    {
        $query = $this->db->get('feature2_mc_id');
        return $query;
    }
    public function update_header_feature_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature2_mc', $data);
        return true;
    }
    public function update_header_feature3_en($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature3_mc', $data);
        return true;
    }
    public function update_header_feature3_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature3_mc_id', $data);
        return true;
    }
    public function update_header_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature2_mc_id', $data);
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
        $this->db->where('id_mc', $id);
        $this->db->update('mc', $data);
        return true;
    }
    public function update_bg($id, $data)
    {
        $this->db->where('id_mc', $id);
        $this->db->update('mc', $data);
        return true;
    }
    public function update_profile($id, $data)
    {
        $this->db->where('id_ocs', $id);
        $this->db->update('ocs', $data);
        return true;
    }
    public function update_feature_en1($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_mc', $data);
        return true;
    }
    public function update_feature_en2($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature2_mc', $data);
        return true;
    }
    public function update_feature_en3($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature3_mc', $data);
        return true;
    }
    public function update_feature_id1($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_mc_id', $data);
        return true;
    }
    public function update_feature_id2($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature2_mc_id', $data);
        return true;
    }
    public function update_feature_id3($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature3_mc_id', $data);
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
        $this->db->insert('feature_mc', $data);
    }
    public function create_feature_en2($data)
    {
        $this->db->insert('feature2_mc', $data);
    }
    public function create_feature_en3($data)
    {
        $this->db->insert('feature3_mc', $data);
    }
    public function create_feature_id($data)
    {
        $this->db->insert('feature_mc_id', $data);
    }
    public function create_feature_id2($data)
    {
        $this->db->insert('feature2_mc_id', $data);
    }
    public function create_feature_id3($data)
    {
        $this->db->insert('feature3_mc_id', $data);
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
    public function delete_feature_en1($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_mc');
    }
    public function delete_feature_en2($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature2_mc');
    }
    public function delete_feature_en3($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature3_mc');
    }
    public function delete_feature_id1($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_mc_id');
    }
    public function delete_feature_id2($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature2_mc_id');
    }
    public function delete_feature_id3($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature3_mc_id');
    }
    public function get_by_id($id)
    {
        $this->db->from('feature_mc');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_id($id)
    {
        $this->db->from('feature_mc_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_en_by_id($id)
    {
        $this->db->from('feature_mc');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_feature_en_by_id2($id)
    {
        $this->db->from('feature2_mc');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_feature_en_by_id3($id)
    {
        $this->db->from('feature3_mc');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_feature_id_by_id3($id)
    {
        $this->db->from('feature3_mc_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_feature_id_by_id2($id)
    {
        $this->db->from('feature2_mc_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_feature_id_by_id($id)
    {
        $this->db->from('feature_mc_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();
        return $query->row();
    }
}
