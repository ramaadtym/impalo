<?php
/**
 * Created by PhpStorm.
 * User: ramaadtym
 * Date: 29/09/2017
 * Time: 20:58
 */
class M_login extends CI_Model{
    function ceklogin($u,$p)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('detil_user', 'user.nim = detil_user.nim');
        $this->db->where('username', $u);
        $this->db->where('password', $p);
        $kue = $this->db->get();
        return $kue;
        // print_r($kue->result());
//        if ($kue->num_rows() > 0){
//        	return $kue->result()[0];
//        }
//        else
//        {
//        	return FALSE;
//        }
//    }
    }
}
?>