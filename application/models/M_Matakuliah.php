
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class M_Matakuliah extends CI_Model {
 
 	public function tambahMataKuliah($kode_matkul,$nama_matkul)
 	{
 		$this->db->where('kode_matkul', $kode_matkul);
 		$query = $this->db->get('matkul');
 		if ($query->num_rows() == 0){
 		$data = array(
 			'kode_matkul' => $kode_matkul,
 			'nama_matkul' => $nama_matkul
 		);
 		$this->db->insert('matkul', $data);
 		if ($this->db->affected_rows() > 0){
 			return TRUE;
 		}
 	}
 		return FALSE;
 	}
 
 }
 
 /* End of file M_Matakuliah.php */
 /* Location: ./application/models/M_Matakuliah.php */ ?>