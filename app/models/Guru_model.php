<?php
class Guru_model
{
    private $table = 'komli';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllguru()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
