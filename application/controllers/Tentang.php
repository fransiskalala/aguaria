<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tentang');
        
    }
    

    public function index()
    {
        $data = array(
            'title'     => 'Company Profile Aguaria',
            'title2'    => 'Tentang Aguaria',
            'tentang'    => $this->m_tentang->lists(),
            'isi'       => 'admin/tentang/v_list'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_tentang', 'Nama tentang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_tentang/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_tentang')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Add Tentang Aguaria',
                    'error' => $this->upload->display_errors(),
                    'isi'   => 'admin/tentang/v_add'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_tentang/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_tentang' => $this->input->post('nama_tentang'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_tentang' => $upload_data['uploads']['file_name']
                );
                $this->m_tentang->add($data);
                $this->session->set_flashdata('pesan', 'tentang Berhasil Ditambahkan');
                redirect('tentang');
            }
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Add Tentang Aguaria',
            'isi'   => 'admin/tentang/v_add'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function edit($id_tentang)
    {
        $this->form_validation->set_rules('nama_tentang', 'Nama tentang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_tentang/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '20000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_tentang')) {
                $data = array(
                    'title' => 'Company Profile Aguaria',
                    'title2' => 'Edit Tentang Aguaria',
                    'error' => $this->upload->display_errors(),
                    'tentang' => $this->m_tentang->detail($id_tentang),
                    'isi'   => 'admin/tentang/v_edit'
                );
                $this->load->view('admin/template/wrapper', $data, FALSE);
            } else {

                $tentang = $this->m_tentang->detail($id_tentang);
                if ($tentang->foto_tentang != "") {
                    unlink('./foto_tentang/' . $tentang->foto_tentang);
                }

                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_tentang/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_tentang' => $id_tentang,
                    'nama_tentang' => $this->input->post('nama_tentang'),
                    'keterangan' => $this->input->post('keterangan'),
                    'foto_tentang' => $upload_data['uploads']['file_name']
                );
                $this->m_tentang->edit($data);
                $this->session->set_flashdata('pesan', 'Tentang Aguaria Berhasil Diedit');
                redirect('tentang');
            }

            $data = array(
                'id_tentang' => $id_tentang,
                'nama_tentang' => $this->input->post('nama_tentang'),
                'keterangan' => $this->input->post('keterangan'),
                
            );
            $this->m_tentang->edit($data);
            $this->session->set_flashdata('pesan', 'Tentang Aguaria Berhasil Diedit');
            redirect('tentang');
        }
        $data = array(
            'title' => 'Company Profile Aguaria',
            'title2' => 'Edit Tentang Aguaria',
            'tentang' => $this->m_tentang->detail($id_tentang),
            'isi'   => 'admin/tentang/v_edit'
        );
        $this->load->view('admin/template/wrapper', $data, FALSE);
    }

    public function hapus($id_tentang)
    {
        $tentang = $this->m_tentang->detail($id_tentang);
        if ($tentang->foto_tentang != "") {
            unlink('./foto_tentang/' . $tentang->foto_tentang);
        }
        $data = array('id_tentang' => $id_tentang);
        $this->m_tentang->hapus($data);
        $this->session->set_flashdata('pesan', 'Tentang Aguaria Berhasil Dihapus');
        redirect('tentang');
    }

}

/* End of file tentang.php */
