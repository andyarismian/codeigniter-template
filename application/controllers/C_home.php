<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('home/home', $data, FALSE);
    }
}
        
    /* End of file  C_home.php */
