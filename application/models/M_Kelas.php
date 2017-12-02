<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:53
 */
class M_Kelas extends CI_Model
{
    public function getKelas()
    {
        $this->db->join('tutor', 'kelas.kode_tutor = tutor.kode_tutor');
        $this->db->join('user', 'tutor.nim = user.nim');
        $this->db->join('detil_user', 'user.nim = detil_user.nim');
        $query = $this->db->get('kelas');
        return $query;
    }
    public function getSpecifiedKelas($kode_kelas)
    {
        $this->db->where('kode_kelas', $kode_kelas);
        $this->db->join('tutor', 'kelas.kode_tutor = tutor.kode_tutor');
        $this->db->join('user', 'tutor.nim = user.nim');
        $this->db->join('detil_user', 'user.nim = detil_user.nim');
        $query = $this->db->get('kelas');
        return $query;
    }

    public function tambahKelas($data,$datamhs)
    {
        $this->db->insert('kelas', $data);
        foreach ($datamhs as $obj) {
        	$mhs = array(
        		'kode_kelas' => $data['kode_kelas'], 
        		'nim' => $obj
        		);
        	$this->db->insert('detail_kelas', $mhs);
        }
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function suntingKelas($data)
    {
        $this->db->where('kode_kelas', $data['kode_kelas']);
        $this->db->update('kelas', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }
}