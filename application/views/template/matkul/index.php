<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard - Matakuliah</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />

</head>
<?php if($this->session->userdata('akses') == 'Admin'){?>
<body class="theme-blue-grey">
<?php   } ?>
<body class="theme-red">
<?php
/*
 * Variabel $headernya diambil dari libraries template.php
 * (application/libraries/template.php)
 * */
echo $content;

?>
<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Custom Js -->
<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
</body>
</html>