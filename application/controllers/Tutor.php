<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:39
 */

class Tutor extends MY_Controller
{

    public function index(){
    	/*$query = $this->M_Kelas->getKelas();*/
    	/*$data['tabelKelas'] = $query->result();*/
        $this->tutor_page('laman/v_tutor'/*,$data*/);
    }
    public function v_tambahkelas(){
        $this->klas_page('laman/v_addkelas');
    }
}