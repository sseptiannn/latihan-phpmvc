<?php

class Buku extends Controller{
    public function index(){
        $data['judul']='Daftar Buku';
        $data['buku']= $this->model('Buku_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');        
    }

    public function detail($id){
        $data['judul']= 'Detail Buku';
        $data['buku'] = $this->model('Buku_model')->getBukuByID($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        $data['judul']= 'Tambah Data Buku';
        $this->view('templates/header', $data);
        $this->view('buku/tambah', $data);
        $this->view('templates/footer');
    }
    public function tambahBuku(){
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0 ) {
            Flasher::setFlash('buku','berhasil','ditambahkan','success');
            header('Location: '.BASEURL.'/buku');
            exit; 
        } else {
            Flasher::setFlash('buku','gagal','ditambahkan','danger');
            header('Location: '.BASEURL.'/buku');
            exit;
        }
    }

    public function cari(){
        $data['judul']='Hasil Pencarian Buku';
        $data['buku'] = $this->model('Buku_model')->cariDataBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function getUbah(){
        echo json_encode($this->model('Buku_model')->getBukuByID($_POST['id']));
    }

    public function ubah($id){
        $data['judul']= 'Ubah Data Buku';
        $data['buku'] = $this->model('Buku_model')->getBukuByID($id);
        $this->view('templates/header', $data);
        $this->view('buku/edit', $data);
        $this->view('templates/footer');
    }
    
    public function ubahDataBuku(){
        if ($this->model('Buku_model')->ubahDataBuku($_POST) > 0 ) {
            Flasher::setFlash('buku','berhasil','diubah','success');
            header('Location: '.BASEURL.'/buku');
            exit;
        } else {
            Flasher::setFlash('buku','gagal','diubah','danger');
            header('Location: '.BASEURL.'/buku');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('Buku_model')->hapusDataBuku($id) > 0 ) {
            Flasher::setFlash('buku','berhasil','dihapus','success');
            header('Location: '.BASEURL.'/buku');
            exit;
        } else {
            Flasher::setFlash('buku','gagal','dihapus','danger');
            header('Location: '.BASEURL.'/buku');
            exit;
        }
    }
}