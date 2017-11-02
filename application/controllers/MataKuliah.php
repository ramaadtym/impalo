
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MataKuliah extends CI_Controller {
 
 	public function index()
 	{
 		$this->load->view('testing/inputmatakuliah');
 	}
 	public function tambahMataKuliah()
 	{
 		if ($this->session->userdata('logged_in')){
 		$this->form_validation->set_rules('kode_matkul', 'Kode Mata Kuliah', 'trim|required|min_length[3]|max_length[5]');
 		$this->form_validation->set_rules('nama_matkul', 'Nama Mata Kuliah', 'trim|required|min_length[5]');
 		if ($this->form_validation->run() == FALSE) {
 			$this->session->set_flashdata('error', validation_errors());
 			redirect('Matakuliah');
 		} else {
 		$kode_matkul = $this->input->post('kode_matkul');
 		$nama_matkul = $this->input->post('nama_matkul');
 		$this->load->model('M_Matakuliah');
 		$status = $this->M_Matakuliah->tambahMataKuliah($kode_matkul,$nama_matkul);
 		if ($status == TRUE){
 			$this->session->set_flashdata('success', 'Tambah Mata Kuliah Sukses');
 			redirect('Matakuliah');
 		}
 		else
 		{
 			$this->session->set_flashdata('error', 'Gagal menambah matakuliah, data sudah ada');
 			redirect('Matakuliah','refresh');
 		}
 		}
 		}
 		else
 		{
 			redirect('/','refresh');
 		}
 	}
 
 }
 
 /* End of file MataKuliah.php */
 /* Location: ./application/controllers/MataKuliah.php */ ?>