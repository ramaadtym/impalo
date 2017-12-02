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
    }else if($this->session->userdata('akses') == 'Mahasiswa'){
        $this->load->view('template/dashboard/mhs_menu');
    }

    ?>
        <!-- #Menu -->
        <!-- Footer -->
        <?php $this->load->view('template/footer');?>
        <!-- #Footer -->
    </aside>
</section>
<section class="content">
    <div class="container-fluid">
        <!-- Input -->
        <!-- STEP 2 -->
        <form id="form_advanced_validation" method="POST" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UNGGAH LAMPIRAN
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Data Berkas</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <label class="form-label">Nama</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="ex : [STD] Latihan Multilinked List" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-control show-tick" name="kategori" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php
                                        $kategori = ['MATERI', 'SOAL', 'UMUM'];
                                        foreach ($kategori as $kategori) {
                                            echo "<option value='".$kategori."'>".$kategori."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Unggah Berkas</label>
                                        <small>(*.pdf, *.doc, *.docx, *.ppt, *.pptx)</small>
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="berkas" required>
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
        <!-- END STEP 2 -->
        <!-- #END# Input -->
    </div>
</section>


