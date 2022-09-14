<?php
class User_model
{
    private $table = 'kompetensi';
    private $db;

    private $nama = "Uswatun Kasanah";

    public function getUser(){
        return $this->nama;
    }

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllkompetensi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getKompetensiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
