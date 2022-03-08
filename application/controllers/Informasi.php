<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_informasi');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'required');
        $this->form_validation->set_rules('no_telepon_perusahaan', 'No. Telepon Perusahaan', 'required');
        $this->form_validation->set_rules('email_perusahaan', 'Email Perusahaan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data  = array(
                'id_informasi'   => '1',
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
                'no_telepon_perusahaan' => $this->input->post('no_telepon_perusahaan'),
                'email_perusahaan' => $this->input->post('email_perusahaan')
            );
            $this->m_informasi->perbaharui($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Perbaharui');
            redirect('informasi');
        }

        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Informasi Perusahaan',
            'informasi' => $this->m_informasi->detail(),
            'isi'   => 'admin/informasi'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }
}

/* End of file Admin.php */
