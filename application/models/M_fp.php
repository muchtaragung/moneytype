<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_fp extends CI_Model
{
    public function get_fp_us()
    {
        $query = $this->db->get('fp');
        return $query;
    }
    public function get_fp_id()
    {
        $query = $this->db->get('fp');
        return $query;
    }
    public function get_header_feature_us()
    {
        $query = $this->db->get('header_feature_fp');
        return $query;
    }
    public function get_header_feature_id()
    {
        $query = $this->db->get('header_feature_fp_id');
        return $query;
    }
    public function get_header_feature3_us()
    {
        $query = $this->db->get('header_feature3_fp');
        return $query;
    }
    public function get_header_feature3_id()
    {
        $query = $this->db->get('header_feature3_fp_id');
        return $query;
    }
    public function get_header_feature5_us()
    {
        $query = $this->db->get('header_feature5_fp');
        return $query;
    }
    public function get_header_feature5_id()
    {
        $query = $this->db->get('header_feature5_fp_id');
        return $query;
    }
    public function update_header($id, $data)
    {
        $this->db->where('id_fp', $id);
        $this->db->update('fp', $data);
        return true;
    }
    public function update_bg($id, $data)
    {
        $this->db->where('id_fp', $id);
        $this->db->update('fp', $data);
        return true;
    }
    public function update_header_feature_us($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_fp', $data);
        return true;
    }
    public function update_header_feature_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature_fp_id', $data);
        return true;
    }
    public function update_header_feature_us5($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature5_fp', $data);
        return true;
    }
    public function update_header_feature_id5($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature5_fp_id', $data);
        return true;
    }
    public function update_header_feature3_us($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature3_fp', $data);
        return true;
    }
    public function update_header_feature3_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('header_feature3_fp_id', $data);
        return true;
    }
    public function update_feature2_us($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature2_fp', $data);
        return true;
    }
    public function update_feature2_id($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature2_fp_id', $data);
        return true;
    }
    public function get_feature_us()
    {
        $query = $this->db->get('feature_fp');
        return $query;
    }
    public function get_feature2_us()
    {
        $query = $this->db->get('feature2_fp');
        return $query;
    }
    public function get_feature3_us()
    {
        $query = $this->db->get('feature3_fp');
        return $query;
    }
    public function get_feature4_us()
    {
        $query = $this->db->get('feature4_fp');
        return $query;
    }
    public function get_feature5_us()
    {
        $query = $this->db->get('feature5_fp');
        return $query;
    }
    public function get_feature_id()
    {
        $query = $this->db->get('feature_fp_id');
        return $query;
    }
    public function get_feature2_id()
    {
        $query = $this->db->get('feature2_fp_id');
        return $query;
    }
    public function get_feature3_id()
    {
        $query = $this->db->get('feature3_fp_id');
        return $query;
    }
    public function get_feature4_id()
    {
        $query = $this->db->get('feature4_fp_id');
        return $query;
    }
    public function get_feature5_id()
    {
        $query = $this->db->get('feature5_fp_id');
        return $query;
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

    public function update_profile($id, $data)
    {
        $this->db->where('id_emt', $id);
        $this->db->update('emt', $data);
        return true;
    }
    public function update_feature_en1($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_fp', $data);
        return true;
    }
    public function update_feature_id1($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature_fp_id', $data);
        return true;
    }
    public function update_feature_en3($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature3_fp', $data);
        return true;
    }
    public function update_feature_id3($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature3_fp_id', $data);
        return true;
    }
    public function update_feature_en4($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature4_fp', $data);
        return true;
    }
    public function update_feature_id4($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature4_fp_id', $data);
        return true;
    }
    public function update_feature_en5($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature5_fp', $data);
        return true;
    }
    public function update_feature_id5($id, $data)
    {
        $this->db->where('id_feature', $id);
        $this->db->update('feature5_fp_id', $data);
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
        $this->db->insert('feature_fp', $data);
    }
    public function create_feature_id($data)
    {
        $this->db->insert('feature_fp_id', $data);
    }
    public function create_feature_en3($data)
    {
        $this->db->insert('feature3_fp', $data);
    }
    public function create_feature_id3($data)
    {
        $this->db->insert('feature3_fp_id', $data);
    }
    public function create_feature_en4($data)
    {
        $this->db->insert('feature4_fp', $data);
    }
    public function create_feature_id4($data)
    {
        $this->db->insert('feature4_fp_id', $data);
    }
    public function create_feature_en5($data)
    {
        $this->db->insert('feature5_fp', $data);
    }
    public function create_feature_id5($data)
    {
        $this->db->insert('feature5_fp_id', $data);
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
    public function delete_feature_en1($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_fp');
    }
    public function delete_feature_id1($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature_fp_id');
    }
    public function delete_feature_en3($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature3_fp');
    }
    public function delete_feature_id3($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature3_fp_id');
    }
    public function delete_feature_en4($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature4_fp');
    }
    public function delete_feature_id4($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature4_fp_id');
    }
    public function delete_feature_en5($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature5_fp');
    }
    public function delete_feature_id5($id)
    {
        $this->db->where('id_feature', $id);
        $this->db->delete('feature5_fp_id');
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
        $this->db->from('feature_fp');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature_id_by_id($id)
    {
        $this->db->from('feature_fp_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature3_en_by_id($id)
    {
        $this->db->from('feature3_fp');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature3_id_by_id($id)
    {
        $this->db->from('feature3_fp_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature4_en_by_id($id)
    {
        $this->db->from('feature4_fp');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature4_id_by_id($id)
    {
        $this->db->from('feature4_fp_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature5_en_by_id($id)
    {
        $this->db->from('feature5_fp');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_feature5_id_by_id($id)
    {
        $this->db->from('feature5_fp_id');
        $this->db->where('id_feature', $id);
        $query = $this->db->get();

        return $query->row();
    }
}
