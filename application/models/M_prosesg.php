<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_prosesg extends CI_Model
{
    var $tprosesg = "prosesg";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_prosesg()
    {
        $this->db->from($this->tprosesg);
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
        $this->db->from('proses_g');
        $this->db->order_by('id_prosesg', 'asc');
        $this->db->group_by('proses_g.id_prosesg');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('proses_g', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_prosesg', $data['id_prosesg']);
        $this->db->update('proses_g', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_prosesg', $data['id_prosesg']);
        $this->db->delete('proses_g', $data);
    }
    public function detail($id_prosesg)
    {
        $this->db->select('*');
        $this->db->from('proses_g');
        $this->db->where('id_prosesg', $id_prosesg);
        return $this->db->get()->row();
    }
}

/* End of file M_prosesg.php */
