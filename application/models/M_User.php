<?php
/**
 * Created by PhpStorm.
 * User: ramaadtym
 * Date: 29/09/2017
 * Time: 20:58
 */
class M_User extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    function validasiLogin($u, $p)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('detil_user', 'user.nim = detil_user.nim');
        $this->db->where('username', $u);
        $this->db->where('password', $p);
        $kue = $this->db->get();
        return $kue;
    }
}
?>