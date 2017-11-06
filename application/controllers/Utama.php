<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends MY_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('M_Matakuliah');
        $this->load->model('M_Kelas');
        $this->load->model('M_Mahasiswa');
        $this->load->model('M_Tutor');
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
                $this->session->set_userdata('akses','Admin');
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
        $queryMatakuliah = $this->M_Matakuliah->getMataKuliah();
        $queryKelas = $this->M_Kelas->getKelas();
        $queryMahasiswa = $this->M_Mahasiswa->getMahasiswa();
        $queryTutor = $this->M_Tutor->getTutor();
        $data = array(
                'jumlahMataKuliah' => $queryMatakuliah->num_rows(),
                'jumlahKelas' => $queryKelas->num_rows(),
                'jumlahMahasiswa' => $queryMahasiswa->num_rows(),
                'jumlahTutor' => $queryTutor->num_rows()
        );
        $this->dashboard_page('laman/v_dashboard',$data);
    }
}

?>