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
    	$query = $this->M_Kelas->getKelas();
    	$data['tabelKelas'] = $query->result();
        $this->klas_page('laman/v_kelas',$data);
    }
    public function tambahKelas(){
    }
    public function v_tambahkelas(){
        $query = $this->M_Matakuliah->getMataKuliah();
        $data['tabelMatkul'] = $query->result();
        $query = $this->M_Tutor->getTutor();
        $data['tabelTutor'] = $query->result();
        $query = $this->M_Mahasiswa->getMahasiswa();
        $data['tabelMahasiswa'] = $query->result();
        $this->klas_page('laman/v_addkelas',$data);
    }
    public function v_tutor_kelas(){
        $query = $this->M_Kelas->getKelas();
        $data['tabelKelas'] = $query->result();
        $this->klas_page('laman/v_kelas',$data);
    }
}