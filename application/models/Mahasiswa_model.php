<?php
class Mahasiswa_model extends CI_Model{
    public function input($data)
    {
        $this->db->insert('mahasiswa', $data);
    }
}