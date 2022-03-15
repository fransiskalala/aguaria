<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_tentang extends CI_Model
{
    var $ttentang = "tentang";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_proses()
    {
        $this->db->from($this->tentang);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // public function lists()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tentang');
    //     $this->db->order_by('id_tentang', 'desc');
    //     $this->db->group_by('tentang.id_tentang');
    //     return $this->db->get()->result();
    // }

    // public function add($data)
    // {
    //     $this->db->insert('tentang', $data);
    // }

    // public function edit($data)
    // {
    //     $this->db->where('id_tentang', $data['id_tentang']);
    //     $this->db->update('tentang', $data);
    // }

    // public function hapus($data)
    // {
    //     $this->db->where('id_tentang', $data['id_tentang']);
    //     $this->db->delete('tentang', $data);
    // }
    // public function detail($id_tentang)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tentang');
    //     $this->db->where('id_tentang', $id_tentang);
    //     return $this->db->get()->row();
    // }

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('tentang');
        $this->db->where('id_tentang', 1);
        return $this->db->get()->row();
    }

    public function perbaharui($data)
    {
        $this->db->where('id_tentang', $data['id_tentang']);
        $this->db->update('tentang', $data);
    }
}

/* End of file M_tentang.php */
