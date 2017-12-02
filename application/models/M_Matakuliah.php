<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Matakuliah extends CI_Model
{

    public function tambahMataKuliah($kode_matkul, $nama_matkul)
    {
        $this->db->where('kode_matkul', $kode_matkul);
        $query = $this->db->get('matkul');
        if ($query->num_rows() == 0) {
            $data = array(
                'kode_matkul' => $kode_matkul,
                'nama_matkul' => $nama_matkul
            );
            $this->db->insert('matkul', $data);
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        return FALSE;
    }

    public function hapusMataKuliah($kode_matkul)
    {
        $this->db->where('kode_matkul', $kode_matkul);
        $this->db->delete('matkul');
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function getMataKuliah()
    {
        $query = $this->db->get('matkul');
        return $query;
    }

    public function suntingMataKuliah($kode_matkul,$nama_matkul)
    {
        $data = array(
            'nama_matkul' => $nama_matkul
        );
        $this->db->where('kode_matkul',$kode_matkul);
        $query = $this->db->update('matkul',$data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

}

/* End of file M_Matakuliah.php */
/* Location: ./application/models/M_Matakuliah.php */ ?>