<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $data['persons'] = $this->db->get('MyGuests')->result();
        $this->load->view('authorization/login', $data);
        // $this->load->database('default');
        // $this->load->database('default');
        // echo '<script>';
		// echo 'console.log("hello")';
		// echo '</script>';
    }

    public function authorize() 
    {
        $data = array(
            'firstname' => 'Pasukan',
            'lastname' => 'Bodrex',
        );
        $this->db->insert('MyGuests', $data);
    }
}

class Person {
    public function __construct(string $firstname, string $lastname)
    {
        $this->$firstname = $firstname;
        $this->$lastname = $lastname;
    }

    public $firstname;
    public $lastname;
}
