<?php

class Penumpang_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenumpang()
    {
        return $this->db->getAllData('penumpang');
    }

    public function tambahPenumpang($data)
    {
        $this->db->query("INSERT INTO penumpang VALUES (NULL,:username,:password,:nama,:alamat,:tanggal_lahir,:jenis_kelamin,:telp)");
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->bind("nama", $data['nama_penumpang']);
        $this->db->bind("alamat", $data['alamat_penumpang']);
        $this->db->bind("tanggal_lahir", $data['tanggal_lahir']);
        $this->db->bind("jenis_kelamin", $data['jenis_kelamin']);
        $this->db->bind("telp", $data['telefone']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPenumpangByUsername($data)
    {
        return $this->db->getDataByID("penumpang", "nama_penumpang", $data);
    }

    public function hapusPenumpang($id)
    {
        return $this->db->deleteDataByID('penumpang', 'id_penumpang', $id);
    }

    public function getPenumpangByID($id)
    {
        return $this->db->getDataByID("penumpang", "id_penumpang", $id);
    }

    public function editPenumpang($data)
    {
        $this->db->query("UPDATE penumpang SET username = :username, nama_penumpang = :nama, alamat_penumpang = :alamat, tanggal_lahir = :tanggal_lahir, jenis_kelamin = :jk, telefone = :telefone WHERE id_penumpang = :id_penumpang");
        $this->db->bind('id_penumpang', $data['id_penumpang']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama', $data['nama_penumpang']);
        $this->db->bind('alamat', $data['alamat_penumpang']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jk', $data['jenis_kelamin']);
        $this->db->bind('telefone', $data['telefone']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
