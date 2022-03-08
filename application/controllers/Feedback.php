<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_feedback');
    }

    public function index()
    {
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Kelola Feedback',
            'feedback' => $this->m_feedback->list(),
            'isi'   => 'admin/feedback'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_feedback)
    {
        $data = array(
            'id_feedback'  => $id_feedback,
        );
        $this->m_feedback->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
        redirect('feedback');
    }
}

/* End of file Admin.php */
