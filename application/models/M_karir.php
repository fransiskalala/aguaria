<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_karir extends CI_Model
{
    var $tkarir = "karir";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_karir()
    {
        $this->db->from($this->tkarir);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('karir');
        $this->db->order_by('id_karir', 'desc');
        $this->db->group_by('karir.id_karir');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        return $this->db->insert('karir', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_karir', $data['id_karir']);
        $this->db->update('karir', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_karir', $data['id_karir']);
        $this->db->delete('karir', $data);
    }
    public function detail($id_karir)
    {
        $this->db->select('*');
        $this->db->from('karir');
        $this->db->where('id_karir', $id_karir);
        return $this->db->get()->row();
    }
}

/* End of file M_karir.php */
