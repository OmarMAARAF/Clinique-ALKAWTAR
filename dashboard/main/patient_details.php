<!DOCTYPE html>
<html lang="en">
<?php
include('pdata.php')
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://multipurposethemes.com/admin/doclinic-admin-template/images/favicon.ico">
    <link href="../assets/favicon/favicon.png" rel="icon">
    <title>Alkawtar | Profil</title>
    <link href="../assets/favicon/favicon.png" rel="icon">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">
    <link rel="stylesheet" href="css/calendar.css">
    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary">
                                            <?php echo $username ?>
                                        </p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute">Patient</small>
                                    </div>
                                    <img src="../images/avatar/1--.png"
                                        class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                                </div>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="extra_profile.html"><i
                                            class="ti-user text-muted me-2"></i> Profile</a>
                                    <a class="dropdown-item" href="auth_login.html"><i
                                            class="ti-lock text-muted me-2"></i> Logout</a>
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

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="./index-2.php">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Dashboard</span>

                                </a>

                            </li>
                            <li>
                                <a href="appointments2.php">
                                    <i class="icon-Barcode-read"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Appointments</span>
                                </a>
                            </li>
                            <li>
                                <a href="./patient_details.php">
                                    <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Profil</span>
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
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Patient Details</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Patient Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-body box-profile">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <p>Email :<span
                                                        class="text-gray ps-10"><?php echo $patient_info["email"] ?></span>
                                                </p>
                                                <p>Phone :<span
                                                        class="text-gray ps-10"><?php echo $patient_info["phone"] ?></span>
                                                </p>
                                                <p>Address :<span
                                                        class="text-gray ps-10"><?php echo $patient_info["adresse"] ?></span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div>
                                                <div class="map-box">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.170076265476!2d-1.898528284468699!3d34.65040749341715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd787cbdbf96caef%3A0x23a99f5d4e9a3161!2s%C3%89cole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es!5e0!3m2!1sfr!2sma!4v1653901515026!5m2!1sfr!2sma"
                                                        class="w-p100" height="175" style="border:0"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Assigned Doctor</h4>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center">
                                        <img src="
											../images/avatar/doctor.png" class="w-100 bg-primary-light rounded10 me-15" alt="" />
                                        <div>
                                            <h4 class="mb-0">Dr. Omar MAARAF</h4>
                                            <p class="text-muted">Cardiologists</p>
                                            <div class="d-flex">
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-12">

                            <div class="box">
                                <div class="box-body text-end min-h-150"
                                    style="background-image:url(../images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
                                </div>
                                <div class="box-body wed-up position-relative">
                                    <div class="d-md-flex align-items-center">
                                        <div class=" me-20 text-center text-md-start">
                                            <img src="../images/avatar/1--.png" class="bg-success-light rounded10"
                                                alt="" style="width: 120px;" />
                                            <div class="text-center my-10">
                                                <p class="mb-0">Disease</p>
                                                <h4>Cold & Flu</h4>
                                            </div>
                                        </div>
                                        <div class="mt-40">
                                            <h4 class="fw-600 mb-5"><?php echo $patient_info["username"] ?></h4>
                                            <p><i class="fa fa-clock-o"></i>compte créer le
                                                <?php echo $patient_info["creat"] ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body pt-0">
                                    <h4>Story About Disease</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h4 class="box-title">Current Vitals</h4>
                                            <div class="box-controls pull-right">
                                                <div class="lookup lookup-circle lookup-right">
                                                    <input type="text" name="s" placeholder="Patients id">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flexbox bb-1 mb-15">
                                                <div>
                                                    <p><span class="text-mute">Patient Name:</span>
                                                        <strong>Jonsahn</strong>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p><span class="text-mute">Patient Id:</span>
                                                        <strong>1254896</strong>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row bb-1 pb-10">
                                                        <div class="col-4">
                                                            <img class="img-fluid float-start w-30 mt-10 me-10"
                                                                src="../images/weight.png" alt="">
                                                            <div>
                                                                <p class="mb-0"><small>Weight</small></p>
                                                                <h5 class="mb-0"><strong>230 ibs</strong></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 bs-1 be-1">
                                                            <img class="img-fluid float-start w-30 mt-10 me-10"
                                                                src="../images/human.png" alt="">
                                                            <div>
                                                                <p class="mb-0"><small>Height</small></p>
                                                                <h5 class=" mb-0"><strong>6’1</strong></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <img class="img-fluid float-start w-30 mt-10 me-10"
                                                                src="../images/bmi.png" alt="">
                                                            <div>
                                                                <p class="mb-0"><small>BMI</small></p>
                                                                <h5 class="mb-0"><strong>30.34</strong></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-5">
                                                        <div class="col-12">
                                                            <span class="text-danger">Blood Pressure</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="progress progress-xs mb-0 mt-5 w-40">
                                                                <div class="progress-bar progress-bar-success progress-bar-striped"
                                                                    role="progressbar" aria-valuenow="60"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 100%">
                                                                </div>
                                                            </div>
                                                            <h2 class="float-start mt-0 mr-10"><strong>150</strong></h2>
                                                            <div>
                                                                <p class="mb-0"><small>Systolic</small></p>
                                                                <p class="mb-0 mt-0"><small
                                                                        class="vertical-align-super">mmHg</small></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 bl-1">
                                                            <div class="progress progress-xs mb-0 mt-5 w-40">
                                                                <div class="progress-bar progress-bar-success progress-bar-striped"
                                                                    role="progressbar" aria-valuenow="60"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 100%">
                                                                </div>
                                                            </div>
                                                            <h2 class="float-start mt-0 mr-10"><strong>90</strong></h2>
                                                            <div>
                                                                <p class="mb-0"><small>Diastolic</small></p>
                                                                <p class="mb-0 mt-0"><small
                                                                        class="vertical-align-super">mmHg</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body pt-0">
                                            <p><small>Recorded on 25/05/2018</small></p>
                                        </div>
                                        <div class="box-body bg-primary">
                                            <img src="../images/smoking.png" alt="" class="float-start me-10">
                                            <p>Smoking Status : current every day smoker</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="box">
                                        <div class="box-header no-border">
                                            <ion-icon name="calendar-outline"
                                                style="margin-Right: 13px; width :20px ;height:20px; ">
                                            </ion-icon>
                                            <h4 class="box-title"> Calendrier</h4>
                                        </div>
                                        <div class="calendar" sty>
                                            <div class="calendar-header">
                                                <span class="month-picker" id="month-picker">February</span>
                                                <div class="year-picker">
                                                    <span class="year-change" id="prev-year">
                                                        <pre><</pre>
                                                    </span>
                                                    <span id="year">2021</span>
                                                    <span class="year-change" id="next-year">
                                                        <pre>></pre>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="calendar-week-day">
                                                    <div>Dim</div>
                                                    <div>Lun</div>
                                                    <div>Mar</div>
                                                    <div>Mer</div>
                                                    <div>Jeu</div>
                                                    <div>Ven</div>
                                                    <div>Sam</div>
                                                </div>
                                                <div class="calendar-days"></div>
                                            </div>

                                            <div class="month-list"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /.content -->
            </div>
        </div>
        <script src="./js/calendar.js"></script>
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
    <script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

    <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

    <!-- Doclinic App -->
    <script src="js/template.js"></script>
    <script src="js/pages/patient-details.js"></script>



</body>


</html>