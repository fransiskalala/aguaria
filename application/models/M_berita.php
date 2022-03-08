<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    var $tberita = "berita";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_berita()
    {
        $this->db->from($this->tberita);
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
        $this->db->from('berita');
        $this->db->order_by('id_berita', 'desc');
        $this->db->group_by('berita.id_berita');
        return $this->db->get()->result();
    }


    public function add($data)
    {
        $this->db->insert('berita', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('berita', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->delete('berita', $data);
    }
    public function detail($id_berita)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get()->row();
    }
}

/* End of file M_berita.php */
