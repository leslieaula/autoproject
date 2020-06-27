<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        // $data['title'] = 'News';
        // $this->load->view('template/home_header', $data);
        // $this->load->view('home/news');
        // $this->load->view('template/home_footer', $data);
        echo '<script>';
		echo 'console.log("hello from php")';
		echo '</script>';
    }
}
