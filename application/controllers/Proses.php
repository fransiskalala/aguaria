<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_proses');
        
    }
    

    public function index()
    {
        $data = array(
            'title'     => 'Company Profile Aguaria',
            'title2'    => 'Proses Produksi',
            'proses'    => $this->m_proses->lists(),
            'isi'       => 'admin/proses/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_proses', 'Nama Proses', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_proses/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '2000000000000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_proses')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Add Proses Pembuatan',
                    'error' => $this->upload->display_errors(),
                    'isi'   => 'admin/proses/v_add'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_proses/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_proses' => $this->input->post('nama_proses'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_proses' => $upload_data['uploads']['file_name']
                );
                $this->m_proses->add($data);
                $this->session->set_flashdata('pesan', 'Proses Pembuatan Berhasil Ditambahkan');
                redirect('proses');
            }
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Add Proses Pembuatan',
            'isi'   => 'admin/proses/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_proses)
    {
        $this->form_validation->set_rules('nama_proses', 'Nama Proses', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_proses/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_proses')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Edit Proses Pembuatan',
                    'error' => $this->upload->display_errors(),
                    'proses' => $this->m_proses->detail($id_proses),
                    'isi'   => 'admin/proses/v_edit'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {

                $proses = $this->m_proses->detail($id_proses);
                if ($proses->foto_proses != "") {
                    unlink('./foto_proses/' . $proses->foto_proses);
                }

                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_proses/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_proses' => $id_proses,
                    'nama_proses' => $this->input->post('nama_proses'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_proses' => $upload_data['uploads']['file_name']
                );
                $this->m_proses->edit($data);
                $this->session->set_flashdata('pesan', 'Proses Pembuatan Berhasil Diedit');
                redirect('proses');
            }

            $data = array(
                'id_proses' => $id_proses,
                'nama_proses' => $this->input->post('nama_proses'),
                'keterangan' => $this->input->post('keterangan'),
                
            );
            $this->m_proses->edit($data);
            $this->session->set_flashdata('pesan', 'Proses Pembuatan Berhasil Diedit');
            redirect('proses');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Proses Pembuatan',
            'proses' => $this->m_proses->detail($id_proses),
            'isi'   => 'admin/proses/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_proses)
    {
        $proses = $this->m_proses->detail($id_proses);
        if ($proses->foto_proses != "") {
            unlink('./foto_proses/' . $proses->foto_proses);
        }
        $data = array('id_proses' => $id_proses);
        $this->m_proses->hapus($data);
        $this->session->set_flashdata('pesan', 'Proses Pembuatan Berhasil Dihapus');
        redirect('proses');
    }

}

/* End of file Proses.php */
