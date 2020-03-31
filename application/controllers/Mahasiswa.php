<?php 


class Mahasiswa extends CI_Controller{
    public function __construct(){
        parent :: __construct();
        $this->load->database();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa 43-01';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if( $this->input->post('keyword') ){
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header' , $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){

        $data['judul'] = 'Tambah Mahasiswa';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nim','NIM','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('image','Foto');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header' , $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        }else{
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function hapus($id){
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('mahasiswa');
    }
    public function ubah($id){

        $data['judul'] = 'Ubah | 6706194041';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nim','NIM','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('image','Foto' );

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header' , $data);
            $this->load->view('mahasiswa/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash','Diubah');
            redirect('mahasiswa');
        }
    }
   
}

?>