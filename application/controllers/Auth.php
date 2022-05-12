<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Sistem Antrian RS - Login";
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('template/auth_footer');
    }

    public  function registration()
    {
        $data['title'] = "Sistem Antrian RS - Register";
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/registration');
        $this->load->view('template/auth_footer');
    }
}
