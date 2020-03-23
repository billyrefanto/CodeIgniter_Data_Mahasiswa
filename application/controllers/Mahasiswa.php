<?php 


class Mahasiswa extends CI_Controller{
    public function __construct(){
        parent :: __construct();
        $this->load->database();
        $this->load->model('Mahasiswa_model');
    }
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa 43-01';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header' , $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}

?>