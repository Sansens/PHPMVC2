<?php
class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllsiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getsiswaById($nis)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nis=:nis');
        $this->db->bind('nis', $nis);
        return $this->db->single();
    }

    public function tambahDatasiswa($data)
    {
        $query = "INSERT INTO siswa
                    VALUES
                  (:nis, :nama, :jns_kel, :tinggi, :asal_sekolah, :komli, :nilai_un)";
        
        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jns_kel', $data['jns_kel']);
        $this->db->bind('tinggi', $data['tinggi']);
        $this->db->bind('asal_sekolah', $data['asal_sekolah']);
        $this->db->bind('komli', $data['komli']);
        $this->db->bind('nilai_un', $data['nilai_un']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDatasiswa($nis)
    {
        $query = "DELETE FROM siswa WHERE nis = :nis";
        
        $this->db->query($query);
        $this->db->bind('nis', $nis);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDatasiswa($data)
    {
        $query = "UPDATE siswa SET
                    nis = :nis,
                    nama = :nama,
                    jns_kel = :jns_kel,
                    tinggi = :tinggi,
                    asal_sekolah = :asal_sekolah,
                    komli = :komli,
                    nilai_un = :nilai_un
                  WHERE nis = :nis";
        
        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jns_kel', $data['jns_kel']);
        $this->db->bind('tinggi', $data['tinggi']);
        $this->db->bind('asal_sekolah', $data['asal_sekolah']);
        $this->db->bind('komli', $data['komli']);
        $this->db->bind('nilai_un', $data['nilai_un']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDatasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM siswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}