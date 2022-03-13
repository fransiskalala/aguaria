<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_galeri');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Company Profile Aguaria',
            'title2'    => 'Galeri',
            'galeri'    => $this->m_galeri->lists(),
            'isi'       => 'admin/galeri/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('caption_galeri', 'Caption Galeri', 'required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_galeri_sampul/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul_galeri')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Add Galeri',
                    'error' => $this->upload->display_errors(),
                    'isi'   => 'admin/galeri/v_add'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_galeri_sampul/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'caption_galeri' => $this->input->post('caption_galeri'),
                    'sampul_galeri' => $upload_data['uploads']['file_name'],
                    'tgl_dibuat' => date('Y-m-d H:i:s'),
                );
                $this->m_galeri->add($data);
                $this->session->set_flashdata('pesan', 'Galeri Berhasil Ditambahkan');
                redirect('galeri');
            }
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Add Galeri',
            'isi'   => 'admin/galeri/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_galeri)
    {
        $this->form_validation->set_rules('caption_galeri', 'Caption Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_galeri_sampul/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul_galeri')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Edit Galeri',
                    'error' => $this->upload->display_errors(),
                    'galeri' => $this->m_galeri->detail($id_galeri),
                    'isi'   => 'admin/galeri/v_edit'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $galeri = $this->m_galeri->detail($id_galeri);
                if ($galeri->sampul_galeri != "") {
                    unlink('./foto_galeri_sampul/' . $galeri->sampul_galeri);
                }

                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_galeri_sampul/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_galeri' => $id_galeri,
                    'caption_galeri' => $this->input->post('caption_galeri'),
                    'sampul_galeri' => $upload_data['uploads']['file_name'],
                    'tgl_dibuat' => date('Y-m-d H:i:s'),
                );
                $this->m_galeri->edit($data);
                $this->session->set_flashdata('pesan', 'Galeri Berhasil Diedit');
                redirect('galeri');
            }

            $data = array(
                'id_galeri' => $id_galeri,
                'caption_galeri' => $this->input->post('caption_galeri'),
                'tgl_dibuat' => date('Y-m-d H:i:s'),
            );
            $this->m_galeri->edit($data);
            $this->session->set_flashdata('pesan', 'Galeri Berhasil Diedit');
            redirect('galeri');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Galeri',
            'galeri' => $this->m_galeri->detail($id_galeri),
            'isi'   => 'admin/galeri/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_galeri)
    {
        $galeri = $this->m_galeri->detail($id_galeri);
        if ($galeri->sampul_galeri != "") {
            unlink('./foto_galeri_sampul/' . $galeri->sampul_galeri);
        }
        $data = array('id_galeri' => $id_galeri);
        $this->m_galeri->hapus($data);
        $this->session->set_flashdata('pesan', 'Galeri Berhasil Dihapus');
        redirect('galeri');
    }

    public function add_foto($id_galeri)
    {
        $this->form_validation->set_rules('id_galeri', 'ID Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_galeri/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_galeri')) {

                $galeri = $this->m_galeri->detail($id_galeri);
                $data = array(
                    'title'     => 'Company Profile Aguaria',
                    'title2' => $galeri->caption_galeri,
                    'error'     => $this->upload->display_errors(),
                    'galeri'    =>   $galeri,
                    'foto_galeri' => $this->m_galeri->lists_foto($id_galeri),
                    'isi'       => 'admin/galeri/v_add_foto'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_galeri/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_galeri' => $id_galeri,
                    'keterangan_foto' => $this->input->post('keterangan_foto'),
                    'foto_galeri' => $upload_data['uploads']['file_name']
                );
                $this->m_galeri->add_foto($data);
                $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan');
                redirect('galeri/add_foto/' . $id_galeri);
            }
        }
        $galeri = $this->m_galeri->detail($id_galeri);
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => $galeri->caption_galeri,
            'galeri' => $galeri,
            'foto_galeri' => $this->m_galeri->lists_foto($id_galeri),
            'isi'   => 'admin/galeri/v_add_foto'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus_foto($id_galeri, $id_foto)
    {
        $foto_galeri = $this->m_galeri->detail_foto($id_foto);
        if ($foto_galeri->foto_galeri != "") {
            unlink('./foto_galeri/' . $foto_galeri->foto_galeri);
        }
        $data = array('id_foto' => $id_foto);
        $this->m_galeri->hapus_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus');
        redirect('galeri/add_foto/' . $id_galeri);
    }
}

/* End of file Galeri.php */
