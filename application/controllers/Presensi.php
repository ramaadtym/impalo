<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:43
 */

class Presensi extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_Presensi');
	}
    public function index()
    {
        if (!($this->session->userdata('masuk') && $this->session->userdata('akses') == "Admin")){
            redirect('/','refresh');
        }
        $model_presensi = new M_Presensi();
        $data['tabel'] = $model_presensi->getAllPresensi();
        $this->presensi_page('laman/v_presensi',$data);
    }
    public function tambah(){
        $this->addpresensi_page('laman/v_addpresensi');
    }
    public function v_presensi_tutor(){

        $model_presensi = new M_Presensi();
        $data['tabel'] = $model_presensi->getAllPresensi();
        $this->presensi_page('laman/v_presensi',$data);
    }

}