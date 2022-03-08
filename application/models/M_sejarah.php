<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_sejarah extends CI_Model
{

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('sejarah');
        $this->db->where('id_sejarah', 1);
        return $this->db->get()->row();
    }

    public function perbaharui($data)
    {
        $this->db->where('id_sejarah', $data['id_sejarah']);
        $this->db->update('sejarah', $data);
    }
}

/* End of file M_sejarah.php */
