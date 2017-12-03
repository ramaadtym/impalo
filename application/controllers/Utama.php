<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends MY_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Matakuliah');
        $this->load->model('M_Kelas');
        $this->load->model('M_Mahasiswa');
        $this->load->model('M_Tutor');
    }
    public function index()
    {
        if ($this->session->userdata('masuk') == TRUE){
            redirect('Utama/Dashboard','refresh');
        }
        $this->login_page('laman/v_login');
    }

    function Login(){
//        print("<pre>".print_r($_POST,true)."</pre>");
        $username = $this->input->post('nim');
        $pwd = sha1($this->input->post('pwd'));
        $cek = $this->M_User->validasiLogin($username,$pwd); //load model login
        if($cek->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$username);
            $role = $cek->row_array();
            if($role['user_level'] =="Administrator"){
                $this->session->set_userdata('akses','Admin');
                $nama = $role['nama'];
                $nim = $role['nim'];
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('nim',$nim);
            }
            else if ($role['user_level'] == "Mahasiswa"){
                $this->session->set_userdata('akses','Mahasiswa');
                $nama = $role['nama'];
                $nim = $role['nim'];
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('nim',$nim);
            }
            else if ($role['user_level'] == "Tutor"){
                $this->session->set_userdata('akses','Tutor');
                $nama = $role['nama'];
                $nim = $role['nim'];
                $kode_tutor = $this->M_Tutor->getTutorbyNim($nim)->kode_tutor;
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('nim',$nim);
                $this->session->set_userdata('kode_tutor',$kode_tutor);
            }
        }

        if($this->session->userdata('masuk')==true){
            redirect('Utama/Dashboard');
        }
        else{
            redirect('/','refresh');
        }

    }
    function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    function Dashboard(){
        if (!$this->session->userdata('masuk')){
            redirect('/','refresh');
        }
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
        if($this->session->userdata('akses')=="Admin"){
            $this->dashboard_page('laman/v_dashboard',$data);
        }else if($this->session->userdata('akses')=="Tutor"){
            $this->tutor_dash('laman/v_dashboard',$data);
        }else if($this->session->userdata('akses')=="Mahasiswa"){
            $this->mhs_dash('laman/v_dashboard',$data);
        }
    }
}

?>