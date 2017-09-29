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
        $pwd = md5($this->input->post('pwd'));
        $cek = $this->m_login->ceklogin($username,$pwd); //load model login
        if($cek->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$username);
            $role=$cek->row_array();


            if($role['user_level'] =="admin"){
                $this->session->set_userdata('akses','admin');
                $nama = $role['nama'];
                $id = $role['user_id'];
                $nip = $role['username'];
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('id_admin',$id);
                $this->session->set_userdata('nip',$nip);
            }
            if($role['user_level'] =="kasir"){
                $this->session->set_userdata('akses','kasir');
                $nama = $role['nama'];
                $this->session->set_userdata('nama',$nama);
            }

        }
        if($this->session->userdata('masuk')==true){
            redirect('Dashboard');
        }
        else{
            redirect('/');
        }

    }
}

?>