<?php
class Mahasiswa_model extends CI_Model{
    public function input($data)
    {
        // $data adalah nama arraynya
        // mahasiswa adalah nama tabelnya
        $this->db->insert('mahasiswa', $data);
    }

    public function getAllMahasiswa(){
        return $this->db->query("SELECT * FROM mahasiswa ORDER BY id ASC");
    }

    public function getUbah($id){
        return $this->db->query("SELECT * FROM mahasiswa WHERE id = '$id'");
    }

    // public function update($data, $id){
    //     // akan mengubah berdasarkan id
    //     $this->db->where('id', $id);
    //     $this->db->update('mahasiswa', $data);
    // }

    public function update($data){
        $id=$data['id'];
        $nama=$data['nama'];
        $nim=$data['nim'];
        $jurusan=$data['jurusan'];
        return $this->db->query("UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id='$id'");
    }
}