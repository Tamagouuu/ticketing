<?php

class TypeTransportasi_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTypeTransportasi()
    {
        return $this->db->getAllData('type_transportasi');
    }

    public function tambahTypeTransportasi($data)
    {
        $this->db->query('INSERT INTO type_transportasi VALUES (NULL, :nama_type, :keterangan)');
        $this->db->bind('nama_type', $data['nama_type']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusTypeTransportasi($data)
    {
        return $this->db->deleteDataByID('type_transportasi', 'id_type_transportasi', $data);
    }

    public function getTypeTransportasiByID($id)
    {
        return $this->db->getDataByID('type_transportasi', 'id_type_transportasi', $id);
    }

    public function editTypeTransportasi($data)
    {
        $this->db->query("UPDATE type_transportasi SET nama_type = :nama_type, keterangan = :keterangan WHERE id_type_transportasi = :id");
        $this->db->bind('nama_type', $data['nama_type']);
        $this->db->bind('id', $data['id_type_transportasi']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
