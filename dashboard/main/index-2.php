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
    <title>Doclinic - Dashboard</title>

    <link rel="stylesheet" href="notes.css">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">

    <link rel="stylesheet" href="css/calendar.css">
    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./js/calendar.js"></script>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <<header class="main-header">

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
                                        <i class="icon-Compiling"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        <span>Profil</span>
                                    </a>

                                </li>


                            </ul>




                        </div>
                    </div>
                </section>
            </aside>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xxxl-9 col-xl-8 col-12">
                                <div class="mb-20 d-flex justify-content-between align-items-center">
                                    <h1 class="my-md-0 mb-10">
                                        <?php echo $username ?>
                                    </h1>

                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box bg-primary">
                                            <div class="box-body">
                                                <div class="mb-15 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Battement de cœur </h4>
                                                    <ion-icon name="heart-outline" style="width: 14px; height:14px;">
                                                    </ion-icon>
                                                </div>
                                                <div>
                                                    <h5 class="fw-400 my-0">75/118</h5>
                                                </div>
                                            </div>
                                            <div class="box-body pt-0 ps-0">
                                                <div id="heartrate"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="mb-15 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Fever</h4>
                                                    <ion-icon name="heart-outline"></ion-icon>
                                                </div>
                                                <div>
                                                    <h5 class="fw-400 my-0">100.8<small>&deg;F</small></h5>
                                                </div>
                                            </div>
                                            <div class="box-body pt-0 ps-0">
                                                <div id="fever"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="mb-15 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Blood Pre..</h4>
                                                    <i class="text-primary fs-18 mdi mdi-heart-pulse"></i>
                                                </div>
                                                <div class="mb-10 d-flex justify-content-between align-items-center">
                                                    <h4 class="fw-400 my-0">75</h4>
                                                    <p class="my-0">Upper</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="fw-400 my-0">124</h4>
                                                    <p class="my-0">Lower</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="box-body">
                                                <div
                                                    class="mb-5 pb-1 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Bill Due</h4>
                                                    <ion-icon name="card-outline"></ion-icon>
                                                </div>
                                                <div>
                                                    <h5 class="fw-300 my-0">$214.86</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div>
                                                    <h4 class="mt-0 mb-5">Heure</h4>

                                                </div>
                                                <div
                                                    class="mt-10 text-center d-flex align-items-center justify-content-between">
                                                    <div id="clock" class="glow"
                                                        style="color:#5156be ;margin-top:25px;">00:00:00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                        #clock {
                                            user-select: none;
                                        }

                                        .glow {
                                            font-size: 25px;
                                            font-weight: bold;
                                            animation: glow 1s ease-in-out infinite alternate;
                                            -moz-animation: glow 1s ease-in-out infinite alternate;
                                            -webkit-animation: glow 1s ease-in-out infinite alternate;
                                        }
                                        </style>
                                        <script>
                                        setInterval(displayTime, 1000)

                                        function displayTime() {
                                            const timeNow = new Date();

                                            let hours = timeNow.getHours();
                                            let minutes = timeNow.getMinutes();
                                            let seconds = timeNow.getSeconds();

                                            hours = hours < 10 ? '0' + hours : hours;
                                            minutes = minutes < 10 ? '0' + minutes : minutes;
                                            seconds = seconds < 10 ? '0' + seconds : seconds;

                                            let timeStr = hours + ":" + minutes + ":" + seconds;

                                            document.getElementById('clock').innerText = timeStr;
                                        }

                                        displayTime();
                                        </script>

                                    </div>
                                    <div class="col-xxxl-8 col-xl-7 col-12">
                                        <div class="box">
                                            <div class="box-header no-border pb-0">
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
                                    <div class="col-xxxl-4 col-xl-5 col-12">
                                        <div class="box">
                                            <div class="box-body px-0 bb-1 text-center">
                                                <div class="avatar avatar-lg status-success">
                                                    <img src="../images/avatar/doctor.png"
                                                        class="rounded-circle bg-primary" alt="" />
                                                </div>
                                                <h4 class="mt-20 mb-15">Dr. Omar MAARAF</h4>
                                                <p class="mb-0">Heart Specialist</p>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-6 be-1">
                                                        <div class="d-flex align-items-center">
                                                            <img src="../images/health-1-color.png"
                                                                class="img-fluid me-10 w-50" alt="">
                                                            <div>
                                                                <h3 class="mb-0"><?php echo $Urg ?></h3>
                                                                <p class="mb-2 text-muted">etat Urgent</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <img src="../images/health-2-color.png"
                                                                class="img-fluid me-10 w-50" alt="">
                                                            <div>
                                                                <h3 class="mb-0"><?php echo $patients ?></h3>
                                                                <p class="mb-2 text-muted">Patients</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-xxxl-3 col-xl-4 col-12">
                                <a class="box box-body mb-5" href="#">
                                    <div class="d-flex align-items-center">
                                        <img class="me-15 avatar avatar-lg bg-primary-light rounded-circle" src="
											../images/avatar/doctor.png" alt="...">
                                        <div class="text-start">
                                            <h2 class="text-primary mb-0 fs-26">Dr. Omar Maaraf</h2>
                                            <h4>Cardiologists</h4>
                                        </div>
                                    </div>
                                </a>
                                <div class="box b-0 bg-transparent no-shadow">
                                    <div class="box-body pb-0 px-0">
                                        <h4 class="mb-0">Vos prochains Appointements </h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
                                        <div class="calendar">
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
                    </section>
                    <script>
                    let calendar = document.querySelector('.calendar')

                    const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                        'September', 'October', 'November', 'December'
                    ]

                    isLeapYear = (year) => {
                        return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 &&
                            year % 400 === 0)
                    }

                    getFebDays = (year) => {
                        return isLeapYear(year) ? 29 : 28
                    }

                    generateCalendar = (month, year) => {

                        let calendar_days = calendar.querySelector('.calendar-days')
                        let calendar_header_year = calendar.querySelector('#year')

                        let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

                        calendar_days.innerHTML = ''

                        let currDate = new Date()
                        if (!month) month = currDate.getMonth()
                        if (!year) year = currDate.getFullYear()

                        let curr_month = `${month_names[month]}`
                        month_picker.innerHTML = curr_month
                        calendar_header_year.innerHTML = year

                        // get first day of month

                        let first_day = new Date(year, month, 1)

                        for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
                            let day = document.createElement('div')
                            if (i >= first_day.getDay()) {
                                day.classList.add('calendar-day-hover')
                                day.innerHTML = i - first_day.getDay() + 1
                                day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
                                if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate
                                    .getFullYear() && month === currDate.getMonth()) {
                                    day.classList.add('curr-date')
                                }
                            }
                            calendar_days.appendChild(day)
                        }
                    }

                    let month_list = calendar.querySelector('.month-list')

                    month_names.forEach((e, index) => {
                        let month = document.createElement('div')
                        month.innerHTML = `<div data-month="${index}">${e}</div>`
                        month.querySelector('div').onclick = () => {
                            month_list.classList.remove('show')
                            curr_month.value = index
                            generateCalendar(index, curr_year.value)
                        }
                        month_list.appendChild(month)
                    })

                    let month_picker = calendar.querySelector('#month-picker')

                    month_picker.onclick = () => {
                        month_list.classList.add('show')
                    }

                    let currDate = new Date()

                    let curr_month = {
                        value: currDate.getMonth()
                    }
                    let curr_year = {
                        value: currDate.getFullYear()
                    }

                    generateCalendar(curr_month.value, curr_year.value)

                    document.querySelector('#prev-year').onclick = () => {
                        --curr_year.value
                        generateCalendar(curr_month.value, curr_year.value)
                    }

                    document.querySelector('#next-year').onclick = () => {
                        ++curr_year.value
                        generateCalendar(curr_month.value, curr_year.value)
                    }

                    let dark_mode_toggle = document.querySelector('.dark-mode-switch')

                    dark_mode_toggle.onclick = () => {
                        document.querySelector('body').classList.toggle('light')
                        document.querySelector('body').classList.toggle('dark')
                    }
                    </script>
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
    <script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

    <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="../../../../rawgit.com/nnnick/Chart.js/v1.0.2/Chart.min.js"></script>

    <script src="js/template.js"></script>
    <script src="js/pages/dashboard.js"></script>
    <script src="notes.js"></script>
    <script src="./js/calendar.js"></script>
</body>


</html>