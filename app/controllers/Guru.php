<?php
class Guru extends controller
{
    public function index()
    {
        $data['judul'] = "Data Guru";
        $data['komli'] = $this->model('Guru_model')->getAllguru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}
