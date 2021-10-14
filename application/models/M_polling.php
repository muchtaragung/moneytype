<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_polling extends CI_Model
{
    public $table = "user_polling";
    var $column_order = array('id_user', 'nama', 'email', 'phone');
    var $column_search = array('id_user', 'nama', 'email', 'phone');
    var $order = array('users.id_user' => 'DESC');
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->search = '';
    }
    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {
                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('lengt') != -1)
            $this->db->limit(10, $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $query = $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    public function tambah_user_polling($data)
    {
        $this->db->insert('user_polling', $data);
    }
    public function hapus_users($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete($this->table);
    }
    public function get_user($id)
    {
        $this->db->select('*');
        $this->db->from('user_polling');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query;
    }
    public function get_type($id)
    {
        $this->db->select('*');
        $this->db->from('type');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query;
    }
    public function get_kata($id)
    {
        $this->db->select('*');
        $this->db->from('polling');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_users($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('users', $data);
        return true;
    }
    public function get_template()
    {
        $query = $this->db->get('template_email');
        return $query;
    }
    public function update_template($id, $data)
    {
        $this->db->where('id_email', $id);
        $this->db->update('template_email', $data);
        return true;
    }
}
