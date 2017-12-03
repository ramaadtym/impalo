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
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA LAMPIRAN
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Tipe</th>
                                <th>Ukuran</th>
                                <th>Uploader</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            function formatBytes($bytes, $precision = 2) {
                                $units = array('B', 'KB', 'MB', 'GB', 'TB');
                                $bytes = max($bytes, 0);
                                $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
                                $pow = min($pow, count($units) - 1);
                                $bytes /= pow(1024, $pow);
                                return round($bytes, $precision) . ' ' . $units[$pow];
                            }
                            foreach ($tabelLampiran as $value) {
                                    echo "
                                <tr>
                                    <td>".$value->tanggal."</td>
                                    <td>".$value->file."</td>
                                    <td>".$value->kategori."</td>
                                    <td>".$value->tipe."</td>
                                    <td>".formatBytes($value->ukuran)."</td>
                                    <td>".$value->nama."</td>
                                    <td>
                                        <a href='".base_url()."assets/upload/".$value->file."'>
                                            <button type=\"button\" class=\"btn btn-primary waves-effect\">
                                                <i class=\"material-icons\">file_download</i>
                                            </button>
                                        </a>";
                                    $role = $this->session->userdata('akses');
                                    if ($role == "Admin" || $role == "Tutor"){
                                    echo "<a href='".base_url()."Lampiran/do_hapus_lampiran/".$value->id."'>
                                            <button type=\"button\" class=\"btn btn-danger waves-effect\">
                                                <i class=\"material-icons\">delete_forever</i>
                                            </button>
                                        </a>";
                                    }
                                        echo "</td></tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>


