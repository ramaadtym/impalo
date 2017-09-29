<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends MY_Controller
{

    public function index(){
        $this->load->library("unit_test");
        $this->load->model('M_login');
        //test login sebagai tutor
        $hasil = $this->M_login->ceklogin("dummy_tutor","cietutor");
        $this->unit->active("true");	
        $this->unit->run($hasil,TRUE,'login');
        //test login sebagai tutor
        $hasil = $this->M_login->ceklogin("dummy_tutor","salahpassword");
        $this->unit->active("true");	
        $this->unit->run($hasil,TRUE,'login');
        echo $this->unit->report();

    }
}


?>