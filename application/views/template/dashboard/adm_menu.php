<div class="menu">
    <ul class="list">
        <li class="header">NAVIGASI UTAMA</li>
        <li class="active">
            <a href="<?php echo base_url();?>/Utama/Dashboard">
                <i class="material-icons">home</i>
                <span>Beranda</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">local_library</i>
                <span>Kelas</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>Kelas">Data Kelas</a>
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
                <i class="material-icons">person</i>
                <span>Profile</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>User">My Profile</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>User/editProfil">Edit Profile</a>
                </li>
            </ul>
        </li>
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