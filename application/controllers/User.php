<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:45
 */

class User extends MY_Controller
{

public function __construct()
{
    parent::__construct();
    //Do your magic here
    $this->load->model('M_User');
}
    public function index(){

        $query = $this->M_User->getAllUser();
        $data['tabelUser'] = $query->result();
        $this->tutor_page('laman/v_user',$data);
    }
    public function addAdmin(){
        $data['jenis'] = "Admin";
        $this->addadmin_page('laman/v_addadmin',$data);
    }
        public function addTutor(){
        $data['jenis'] = "Tutor";
        $this->addadmin_page('laman/v_addadmin',$data);
    }
    public function addMhs(){
        $data['jenis'] = "Mahasiswa";
        $this->addadmin_page('laman/v_addadmin',$data);
    }
    public function tambahAdmin(){
        print("<pre>".print_r($_POST,true)."</pre>");
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'user_level' => "Administrator"
            );
        print("<pre>".print_r($data,true)."</pre>");
        $data_detil = array();
        $data_detil['nim'] = $data['nim'];
        $data_detil['nama'] = $this->input->post('nama');
        $data_detil['jeniskelamin'] = $this->input->post('jeniskelamin');
        $data_detil['tgl_lahir'] = $this->input->post('tgl_lahir');
        $data_detil['fakultas'] = $this->input->post('fakultas');
        $data_detil['jurusan'] = $this->input->post('jurusan');
        $data_detil['id_line'] = $this->input->post('id_line');
        $data_detil['telepon'] = $this->input->post('telepon');
        $status = $this->M_User->tambahUser($data,$data_detil);
        if ($status == TRUE){
            $this->session->set_flashdata('success', 'Tambah Berhasil');
        }
        else
        {
            $this->session->set_flashdata('error', 'Tambah Gagal');
        }
        redirect('User');
    }
    public function tambahMahasiswa(){
        print("<pre>".print_r($_POST,true)."</pre>");
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'user_level' => "Mahasiswa"
            );
        print("<pre>".print_r($data,true)."</pre>");
        $data_detil = array();
        $data_detil['nim'] = $data['nim'];
        $data_detil['nama'] = $this->input->post('nama');
        $data_detil['jeniskelamin'] = $this->input->post('jeniskelamin');
        $data_detil['tgl_lahir'] = $this->input->post('tgl_lahir');
        $data_detil['fakultas'] = $this->input->post('fakultas');
        $data_detil['jurusan'] = $this->input->post('jurusan');
        $data_detil['id_line'] = $this->input->post('id_line');
        $data_detil['telepon'] = $this->input->post('telepon');
        $status = $this->M_User->tambahUser($data,$data_detil);
        if ($status == TRUE){
            $this->session->set_flashdata('success', 'Tambah Berhasil');
        }
        else
        {
            $this->session->set_flashdata('error', 'Tambah Gagal');
        }
        redirect('User');
    }
    public function tambahTutor(){
        print("<pre>".print_r($_POST,true)."</pre>");
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'user_level' => "Tutor"
            );
        print("<pre>".print_r($data,true)."</pre>");
        $data_detil = array();
        $data_detil['nim'] = $data['nim'];
        $data_detil['nama'] = $this->input->post('nama');
        $data_detil['jeniskelamin'] = $this->input->post('jeniskelamin');
        $data_detil['tgl_lahir'] = $this->input->post('tgl_lahir');
        $data_detil['fakultas'] = $this->input->post('fakultas');
        $data_detil['jurusan'] = $this->input->post('jurusan');
        $data_detil['id_line'] = $this->input->post('id_line');
        $data_detil['telepon'] = $this->input->post('telepon');
        $status = $this->M_User->tambahUser($data,$data_detil);
        if ($status == TRUE){
            $this->session->set_flashdata('success', 'Tambah Berhasil');
        }
        else
        {
            $this->session->set_flashdata('error', 'Tambah Gagal');
        }
        redirect('User');
    }

}