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
                            DATA MATAKULIAH
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($tabelMataKuliah as $obj) {
                                $link_hapus = base_url() . "/MataKuliah/hapusMataKuliah/" . $obj->kode_matkul;
                                $link_sunting = base_url() . "/MataKuliah/suntingMataKuliah/" . $obj->kode_matkul;
                                echo "<tr>";
                                 echo "<td>$obj->kode_matkul</td>";
                                 echo "<td>$obj->nama_matkul</td>";
                                 echo "<td class='sorting_1'>
                                        <a href='$link_sunting'>
                                            <button type='button' class='btn btn-primary waves-effect'>
                                                <i class='material-icons'>edit</i>
                                            </button>
                                        </a>
                                        <a href='$link_hapus'>
                                            <button type='button' class='btn btn-danger waves-effect'>
                                                <i class='material-icons'>delete_forever</i>
                                            </button>
                                        </a>
                                    </td>";
                                echo "</tr>";
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

