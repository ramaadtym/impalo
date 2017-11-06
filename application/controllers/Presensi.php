<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:43
 */

class Presensi extends MY_Controller
{
    public function index()
    {
        if (!$this->session->userdata('masuk')){
            redirect('/','refresh');
        }
        $this->presensi_page('laman/v_presensi');
    }
    public function tambah(){

    }
}