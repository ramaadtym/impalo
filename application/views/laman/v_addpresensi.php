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
        <!-- Input -->
        <!-- STEP 2 -->
        <?php if (isset($_GET["kode_kelas"])){
            $kode_kelas = $_GET['kode_kelas'];
            $sql = "SELECT * 
                        from kelas k
                        JOIN matkul m ON (m.kode_matkul = k.kode_matkul)
                        JOIN tutor t ON (t.kode_tutor = k.kode_tutor)
                        WHERE k.kode_kelas='$kode_kelas'
                        ";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo '<script>alert("Kode Kelas Tidak Sesuai!");window.location.href=\'../presensi\';</script>';
            }
            $kelas = mysqli_fetch_array($query);
            ?>
            <form id="form_advanced_validation" method="POST" action="../../fungsi/pendaftaran.php?addPresensi=tambahpresensi"enctype="multipart/form-data">
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
                                        <?php echo "<input type='hidden' name='kode_kelas' class='form-control' value='$kelas[kode_kelas]'>" ?>
                                        <?php echo "<b>Kode Kelas : </b>".$kelas['kode_kelas']; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_matkul' class='form-control' value='$kelas[kode_matkul]'>" ?>
                                        <?php echo "<b>Mata Kuliah : </b>".$kelas['nama_matkul']; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_tutor' class='form-control' value=$kelas[kode_tutor]>"; ?>
                                        <?php echo "<b>Kode Tutor : </b>".$kelas['kode_tutor']; ?>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Jadwal Utama</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <?php echo "<b>Hari : </b>".$kelas['hari']; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<b>Jam : </b>".$kelas['jam']; ?>
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
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Scan Absensi</label>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="image" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Foto Dokumentasi</label>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="dokumentasi" required>
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
            <!-- END STEP 2 -->
            <!-- STEP 1 -->
            <?php
        } else {
            ?>
            <form id="form_advanced_validation" method="GET">
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
                                            $sql = "SELECT kode_kelas from kelas";
                                            $kelas = mysqli_query($connect,$sql);
                                            if(mysqli_num_rows($kelas) == 0){
                                                echo '-- Data Kelas Tidak Tersedia --';
                                            } else {
                                                foreach ($kelas as $value) {
                                                    echo "<option value='".$value['kode_kelas']."'>".$value['kode_kelas']."</option>";
                                                }
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



