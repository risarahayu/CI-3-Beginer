<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
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
	// load model
	function __construct()
	{
		parent::__construct();
		// load model
		$this->load->model('Mahasiswa_model');

	}
	public function index()
	{
		$data['title'] = 'Data Mahasiswa';

		// ambil data dari model
		$data['mahasiswa']=$this->Mahasiswa_model->getAllMahasiswa()->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('template/footer');
	
	}

	public function tambah()
	{
		$data['title'] = 'Input data';

		// nama folder/nama file
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

	public function tambahModal()
	{
		
		$this->load->view('mahasiswa/form_input_modal');

	}

	public function edit($id){
		// id untuk mengambil id dari url
		// echo $id; die();
		$data['title'] = 'Ubah data';
		// ubah ini menampung data yg diambil dari model/database
		$data['ubah']=$this->Mahasiswa_model->getUbah($id)->result();
		
		// nama folder/nama file
		$this->load->view('template/header', $data);
		$this->load->view('template/nav', $data);
		$this->load->view('mahasiswa/form_update', $data);
		$this->load->view('template/footer');
	}

	// public function update()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$nim = $this->input->post('nim');
	// 	$jurusan = $this->input->post('jurusan');

	// 	// dibuatkan array sebeleum dikirim ke model
	// 	// id nya ga usah karena kita tidak mengubah id
	// 	$data=[
	// 		'nama'=> $nama,
	// 		'nim'=> $nim,
	// 		'jurusan'=> $jurusan
	// 	];

		

	// 	// kirim ke model, input adalah nama function di model
	// 	$this->Mahasiswa_model->update($data, $id);
	// 	// redirect back ke halaman mahasiswa
	// 	header('Location:'.BASEURL.'/Mahasiswa');
	// }

	public function update()
	{
		$this->Mahasiswa_model->update($_POST);
		header('Location:'.BASEURL.'/Mahasiswa');
	}

	public function ubahModal(){
		// id untuk mengambil id dari url ajax
		$id = $_POST['id'];
		
		// echo $id; die();
		$data['title'] = 'Ubah data';

		// mengambil id dari ajax
		// getUbah sudah ada di Model, jd ga perlu bikin lagi
		$data['ubah']=$this->Mahasiswa_model->getUbah($id)->result();

		
		// nama folder/nama file

		$this->load->view('mahasiswa/form_update_modal', $data);

	}

	public function delete($id){
			
	}

}
