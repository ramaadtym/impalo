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
        <?php $this->load->view('template/dashboard/adm_menu');?>
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
                            DATA USER 
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>User Level</th>
                                <th>Last Login</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($tabelUser as $value) {
                                    echo "
                                <tr>
                                    <td>".$value->nim."</td>
                                    <td>".$value->username."</td>
                                    <td>".$value->email."</td>
                                    <td>".$value->user_level."</td>
                                    <td>".$value->last_login."</td>
                                </tr>";
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


