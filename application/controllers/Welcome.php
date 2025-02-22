<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// jika sessionnya sudah habis maka tidk bisa mengakses sistem
		// cek session sttausnya tidak sama dengan login, maka tampilkan
		if($this->session->userdata('status') != 'Login'){
				header('Location:'.BASEURL.'Login');
		}

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title']='Dashboard';
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('template/footer');
	
	}
}
