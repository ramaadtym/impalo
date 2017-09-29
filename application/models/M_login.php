<?php
/**
 * Created by PhpStorm.
 * User: ramaadtym
 * Date: 29/09/2017
 * Time: 20:58
 */
class M_login extends CI_Model{
    function ceklogin($u,$p){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('nim', $u);
        $this->db->where('password', $p);
        $kue = $this->db->get();
        return $kue;
    }

}
?>