<?php
class Login_model extends CI_Model{
    // ambil data yang dikriimkan oleh controller
    public function login($username, $password){
        return $this->db->query("SELECT * FROM users WHERE USERNAME='$username' AND password='$password'");
    }
}