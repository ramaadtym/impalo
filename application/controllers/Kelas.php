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
}
    public function index(){
    	$query = $this->M_Kelas->getKelas();
    	$data['tabelKelas'] = $query->result();
        $this->klas_page('laman/v_kelas',$data);
    }
    public function v_tambahkelas(){
        $this->klas_page('laman/v_addkelas');
    }
}