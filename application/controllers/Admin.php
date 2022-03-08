<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data = array(
			'title' => 'Company Profile Aguaria',
			'title2' => 'Kelola Admin',
			'admin' => $this->m_admin->list(),
			'isi'   => 'admin/admin/v_list'
		);
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('user_login');

		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[15]|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		$this->form_validation->set_message('is_unique', '%s sudah pernah di gunakan. Silahkan ubah');
		$this->form_validation->set_message('valid_email', '%s tidak valid');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Company Profile Aguaria',
				'title2' => 'Add Admin',
				'isi'   => 'admin/admin/v_add'
			);
			$errors = validation_errors();
			$this->session->set_flashdata('error', $errors);
			$this->load->view('admin/template/wrapper', $data, FALSE);
		} else {
			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$as_id = $this->input->post('as_id');
			$password = md5($this->input->post('password'));
			$data = array(
				'username' => $username,
				'nama' => $nama,
				'email' => $email,
				'password' => $password,
				'as_id' => $as_id
			);
			$this->m_admin->add($data);
			$this->session->set_flashdata('pesan', 'Admin berhasil ditambahkan');
			redirect('admin');
		}

		$data = array(
			'title' => 'Company Profile Aguaria',
			'title2' => 'Add Admin',
			'isi'   => 'admin/admin/v_add'
		);
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function edit($id)
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('user_login');

		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		$this->form_validation->set_message('valid_email', '%s tidak valid');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Company Profile Aguaria',
				'title2' => 'Edit Admin',
				'admin' => $this->m_admin->detail($id),
				'isi'   => 'admin/admin/v_edit'
			);
			$errors = validation_errors();
			$this->session->set_flashdata('error', $errors);
			$this->load->view('admin/template/wrapper', $data, FALSE);
		} else {
			$admin = $this->m_admin->detail($id);
			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$as_id = $this->input->post('as_id');
			$password = md5($this->input->post('password'));
			$data = array(
				'id' => $id,
				'username' => $username,
				'nama' => $nama,
				'email' => $email,
				'as_id' => $as_id,
				'password' => $password
			);
			$this->m_admin->edit($data);
			$this->session->set_flashdata('pesan', 'Admin berhasil diedit');
			redirect('admin');
		}

		$data = array(
			'title' => 'Company Profile Aguaria',
			'title2' => 'Add Admin',
			'admin' => $this->m_admin->detail($id),
			'isi'   => 'admin/admin/v_edit'
		);
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function hapus($id)
	{
		$data = array(
			'id'  => $id,
		);
		$this->m_admin->hapus($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
		redirect('admin');
	}
}

/* End of file Admin.php */
