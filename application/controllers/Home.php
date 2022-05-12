<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/db_header');
        $this->load->view('template/sidebar.php');
        $this->load->view('dashboard/home');
        $this->load->view('template/db_footer');
    }
}
