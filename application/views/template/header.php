<?php

    $allUserData = $this->session->all_userdata();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Videodatenbank - <?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/compiled/theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/vendor/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/vendor/brankic.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/vendor/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/vendor/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/vendor/morris.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/be7019ee387/integration/bootstrap/3/dataTables.bootstrap.css" />


    <!-- javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>template/js/bootstrap/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>template/js/vendor/jquery.cookie.js"></script>
    <script src="<?php echo base_url(); ?>template/js/vendor/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>template/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>template/js/vendor/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>template/js/vendor/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>template/js/vendor/morris.min.js"></script>

    <script src="<?php echo base_url(); ?>template/js/vendor/jquery.flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>template/js/vendor/jquery.flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>template/js/vendor/jquery.flot/jquery.flot.tooltip.js"></script>

    <script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/plug-ins/be7019ee387/integration/bootstrap/3/dataTables.bootstrap.js"></script>



    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body id="<?php echo $bodyid; ?>">
    <div id="wrapper">