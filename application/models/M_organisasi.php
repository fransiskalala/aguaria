<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_organisasi extends CI_Model
{

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('organisasi');
        $this->db->where('id_organisasi', 1);
        return $this->db->get()->row();
    }

    public function perbaharui($data)
    {
        $this->db->where('id_organisasi', $data['id_organisasi']);
        $this->db->update('organisasi', $data);
    }
}

/* End of file M_organisasi.php */
