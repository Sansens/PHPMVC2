<?php
class user extends controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
    public function profile($nama = "Uswa", $pekerjaan = "Pelajar")
    {
        $data["judul"] = "User";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('user/profile', $data);
        $this->view('templates/footer');
    }
}
