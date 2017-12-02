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
    function lampiran_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/lampiran/index', $data);
    }
    function addlampiran_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/lampiran/index_add', $data);
    }
    function addpresensi_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/presensi/index_add', $data);
    }
    function addadmin_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/admin/index', $data);
    }
    function addtutor_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/tutor/index_add', $data);
    }
    function addmhs_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/mahasiswa/index_add', $data);
    }
    function mhs_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/mahasiswa/index', $data);
    }

    //Halaman Tutor
    function tutor_dash($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/tutor/index_dash', $data);
    }
    function mhs_dash($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/mahasiswa/index_dash', $data);
    }


}