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
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA MAHASISWA
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>ID Line</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($tabelMahasiswa as $obj) {
                                echo "<tr>";
                                echo "<td>$obj->nim</td>";
                                echo "<td>$obj->nama</td>";
                                echo "<td>$obj->fakultas</td>";
                                echo "<td>$obj->jurusan</td>";
                                echo "<td>$obj->kelas</td>";
                                echo "<td>$obj->id_line</td>";

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

