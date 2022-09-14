<?php
class Artikel_model
{
    private $table = 'artikel';
    private $db;

    // private $artikel = [
    //     [
    //         "penulis" => "Uswatun Kasanah",
    //         "judul" => "Belajar phpmvc",
    //         "tulisan" => "Models"
    //     ],
    //     [
    //         "penulis" => "Uswatun Kasanah",
    //         "judul" => "Belajar phpmvc",
    //         "tulisan" => "Views"
    //     ],
    //     [
    //         "penulis" => "Uswatun Kasanah",
    //         "judul" => "Belajar phpmvc",
    //         "tulisan" => "Controller"
    //     ]
    // ];
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllBlog()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
