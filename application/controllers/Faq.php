<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_faq');
    }


    public function index()
    {
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Frequency Ask Questions',
            'faq' => $this->m_faq->lists(),
            'isi'   => 'admin/faq/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_faq', 'Judul Faq', 'required');
        $this->form_validation->set_rules('penjelasan_faq', 'Penjelasan Faq', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data  = array(
                'judul_faq' => $this->input->post('judul_faq'),
                'penjelasan_faq' => $this->input->post('penjelasan_faq')
            );
            $this->m_faq->add($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Tambah');
            redirect('faq');
        }

        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Faq Aguaria',
            'isi'   => 'admin/faq/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_faq)
    {
        $this->form_validation->set_rules('judul_faq', 'Judul Faq', 'required');
        $this->form_validation->set_rules('penjelasan_faq', 'Penjelasan Faq', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_faq' => $id_faq,
                'judul_faq' => $this->input->post('judul_faq'),
                'penjelasan_faq' => $this->input->post('penjelasan_faq'),

            );
            $this->m_faq->edit($data);
            $this->session->set_flashdata('pesan', 'FAQ Berhasil Diedit');
            redirect('faq');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Faq',
            'faq' => $this->m_faq->detail($id_faq),
            'isi'   => 'admin/faq/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_faq)
    {
        $data = array('id_faq' => $id_faq);
        $this->m_faq->hapus($data);
        $this->session->set_flashdata('pesan', 'Faq Berhasil Dihapus');
        redirect('faq');
    }
}

/* End of file Faq.php */
