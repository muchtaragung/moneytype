<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_res extends CI_Model
{
    public function update_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori_blog', $data);
        return true;
    }
    public function update_status_id($id, $data)
    {
        $this->db->where('id_komen', $id);
        $this->db->update('komen_blog_id', $data);
        return true;
    }
    public function update_status_us($id, $data)
    {
        $this->db->where('id_komen', $id);
        $this->db->update('komen_blog_us', $data);
        return true;
    }

    public function update_resource($id, $data)
    {
        $this->db->where('id_blog', $id);
        $this->db->update('blog', $data);
        return true;
    }
    public function update_resource_id($id, $data)
    {
        $this->db->where('id_blog', $id);
        $this->db->update('blog_id', $data);
        return true;
    }
    public function update_header($id, $data)
    {
        $this->db->where('id_resource', $id);
        $this->db->update('resource', $data);
        return true;
    }

    public function get_resource_header()
    {
        $query = $this->db->get('resource');
        return $query;
    }
    public function get_kategori()
    {
        $this->db->order_by('nama_kategori', 'DESC');
        $query = $this->db->get('kategori_blog');
        return $query;
    }
    public function get_resource_us()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $query = $this->db->get('');
        return $query;
    }
    public function get_resource_us_web($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $this->db->limit($limit, $offset);
        $query = $this->db->get('');
        return $query;
    }
    public function get_count_all_us()
    {
        return $this->db->count_all('blog');
    }
    public function get_resource_us_pagination($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by('id_blog', 'DESC');
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }
    public function get_resource_us_detail($slug)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $this->db->where('blog.slug', $slug);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_us_archive($month)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $this->db->where('MONTH(blog.tanggal_post)', $month);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_us_limit()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_us_kategori($nama_kategori)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('kategori_blog.nama_kategori', 'DESC');
        $this->db->where('kategori_blog.nama_kategori', $nama_kategori);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_us_search($slug)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $this->db->like('blog.judul', $slug);
        $query = $this->db->get('');
        return $query;
    }
    public function archives()
    {
        $query = 'SELECT Month(tanggal_post), COUNT(tanggal_post) AS jml FROM blog GROUP BY Month(`tanggal_post`)';
        return $this->db->query($query);
    }

    public function get_resource_us_id($id)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->where('blog.id_blog', $id);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_id_id($id)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->where('blog_id.id_blog', $id);
        $query = $this->db->get();
        return $query;
    }
    public function create_kategori($data)
    {
        $this->db->insert('kategori_blog', $data);
    }
    public function create_resource($data)
    {
        $this->db->insert('blog', $data);
    }
    public function create_resource_id($data)
    {
        $this->db->insert('blog_id', $data);
    }
    public function get_by_id_kategori($id)
    {
        $this->db->from('kategori_blog');
        $this->db->where('id_kategori', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_by_id_resource_en($id)
    {
        $this->db->from('blog');
        $this->db->where('id_blog', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function delete_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori_blog');
    }
    public function delete_resource_en($id)
    {
        $this->db->where('id_blog', $id);
        $this->db->delete('blog');
    }
    public function list_komen_us($slug)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('komen_blog_us', 'komen_blog_us.id_blog = blog.id_blog');
        $this->db->order_by('komen_blog_us.tgl', 'DESC');
        $this->db->where('komen_blog_us.akses = 1');
        $this->db->where('blog.slug', $slug);
        $query = $this->db->get();
        return $query;
    }
    public function delete_resource_id($id)
    {
        $this->db->where('id_blog', $id);
        $this->db->delete('blog_id');
    }
    public function delete_komen_id($id)
    {
        $this->db->where('id_komen', $id);
        $this->db->delete('komen_blog_id');
    }
    public function delete_komen_us($id)
    {
        $this->db->where('id_komen', $id);
        $this->db->delete('komen_blog_us');
    }
    public function get_resource_id()
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_id_web($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_id_limit()
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_id_footer()
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $this->db->limit(2);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_en_footer()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->order_by('blog.tanggal_post', 'DESC');
        $this->db->limit(2);
        $query = $this->db->get();
        return $query;
    }
    public function archives_id()
    {
        $query = 'SELECT Month(tanggal_post), COUNT(tanggal_post) AS jml FROM blog_id GROUP BY Month(`tanggal_post`)';
        return $this->db->query($query);
    }
    public function get_resource_id_search($slug)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $this->db->like('blog_id.judul', $slug);
        $query = $this->db->get('');
        return $query;
    }
    public function get_resource_id_detail($slug)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $this->db->where('blog_id.slug', $slug);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_id_archive($month)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('blog_id.tanggal_post', 'DESC');
        $this->db->where('MONTH(blog_id.tanggal_post)', $month);
        $query = $this->db->get();
        return $query;
    }
    public function get_resource_id_kategori($nama_kategori)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->order_by('kategori_blog.nama_kategori', 'DESC');
        $this->db->where('kategori_blog.nama_kategori', $nama_kategori);
        $query = $this->db->get();
        return $query;
    }
    public function create_komen_id($data)
    {
        $this->db->insert('komen_blog_id', $data);
    }
    public function create_komen_us($data)
    {
        $this->db->insert('komen_blog_us', $data);
    }
    public function list_komen_id($slug)
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('komen_blog_id', 'komen_blog_id.id_blog = blog_id.id_blog');
        $this->db->order_by('komen_blog_id.tgl', 'DESC');
        $this->db->where('komen_blog_id.akses = 1');
        $this->db->where('blog_id.slug', $slug);
        $query = $this->db->get();
        return $query;
    }
    public function list_komen_id_admin()
    {
        $this->db->select('*');
        $this->db->from('blog_id');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog_id.id_kategori');
        $this->db->join('komen_blog_id', 'komen_blog_id.id_blog = blog_id.id_blog');
        $this->db->order_by('komen_blog_id.tgl', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function list_komen_us_admin()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'kategori_blog.id_kategori = blog.id_kategori');
        $this->db->join('komen_blog_us', 'komen_blog_us.id_blog = blog.id_blog');
        $this->db->order_by('komen_blog_us.tgl', 'DESC');
        $query = $this->db->get();
        return $query;
    }
}
