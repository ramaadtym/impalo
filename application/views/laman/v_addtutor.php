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
        <form id="form_advanced_validation" action="../../fungsi/pendaftaran.php?addUser=tambahuser" method="POST">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Tutor
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Data Akun</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" minlength="10" maxlength="10" name="nim" required>
                                            <label class="form-label">NIM</label>
                                        </div>
                                        <div class="help-info">Min. 10, Max. 10 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" minlength="5" maxlength="255" name="username">
                                            <label class="form-label">Username</label>
                                        </div>
                                        <div class="help-info">Min.5, Max. 255 characters</div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" minlength="8" maxlength="255" name="password" required>
                                            <label class="form-label">Password</label>
                                            <div class="help-info">Min.8, Max. 255 characters</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control" maxlength="255" name="email">
                                            <label class="form-label">Email</label>
                                            <div class="help-info">Max. 255 characters</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Nama Lengkap</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" maxlength="255" name="nama" required>
                                            <label class="form-label">Nama Lengkap</label>
                                            <div class="help-info">Max. 255 characters</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Jenis Kelamin</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="demo-radio-button">
                                        <input name="jeniskelamin" type="radio" class="with-gap" id="laki-laki" value="Laki-laki" />
                                        <label for="laki-laki">Laki - laki</label>
                                        <input name="jeniskelamin" type="radio" class="with-gap" id="perempuan" value="Perempuan" />
                                        <label for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Tanggal Lahir</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" name="tgl_lahir" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Data Kampus</h2>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <select class="selectpicker form-control show-tick" data-live-search="true" name="fakultas" required>
                                        <option value="">-- Pilih Fakultas --</option>
                                        <?php
                                        $fakultas = ['INFORMATIKA', 'TEKNIK ELEKTRO', 'REKAYASA INDUSTRI', 'EKONOMI DAN BISNIS', 'KOMUNIKASI DAN BISNIS', 'INDUSTRI KREATIF', 'ILMU TERAPAN', 'PASCASARJANA'];
                                        foreach ($fakultas as $fakultas) {
                                            echo "<option value='".$fakultas."'>".$fakultas."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="selectpicker form-control show-tick" data-live-search="true" name="jurusan" required>
                                        <option value="">-- Pilih Jurusan --</option>
                                        <?php
                                        $jurusan = ['S1 TEKNIK INFORMATIKA','S1 COMPUTATIONAL & DATA SCIENCE','S1 TEKNIK INFORMATIKA (LANJUTAN)','S1 TEKNIK INFORMATIKA (INTERNATIONAL CLASS)','S1 TEKNOLOGI INFORMASI','S1 TEKNIK TELEKOMUNIKASI','S1 TEKNIK ELEKTRO','S1 SISTEM  KOMPUTER','S1 TEKNIK FISIKA','S1 TEKNIK TELEKOMUNIKASI (LANJUTAN)','S1 SISTEM KOMPUTER (LANJUTAN)','S1 TEKNIK TELEKOMUNIKASI (INTERNATIONAL CLASS)','S1 TEKNIK INDUSTRI','S1 SISTEM INFORMASI','S1 TEKNIK INDUSTRI (INTERNATIONAL CLASS)','S1 SISTEM INFORMASI (INTERNATIONAL CLASS)','S1 INTERNATIONAL ICT BUSINESS','S1 MBTI','S1 AKUNTANSI','S1 AKUNTANSI (LANJUTAN)','S1 ILMU KOMUNIKASI','S1 ADMINISTRASI BISNIS','S1 ADMINISTRASI BISNIS (INTERNATIONAL CLASS)','S1 ADMINISTRASI BISNIS (LANJUTAN)','S1 DIGITAL PUBLIC RELATIONS','S1 ILMU KOMUNIKASI (INTERNATIONAL CLASS)','S1 DESAIN KOMUNIKASI VISUAL','S1 KRIYA TEKSTIL DAN MODE (FASHION DESAIN)','S1 DESAIN INTERIOR','S1 DESAIN PRODUK','S1 SENI RUPA INTERMEDIA','D3 TEKNIK TELEKOMUNIKASI','D3 TEKNIK INFORMATIKA','D3 MANAJEMEN PEMASARAN','D3 TEKNIK KOMPUTER','D3 MANAJEMEN INFORMATIKA','D3 KOMPUTERISASI AKUNTANSI','D3 PERHOTELAN','S1 TERAPAN MULTIMEDIA','S2 TEKNIK ELEKTRO-KOMUNIKASI','S2 TEKNIK INFORMATIKA','S2 TEKNIK INDUSTRI','S2 MANAJEMEN'];
                                        foreach ($jurusan as $jurusan) {
                                            echo "<option value='".$jurusan."'>".$jurusan."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" maxlength="10" name="kelas" required>
                                            <label class="form-label">Kelas</label>
                                            <div class="help-info">Max. 10 characters</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Kontak</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" maxlength="255" name="id_line" required>
                                            <label class="form-label">ID Line</label>
                                            <div class="help-info">Max. 255 characters</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" maxlength="13" name="telepon" required>
                                            <label class="form-label">No HP</label>
                                            <div class="help-info">Max. 13 characters</div>
                                        </div>
                                    </div>
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
        <!-- #END# Input -->
    </div>
</section>


