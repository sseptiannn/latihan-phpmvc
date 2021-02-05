<?php

class About extends Controller{
    public function index($nama='Nama', $pekerjaan='Job', $umur=0){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $data['footer'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
    public function page(){
        $data['judul'] = 'Pages';
        $data['footer'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer', $data);
        
    }
    public function pagination(){
        echo 'about/pagination';
    }
}
