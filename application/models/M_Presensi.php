<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Presensi extends CI_Model {

public function getAllPresensi($value='')
	{
		// $this->db->join('detil_user', 'tutor.nim = detil_user.nim', 'left');
		// $this->db->join('tutor', 'absensi.kode_tutor = tutor.kode_tutor', 'left');
		$query = $this->db->get('absensi');
		return $query->result();
	}	

}

/* End of file M_Presensi.php */
/* Location: ./application/models/M_Presensi.php */ ?>