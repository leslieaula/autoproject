<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
        $this->load->library('form_validation'); 
        $this->load->helper('form');
    }

    public function index()
    {
        $data['title'] = 'Register';
        // $this->load->view('template/home_header', $data);
        $this->load->view('authorization/register');
        // $this->load->view('template/home_footer', $data);
    }

    public function submit()
    {
        // $name = $this->input->post('name');
        // $password = $this->input->post('password');
        // $email = $this->input->post('email');
        // // $this->load->view('authorization/login');

        // $data = array(
        //     'Name'=>$name,
        //     'Email'=>$email,
        //     'Password'=>$password
        // );
    
        // $this->db->insert('Accounts',$data);

        // // $data['title'] = 'Home';
        // // $this->load->view('template/home_header', $data);
        // // $this->load->view('home/index');
        // // $this->load->view('template/home_footer', $data);

        // // echo '<script>';
		// // echo 'console.log('.$name.')';
		// // echo 'console.log('.$password.')';
		// // echo 'console.log('.$email.')';
        // // echo '</script>';
        
        // $this->session->set_flashdata('msg', 'Thank you for your message. It has been sent.');
        redirect().to('/');
    }
}
