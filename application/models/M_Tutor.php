<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 10:02
 */

class M_Tutor extends CI_Model
{
    public function getTutor(){
        $this->db->join('tutor','tutor.nim = user.nim');
        $this->db->join('detil_user','user.nim = detil_user.nim');
        $query =$this->db->get('user');
        return $query;
    }
    public function tambahTutor($data)
    {
    	$this->db->insert('tutor', $data);
    	return $this->db->affected_rows() > 0;
    }
    public function getTutorbyNim($nim)
    {
    	$this->db->where('nim', $nim);
    	$query = $this->db->get('tutor');
    	return $query->result()[0];
    }

}