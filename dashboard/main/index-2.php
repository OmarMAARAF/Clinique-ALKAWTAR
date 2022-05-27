<!DOCTYPE html>
<html lang="en">
  <?php
      include_once("connectAll.php");
	?>
<!-- Mirrored from multipurposethemes.com/admin/doclinic-admin-template/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 13:54:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://multipurposethemes.com/admin/doclinic-admin-template/images/favicon.ico">
	<link href="../assets/favicon/favicon.png" rel="icon">
    <title>Doclinic - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
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
								<p class="pt-5 fs-14 mb-0 fw-700 text-primary">Johen Doe</p>
								<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
							</div>
							<img src="../images/avatar/doctor.png"
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
							<i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
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
						<h1 class="my-md-0 mb-10">Johen doe</h1>
						<button type="button" class="waves-effect waves-light btn btn-primary"><i class="mdi mdi-plus me-15"></i>Add Record</button>
					</div>
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-12">
							<div class="box bg-primary">
								<div class="box-body">
									<div class="mb-15 d-flex justify-content-between align-items-center">
										<h4 class="my-0">Heart Rate</h4>
										<i class="fs-18 mdi mdi-heart-outline"></i>
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
										<i class="text-primary fs-18 mdi mdi-heart-outline"></i>
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
									<div class="mb-5 pb-1 d-flex justify-content-between align-items-center">
										<h4 class="my-0">Bill Due</h4>
										<i class="text-primary fs-18 mdi mdi-wallet"></i>
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
										<h4 class="mt-0 mb-5">Fever History</h4>
										<select class="form-select no-border ps-0 w-auto">
											<option>1 to 10 Jan '21</option>
											<option>11 to 31 Jan 21</option>
											<option>1 to 15 Feb '21</option>
											<option>16 to 18 Feb '21</option>
										</select>
									</div>
									<div class="mt-10 text-center d-flex align-items-center justify-content-between">
										<div class="d-flex justify-content-center align-items-start">
											<h5 class="text-danger fs-24 fw-600 my-0">99</h5><small class="fs-14 text-danger fw-600 my-0">+12%</small>
										</div>
										<p class="mb-0 text-center">Yesterday</p>
									</div>
								</div>
							</div>							
							<a href="#" class="box">
								<div class="box-body">
									<div class="text-center d-flex align-items-center justify-content-between">
										<i class="text-primary fs-24 fa fa-user-md"></i>
										<div class="fw-600 fs-18">Johen Mark</div>
									</div>
									<div class="text-fade text-end fs-16 pb-1">My Doctor</div>
								</div>
							</a>
						</div>
						<div class="col-xxxl-8 col-xl-7 col-12">
							<div class="box">
								<div class="box-header no-border pb-0">
									<h4 class="box-title">Heart ECG</h4>
								</div>
								<div class="box-body pt-5 pb-0">
									<div class="mb-15 d-flex justify-content-between align-items-center">
										<select class="form-select no-border ps-0 w-auto">
											<option>1 to 10 Jan 2021</option>
											<option>11 to 31 Jan 2021</option>
											<option>1 to 15 Feb 2021</option>
											<option>16 to 18 Feb 2021</option>
										</select>
										<div class="bg-lightest p-10 rounded10">
											<p class="mb-0">
												<span class="text-primary pe-10">72 bmp</span>Average
											</p>
										</div>
									</div>
								</div>
								<div class="box-body py-0">
									<canvas id="ecg" class="h-250 w-p100"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-5 col-12">
							<div class="box">
								<div class="box-body px-0 bb-1 text-center">
									<div class="avatar avatar-lg status-success">
										<img src="../images/avatar/avatar-13.png" class="rounded-circle bg-primary" alt="" />
									</div>
									<h4 class="mt-20 mb-15">Dr. Poul doe</h4>
									<p class="mb-0">Heart Specialist</p>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-6 be-1">
											<div class="d-flex align-items-center">
												<img src="../images/health-1-color.png" class="img-fluid me-10 w-50" alt="">
												<div>
													<h3 class="mb-0">10</h3>
													<p class="mb-2 text-muted">Operation</p>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="d-flex align-items-center">
												<img src="../images/health-2-color.png" class="img-fluid me-10 w-50" alt="">
												<div>
													<h3 class="mb-0">47</h3>
													<p class="mb-2 text-muted">Patients</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="box-body">
									<button type="button" class="waves-effect waves-light d-block w-p100 btn btn-primary-light"><i class="me-15 mdi mdi-comment-outline"></i>Message</button>
								</div>
							</div>
						</div>	
						<div class="col-xl-8 col-12">			
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
									<div><p><span class="text-mute">Patient Name:</span> <strong>Jonsahn</strong></p></div>
									<div><p><span class="text-mute">Patient Id:</span> <strong>1254896</strong></p></div>
							  	</div>	
								  <div class="row">						
									<div class="col-12">
										<div class="row bb-1 pb-10">							
											<div class="col-4">							  
												<img class="img-fluid float-start w-30 mt-10 me-10" src="../images/weight.png" alt="">
												<div>
													<p class="mb-0"><small>Weight</small></p> 
													<h5 class="mb-0"><span>230 ibs</span></h5>
												</div>
											</div>							
											<div class="col-4 bs-1 be-1">							  
												<img class="img-fluid float-start w-30 mt-10 me-10" src="../images/human.png" alt="">
												<div>
													<p class="mb-0"><small>Height</small></p> 
													<h5 class=" mb-0"><span>6’1</span></h5>
												</div>
											</div>							
											<div class="col-4">							  
												<img class="img-fluid float-start w-30 mt-10 me-10" src="../images/bmi.png" alt="">
												<div>
													<p class="mb-0"><small>BMI</small></p> 
													<h5 class="mb-0"><span>30.34</span></h5>
												</div>
											</div>
										</div>									
									</div>
								  </div>
							</div>
							  <div class="box-body pt-0">
								<p><small>Recorded on 25/05/2020</small></p>
							  </div>
							  <div class="box-body bg-primary">
								  <img src="../images/smoking.png" alt="" class="float-start me-10">
								  <p>Smoking Status : current every day smoker</p>
							  </div>
						  </div>	
						</div>
						<div class="col-xl-4">
							<a href="#" class="box">
								<div class="box-body">
									<img src="https://multipurposethemes.com/admin/doclinic-admin-template/images/glucose-meter.svg" class="w-50 h-50 mb-5" alt="" />
									<div class="fs-18 mt-5">Glucose Level</div>
									<div class="fw-400 text-primary fs-22 pb-1">85-95</div>
								</div>
							</a>
							<a href="#" class="box">
								<div class="box-body">
									<img src="https://multipurposethemes.com/admin/doclinic-admin-template/images/petri-dish.svg" class="w-50 h-50 mb-5" alt="" />
									<div class="fs-18 mt-5">Blood Count</div>
									<div class="fw-400 text-primary fs-22 pb-1">9.456/ml</div>
								</div>
							</a>
						</div>
					</div>					
				</div>
				<div class="col-xxxl-3 col-xl-4 col-12">
					<a class="box box-body mb-5" href="#">
					  <div class="d-flex align-items-center">
						<img class="me-15 avatar avatar-lg bg-primary-light rounded-circle" src="../images/avatar/avatar-2.png" alt="...">
						<div class="text-start">
						  <h2 class="text-primary mb-0 fs-26">Dr. Kevin Black</h2>
						  <h4>Cardiologists</h4>
						</div>
					  </div>
					</a>
					<div class="box b-0 bg-transparent no-shadow">
						<div class="box-body pb-0 px-0">
							<h4 class="mb-0">Scheeduled Appointments</h4>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<span class="badge badge-success-light">Routine Checkup</span>
							<h4 class="mt-20 mb-10">Meculam Deo - Standard Consult</h4>
							<div class="d-flex bb-1 mb-15 pb-15">
								<p class="mb-0 text-mute me-20">09:15am - 10:45am</p>
								<p class="mb-0 text-mute"><i class="fa fa-clock-o me-5"></i> <span class="text-primary">Starts in 15 m</span></p>
							</div>							
						    <div class="d-flex align-items-center justify-content-between">								
							    <div class="d-flex align-items-center">
									<img class="me-15 avatar avatar-lg bg-primary-light rounded-circle" src="../images/avatar/avatar-3.png" alt="...">
									<div class="text-start">
									  <h4 class="text-primary mb-0">Dr. Meculam</h4>
									  <small>+1 142 536 7890</small>
									</div>
							    </div>
								<div>
									<span class="badge badge-xl badge-dot badge-primary me-15"></span>Billed
								</div>
						    </div>
						</div>
						<div class="box-footer text-end">
							<button type="button" class="waves-effect waves-light btn-sm btn btn-secondary"><i class="mdi mdi-pencil me-15"></i>Edit Consult</button>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<span class="badge badge-danger-light">Emegency</span>
							<h4 class="mt-15 mb-10">Maical Deo - Primium Consult</h4>
							<div class="d-flex bb-1 mb-5 pb-15">
								<p class="mb-0 text-mute me-20">09:15am - 10:45am</p>
								<p class="mb-0 text-mute"><i class="fa fa-clock-o me-5"></i> <span class="text-primary">Starts in 15 m</span></p>
							</div>							
						    <div class="d-flex align-items-center justify-content-between">								
							    <div class="d-flex align-items-center">
									<img class="me-15 avatar avatar-lg bg-primary-light rounded-circle" src="../images/avatar/avatar-4.png" alt="...">
									<div class="text-start">
									  <h4 class="text-primary mb-0">Dr. Maical Deo</h4>
									  <small>+1 421 563 7458</small>
									</div>
							    </div>
								<div>
									<span class="badge badge-xl badge-dot badge-dark me-15"></span>Bulk Billed
								</div>
						    </div>
						</div>
						<div class="box-footer text-end">
							<button type="button" class="waves-effect waves-light btn-sm btn btn-secondary"><i class="mdi mdi-pencil me-15"></i>Edit Consult</button>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<span class="badge badge-info-light">Emegency</span>
							<h4 class="mt-15 mb-10">Jilmil Deo - Neuro Consult</h4>
							<div class="d-flex bb-1 mb-10 pb-20">
								<p class="mb-0 text-mute me-20">09:15am - 10:45am</p>
								<p class="mb-0 text-mute"><i class="fa fa-clock-o me-5"></i> <span class="text-primary">Starts in 15 m</span></p>
							</div>							
						    <div class="d-flex align-items-center justify-content-between">								
							    <div class="d-flex align-items-center">
									<img class="me-15 avatar avatar-lg bg-primary-light rounded-circle" src="../images/avatar/avatar-9.png" alt="...">
									<div class="text-start">
									  <h4 class="text-primary mb-0">Dr. Maical Deo</h4>
									  <small>+1 125 412 0215</small>
									</div>
							    </div>
								<div>
									<span class="badge badge-xl badge-dot badge-dark me-15"></span>Bulk Billed
								</div>
						    </div>
						</div>
						<div class="box-footer text-end">
							<button type="button" class="waves-effect waves-light btn-sm btn btn-secondary"><i class="mdi mdi-pencil me-15"></i>Edit Consult</button>
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
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
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
	
	<!-- Doclinic App -->
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>
	
</body>

<!-- Mirrored from multipurposethemes.com/admin/doclinic-admin-template/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 13:54:23 GMT -->
</html>
