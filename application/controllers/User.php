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
    $this->load->model('M_Tutor');
    $this->load->model('M_Matakuliah');
}
    public function index(){

        $query = $this->M_User->getAllUser();
        $data['tabelUser'] = $query->result();
        $this->user_page('laman/v_user',$data);
    }
    public function addAdmin(){
        $data['jenis'] = "Admin";
        $this->addadmin_page('laman/v_addadmin',$data);
    }
        public function addTutor(){
        $query = $this->M_Matakuliah->getMataKuliah();
        $data['tabelMatkul'] = $query->result();
        $this->addadmin_page('laman/v_addtutor',$data);
    }
    public function addMhs(){
        $data['jenis'] = "Mahasiswa";
        $this->addadmin_page('laman/v_addadmin',$data);
    }
    public function tambahAdmin(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'user_level' => "Administrator"
            );
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
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'user_level' => "Mahasiswa"
            );
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
        // print("<pre>".print_r($_POST,true)."</pre>");
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'user_level' => "Tutor"
            );
        // print("<pre>".print_r($data,true)."</pre>");
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
        $data_tutor = array();
        $data_tutor['kode_tutor'] = $this->input->post('kode_tutor');
        $data_tutor['matkul1'] = $this->input->post('matkul1');
        $data_tutor['matkul2'] = $this->input->post('matkul2');
        $data_tutor['nim'] = $data['nim'];

        // print("<pre>".print_r($data_tutor,true)."</pre>");
        $status = $this->M_Tutor->tambahTutor($data_tutor);
        if ($status == TRUE){
            $this->session->set_flashdata('success', 'Tambah Berhasil');
            // echo "Berhasil";
        }
        else
        {
            $this->session->set_flashdata('error', 'Tambah Gagal');
            // echo "Gagal";
        }
        redirect('User');
    }

}