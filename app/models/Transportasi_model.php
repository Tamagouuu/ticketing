<?php

class Transportasi_model
{

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransportasi()
    {
        return $this->db->getAllData('transportasi');
    }

    public function tambahTransportasi($data)
    {
        $this->db->query('INSERT INTO transportasi VALUES (NULL, :kode, :jumlah_kursi, :keterangan, :id_type)');
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id_type', $data['id_type']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getTypeJoinTransportasi()
    {
        $this->db->query("SELECT transportasi.*, nama_type, type_transportasi.keterangan as type_keterangan FROM transportasi JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi");
        return $this->db->resultSet();
    }

    public function getTransportasiByID($id)
    {
        return $this->db->getDataByID('transportasi', 'id_transportasi', $id);
    }

    public function hapusTransportasi($data)
    {
        return $this->db->deleteDataByID('transportasi', 'id_transportasi', $data);
    }

    public function editTransportasi($data)
    {
        $this->db->query("UPDATE transportasi SET kode = :kode, jumlah_kursi = :jumlah_kursi, keterangan = :keterangan, id_type_transportasi = :id_type WHERE id_transportasi = :id_transportasi");
        $this->db->bind('id_transportasi', $data['id_transportasi']);
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id_type', $data['id_type']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
