<?php
class Mahasiswa_model extends CI_Model{
    public function input($data)
    {
        // $data adalah nama arraynya
        $this->db->insert('mahasiswa', $data);
    }

    public function getAllMahasiswa(){
        return $this->db->query("SELECT * FROM mahasiswa ORDER BY id DESC");
    }
}