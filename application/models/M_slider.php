<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_slider extends CI_Model
{
    var $tslider = "slider";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_slider()
    {
        $this->db->from($this->tslider);
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
        $this->db->from('slider');
        $this->db->order_by('id_slider', 'desc');
        $this->db->group_by('slider.id_slider');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('slider', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_slider', $data['id_slider']);
        $this->db->update('slider', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_slider', $data['id_slider']);
        $this->db->delete('slider', $data);
    }
    public function detail($id_slider)
    {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('id_slider', $id_slider);
        return $this->db->get()->row();
    }
}

/* End of file M_slider.php */
