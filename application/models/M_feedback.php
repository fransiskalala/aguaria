<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_feedback extends CI_Model
{

    public function list()
    {
        $this->db->select('*');
        $this->db->from('feedback');
        $this->db->order_by('id_feedback', 'asc');
        $this->db->group_by('feedback.id_feedback');
        return $this->db->get()->result();
    }

    public function hapus($data)
    {
        $this->db->where('id_feedback', $data['id_feedback']);
        $this->db->delete('feedback', $data);
    }

    function post($data)
    {
        $this->db->insert("feedback", $data);
    }

    function add($nama, $email, $telepon, $subject, $pesan)
    {
        $hasil = $this->db->query("INSERT INTO feedback 
                                (nama, email, telepon, subject, pesan, date) 
                                VALUES 
                                ('$nama','$email', '$telepon', '$subject','$pesan', NOW())");
        return $hasil;
    }
}

/* End of file M_feedback.php */
