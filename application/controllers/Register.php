<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		// load model
		$this->load->model('Register_model');

	}
	public function index()
	{
        $data['title']='Register';
	
		$this->load->view('template/header', $data);
		$this->load->view('register/index');
		$this->load->view('template/footer');
	
	}

    public function register(){
        // karena di form methodnya Post
        $this->Register_model->register($_POST);
        header('Location :'.BASEURL.'/Login');
    }
}