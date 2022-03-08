<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    var $tproduk = "produk";

    function __construct()
    {
        parent::__construct();
    }

    /* HITUNG DATA UNTUK DASHBOARD */
    public function hitung_produk()
    {
        $this->db->from($this->tproduk);
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
        $this->db->from('produk');
        $this->db->order_by('id_produk', 'desc');
        $this->db->group_by('produk.id_produk');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('produk', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('produk', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->delete('produk', $data);
    }
    public function detail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->row();
    }
}

/* End of file M_produk.php */
