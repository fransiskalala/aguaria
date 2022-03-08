<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_visimisi extends CI_Model
{

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('visi_misi');
        $this->db->where('id_visimisi', 1);
        return $this->db->get()->row();
    }

    public function perbaharui($data)
    {
        $this->db->where('id_visimisi', $data['id_visimisi']);
        $this->db->update('visi_misi', $data);
    }
}

/* End of file M_visimisi.php */
