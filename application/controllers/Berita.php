<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Company Profile Aguaria',
            'title2'    => 'Berita',
            'berita'    => $this->m_berita->lists(),
            'isi'       => 'admin/berita/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }
    public function add()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './gambar_berita/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Add Berita',
                    'error' => $this->upload->display_errors(),
                    'isi'   => 'admin/berita/v_add'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'gambar_berita' => $upload_data['uploads']['file_name'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'id'    => $this->session->userdata('as_id')
                );
                $this->m_berita->add($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil Ditambahkan');
                redirect('berita');
            }
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Add Berita',
            'isi'   => 'admin/berita/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_berita)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './gambar_berita/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Edit Berita',
                    'error' => $this->upload->display_errors(),
                    'berita' => $this->m_berita->detail($id_berita),
                    'isi'   => 'admin/berita/v_edit'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {

                $berita = $this->m_berita->detail($id_berita);
                if ($berita->gambar_berita != "") {
                    unlink('./gambar_berita/' . $berita->gambar_berita);
                }

                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'gambar_berita' => $upload_data['uploads']['file_name'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'id'    => $this->session->userdata('as_id')
                );
                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil Diedit');
                redirect('berita');
            }

            $data = array(
                'id_berita' => $id_berita,
                'judul_berita' => $this->input->post('judul_berita'),
                'slug' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                'isi_berita' => $this->input->post('isi_berita'),
                'created_at' => date('Y-m-d H:i:s'),
                'id'    => $this->session->userdata('id'),

            );
            $this->m_berita->edit($data);
            $this->session->set_flashdata('pesan', 'Berita Berhasil Diedit');
            redirect('berita');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Berita',
            'berita' => $this->m_berita->detail($id_berita),
            'isi'   => 'admin/berita/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_berita)
    {
        $berita = $this->m_berita->detail($id_berita);
        if ($berita->gambar_berita != "") {
            unlink('./gambar_berita/' . $berita->gambar_berita);
        }
        $data = array('id_berita' => $id_berita);
        $this->m_berita->hapus($data);
        $this->session->set_flashdata('pesan', 'Berita Berhasil Dihapus');
        redirect('berita');
    }
}

/* End of file Berita.php */
