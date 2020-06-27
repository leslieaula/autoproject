<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('template/home_header', $data);
        $this->load->view('home/index');
        $this->load->view('template/home_footer', $data);
    }

    public function news()
    {
        $data['title'] = 'News';
        $this->load->view('template/home_header', $data);
        $this->load->view('home/news');
        $this->load->view('template/home_footer', $data);
    }

    public function review()
    {
        $data['title'] = 'Review';
        $this->load->view('template/home_header', $data);
        $this->load->view('home/review');
        $this->load->view('template/home_footer', $data);
    }

    public function about()
    {
        $data['title'] = 'About Us';
        $this->load->view('template/home_header', $data);
        $this->load->view('home/about');
        $this->load->view('template/home_footer', $data);
    }
}
