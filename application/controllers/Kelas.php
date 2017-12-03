<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:39
 */

class Kelas extends MY_Controller
{

public function __construct()
{
	parent::__construct();
	//Do your magic here
    $this->load->model('M_Kelas');
    $this->load->model('M_Matakuliah');
    $this->load->model('M_Tutor');
    $this->load->model('M_Mahasiswa');
}
    public function index(){
        $role = $this->session->userdata('akses');
        if ($role == "Admin" || $role == "Tutor"){
    	$query = $this->M_Kelas->getKelas();
    	$data['tabelKelas'] = $query->result();
        $this->klas_page('laman/v_kelas',$data);
    }
    else
    {
        redirect('Utama','refresh');
    }
    }
    public function tambahKelas(){
		 
        $role = $this->session->userdata('akses');
        if ($role == "Admin"){
		$data['kode_kelas'] = $this->input->post('kode_kelas');
    	$data['kode_matkul'] = $this->input->post('kode_matkul');
    	$data['kode_tutor'] = $this->input->post('kode_tutor');
    	$data['hari'] = $this->input->post('hari');
    	$data['jam'] = $this->input->post('jam');
    	$data['group_line'] = $this->input->post('group_line');
    	$data['tahun'] = $this->input->post('tahun');
    	$datamhs = $this->input->post('data');
    	$status = $this->M_Kelas->tambahKelas($data,$datamhs);
    	if ($status == TRUE){
    		$this->session->set_flashdata('success', 'Tambah Berhasil');
    		redirect('Kelas','');
    	}
        }
        else
        {
            redirect('Utama');
        }
    }
    public function v_tambahkelas(){
        $role = $this->session->userdata('akses');
        if ($role == "Admin"){
        $query = $this->M_Matakuliah->getMataKuliah();
        $data['tabelMatkul'] = $query->result();
        $query = $this->M_Tutor->getTutor();
        $data['tabelTutor'] = $query->result();
        $query = $this->M_Mahasiswa->getMahasiswa();
        $data['tabelMahasiswa'] = $query->result();
        $this->klas_page('laman/v_addkelas',$data);
        }
        else
        {
            redirect('Utama');
        }
    }
}