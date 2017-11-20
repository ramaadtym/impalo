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
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /*// put your code here
                            require '../../koneksi.php';
                            $sql = "SELECT * FROM user";
                            $user = mysqli_query($connect, "SELECT * FROM user");
                            if(mysqli_num_rows($user) == 0){
                                //echo '<tr><td colspan="8"><center>Data Tidak Tersedia.</center></td></tr>';
                            } else {
                                foreach ($user as $value) {
                                    echo "
                                <tr>
                                    <td>".$value['nim']."</td>
                                    <td>".$value['username']."</td>
                                    <td>".$value['email']."</td>
                                    <td>".$value['user_level']."</td>
                                    <td>".$value['last_login']."</td>
                                    <td>
                                        <a href='edit.php?nim=$value[nim]'>
                                            <button type=\"button\" class=\"btn btn-primary waves-effect\">
                                                <i class=\"material-icons\">edit</i>
                                            </button>
                                        </a>
                                        <a href='delete.php?nim=$value[nim]'>
                                            <button type=\"button\" class=\"btn btn-danger waves-effect\">
                                                <i class=\"material-icons\">delete_forever</i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            ";
                                }
                            }*/
                           /* require ("../../fungsi/pendaftaran.php");
                            viewUser($connect);*/
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


