<?php
include_once('../../connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Lobster&family=Montserrat:wght@400;600&family=Poppins:wght@100&family=Roboto:wght@300;700&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link href="../assets/favicon/favicon.png" rel="icon">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <title>
        Alkawtar - Panneau d'administration
    </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">
    <link rel="stylesheet" href="notes.css">


    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">

            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="index-2.html" class="logo">
                    <!-- logo-->


                    <div class="logo-lg">
                        <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="../images/lofgo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                                data-toggle="push-menu" role="button">
                                <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i
                                                        class="icon-Search"><span class="path1"></span><span
                                                            class="path2"></span></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#"
                                class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                                data-bs-toggle="dropdown" title="User">
                                <div class="d-flex pt-1">
                                    <div class="text-end me-10">
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary"> Omar MAARAF</p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
                                    </div>
                                    <img src="../images/avatar/doctor.png"
                                        class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                                </div>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="./index2.php"><i class="ti-user text-muted me-2"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="./Logout.php"><i class="ti-lock text-muted me-2"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link full-screen btn-warning-light"
                                title="Full Screen">
                                <i class="icon-Position"></i>
                            </a>
                        </li>
                        <!-- Notifications -->

                        <!-- Control Sidebar Toggle Button -->


                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="./index2.php">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Dashboard</span>

                                </a>

                            </li>
                            <li>
                                <a href="appointments.php">
                                    <i class="icon-Barcode-read"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Appointments</span>
                                </a>
                            </li>
                            <li>
                                <a href="./patients.php">
                                    <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Patients</span>
                                </a>

                            </li>


                        </ul>




                    </div>
                </div>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body px-0 text-center">
                                            <div style="min-height: 156px;">
                                                <div id="chart124"></div>
                                            </div>
                                            <div class="mt-15 d-inline-block">
                                                <div class="text-start mb-10">
                                                    <span class="badge badge-xl badge-dot badge-primary me-15"></span>
                                                    <?php include 'data.php' ?>
                                                    Women <?php echo "$info[3]%"; ?>
                                                </div>
                                                <div class="text-start">
                                                    <span
                                                        class="badge badge-xl badge-dot badge-primary-light me-15"></span>
                                                    Man <?php echo "$info[2]%"; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <h4>Vos patients aujourd'hui</h4>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="fs-40 my-0" style="color:#3596f7">
                                                    <?php
                                                    echo $all;

                                                    ?>
                                                </h2>
                                                <!--
                                                <div>
                                                    <span class="badge badge-pill badge-success-light"><i
                                                            class="fa fa-angle-up me-10"></i> 39%</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-body">
                                            <h4>les patients urgent</h4>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="fs-40 my-0" style="color:#ee3158"><?php echo $info[5] ?></h2>
                                                <!--
                                                <div>
                                                    <span class="badge badge-pill badge-danger-light"><i
                                                            class="fa fa-angle-down me-10"></i>04%</span>
                                                </div>
-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body px-0 pb-0">
                                    <div class="px-20 bb-1 pb-15 d-flex align-items-center justify-content-between">
                                        <h4 class="mb-0">Les derniers msg ..</h4>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="inner-user-div3">
                                        <div
                                            class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade"><?php echo date('Y-m-d '); ?> </p>
                                                <h4>Dépendance banque de sang moelle osseuse désinfectants contagieux ?
                                                </h4>

                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade"><?php echo date('Y-m-d '); ?> </p>
                                                <h4>Asthme déclenché anesthésie groupe sanguin moelle osseuse cartilage?
                                                </h4>

                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade"><?php echo date('Y-m-d '); ?> </p>
                                                <h4>Dépendance banque de sang moelle osseuse désinfectants contagieux ?
                                                </h4>

                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade"><?php echo date('Y-m-d '); ?> </p>
                                                <h4>Asthme déclenché anesthésie groupe sanguin moelle osseuse cartilage?
                                                </h4>

                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box b-0 bg-transparent no-shadow">
                                <div class="box-body pt-5 pb-0 px-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">Vos prochains patients </h4>
                                        <a href="./patients.html" class="">tous les patients <ion-icon
                                                name="chevron-forward-outline">
                                            </ion-icon></a>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="box-body p-15">
                                    <div class="mb-10 d-flex justify-content-between align-items-center">
                                        <div class="fw-600 min-w-120">
                                            <?php echo $next[0]['heur']; ?>
                                        </div>
                                        <div
                                            class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <?php
                                                if ($next[0]['sex'] == 'homme') {
                                                    echo '
                                                <img src="../images/avatar/1--.png" class="me-10 avatar rounded-circle"
                                                    alt="">';
                                                } else {
                                                    echo '
                                                <img src="../images/avatar/2--.png" class="me-10 avatar rounded-circle"
                                                    alt="">';
                                                }

                                                ?>
                                                <div>
                                                    <h6 class="mb-0">
                                                        <?php echo " " . $next[0]['nom'] . " " . $next[0]['prenom'] . ""; ?>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-mute"><?php echo $next[0]['phone'] ?></p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#"><i
                                                        class="ti-more-alt rotate-90"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Details</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                        Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-10 d-flex justify-content-between align-items-center">
                                        <div class="fw-600 min-w-120">
                                            <?php echo $next[1]['heur']; ?>
                                        </div>
                                        <div
                                            class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <?php
                                                if ($next[1]['sex'] == 'homme') {
                                                    echo '
                                                <img src="../images/avatar/1--.png" class="me-10 avatar rounded-circle"
                                                    alt="">';
                                                } else {
                                                    echo '
                                                <img src="../images/avatar/2--.png" class="me-10 avatar rounded-circle"
                                                    alt="">';
                                                }

                                                ?>
                                                <div>
                                                    <h6 class="mb-0">
                                                        <?php echo " " . $next[1]['nom'] . " " . $next[1]['prenom'] . ""; ?>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-mute"><?php echo $next[1]['phone'] ?></p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#"><i
                                                        class="ti-more-alt rotate-90"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Details</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                        Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="fw-600 min-w-120">
                                            <?php echo $next[2]['heur']; ?>
                                        </div>
                                        <div
                                            class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <?php
                                                if ($next[2]['sex'] == 'homme') {
                                                    echo '
                                                <img src="../images/avatar/1--.png" class="me-10 avatar rounded-circle"
                                                    alt="">';
                                                } else {
                                                    echo '
                                                <img src="../images/avatar/2--.png" class="me-10 avatar rounded-circle"
                                                    alt="">';
                                                }

                                                ?>
                                                <div>
                                                    <h6 class="mb-0">
                                                        <?php echo " " . $next[2]['nom'] . " " . $next[2]['prenom'] . ""; ?>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-mute"><?php echo $next[2]['phone'] ?></p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#"><i
                                                        class="ti-more-alt rotate-90"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Details</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                        Lab
                                                        Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">les Types des visites</h4>
                                </div>
                                <div class="box-body">
                                    <div class="news-slider owl-carousel owl-sl">
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14"><i
                                                            class="fa fa-link"></i>
                                                        <?php echo " " . $next[0]['nom'] . " " . $next[0]['prenom'] . "" ?>
                                                    </p>
                                                    <span
                                                        class="text-dark fs-16"><?php echo  $next[0]['type']  ?></span>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-end py-10">
                                                <div>
                                                    <a href="./appointments.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                    <a href="./patients.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                                        Patient</a>
                                                </div>
                                                <div>
                                                    <a href="./patients.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                            class="fa fa-check"></i> Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14"><i
                                                            class="fa fa-link"></i>
                                                        <?php echo " " . $next[1]['nom'] . " " . $next[1]['prenom'] . "" ?>
                                                    </p>
                                                    <span class="text-dark fs-16"><?php echo  $next[1]['type']  ?>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-end py-10">
                                                <div>
                                                    <a href="./appointments.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                    <a href="./patients.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                                        Patient</a>
                                                </div>
                                                <div>
                                                    <a href="./patients.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                            class="fa fa-check"></i> Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14"><i
                                                            class="fa fa-link"></i>
                                                        <?php echo " " . $next[2]['nom'] . " " . $next[2]['prenom'] . "" ?>
                                                    </p>
                                                    <span class="text-dark fs-16"><?php echo  $next[2]['type']  ?>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-end py-10">
                                                <div>
                                                    <a href="./appointments.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                    <a href="./patients.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                                        Patient</a>
                                                </div>
                                                <div>
                                                    <a href="./patients.php"
                                                        class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                            class="fa fa-check"></i> Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Sticky Notes</h4>
                                </div>
                                <div class="box-body">
                                    <div id="app">
                                        <button class="add-note" type="button"
                                            style="background-color:#c8c9ee; border-radius:50%;border : none ;width:30px;height:30px">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Analytics</h4>
                                </div>
                                <div class="box-body ps-0">
                                    <div id="overview_trend"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Appointments Overview</h4>
                                </div>
                                <div class="box-body">
                                    <div id="chart432"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Overal appointment</h4>
                                </div>
                                <div class="box-body">
                                    <div id="appointment_overview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"
                    data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>
            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i
                            class="mdi mdi-message-text"></i></a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i
                            class="mdi mdi-playlist-check"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey">
                            <i class="ti-more"></i>
                        </a>
                        <p>Users</p>
                        <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                        <input type="text" name="s" placeholder="Search" class="w-p100">
                    </div>
                    <div class="media-list media-list-hover mt-20">
                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="../images/avatar/1.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="../images/avatar/2.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="../images/avatar/3.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="../images/avatar/4.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="../images/avatar/1.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="../images/avatar/2.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="../images/avatar/3.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="../images/avatar/4.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey">
                            <i class="ti-more"></i>
                        </a>
                        <p>Todo List</p>
                        <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <ul class="todo-list mt-20">
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                            <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                            <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                            <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                            <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                            <span class="text-line">Maecenas scelerisque</span>
                            <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                            <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                            <span class="text-line">Vivamus nec orci</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                            <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                            <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                            <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                            <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- ./side demo panel -->

    <!-- Sidebar -->


    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

    <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
    <script src="../assets/vendor_components/date-paginator/moment.min.js"></script>
    <script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.e0.del"></script>
    <script src="../assets/vendor_components/date-paginator/bootstrap-datepaginator.min.js"></script>

    <!-- Doclinic App <script src="js/pages/dashboard2.js"></script>-->
    <script src="js/template.js"></script>

    <?php include 'data.php' ?>
    <script>
    var days = <?php echo json_encode($weekdays); ?>;
    var dayName = days[new Date().getDay()];
    var days_ = <?php echo json_encode($days); ?>;
    var genre = <?php echo json_encode($genre); ?>;
    var heur = <?php echo json_encode($heur); ?>;
    $(function() {
        var info = <?php echo json_encode($info); ?>;




        'use strict';


        var options = {
            series: [(info[1] + 1 - 1) / 10, (info[0] + 1 - 1) / 10],

            chart: {
                type: 'donut',
                width: 186,
            },
            dataLabels: {
                enabled: false,
            },
            colors: ['#5156be', '#c8c9ee'],
            legend: {
                show: false,
            },

            plotOptions: {
                pie: {
                    donut: {
                        size: '75%',
                        labels: {
                            show: true,
                            total: {
                                showAlways: true,
                                show: true
                            }
                        },
                    }
                }
            },
            labels: ["Woman", "Man"],
            responsive: [{
                breakpoint: 1600,
                options: {
                    chart: {
                        width: 175,
                    }
                }
            }, {
                breakpoint: 500,
                options: {
                    chart: {
                        width: 200,
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart124"), options);
        chart.render();


        var datepaginator = function() {
            return {
                init: function() {
                    $("#paginator1").datepaginator()
                }
            }
        }();
        jQuery(document).ready(function() {
            datepaginator.init()
        });


        $('.inner-user-div4').slimScroll({
            height: '315px'
        });

        $('.inner-user-div3').slimScroll({
            height: '127px'
        });


        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            autoplay: true,
            dots: false,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            }
        });

        var options = {
            series: [genre['homme'], genre['femme'], genre['enfant'], genre['bébé']],
            chart: {
                height: 200,
                type: 'polarArea'
            },
            labels: ['Homme', 'Femme', 'Enfant', 'bébé'],
            fill: {
                opacity: 1
            },
            stroke: {
                width: 1,
                colors: undefined
            },
            yaxis: {
                show: false
            },
            legend: {
                position: 'right'
            },
            colors: ['#5156be', '#3596f7', '#05825f', '#ee3158'],
            plotOptions: {
                polarArea: {
                    rings: {
                        strokeWidth: 0
                    },
                    spokes: {
                        strokeWidth: 0
                    },
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart432"), options);
        chart.render();



        var options = {
            series: [{
                name: 'Total',
                data: [heur[8], heur[9], heur[10], heur[11], heur[12], heur[13], heur[14], heur[15],
                    heur[16]
                ]
            }],
            chart: {
                type: 'bar',
                height: 205,
                toolbar: {
                    show: false
                }
            },
            colors: ['#5156be'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                show: false,
            },
            stroke: {
                show: false,
                width: 0,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00'],
            },

            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                }

            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " Appointment"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#appointment_overview"), options);
        chart.render();



        var options = {
            series: [{
                name: "patients ",
                data: [days_['today_6'], days_['today_5'], days_['today_4'], days_['today_3'],
                    days_[
                        'today_2'], days_['today_1'], days_['today']
                ]
            }],
            chart: {
                height: 205,
                type: 'area',
                toolbar: {
                    show: false
                }
            },
            colors: ['#05825f'],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: 'smooth'
            },
            grid: {
                borderColor: '#e7e7e7',
            },
            xaxis: {

                categories: [days[new Date().getDay() - 6], days[new Date().getDay() - 5], days[new Date()
                        .getDay() - 4], days[new Date().getDay() - 3], days[new Date().getDay() - 2],
                    days[new Date().getDay() - 1], days[new Date().getDay()]
                ],
            },
            legend: {
                show: false,
            }
        };

        var chart = new ApexCharts(document.querySelector("#overview_trend"), options);
        chart.render();




    }); // End of use strict
    </script>
    <script src="notes.js"></script>
</body>


</html>