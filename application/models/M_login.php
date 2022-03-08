<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function Login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'username' => $username,
            'password' => md5($password),
        ));

        return $this->db->get()->row();
    }
}
/* End of file M_login.php */
