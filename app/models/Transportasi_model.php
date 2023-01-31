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

    public function hapusTransportasi($data)
    {
        return $this->db->deleteDataByID('transportasi', 'id_transportasi', $data);
    }
}
