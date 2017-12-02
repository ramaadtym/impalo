<?php $this->load->view('template/loader');?>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<?php $this->load->view('template/navbar');?>
<!-- #Top Bar -->
<section>
    <?php $this->load->view('template/sidebar');?>
        <!-- Menu -->
    <?php
    if($this->session->userdata('akses') == 'Admin'){
        $this->load->view('template/dashboard/adm_menu');
    }else if($this->session->userdata('akses') == 'Tutor'){
        $this->load->view('template/dashboard/tutor_menu');
    }

    ?>
        <!-- #Menu -->
        <!-- Footer -->
        <?php $this->load->view('template/footer');?>
        <!-- #Footer -->
    <
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA PRESENSI
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Kode Kelas</th>
                                <th>Pertemuan</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status ACC</th>
                                <th>Admin ACC</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($tabel as $obj) {
                                ?>
                                <tr>
                                <td><?php echo $obj->kode_kelas; ?></td>
                                <td><?php echo $obj->status_pertemuan; ?></td>
                                <td><?php echo $obj->tanggal; ?></td>
                                <td><?php echo $obj->waktu_mulai . " - " . $obj->waktu_selesai; ?></td>
                                <td><?php echo $obj->status_acc; ?></td>
                                <td><?php echo $obj->admin_acc; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'Presensi/v_suntingPresensi/'. $obj->id_absensi;?>">
                                        <button type="button" class="btn btn-primary waves-effect">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
                                    <a href="<?php echo base_url() . 'Presensi/hapusPresensi/'. $obj->id_absensi;?>">
                                        <button type="button" class="btn btn-danger waves-effect">
                                            <i class="material-icons">delete_forever</i>
                                        </button>
                                    </a>
                                </td>
                                </tr>
                                <?php
                            } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>