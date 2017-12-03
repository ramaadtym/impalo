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
    <?php
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
    <?php 
    if ($this->input->server('REQUEST_METHOD') == "POST"){ ?>
            <form id="form_advanced_validation" method="POST" action="<?php echo base_url(); ?>Presensi/tambahPresensi" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    CREATE PRESENSI
                                </h2>
                            </div>
                            <div class="body">
                                <h2 class="card-inside-title">Data Kelas</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_kelas' class='form-control' value='$kelas->kode_kelas'>" ?>
                                        <?php echo "<b>Kode Kelas : </b>".$kelas->kode_kelas; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_tutor' class='form-control' value=$kelas->kode_tutor>"; ?>
                                        <?php echo "<b>Kode Tutor : </b>".$kelas->kode_tutor; ?>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Jadwal Utama</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <?php echo "<b>Hari : </b>".$kelas->hari; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<b>Jam : </b>".$kelas->jam; ?>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Pelaksanaan</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Status Pertemuan</label>
                                        <select class="form-control show-tick" name="status_pertemuan" required>
                                            <option value="">-- Pilih Status Pertemuan --</option>
                                            <?php
                                            $status = ['Tetap', 'Pengganti', 'Responsi'];
                                            foreach ($status as $status) {
                                                echo "<option value='".$status."'>".$status."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Tanggal</label>
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="tanggal" placeholder="Please choose a date..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Jam Mulai</label>
                                            <div class="form-line">
                                                <input type="text" class="timepicker form-control" name="waktu_mulai" placeholder="Please choose a time..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Jam Selesai</label>
                                            <div class="form-line">
                                                <input type="text" class="timepicker form-control" name="waktu_selesai" placeholder="Please choose a time..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <label class="form-label">Tempat</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" placeholder="ex : Gedung F Lantai 2" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <label class="form-label">Catatan</label>
                                            <div class="form-line">
                                                <textarea name="catatan" class="form-control no-resize auto-growth" placeholder="ex : Murid telat datang hingga lebih dari 30 menit dan/atau Saya telat 30 menit. Wajib diisi ya:)" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="checkbox" id="pernyataan" name="pernyataan" required />
                                        <label for="pernyataan">Dengan ini saya menyatakan bahwa data yang saya berikan adalah benar.</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <input type="submit" name="submit" class="btn btn-block btn-lg bg-blue waves-effect">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php } else { ?>
            <form id="form_advanced_validation" method="POST">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    CREATE PRESENSI
                                </h2>
                            </div>
                            <div class="body">
                                <h2 class="card-inside-title">Kelas</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" name="kode_kelas" required>
                                            <option value="">-- Pilih Kelas --</option>
                                            <?php
                                            foreach ($tabelKelas as $value) {
                                                echo "<option value='".$value->kode_kelas."'>".$value->kode_kelas."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-block btn-lg bg-blue waves-effect">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php } ?>
        <!-- END STEP 2 -->
        <!-- #END# Input -->
    </div>
</section>



