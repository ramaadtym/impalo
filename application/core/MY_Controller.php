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
        $data['footer'] = $this->load->view('template/footer');
        $this->load->view('template/dashboard/index', $data);
    }
}