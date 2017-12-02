<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01/11/17
 * Time: 17:52
 */

class Lampiran extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_Lampiran');
    }
    public function index(){
        $data['tabelLampiran'] = $this->M_Lampiran->lihatLampiran();
        $this->lampiran_page('laman/v_lampiran',$data);
    }
    public function do_unggah_lampiran()
    {

        print("<pre>".print_r($_POST,true)."</pre>");
        print("<pre>".print_r($_FILES,true)."</pre>");
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $file_spec = $this->upload->data();
            $tanggal = date('y-m-d');
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
            redirect('Lampiran','refresh');
        }
    }


    public function do_hapus_lampiran($id){
        $this->M_Lampiran->hapusLampiran($id);
        redirect('Lampiran','refresh');
    }

    function unggahLampiran()
    {
        $this->addlampiran_page('laman/v_addlampiran');
    }
}