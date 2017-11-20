<?php

/**
 * Created by PhpStorm.
 * User: MOTION-2
 * Date: 29/08/2017
 * Time: 15.32
 */
class MY_Controller extends CI_Controller
{
    function load_template($sidebar,$content, $data = NULL){
        $data['sidebar'] = $this->load->view($sidebar, $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('layout/background', $data);
    }

    function login_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/login/index', $data);
    }
    function dashboard_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/dashboard/index', $data);
    }
    function klas_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/kls/index', $data);
    }
    function tutor_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/tutor/index', $data);
    }
    function presensi_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/presensi/index', $data);
    }
    function matkul_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/matkul/index', $data);
    }
    function user_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/user/index', $data);
    }
    function gaji_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/gaji/index', $data);
    }
    function mhs_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/mahasiswa/index', $data);
    }


}