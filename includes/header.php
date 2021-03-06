<?php include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ardrenne Medical Services</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		
		<!--Main Slider-->
		<link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/header2.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/footer.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/index.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
	
		
		
	</head>
	<body>
		
		<header>

			<div class="top-part__block">
				<div class="search__box-block">
					<div class="container">
						<input type="text" id="search" class="input-sm form-full" placeholder="Search Now">
						<a href="#!" class="search__close-btn"> <i class="fa fa-times" aria-hidden="true"></i> </a>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<p>
								Welcome to Ardenne Medical Center, where we are Family Doctors!!
							</p>
						</div>
						<div class="col-sm-5">
							<div class="social-link__block text-right">
								<a href="https://www.facebook.com/" class="facebook"> <i class="fa fa-facebook"></i> </a>
								<a href="https://twitter.com/login" class="twitter"> <i class="fa fa-twitter"></i> </a>
								<a href="https://google.com/login" class="google-plus"> <i class="fa fa-google-plus"></i> </a>						

							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="middel-part__block">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 logo col-md-12 d-flex align-items-center"> 

							<a href="index.php"> <img src="assets/images/logo.png"  width= "responsive"; height=" 150px"; alt="Logo"> </a>
							
							<div class="navbar-header">
								<button type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#navbar-menu">
									<i class="fa fa-bars"></i>
								</button>

							</div>
						</div>
						<div class="col-lg-8 col-md-12">
							<div class="top-info__block text-right">
								<ul>
									<li>
										<i class="fa fa-map-marker"></i>
										<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.2073113320084!2d-76.78619948528717!3d18.015580087705032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb3fb4b8c84d85%3A0xa6884d59ab260047!2sArdenne%20Pharmacy!5e0!3m2!1sen!2sjm!4v1606982331127!5m2!1sen!2sjm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"> </iframe> -->
											<p><a href="https://goo.gl/maps/HnTCJtmeL2Zi1wrt9">
												7A Ardenne Road
											    Jamaica, Kgn 20
										</a>
										</p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
											<p>
								<a href="tel:8762943710" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">8762943710</p></a>

											</p>
											<p>
								 <a href="tel:8763329320" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">8763329320</p></a>

											</p>
									</li>
									
									
									<li>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<p>
											Mail Us
											<span> <a href="mailto:jamaica.medicalctr@gmail.com">jamaica.medicalctr@gmail.com</a> </span>
										</p>
									</li>
									<li>
									<div class="navbar-nav active ml-auto">

										<?php if(!isset($_SESSION['userid'])){
										?> 
												<a class="nav-item nav-link" href="login.php"> Login <span class="sr-only">(current)</span> </a>
															
										<?php } else{ ?>
											<?php $usernamecap = $_SESSION['username'];?>

											<a class="nav-item nav-link" href="#"><span> Hello <?php echo ucfirst($usernamecap) ?>!!!!</span> <span class="sr-only">(current)</span> </a>
											<a class="nav-item nav-link" href="logout.php"> Logout <span class="sr-only">(current)</span> </a>

										<?php } ?>
										</div>
									</li>
								</ul>                               
			
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="main_nav stricky-header__top navbar-toggleable-md">

				<nav class="navbar navbar-default navbar-sticky bootsnav">
					<div class="container">
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-menu">
							<ul class="nav navbar-nav mobile-menu d-flex justify-content-between">
								<li>
									<a href="index.php">Home</a>
									
								</li>
								<li>
									<a href="#!">About us</a>
									<span class="submenu-button"></span>
									<ul class="dropdown-menu">
										<li>
											<a href="about.php">About US</a>
										</li>
										
										<li>
											<a href="career.php">Career</a>
										</li>
										
									</ul>
								</li>
								<li>
									<a href="javascript:avoid(0);">Services</a>
									<span class="submenu-button"></span>
									<ul class="dropdown-menu">
										<li>
											<a href="services.php">All Services</a>
										</li>
										<li>
											<a href="services-details.php">Services Details</a>
										</li>

									</ul>
								</li>
								<li>
									<a href="javascript:avoid(0);">Appointments</a>
									<span class="submenu-button"></span>
									<ul class="dropdown-menu">
										<li>
											<a href="appoint.php">Make Appointments</a>
										</li>

										<li> 
											<!-- views attending doctors -->
											<a href="viewrecords.php">Views Appointments (Staff Only)</a>
										</li>

									</ul>
								</li>				
		
								<li>
									<a href="appointcalendar.php">Calendar</a>
									<span class="submenu-button"></span>
									
								</li>
								<li>
									<a href="#!">Contact us</a>
									<span class="submenu-button"></span>
									<ul class="dropdown-menu">
										<li>
											<a href="contact.php">contact</a>
										</li>
										
									</ul>
								</li>
							</ul>
						</div>
						<!--navbar-collapse -->
					</div>
				</nav>
			</div>

			
		</header>

		<!-- END HEADER -->