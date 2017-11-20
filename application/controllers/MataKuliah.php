
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MataKuliah extends MY_Controller {
 public function __construct()
 {
 	parent::__construct();
 	//Do your magic here
 	$this->load->model('M_Matakuliah');
 }
 	public function index()
 	{
        if (!$this->session->userdata('masuk')){
            redirect('/','refresh');
        }
 		$query = $this->M_Matakuliah->getMataKuliah();
 		$data['tabelMataKuliah'] = $query->result();
 		$this->matkul_page('laman/v_matkul',$data);
 	}
 	public function v_tambahMataKuliah(){
        if (!$this->session->userdata('masuk')){
            redirect('/','refresh');
        }
        $this->matkul_page('laman/v_addmatkul');
    }
 	public function tambahMataKuliah()
 	{
 		if ($this->session->userdata('masuk') && $this->session->userdata('akses') == "Admin"){
 		$this->form_validation->set_rules('kode_matkul', 'Kode Mata Kuliah', 'trim|required|min_length[3]|max_length[5]');
 		$this->form_validation->set_rules('nama_matkul', 'Nama Mata Kuliah', 'trim|required|min_length[5]');
 		if ($this->form_validation->run() == FALSE) {
 			$this->session->set_flashdata('error', validation_errors());
 			redirect('MataKuliah');
 		} else {
 		$kode_matkul = $this->input->post('kode_matkul');
 		$nama_matkul = $this->input->post('nama_matkul');
 		$this->load->model('M_Matakuliah');
 		$status = $this->M_Matakuliah->tambahMataKuliah($kode_matkul,$nama_matkul);
 		if ($status == TRUE){
 			$this->session->set_flashdata('success', 'Tambah Mata Kuliah Sukses');
 			redirect('MataKuliah');
 		}
 		else
 		{
 			$this->session->set_flashdata('error', 'Gagal menambah matakuliah, data sudah ada');
 			redirect('MataKuliah','refresh');
 		}
 		}
 		}
 		else
 		{
 			redirect('/','refresh');
 		}
 	}
 	public function hapusMataKuliah($kode_matkul)
 	{
 		if ($this->session->userdata('masuk') && $this->session->userdata('akses') == "Admin"){
			$MataKuliah = new M_Matakuliah();
			if ($MataKuliah->hapusMataKuliah($kode_matkul)){
				$this->session->set_flashdata('success', 'Hapus mata kuliah berhasil');
				redirect('MataKuliah');
			}
			else
			{
				$this->session->set_flashdata('error', 'Hapus mata kuliah gagal');
				redirect('MataKuliah');	
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