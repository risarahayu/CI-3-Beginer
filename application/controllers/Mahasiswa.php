<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	// load model
	function __construct()
	{
		parent::__constuct();
		// load model
		$this->load->model('Mahasiswa_model');

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
		$data['title'] = 'Data Mahasiswa';

		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('template/footer');
	
	}

	public function tambah()
	{
		// nama folder/nama file
		$data['title'] = 'Input data';

		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('mahasiswa/form_input', $data);
		$this->load->view('template/footer');
	}

	public function store()
	{
		

		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$jurusan = $this->input->post('jurusan');

		// dibuatkan array sebeleum dikirim ke model
		$data=[
			'nama'=> $nama,
			'nim'=> $nim,
			'jurusan'=> $jurusan
		];

		// kirim ke model, input adalah nama function di model
		$this->Mahasiswa_model->input($data);
		// redirect back ke halaman mahasiswa
		header('Location:'.BASEURL.'/Mahasiswa');
	}
}
