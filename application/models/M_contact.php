<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_contact extends CI_Model
{
    public function update_faq_en($id, $data)
    {
        $this->db->where('id_faq', $id);
        $this->db->update('faq', $data);
        return true;
    }
    public function update_faq_id($id, $data)
    {
        $this->db->where('id_faq', $id);
        $this->db->update('faq_id', $data);
        return true;
    }
    public function get_faq_en()
    {
        $query = $this->db->get('faq');
        return $query;
    }
    public function get_faq_id()
    {
        $query = $this->db->get('faq_id');
        return $query;
    }
    public function get_subs()
    {
        $query = $this->db->get('subs');
        return $query;
    }
    public function create_subs($data)
    {
        $this->db->insert('subs', $data);
    }
    public function create_faq_en($data)
    {
        $this->db->insert('faq', $data);
    }
    public function create_faq_id($data)
    {
        $this->db->insert('faq_id', $data);
    }
    public function delete_faq_en($id)
    {
        $this->db->where('id_faq', $id);
        $this->db->delete('faq');
    }
    public function delete_faq_id($id)
    {
        $this->db->where('id_faq', $id);
        $this->db->delete('faq_id');
    }

    public function get_faq_en_by_id($id)
    {
        $this->db->from('faq');
        $this->db->where('id_faq', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_faq_id_by_id($id)
    {
        $this->db->from('faq_id');
        $this->db->where('id_faq', $id);
        $query = $this->db->get();

        return $query->row();
    }
}
