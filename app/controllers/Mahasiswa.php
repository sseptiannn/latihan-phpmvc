<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul']='Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul']='Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByID($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        //var_dump($_POST);
        if ($this->model('Mahasiswa_model')->tambahDataMhs($_POST) > 0 ) {
            Flasher::setFlash('mahasiswa','berhasil','ditambahkan','success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('mahasiswa','gagal','ditambahkan','danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function hapus($id){
        //var_dump($_POST);
        if ($this->model('Mahasiswa_model')->hapusDataMhs($id) > 0 ) {
            Flasher::setFlash('mahasiswa','berhasil','dihapus','success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('mahasiswa','gagal','dihapus','danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function getUbah(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByID($_POST['id']));
    }

    public function ubah(){
        if ($this->model('Mahasiswa_model')->ubahDataMhs($_POST) > 0 ) {
            Flasher::setFlash('mahasiswa','berhasil','diubah','success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('mahasiswa','gagal','diubah','danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function cari(){
        $data['judul']='Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}