<?php

class Artikel extends Controller
{
    public function index()
    {
        $data['judul'] = "Artikel";
        $data['artikel'] = $this->model("Artikel_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('Artikel/index', $data);
        $this->view('templates/footer');
    }
}
