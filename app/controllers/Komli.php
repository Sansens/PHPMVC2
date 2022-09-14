<?php
class Komli extends controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['kompetensi'] = $this->model('User_model')->getAllkompetensi();
        $this->view('templates/header', $data);
        $this->view('komli/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Kompetensi';
        $data['kompetensi'] = $this->model('User_model')->getkompetensiById($id);
        $this->view('templates/header', $data);
        $this->view('komli/detail', $data);
        $this->view('templates/footer');
    }
}
