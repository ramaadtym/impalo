<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01/11/17
 * Time: 17:38
 */

class M_Lampiran extends CI_Model
{

    function tambahLampiran($data){
        $this->db->insert('lampiran',$data);
        return $this->db->affected_rows() > 0;
    }
    function lihatLampiran(){
       $query = $this->db->get('lampiran');
       return $query->result();
    }
    function hapusLampiran($id){
        
        $this->db->delete('lampiran','id',$id);
        return $this->db->affected_rows() > 0;
    }
}