<?php

class Datasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('templates/header', $data);
        $this->view('datasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nis)
    {
        $data['judul'] = 'Detail siswa';
        $data['siswa'] = $this->model('Siswa_model')->getsiswaById($nis);
        $this->view('templates/header', $data);
        $this->view('datasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahDatasiswa($_POST) > 0) {
            // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/datasiswa');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/datasiswa');
            exit;
        }
    }

    public function hapus($nis)
    {
        if ($this->model('siswa_model')->hapusDatasiswa($nis) > 0) {
            // Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/datasiswa');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/datasiswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getsiswaById($_POST['nis']));
    }

    public function ubah()
    {
        if ($this->model('Siswa_model')->ubahDatasiswa($_POST) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/datasiswa');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/datasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar siswa';
        $data['siswa'] = $this->model('Siswa_model')->cariDatasiswa();
        $this->view('templates/header', $data);
        $this->view('datasiswa/index', $data);
        $this->view('templates/footer');
    }
}
