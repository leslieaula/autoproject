<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/home_header', $data);
        $this->load->view('authorization/login');
        $this->load->view('template/home_footer', $data);
    }

    public function registration()
    {
        $data['title'] = 'registration';
        $this->load->view('template/home_header', $data);
        $this->load->view('authorization/registration');
        $this->load->view('template/home_footer', $data);
    }
}
