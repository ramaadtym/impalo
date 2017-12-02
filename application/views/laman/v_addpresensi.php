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
    }?>
    <!-- #Menu -->
    <!-- Footer -->
    <?php $this->load->view('template/footer'); ?>
    <!-- #Footer -->
    </aside>
</section>
<section class="content">
    <div class="container-fluid">
        <!-- Input -->
        <form id="form_advanced_validation" action="../../fungsi/kurikulum.php?tambahkelas=tambah" method="POST">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Presensi
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Data Kelas</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <select class="form-control show-tick" name="kode_kelas" required>
                                            <option value="">-- Pilih Kelas --</option>
                                            <?php
                                            foreach ($tabelKelas as $value) {
                                                    echo "<option value='" . $value->kode_kelas . "'>" . $value->kode_kelas . "</option>";
                                            
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
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
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label class="form-label">Hari</label>
                                    <select class="form-control show-tick" name="hari" required>
                                        <option value="">-- Pilih Hari --</option>
                                        <?php
                                        $hari = ['SENIN', 'SELASA', 'RABU', 'KAMIS', 'JUMAT', 'SABTU'];
                                        foreach ($hari as $hari) {
                                            echo "<option value='" . $hari . "'>" . $hari . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Jam</label>
                                    <select class="form-control show-tick" name="jam" required>
                                        <option value="">-- Pilih Jam --</option>
                                        <?php
                                        $sesi = ['08.30 - 10.30', '10.30 - 12.30', '13.30 - 15.30', '15.30 - 17.30', '18.30 - 20.30'];
                                        foreach ($sesi as $jam) {
                                            echo "<option value='" . $jam . "'>" . $jam . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <p>
                                        <b>Data Mahasiswa</b>
                                    </p>
                                    <select class="selectpicker form-control show-tick" data-live-search="true"
                                            data-max-options="5" name="data[]" multiple="multiple">
                                        <?php
                                        foreach ($tabelMahasiswa as $obj) {
                                            ?>
                                        <option value="<?php echo $obj->nim; ?>"><?php echo  $obj->nama; ?></option>
                                       <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Group Line</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" maxlength="255" name="group_line"
                                                   placeholder="ex : http://line.me/R/ti/g/_dQJisKKmf">
                                        </div>
                                        <div class="help-info">Max. 255 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Tahun Ajaran</label>
                                    <select class="form-control show-tick" name="tahun" required>
                                        <option value="">-- Pilih Tahun Ajaran --</option>
                                        <?php
                                        $tahun = ['1617/1', '1617/2', '1718/1', '1718/2', '1819/1', '1819/2', '1920/1', '1920/2'];
                                        foreach ($tahun as $tahun) {
                                            echo "<option value='" . $tahun . "'>" . $tahun . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <input type="submit" name="submit"
                                           class="btn btn-block btn-lg bg-blue waves-effect">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- #END# Input -->
    </div>
</section>

