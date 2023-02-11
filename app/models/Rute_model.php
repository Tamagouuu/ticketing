<?php

class Rute_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRute()
    {
        return $this->db->getAllData('rute');
    }

    public function getRuteJoinTransportasi()
    {
        $this->db->query("SELECT * FROM rute_join_transportasi");
        return $this->db->resultSet();
    }

    public function getRuteByID($id)
    {
        return $this->db->getDataByID('rute', 'id_rute', $id);
    }

    public function getRuteJoinTransType()
    {
        $this->db->query("SELECT * FROM rute_join_transportasi_type");
        return $this->db->resultSet();
    }

    public function getRuteJoinTransTypeWhere($data)
    {
        $this->db->query("SELECT * FROM rute_join_transportasi_type WHERE rute_awal = :data");
        $this->db->bind("data", $data);
        return $this->db->resultSet();
    }

    public function tambahRute($data)
    {
        $this->db->query("INSERT INTO rute VALUES (NULL, :tujuan, :rute_awal, :rute_akhir, :harga, :id_transportasi)");
        $this->db->bind("tujuan", $data['tujuan']);
        $this->db->bind("rute_awal", $data['rute_awal']);
        $this->db->bind("rute_akhir", $data['rute_akhir']);
        $this->db->bind("harga", $data['harga']);
        $this->db->bind("id_transportasi", $data['id_transportasi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editRute($data)
    {
        $this->db->query("UPDATE rute SET tujuan = :tujuan, rute_awal = :rute_awal, rute_akhir = :rute_akhir, harga = :harga, id_transportasi = :id_transportasi WHERE id_rute = :id_rute");

        $this->db->bind("tujuan", $data['tujuan']);
        $this->db->bind("rute_awal", $data['rute_awal']);
        $this->db->bind("rute_akhir", $data['rute_akhir']);
        $this->db->bind("harga", $data['harga']);
        $this->db->bind("id_rute", $data['id_rute']);
        $this->db->bind("id_transportasi", $data['id_transportasi']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusRute($data)
    {
        return $this->db->deleteDataByID('rute', 'id_rute', $data);
    }
}
