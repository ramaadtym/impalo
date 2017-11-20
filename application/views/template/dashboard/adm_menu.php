<div class="menu">
    <ul class="list">
        <li class="header">Navigasi Utama</li>
        <li class="active">
            <a href="<?php echo base_url(); ?>Utama/Dashboard">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">book</i>
                <span>Mata Kuliah</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>MataKuliah">Data Mata Kuliah</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>MataKuliah/v_tambahMataKuliah">Tambah Mata Kuliah</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">people</i>
                <span>Mahasiswa</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>mahasiswa">Data Mahasiswa</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">local_library</i>
                <span>Kelas</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>Kelas">Data Kelas</a>
                    <?php
                    if($this->session->userdata('akses') == 'Admin'){?>
                        <a href="<?php echo base_url();?>Kelas/v_tambahkelas">Tambah Kelas</a>

                    <?php };?>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Presensi</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>Presensi">Data Presensi</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Presensi/Tambah">Tambah Presensi</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">school</i>
                <span>Tutor</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="tutor">Data Tutor</a>
                </li>
            </ul>
        </li>
       <!-- <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">accessibility</i>
                <span>Profil</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php /*echo base_url();*/?>User">My Profile</a>
                </li>
                <li>
                    <a href="<?php /*echo base_url();*/?>User/editProfil">Edit Profile</a>
                </li>
            </ul>
        </li>-->
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">sentiment_very_satisfied</i>
                <span>Pengguna</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>User">Data Pengguna</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>#">Tambah Admin</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>#">Tambah Tutor</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>#">Tambah Mahasiswa</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url();?>Gaji">
                <i class="material-icons">assignment_turned_in</i><span>Pelaporan Gaji</span>
            </a>
        </li>
        <li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">attachment</i>
                <span>Lampiran</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>Lampiran">Data Lampiran</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Lampiran/unggahLampiran">Unggah Lampiran</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

