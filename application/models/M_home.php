<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	public function proses()
	{
		$this->db->select('*');
		$this->db->from('proses');
		$this->db->order_by('id_proses', 'asc');
		return $this->db->get()->result();
	}
	public function prosesg()
	{
		$this->db->select('*');
		$this->db->from('proses_g');
		$this->db->order_by('id_prosesg', 'asc');
		return $this->db->get()->result();
	}

	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->order_by('id_produk', 'asc');
		return $this->db->get()->result();
	}

	public function sejarah()
	{
		$this->db->select('*');
		$this->db->from('sejarah');
		return $this->db->get()->result();
	}
	public function organisasi()
	{
		$this->db->select('*');
		$this->db->from('organisasi');
		return $this->db->get()->result();
	}
	public function tentang()
	{
		$this->db->select('*');
		$this->db->from('tentang');
		return $this->db->get()->result();
	}

	public function galeri()
	{
		$this->db->select('*');
		$this->db->from('galeri');
		return $this->db->get()->result();
	}

	public function caption_galeri($id_galeri)
	{
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->where('id_galeri', $id_galeri);
		return $this->db->get()->row();
	}

	public function detail_galeri($id_galeri)
	{
		$this->db->select('*');
		$this->db->from('galeri_foto');
		$this->db->where('id_galeri', $id_galeri);
		$this->db->order_by('id_foto', 'desc');
		return $this->db->get()->result();
	}

	public function berita($limit, $start)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user', 'user.id = berita.id', 'left');
		$this->db->order_by('id_berita', 'desc');
		$this->db->limit($limit, $start);
		return $this->db->get()->result();
	}

	public function latest_berita()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user', 'user.id = berita.id', 'left');
		$this->db->order_by('id_berita', 'desc');
		$this->db->limit(10);
		return $this->db->get()->result();
	}

	public function detail_berita($slug)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user', 'user.id = berita.id', 'left');
		$this->db->where('slug', $slug);
		return $this->db->get()->row();
	}

	public function total_berita()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user', 'user.id = berita.id', 'left');
		$this->db->order_by('id_berita', 'desc');
		return $this->db->get()->result();
	}

	public function karir()
	{
		$this->db->select('*');
		$this->db->from('karir');
		$this->db->order_by('id_karir', 'asc');
		return $this->db->get()->result();
	}

	public function faq()
	{
		$this->db->select('*');
		$this->db->from('faq');
		$this->db->order_by('id_faq', 'asc');
		return $this->db->get()->result();
	}

	public function slider_home()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'home');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_sejarah()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'sejarah');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_visimisi()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'visi & misi');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_tentang()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'tentang');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_organisasi()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'organisasi');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_proses()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'proses');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_produk()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'produk');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_berita()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'berita');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}
	
	public function slider_galeri()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'galeri');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_karir()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'karir');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}

	public function slider_hubungi()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->like('menu', 'hubungi kami');
		$this->db->order_by('id_slider', 'asc');
		return $this->db->get()->result();
	}
}

/* End of file M_home.php */
