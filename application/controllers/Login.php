<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		// load model
		$this->load->model('Login_model');

		// jika sessionnya sudah habis maka tidk bisa mengakses sistem
		// cek session sttausnya tidak sama dengan login, maka tampilkan
		

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
		$password=md5($_POST['password']);

		// $cek ini menghubungkan ke model
		$cek['cek'] = $this->Login_model->login($username, $password)->result();
		// cek, kalau ada berarti row 1 kalo ga ada berarti rownya 0
		$data['cek'] = $this->Login_model->login($username, $password)->num_rows();

		if($data > 0){
			foreach($cek['cek'] as $row):

			endforeach;

			$data_session = array(
				// akan menampung nama dan email
				'nama' => $row->nama,
				'email' => $row->email,
				'status'=>'Login'
			);

			// masukan nama dan email ke dalam session userdata
			$this->session->set_userdata($data_session);
			header('Location: '.BASEURL);
		}

		
		// var_dump($cek['cek']);
    }

	public function logout(){
		$this->session->sess_destroy();
		header('Location:'.BASEURL.'Login');
	}
}