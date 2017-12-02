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
        if (!($this->session->userdata('masuk') && $this->session->userdata('akses') == "Admin")){
            redirect('/','refresh');
        }
        $data['tabel'] = $this->M_Presensi->getAllPresensi();
        $this->presensi_page('laman/v_presensi',$data);
    }
    public function tambah(){
        if (!($this->session->userdata('masuk') && $this->session->userdata('akses') == "Admin")){
            redirect('/','refresh');
        }
        $query = $this->M_Kelas->getKelas();
        $data['tabelKelas'] = $query->result();
        $query = $this->M_Mahasiswa->getMahasiswa();
        $data['tabelMahasiswa'] = $query->result();
        $this->addpresensi_page('laman/v_addpresensi',$data);
    }
    public function hapusPresensi($id_absensi){
        if (!($this->session->userdata('masuk') && $this->session->userdata('akses') == "Admin")){
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

}