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
        $query = $this->db->get('kelas');
        return $query;
    }
}