<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:39
 */

class Kelas extends MY_Controller
{

    public function index(){
        $this->klas_page('laman/v_kelas');
    }
    public function v_tambahkelas(){
        $this->klas_page('laman/v_addkelas');
    }
}