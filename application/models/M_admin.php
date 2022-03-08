<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    public function list()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id', 'desc');
        $this->db->group_by('user.id');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        return $this->db->insert('user', $data);
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('user', $data);
    }
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
}

/* End of file M_admin.php */
