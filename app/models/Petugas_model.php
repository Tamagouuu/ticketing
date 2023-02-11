<?php

class Petugas_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPetugas()
    {
        $this->db->query("SELECT * FROM petugas_join_level");
        return $this->db->resultSet();
    }

    public function tambahPetugas($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO petugas VALUES (NULL, :username, :password, :nama_petugas, 2)");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editPetugas($data)
    {
        $this->db->query("UPDATE petugas SET username = :username, nama_petugas = :nama_petugas WHERE id_petugas = :id_petugas");
        $this->db->bind("username", $data['username']);
        $this->db->bind("nama_petugas", $data['nama_petugas']);
        $this->db->bind("id_petugas", $data['id_petugas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPetugas($id)
    {
        return $this->db->deleteDataByID('petugas', 'id_petugas', $id);
    }

    public function getPetugasByID($data)
    {
        return $this->db->getDataByID('petugas', 'id_petugas', $data);
    }

    public function getPetugasByUsername($data)
    {
        return $this->db->getDataByID('petugas', 'username', $data);
    }
}
