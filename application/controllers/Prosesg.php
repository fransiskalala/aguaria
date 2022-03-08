<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Prosesg extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_prosesg');
        
    }
    

    public function index()
    {
        $data = array(
            'title'     => 'Company Profile Aguaria',
            'title2'    => 'Proses Produksi Galon',
            'prosesg'    => $this->m_prosesg->lists(),
            'isi'       => 'admin/prosesg/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_prosesg', 'Nama Proses', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_prosesg/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_prosesg')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Add Proses Produksi Galon',
                    'error' => $this->upload->display_errors(),
                    'isi'   => 'admin/prosesg/v_add'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_prosesg/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_prosesg' => $this->input->post('nama_prosesg'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_prosesg' => $upload_data['uploads']['file_name']
                );
                $this->m_prosesg->add($data);
                $this->session->set_flashdata('pesan', 'Proses Produksi Berhasil Ditambahkan');
                redirect('prosesg');
            }
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Add Proses Produksi Galon',
            'isi'   => 'admin/prosesg/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_prosesg)
    {
        $this->form_validation->set_rules('nama_prosesg', 'Nama Proses', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_prosesg/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_prosesg')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Edit Proses Pembuatan',
                    'error' => $this->upload->display_errors(),
                    'prosesg' => $this->m_prosesg->detail($id_prosesg),
                    'isi'   => 'admin/prosesg/v_edit'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {

                $prosesg = $this->m_prosesg->detail($id_prosesg);
                if ($prosesg->foto_prosesg != "") {
                    unlink('./foto_prosesg/' . $prosesg->foto_prosesg);
                }

                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_prosesg/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_prosesg' => $id_prosesg,
                    'nama_prosesg' => $this->input->post('nama_prosesg'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_prosesg' => $upload_data['uploads']['file_name']
                );
                $this->m_prosesg->edit($data);
                $this->session->set_flashdata('pesan', 'Proses Produksi Berhasil Diedit');
                redirect('prosesg');
            }

            $data = array(
                'id_prosesg' => $id_prosesg,
                'nama_prosesg' => $this->input->post('nama_prosesg'),
                'keterangan' => $this->input->post('keterangan'),
                
            );
            $this->m_prosesg->edit($data);
            $this->session->set_flashdata('pesan', 'Proses Produksi Berhasil Diedit');
            redirect('prosesg');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Proses Produksi Galon',
            'prosesg' => $this->m_prosesg->detail($id_prosesg),
            'isi'   => 'admin/prosesg/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_prosesg)
    {
        $prosesg = $this->m_prosesg->detail($id_prosesg);
        if ($prosesg->foto_prosesg != "") {
            unlink('./foto_prosesg/' . $prosesg->foto_prosesg);
        }
        $data = array('id_prosesg' => $id_prosesg);
        $this->m_prosesg->hapus($data);
        $this->session->set_flashdata('pesan', 'Proses Produksi Berhasil Dihapus');
        redirect('prosesg');
    }

}

/* End of file Proses.php */
