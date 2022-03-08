<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
        
    }
    

    public function index()
    {
        $data = array(
            'title'     => 'Company Profile Aguaria',
            'title2'    => 'Produk',
            'produk'    => $this->m_produk->lists(),
            'isi'       => 'admin/produk/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_produk/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_produk')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Add Produk',
                    'error' => $this->upload->display_errors(),
                    'isi'   => 'admin/produk/v_add'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_produk/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_produk' => $this->input->post('nama_produk'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_produk' => $upload_data['uploads']['file_name']
                );
                $this->m_produk->add($data);
                $this->session->set_flashdata('pesan', 'Produk Berhasil Ditambahkan');
                redirect('produk');
            }
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Add Produk',
            'isi'   => 'admin/produk/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_produk)
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_produk/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_produk')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Edit Produk',
                    'error' => $this->upload->display_errors(),
                    'produk' => $this->m_produk->detail($id_produk),
                    'isi'   => 'admin/produk/v_edit'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {

                $produk = $this->m_produk->detail($id_produk);
                if ($produk->foto_produk != "") {
                    unlink('./foto_produk/' . $produk->foto_produk);
                }

                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_produk/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_produk' => $id_produk,
                    'nama_produk' => $this->input->post('nama_produk'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_produk' => $upload_data['uploads']['file_name']
                );
                $this->m_produk->edit($data);
                $this->session->set_flashdata('pesan', 'Produk Berhasil Diedit');
                redirect('produk');
            }

            $data = array(
                'id_produk' => $id_produk,
                'nama_produk' => $this->input->post('nama_produk'),
                'keterangan' => $this->input->post('keterangan'),
                
            );
            $this->m_produk->edit($data);
            $this->session->set_flashdata('pesan', 'Produk Berhasil Diedit');
            redirect('produk');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Produk',
            'produk' => $this->m_produk->detail($id_produk),
            'isi'   => 'admin/produk/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_produk)
    {
        $produk = $this->m_produk->detail($id_produk);
        if ($produk->foto_produk != "") {
            unlink('./foto_produk/' . $produk->foto_produk);
        }
        $data = array('id_produk' => $id_produk);
        $this->m_produk->hapus($data);
        $this->session->set_flashdata('pesan', 'Produk Berhasil Dihapus');
        redirect('produk');
    }

}

/* End of file Produk.php */
