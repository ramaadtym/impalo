<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:45
 */

class Gaji extends MY_Controller
{
	public function __construct()
{
	parent::__construct();
	//Do your magic here
	$this->load->model('M_Presensi');
}

    public function index(){
		$query = $this->M_Presensi->pelaporanGaji();
		$data['tabelGaji'] = $query->result();
        $this->gaji_page('laman/v_gaji',$data);

         
    }
    public function editProfil(){

    }
}