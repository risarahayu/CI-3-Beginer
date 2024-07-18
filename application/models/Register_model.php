<?php
class Register_model extends CI_Model{
    public function register($data){
        // karena kita kirim dengan methos post, jadi kita simpan ke dalam $data
        $nama=$data['nama'];
        $email=$data['email'];
        $username=$data['username'];
        $password=md5($data['password']);

        // echo $password;die();

        $this->db->query("INSERT INTO users VALUES('','$nama', '$email', '$username', '$password')");
    }
}