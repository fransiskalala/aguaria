<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_galeri extends CI_Model
{
    var $tgaleri = "galeri";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_galeri()
    {
        $this->db->from($this->tgaleri);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function lists()
    {
        $this->db->select('galeri.*, count(galeri_foto.id_galeri) as jml_foto');
        $this->db->from('galeri');
        $this->db->join('galeri_foto', 'galeri.id_galeri = galeri_foto.id_galeri', 'left');
        $this->db->order_by('id_galeri', 'desc');
        $this->db->group_by('galeri.id_galeri');
        return $this->db->get()->result();
    }

    public function lists_foto($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('galeri_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->update('galeri', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->delete('galeri', $data);
    }

    public function detail($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function detail_foto($id_foto)
    {
        $this->db->select('*');
        $this->db->from('galeri_foto');
        $this->db->where('id_foto', $id_foto);
        return $this->db->get()->row();
    }

    public function add_foto($data)
    {
        $this->db->insert('galeri_foto', $data);
    }

    public function hapus_foto($data)
    {
        $this->db->where('id_foto', $data['id_foto']);
        $this->db->delete('galeri_foto', $data);
    }
}

/* End of file M_galeri.php */
