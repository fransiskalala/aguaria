<?php

defined('BASEPATH') or exit('No direct script access allowed');

class aguaria404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'isi' => 'aguaria404',
        );
        $this->load->view('template/wrapper404', $data, FALSE);
    }
}

/* End of file 404.php */
