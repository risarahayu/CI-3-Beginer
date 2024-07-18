<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		// load model
		// $this->load->model('Login_model');

	}
	public function index()
	{
        $data['title']='Login';
	
		$this->load->view('template/header', $data);
		$this->load->view('login/index');
		$this->load->view('template/footer');
	
	}

    public function login(){
        // karena di form methodnya Post
        $this->Register_model->register($_POST);
        header('Location:'.BASEURL.'Login');
    }
}