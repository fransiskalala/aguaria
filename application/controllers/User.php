<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data = array (
            'title' => "Company Profile Aguaria",
            'title2' => "Dashboard",
            'isi' => 'admin/dashboard',

        );
        $this->load->view('admin/template/wrapper', $data, FALSE);

    }

}

/* End of file User.php */
