<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visi_misi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_visimisi');
    }

    public function index()
    {
        $this->form_validation->set_rules('judul_visi', 'Visi', 'required');
        $this->form_validation->set_rules('isi_visi', 'Isi Visi', 'required');
        $this->form_validation->set_rules('judul_misi', 'Misi', 'required');
        $this->form_validation->set_rules('isi_misi', 'Isi Misi', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data  = array(
                'id_visimisi'   => '1',
                'judul_visi' => $this->input->post('judul_visi'),
                'isi_visi' => $this->input->post('isi_visi'),
                'judul_misi' => $this->input->post('judul_misi'),
                'isi_misi' => $this->input->post('isi_misi')
            );
            $this->m_visimisi->perbaharui($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Perbaharui');
            redirect('visi_misi');
        }

        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Visi & Misi',
            'visi_misi' => $this->m_visimisi->detail(),
            'isi'   => 'admin/visi_misi'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }
}

/* End of file Sejarah.php */
