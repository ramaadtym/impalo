<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01/11/17
 * Time: 17:52
 */

class Lampiran extends MY_Controller
{
    function unggah_lampiran()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);

        $this->load->model('M_Lampiran');

        if (!$this->upload->do_upload('lampiran')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $file_spec = $this->upload->data();
            $tanggal = $this->input->post('tanggal');
            $nama = $this->input->post('nama');
            $kategori = $this->input->post('kategori');
            $tipe = $file_spec['file_type'];
            $ukuran = $file_spec['file_size'];
            $uploader = $this->session->userdata('nama');
            $file = $file_spec['file_name'];
            $data = array(
                'tanggal' => $tanggal,
                'nama' => $nama,
                'kategori' => $kategori,
                'tipe' => $tipe,
                'ukuran' => $ukuran,
                'uploader' => $uploader,
                'file' => $file
            );
            $this->M_Lampiran->tambahLampiran($data);
        }
    }

    function hapus_lampiran($id){
        $this->load->model('M_Lampiran');
        $this->M_Lampiran->hapusLampiran($id);
    }

    function index()
    {
        $this->load->view('testing/lampiran.php');
    }
}