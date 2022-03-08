<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_karir');
    }

    public function index()
    {
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Karir',
            'karir' => $this->m_karir->lists(),
            'isi'   => 'admin/karir/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_karir', 'Judul Karir', 'required');
        $this->form_validation->set_rules('deskripsi_karir', 'Deskripsi Karir', 'required');
        $this->form_validation->set_rules('kriteria_karir', 'Kriteria Karir', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data  = array(
                'judul_karir' => $this->input->post('judul_karir'),
                'deskripsi_karir' => $this->input->post('deskripsi_karir'),
                'kriteria_karir' => $this->input->post('kriteria_karir')

            );
            $this->m_karir->add($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Tambah');
            redirect('karir');
        }

        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Karir Aguaria',
            'isi'   => 'admin/karir/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_karir)
    {
        $this->form_validation->set_rules('judul_karir', 'Judul Karir', 'required');
        $this->form_validation->set_rules('deskripsi_karir', 'Deskripsi Karir', 'required');
        $this->form_validation->set_rules('kriteria_karir', 'Kriteria Karir', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_karir' => $id_karir,
                'judul_karir' => $this->input->post('judul_karir'),
                'deskripsi_karir' => $this->input->post('deskripsi_karir'),
                'kriteria_karir' => $this->input->post('kriteria_karir')

            );
            $this->m_karir->edit($data);
            $this->session->set_flashdata('pesan', 'Karir Berhasil Diedit');
            redirect('karir');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Karir',
            'karir' => $this->m_karir->detail($id_karir),
            'isi'   => 'admin/karir/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_karir)
    {
        $data = array('id_karir' => $id_karir);
        $this->m_karir->hapus($data);
        $this->session->set_flashdata('pesan', 'Karir Berhasil Dihapus');
        redirect('karir');
    }
}

/* End of file Karir.php */
