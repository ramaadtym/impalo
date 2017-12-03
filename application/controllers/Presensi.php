<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:43
 */

class Presensi extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        $this->load->model('M_Presensi');
        $this->load->model('M_Mahasiswa');
        $this->load->model('M_Kelas');
	}
    public function index()
    {
        $role = $this->session->userdata('akses');
        if (!($this->session->userdata('masuk') && ($role == "Admin" || $role == "Tutor"))){
            redirect('/','refresh');
        }
        if ($role == "Admin")
            $data['tabel'] = $this->M_Presensi->getAllPresensi();
        else if ($role == "Tutor"){
            $kode_tutor = $this->session->userdata('kode_tutor');
            $data['tabel'] = $this->M_Presensi->getPresensiTutor($kode_tutor);
        }
        $this->presensi_page('laman/v_presensi',$data);
    }
    public function tambah(){
        if (!($this->session->userdata('masuk') && ($this->session->userdata('akses') == "Admin"||$this->session->userdata('akses') == "Tutor"))){
            redirect('/','refresh');
        }
        $role = $this->session->userdata('akses');
        if ($this->input->server('REQUEST_METHOD') == "GET"){
        if ($role == "Admin"){
        $query = $this->M_Kelas->getKelas();
        $data['tabelKelas'] = $query->result();
            echo $kode_tutor;
        }
        else if ($role == "Tutor")
        {
            $kode_tutor = $this->session->userdata('kode_tutor');
            $query = $this->M_Kelas->getKelasTutor($kode_tutor);
            $data['tabelKelas'] = $query->result();
        }
        $query = $this->M_Mahasiswa->getMahasiswa();
        $data['tabelMahasiswa'] = $query->result();
        $this->addpresensi_page('laman/v_addpresensi',$data);
        }
        else
        {
        $kode_kelas = $this->input->post('kode_kelas');
        $query = $this->M_Kelas->getSpecifiedKelas($kode_kelas);
        $data['kelas'] = $query->result()[0];
        $query = $this->M_Kelas->getKelas();
        $data['tabelKelas'] = $query->result();
        $query = $this->M_Mahasiswa->getMahasiswa();
        $data['tabelMahasiswa'] = $query->result();
        $this->addpresensi_page('laman/v_addpresensi',$data);            
        }
    }
    public function hapusPresensi($id_absensi){
        if (!($this->session->userdata('masuk') && ($this->session->userdata('akses') == "Admin"||$this->session->userdata('akses') == "Tutor"))){
            redirect('/','refresh');
        }
        $status = $this->M_Presensi->hapusPresensi($id_absensi);
        if ($status == TRUE){
            $this->session->set_flashdata('success', 'Hapus Berhasil');
        }
        else
        {
            $this->session->set_flashdata('error', 'Hapus Gagal');
        }
        redirect('Presensi','refresh');
    }
    public function editPresensi($id_absensi){
        $absen = $this->M_Presensi->getPresensi($id_absensi);
        $absen = $absen[0];
        $data['dataPresensi'] = $absen;
        $data['dataKelas'] = $this->M_Kelas->getSpecifiedKelas($absen->kode_kelas)->result()[0];
        $this->editpresensi_page('laman/v_editpresensi',$data);
    }
    public function suntingPresensi($id_absensi){
        $data = array(
            'status_pertemuan' => $this->input->post('status_pertemuan'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_selesai' => $this->input->post('waktu_selesai'),
            'tempat' => $this->input->post('tempat'),
            'catatan' => $this->input->post('catatan')
            );
        $status = $this->M_Presensi->suntingPresensi($id_absensi,$data);
        redirect('Presensi');

    }
    public function tambahPresensi($value='')
    {
        // var_dump($_POST);
        $kode_kelas = $this->input->post('kode_kelas');
        $kelas = $this->M_Kelas->getSpecifiedKelas($kode_kelas)->result()[0];
        $data = array(
            'kode_matkul' => $kelas->kode_matkul,
            'kode_tutor' => $kelas->kode_tutor,
            'kode_kelas' => $kode_kelas,
            'status_pertemuan' => $this->input->post('status_pertemuan'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_selesai' => $this->input->post('waktu_selesai'),
            'tempat' => $this->input->post('tempat'),
            'catatan' => $this->input->post('catatan')
            );
        $status = $this->M_Presensi->tambahPresensi($data);
        redirect('Presensi','refresh');
    }
    public function accPresensi($id_absensi)
    {
        // print("<pre>".print_r($_POST,true)."</pre>");
        $nama = $this->session->userdata('nama');
        $status = $this->M_Presensi->accPresensi($id_absensi,$nama);
        redirect('Presensi');
    }
}