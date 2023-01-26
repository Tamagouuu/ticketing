<?php

class TypeTransportasi_model
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
        $this->db->query("DELETE FROM type_transportasi WHERE id_type_transportasi = $data");
        $this->db->execute();
        return $this->db->rowCount();
    }
}
