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
       $this->db->join('detil_user', 'lampiran.nim = detil_user.nim', 'left');
       $query = $this->db->get('lampiran');
       return $query->result();
    }
    function hapusLampiran($id){
        $this->db->where('id', $id);
        $fileinfo = $this->db->get('lampiran');
        $fileinfo = $fileinfo->result();
        $path = "./assets/upload/". $fileinfo[0]->file;
        $this->db->where('id', $id);
        $this->db->delete('lampiran');
        $status = unlink($path);
        return $this->db->affected_rows() > 0;
    }
}