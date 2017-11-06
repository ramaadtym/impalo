<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:57
 */

class M_Mahasiswa extends CI_Model
{
    public function getMahasiswa(){
        $this->db->where('user_level','Mahasiswa');
        $this->db->join('detil_user','user.nim = detil_user.nim');
        $query =$this->db->get('user');
        return $query;
    }
}