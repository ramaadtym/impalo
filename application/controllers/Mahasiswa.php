
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mahasiswa extends MY_Controller {
 public function __construct()
 {
 	parent::__construct();
 	$this->load->model('M_Mahasiswa');
 }
 	public function index()
 	{
 		$query = $this->M_Mahasiswa->getMahasiswa();
 		$data['tabelMahasiswa'] = $query->result();
 		$this->mhs_page('laman/v_mahasiswa',$data);
 	}
 	public function v_tambahmatkul(){

        $this->matkul_page('laman/v_addmatkul');
    }
 	public function tambahMataKuliah()
 	{
 		if ($this->session->userdata('logged_in')){
 		$this->form_validation->set_rules('kode_matkul', 'Kode Mata Kuliah', 'trim|required|min_length[3]|max_length[5]');
 		$this->form_validation->set_rules('nama_matkul', 'Nama Mata Kuliah', 'trim|required|min_length[5]');
 		if ($this->form_validation->run() == FALSE) {
 			$this->session->set_flashdata('error', validation_errors());
 			redirect('Matkul');
 		} else {
 		$kode_matkul = $this->input->post('kode_matkul');
 		$nama_matkul = $this->input->post('nama_matkul');
 		$this->load->model('M_Matakuliah');
 		$status = $this->M_Matakuliah->tambahMataKuliah($kode_matkul,$nama_matkul);
 		if ($status == TRUE){
 			$this->session->set_flashdata('success', 'Tambah Mata Kuliah Sukses');
 			redirect('Matkul');
 		}
 		else
 		{
 			$this->session->set_flashdata('error', 'Gagal menambah matakuliah, data sudah ada');
 			redirect('Matkul','refresh');
 		}
 		}
 		}
 		else
 		{
 			redirect('/','refresh');
 		}
 	}
 	public function jadwal(){
        $nim = $this->session->userdata('nim');
        $jdwl = $this->M_Mahasiswa->getJadwal($nim);
        $data['jadwal'] = $jdwl->result();
        $this->mhs_jdwl('laman/v_jdwl',$data);
    }
 
 }
 
 /* End of file MataKuliah.php */
 /* Location: ./application/controllers/MataKuliah.php */ ?>