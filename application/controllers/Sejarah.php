<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sejarah');
    }


    public function index()
    {
        $this->form_validation->set_rules('judul_sejarah', 'Judul', 'required');
        $this->form_validation->set_rules('isi_sejarah', 'Sejarah', 'required');

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path']      = './foto_sejarah/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_sejarah')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Sejarah Aguaria',
                    // 'error' => $this->upload->display_errors(),
                    'sejarah' => $this->m_sejarah->detail(),
                    'isi'   => 'admin/sejarah'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_sejarah/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $sejarah = $this->m_sejarah->detail();
                if ($sejarah->foto_sejarah != "") {
                    unlink('./foto_sejarah/' . $sejarah->foto_sejarah);
                }

                

                $data = array(
                    'id_sejarah' => '1',
                    'judul_sejarah' => $this->input->post('judul_sejarah'),
                    'isi_sejarah' => $this->input->post('isi_sejarah'),
                    'foto_sejarah' => $upload_data['uploads']['file_name']
                );
                $this->m_sejarah->perbaharui($data);
                $this->session->set_flashdata('pesan', 'Sejarah Berhasil Perbaharui');
                redirect('sejarah');
            }

            $data  = array(
                'id_sejarah'   => '1',
                'judul_sejarah' => $this->input->post('judul_sejarah'),
                'isi_sejarah' => $this->input->post('isi_sejarah'),
                
            );
            $this->m_sejarah->perbaharui($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Perbaharui');
            redirect('sejarah');
        }

        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Sejarah Aguaria',
            'sejarah' => $this->m_sejarah->detail(),
            'isi'   => 'admin/sejarah'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }
}

/* End of file Sejarah.php */
