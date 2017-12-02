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
        <?php /*if (isset($_GET["kode"]) && isset($_GET['id'])){
            $kode_kelas = $_GET['kode'];
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
            $search = $_GET['id'];
            $sql = "SELECT *
                        FROM absensi
                        WHERE id_absensi='$search' AND kode_kelas='$kode_kelas' AND status_acc='Pending' OR status_acc = 'Sudah Diverifikasi'";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo '<script>alert("ID Absensi / Kode Kelas / Status ACC Tidak Sesuai");window.location.href=\'../presensi\';</script>';
            }
            $presensi = mysqli_fetch_array($query);
            */?>
            <form id="form_advanced_validation" action="../../fungsi/pendaftaran.php?editPresensi=edit&cari=<?php /*echo $search*/ ; ?>." method="POST" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    EDIT PRESENSI
                                </h2>
                            </div>
                            <div class="body">
                                <h2 class="card-inside-title">Data Kelas</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_kelas' class='form-control' value=''>" ?>
                                        <?php echo "<b>Kode Kelas : </b>"/*.$kelas['kode_kelas']*/; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_matkul' class='form-control' value=''>" ?>
                                        <?php echo "<b>Mata Kuliah : </b>"/*.$kelas['nama_matkul']*/; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<input type='hidden' name='kode_tutor' class='form-control' value=>"; ?>
                                        <?php echo "<b>Kode Tutor : </b>"/*.$kelas['kode_tutor']*/; ?>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Jadwal Utama</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <?php echo "<b>Hari : </b>"/*.$kelas['hari']*/; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php echo "<b>Jam : </b>"/*.$kelas['jam']*/; ?>
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
                                                echo "<option value='".$status."'";
                                                if ($presensi['status_pertemuan'] == $status) {
                                                    echo "selected";
                                                }
                                                echo ">";
                                                echo $status."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Tanggal</label>
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="tanggal" placeholder="Please choose a date..." value="<?php /*echo $presensi['tanggal']*/?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Jam Mulai</label>
                                            <div class="form-line">
                                                <input type="text" class="timepicker form-control" name="waktu_mulai" placeholder="Please choose a time..." value="<?php /*echo $presensi['waktu_mulai']*/?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Jam Selesai</label>
                                            <div class="form-line">
                                                <input type="text" class="timepicker form-control" name="waktu_selesai" placeholder="Please choose a time..." value="<?php /*echo $presensi['waktu_selesai']*/?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <label class="form-label">Tempat</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" placeholder="ex : Gedung F Lantai 2" value="<?php /*echo $presensi['tempat']*/?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <label class="form-label">Catatan</label>
                                            <div class="form-line">
                                                <textarea name="catatan" class="form-control no-resize auto-growth" placeholder="ex : Murid telat datang hingga lebih dari 30 menit dan/atau Saya telat 30 menit. Wajib diisi ya:)" required><?php /*echo $presensi['catatan']*/?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Scan Absensi</label>
                                            <a href="../../images/presensi/<?php /*echo $presensi['img_absen']*/; ?>" data-sub-html="Demo Description" target="_blank">
                                                <img class="img-responsive thumbnail" src="../../images/presensi/<?php /*echo $presensi['img_absen'];*/ ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Foto Dokumentasi</label>
                                            <a href="../../images/dokumentasi/<?php /*echo $presensi['dokumentasi'];*/ ?>" data-sub-html="Demo Description" target="_blank">
                                                <img class="img-responsive thumbnail" src="../../images/dokumentasi/<?php /*echo $presensi['dokumentasi'];*/ ?>">
                                            </a>
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
/*        } else {
            $x = base_url()."/Presensi";
            echo ("<script>alert('ID Presensi / Kode Kelas Tidak Sesuai');window.location.href='$x'</script>");
        }
        */?>
        <!-- END STEP 2 -->
        <!-- #END# Input -->
    </div>
</section>


