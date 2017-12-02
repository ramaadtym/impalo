<?php $this->load->view('template/loader'); ?>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<?php $this->load->view('template/navbar'); ?>
<!-- #Top Bar -->
<section>
    <?php $this->load->view('template/sidebar'); ?>
    <!-- Menu -->
    <<?php
    if($this->session->userdata('akses') == 'Admin'){
        $this->load->view('template/dashboard/adm_menu');
    }else if($this->session->userdata('akses') == 'Tutor'){
        $this->load->view('template/dashboard/tutor_menu');
    }else if($this->session->userdata('akses') == 'Mahasiswa'){
        $this->load->view('template/dashboard/mhs_menu');
    }

    ?>
    <!-- #Menu -->
    <!-- Footer -->
    <?php $this->load->view('template/footer'); ?>
    <!-- #Footer -->
    </aside>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            JADWAL <?php /*echo $mahasiswa['nama'].' ('.$mahasiswa['nim'].')'*/?>
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Kode Kelas</th>
                                <th>Nama Matakuliah</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Kode Tutor</th>
                                <th>Nama Tutor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /*if(mysqli_num_rows($kelas) == 0){
                                //echo '<tr><td colspan="5"><em>Data Tidak Tersedia.</em></td></tr>';
                            } else {
                                foreach ($kelas as $value) {
                                    echo "
                                            <tr>
                                                <td>".$value['kode_kelas']."</td>
                                                <td>".$value['nama_matkul']."</td>
                                                <td>".$value['hari']."</td>
                                                <td>".$value['jam']."</td>
                                                <td>".$value['kode_tutor']."</td>
                                                <td>".$value['nama']."</td>
                                            </tr>
                                        ";
                                }
                            }
                            */?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


