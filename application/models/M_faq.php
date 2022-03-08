<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_faq extends CI_Model
{
    var $tfaq = "faq";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_faq()
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
        $this->db->from('faq');
        $this->db->order_by('id_faq', 'desc');
        $this->db->group_by('faq.id_faq');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        return $this->db->insert('faq', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_faq', $data['id_faq']);
        $this->db->update('faq', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_faq', $data['id_faq']);
        $this->db->delete('faq', $data);
    }
    
    public function detail($id_faq)
    {
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('id_faq', $id_faq);
        return $this->db->get()->row();
    }
}

/* End of file M_proses.php */
