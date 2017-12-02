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
                            DATA HONOR TUTOR
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Kode Tutor</th>
                                <th>Nama</th>
                                <th>Banyak Shift</th>
                                <th>Total Honor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($tabelGaji as $value) {
                                echo "<tr>";
                                echo "<td>$value->kode_tutor</td>";
                                echo "<td>$value->nama</td>";
                                echo "<td>$value->jaga</td>";
                                $jaga = $value->jaga;
                                if ($jaga > intval(10)){
                                    $totalhonor = (25000*$jaga) + 150000;
                                }
                                else
                                {
                                    $totalhonor = 25000*$jaga;
                                }
                                echo "<td>$totalhonor</td>";
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


