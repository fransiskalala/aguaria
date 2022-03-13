<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_organisasi');
    }


    public function index()
    {
        $this->form_validation->set_rules('judul_organisasi', 'Judul', 'required');
        $this->form_validation->set_rules('isi_organisasi', 'Organisasi', 'required');

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path']      = './foto_organisasi/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_organisasi')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Organisasi Aguaria',
                    // 'error' => $this->upload->display_errors(),
                    'organisasi' => $this->m_organisasi->detail(),
                    'isi'   => 'admin/organisasi'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_organisasi/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $organisasi = $this->m_organisasi->detail();
                if ($organisasi->foto_organisasi != "") {
                    unlink('./foto_organisasi/' . $organisasi->foto_organisasi);
                }

                

                $data = array(
                    'id_organisasi' => '1',
                    'judul_organisasi' => $this->input->post('judul_organisasi'),
                    'isi_organisasi' => $this->input->post('isi_organisasi'),
                    'foto_organisasi' => $upload_data['uploads']['file_name']
                );
                $this->m_organisasi->perbaharui($data);
                $this->session->set_flashdata('pesan', 'Organisasi Berhasil Perbaharui');
                redirect('organisasi');
            }

            $data  = array(
                'id_organisasi'   => '1',
                'judul_organisasi' => $this->input->post('judul_organisasi'),
                'isi_organisasi' => $this->input->post('isi_organisasi'),
                
            );
            $this->m_organisasi->perbaharui($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Perbaharui');
            redirect('organisasi');
        }

        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Organisasi Aguaria',
            'organisasi' => $this->m_organisasi->detail(),
            'isi'   => 'admin/organisasi'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }
}

/* End of file Organisasi.php */
