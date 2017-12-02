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
        $this->tutor_page('laman/v_tutor'/*,$data*/);
    }
    public function v_tambahkelas(){
        $this->klas_page('laman/v_addkelas');
    }
}