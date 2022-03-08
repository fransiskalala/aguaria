<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_informasi extends CI_Model
{

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->where('id_informasi', 1);
        return $this->db->get()->row();
    }

    public function perbaharui($data)
    {
        $this->db->where('id_informasi', $data['id_informasi']);
        $this->db->update('informasi', $data);
    }
}

/* End of file M_informasi.php */
