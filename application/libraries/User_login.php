<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_login');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->m_login->login($username, $password);
        if ($cek) {
            $username = $cek->username;
            $nama = $cek->nama;
            $as_id = $cek->as_id;
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('as_id', $as_id);
            redirect('user');
        } else {
            $this->ci->session->set_flashdata('pesan', 'Username atau Password Salah.');
            redirect('aguaria_superuser');
        }
    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login.');
            redirect('aguaria404');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('as_id');
        $this->ci->session->set_flashdata('pesan', 'Anda Sudah Keluar dari Sistem');
        redirect('aguaria_superuser');
    }
}

/* End of file User_login.php */
