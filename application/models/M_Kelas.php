<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:53
 */

class M_Kelas extends CI_Model
{
    public function getKelas(){
    	$this->db->join('tutor', 'kelas.kode_tutor = tutor.kode_tutor');
    	$this->db->join('user', 'tutor.nim = user.nim');
    	$this->db->join('detil_user', 'user.nim = detil_user.nim');
        $query = $this->db->get('kelas');
        return $query;
    }
}