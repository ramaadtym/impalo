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
    public function getJadwal($nim){
        $kue = $this->db->query("
         SELECT k.kode_kelas kode_kelas, m.nama_matkul nama_matkul, k.kode_tutor kode_tutor, k.hari hari, k.jam jam, d.nama nama
                            FROM kelas k
                            JOIN tutor t ON (t.kode_tutor = k.kode_tutor)
                            JOIN matkul m ON (m.kode_matkul = k.kode_matkul)
                            JOIN user u ON (t.nim = u.nim)
                            JOIN detil_user d ON (u.nim = d.nim)
                            WHERE k.kode_kelas IN (
                              SELECT kode_kelas from detail_kelas WHERE nim='$nim'
                            )
        ");
        return $kue;
    }
}