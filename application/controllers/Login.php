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
        // tangkat variable username dan password
		$username=$_POST['username'];
		$password=$_POST['password'];

		$cek['cek'] = $this->Login_model->Login($username, $password)->resurl();
    }
}