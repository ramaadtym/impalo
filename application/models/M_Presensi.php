<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Presensi extends CI_Model {

	public function getAllPresensi($value='')
	{
		$query = $this->db->get('absensi');
		return $query->result();
	}	
	public function getPresensi($id_absensi)
	{
		$this->db->where('id_absensi', $id_absensi);
		$query = $this->db->get('absensi');
		return $query->result();
	}	
	public function getPresensiTutor($kode_tutor){
		$this->db->where('kode_tutor', $kode_tutor);
		$query = $this->db->get('absensi');
		return $query->result();
	}
	public function hapusPresensi($id_absensi)
	{
		$this->db->where('id_absensi', $id_absensi);
		$query = $this->db->delete('absensi');

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
	}	
	public function pelaporanGaji()
	{
		$query = $this->db->query("SELECT kode_tutor, nama,  count(*) as jaga FROM absensi
									JOIN tutor using (kode_tutor)
									JOIN detil_user using (nim)
									where admin_acc is not null
									group by kode_tutor");
		return $query;
	}
	public function tambahPresensi($data)
	{
		$this->db->insert('Absensi', $data);
		return $this->db->affected_rows() > 0;
	}
	public function suntingPresensi($id_absensi,$data)
	{
		$this->db->where('id_absensi', $id_absensi);
		$this->db->update('Absensi', $data);
		return $this->db->affected_rows() > 0;
	}
	public function accPresensi($id_absensi, $nama)
	{
		$data['status_acc'] = "Sudah Diverifikasi";
		$data['admin_acc'] = $nama;
		$this->db->where('id_absensi', $id_absensi);
		$this->db->update('absensi', $data);
	}

}

/* End of file M_Presensi.php */
/* Location: ./application/models/M_Presensi.php */ ?>