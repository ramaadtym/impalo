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
                        <?php
                        if($jadwal == NULL) {
                            echo "Jadwal Anda belum dimasukkan";
                        }else{
                        ?>
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
                                foreach ($jadwal as $obj) {
                                    echo "<tr>";
                                    echo "<td>$obj->kode_kelas</td>";
                                    echo "<td>$obj->nama_matkul</td>";
                                    echo "<td>$obj->hari</td>";
                                    echo "<td>$obj->jam</td>";
                                    echo "<td>$obj->kode_tutor</td>";
                                    echo "<td>$obj->nama</td>";

                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


