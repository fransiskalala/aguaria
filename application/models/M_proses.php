<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_proses extends CI_Model
{
    var $tproses = "proses";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_proses()
    {
        $this->db->from($this->tproses);
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
        $this->db->from('proses');
        $this->db->order_by('id_proses', 'asc');
        $this->db->group_by('proses.id_proses');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('proses', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_proses', $data['id_proses']);
        $this->db->update('proses', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_proses', $data['id_proses']);
        $this->db->delete('proses', $data);
    }
    public function detail($id_proses)
    {
        $this->db->select('*');
        $this->db->from('proses');
        $this->db->where('id_proses', $id_proses);
        return $this->db->get()->row();
    }
}

/* End of file M_proses.php */
