<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends MY_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->login_page('laman/v_login');
    }

    function Login(){
        $username = $this->input->post('nim');
        $pwd = $this->input->post('pwd');
        $cek = $this->m_login->ceklogin($username,$pwd); //load model login
        if($cek != FALSE){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$username);
//            print_r($cek);

            if($cek->user_level =="Administrator"){
                $this->session->set_userdata('akses','admin');
                $nama = $cek->nama;
                $nim = $cek->nim;
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('nim',$nim);
            }
            else if ($cek->user_level == "Mahasiswa"){
                $this->session->set_userdata('akses','mahasiswa');
                $nama = $cek->nama;
                $nim = $cek->nim;
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('nim',$nim);
            }

            }

        if($this->session->userdata('masuk')==true){
            redirect('Utama/Dashboard');
        }
        else{
            redirect('/');
        }

    }
    function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    function Dashboard(){
        $this->dashboard_page('laman/v_dashboard');
    }
}

?>