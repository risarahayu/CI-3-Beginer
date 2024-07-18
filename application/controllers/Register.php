<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		// load model
		// $this->load->model('Register_model');

	}
	public function index()
	{
		$data['title'] = 'Data Mahasiswa';

		// ambil data dari model
		// $data['mahasiswa']=$this->Mahasiswa_model->getAllMahasiswa()->result();

		$this->load->view('template/header', $data);
		$this->load->view('register/index', $data);
		$this->load->view('template/footer');
	
	}
}