<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_slider');
	}


	public function index()
	{
		$data = array(
			'title'     => 'Company Profile Aguaria',
			'title2'    => 'Slider',
			'slider'    => $this->m_slider->lists(),
			'isi'       => 'admin/slider/v_list'
		);
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_slider', 'Nama Slider', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']      = './foto_slider/';
			$config['allowed_types']    = 'gif|jpg|png|jpeg';
			$config['max_size']         = '20000';
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_slider')) {
				$data = array(
					'title' => 'Company Profile Aguaria',
					'title2' => 'Add Slider',
					'error' => $this->upload->display_errors(),
					'isi'   => 'admin/slider/v_add'
				);
				$this->load->view('admin/template/wrapper', $data, FALSE);
			} else {
				$upload_data                = array('uploads' => $this->upload->data());
				$config['image_library']    = 'gd2';
				$config['source_image']     = './foto_slider/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'nama_slider' => $this->input->post('nama_slider'),
					'foto_slider' => $upload_data['uploads']['file_name'],
					'menu'		  => $this->input->post('menu')
				);
				$this->m_slider->add($data);
				$this->session->set_flashdata('pesan', 'Slider berhasil ditambahkan');
				redirect('slider');
			}
		}
		$data = array(
			'title' => 'Company Profile Aguaria',
			'title2' => 'Add Slider',
			'isi'   => 'admin/slider/v_add'
		);
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function edit($id_slider)
	{
		$this->form_validation->set_rules('nama_slider', 'Nama Slider', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']      = './foto_slider/';
			$config['allowed_types']    = 'gif|jpg|png|jpeg';
			$config['max_size']         = '20000';
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_slider')) {
				$data = array(
					'title' => 'Company Profile Aguaria',
					'title2' => 'Edit Slider',
					'error' => $this->upload->display_errors(),
					'slider' => $this->m_slider->detail($id_slider),
					'isi'   => 'admin/slider/v_edit'
				);
				$this->load->view('admin/template/wrapper', $data, FALSE);
			} else {

				$slider = $this->m_slider->detail($id_slider);
				if ($slider->foto_slider != "") {
					unlink('./foto_slider/' . $slider->foto_slider);
				}

				$upload_data                = array('uploads' => $this->upload->data());
				$config['image_library']    = 'gd2';
				$config['source_image']     = './foto_slider/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'id_slider' => $id_slider,
					'nama_slider' => $this->input->post('nama_slider'),
					'foto_slider' => $upload_data['uploads']['file_name'],
					'menu'		  => $this->input->post('menu')
				);
				$this->m_slider->edit($data);
				$this->session->set_flashdata('pesan', 'Slider berhasil diedit');
				redirect('slider');
			}

			$data = array(
				'id_slider' => $id_slider,
				'nama_slider' => $this->input->post('nama_slider'),
				'menu'		  => $this->input->post('menu')
			);
			$this->m_slider->edit($data);
			$this->session->set_flashdata('pesan', 'Slider berhasil diedit');
			redirect('slider');
		}
		$data = array(
			'title' => 'SMP N 20 Filial Smg',
			'title2' => 'Edit Slider',
			'slider' => $this->m_slider->detail($id_slider),
			'isi'   => 'admin/slider/v_edit'
		);
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function hapus($id_slider)
	{
		$slider = $this->m_slider->detail($id_slider);
		if ($slider->foto_slider != "") {
			unlink('./foto_slider/' . $slider->foto_slider);
		}
		$data = array('id_slider' => $id_slider);
		$this->m_slider->hapus($data);
		$this->session->set_flashdata('pesan', 'Slider berhasil dihapus');
		redirect('slider');
	}
}

/* End of file Slider.php */
