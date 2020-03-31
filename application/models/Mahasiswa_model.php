<?php
class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa(){
        return $query = $this->db->get('mahasiswa')->result_array();
    }
    public function tambahDataMahasiswa(){
        // $nama = $this->input->post('nama');
		// $nim = $this->input->post('nim');
		// $email = $this->input->post('email');
		// $foto = $_FILES['image'];
		// if ($foto='') {}else{
		// 	$config['upload_path'] = './assets/foto';
		// 	$config['allowed_types'] = 'jpg|jpeg|png|gif';

		// 	$this->load->library('upload',$config);
		// 	if (!$this->upload->do_upload('foto')) {
		// 		echo "Gagal upload"; die();
		// 	} else {
		// 		$foto = $this->upload->data('file_name');
		// 	}
		// }

		// $data = [
		// 	'nama' => $nama,
		// 	'pengarang' => $nim,
		// 	'penerbit' => $email,
		// 	'foto' => $foto
        // ];

		// $this->db->insert($data, 'mahasiswa');
		// redirect('mahasiswa');
	
        $data = [
            "nama" =>$this->input->post("nama",true),
            "nim" => $this->input->post("nim",true),
            "email" => $this->input->post("email",true),
            "foto" => $this->input->post("image",true)
        ];
        $this->db->insert('mahasiswa',$data); 
    }
    public function detail($id){
		$this->load->model('m_katalog');
		$detail = $this->m_katalog->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail',$data);
		$this->load->view('templates/footer');
	}
    public function hapusDataMahasiswa($id){
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');
    }
}