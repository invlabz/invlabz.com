<!DOCTYPE html>

<html>





<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 10:12:36 GMT -->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>INVLABZ Admin</title>

	<!-- Fav  Icon Link -->

	<link rel="shortcut icon" type="image/png" href="images/fav.png">

	<!-- Bootstrap core CSS -->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- themify icons CSS -->

	<link rel="stylesheet" href="css/themify-icons.css">

	<!-- Animations CSS -->

	<link rel="stylesheet" href="css/animate.css">

	<!-- Main CSS -->

	<link rel="stylesheet" href="css/styles.css">

	<link rel="stylesheet" href="css/red.css" id="style_theme">

	<link rel="stylesheet" href="css/responsive.css">

	<!-- morris charts -->

	<link rel="stylesheet" href="charts/css/morris.css">

	<!-- jvectormap -->

	<link rel="stylesheet" href="css/jquery-jvectormap.css">

	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">



	<script src="js/modernizr.min.js"></script>
	
	<!--style>
	    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color:  #e7e7e7;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  text-transform:uppercase;
}
	     
	   
	</style-->
	
	

</head>



<body>

	<!-- Pre Loader -->

	<div class="loading">

		<div class="spinner">

			<div class="double-bounce1"></div>

			<div class="double-bounce2"></div>

		</div>

	</div>

	<!--/Pre Loader -->

	<!-- Color Changer -->

	<div class="theme-settings" id="switcher">

		<span class="theme-click">

			<span class="ti-settings"></span>

		</span>

		<span class="theme-color theme-default" data-color="green"></span>

		<span class="theme-color theme-blue" data-color="blue"></span>

		<span class="theme-color theme-red theme-active" data-color="red"></span>

		<span class="theme-color theme-violet" data-color="violet"></span>

		<span class="theme-color theme-yellow" data-color="yellow"></span>

	</div>

	<!-- /Color Changer -->

	<div class="wrapper">

		<!-- Sidebar -->

		<nav id="sidebar" class="proclinic-bg">

			<div class="sidebar-header">

				<a href="/Admin/index.php"><img src="/assets/img/logo1.png" class="logo" alt="logo"></a>

			</div>

			<ul class="list-unstyled components">

				<li class="active">

					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">

						<span class="ti-home"></span> Dashboard

					</a>

					<ul class="collapse list-unstyled show" id="nav-dashboard">

						<li>

							<a href="index.php">HOME</a>

						</li>

					

					</ul>

				</li>

				<li>

					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">

						<span class="ti-text"></span> About Us

					</a>

					<ul class="collapse list-unstyled" id="nav-patients">

						<li>

							<a href="about_view.php">View</a>

						</li>

						<li>

							<a href="about_edit.php">Edit/Update</a>

						</li>

						

					</ul>

				</li>
				
				
					<li>

					<a href="#nav-pages" data-toggle="collapse" aria-expanded="false">

						<span class="ti-file"></span> Teams

					</a>

					<ul class="collapse list-unstyled" id="nav-pages">

						<li>

							<a href="add.php">Add Members </a>

						</li>

						<li>

							<a href="select.php">Edit/update</a>

						</li>

						

						
						

					

					</ul>

				</li>
				
				
				
				
				
				
				
				
				

				<li>

					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">

						<span class="ti-pencil-alt"></span> Blogs

					</a>

					<ul class="collapse list-unstyled" id="nav-doctors">

						

						<li>

							<a href="/Admin/blog_list.php">All Blogs</a>

						</li>





						<li>

							<a href="/Admin/blog-add.php">Add Blog</a>

						</li>

						

					</ul>

				</li>

				<li>

					<a href="plans-pricing.php">

						<span class="ti-money"></span> Plan & Pricing

					</a>

				</li>





				<li>

					<a href="contact-details.php">

						<span class="ti-agenda"></span> Contact Details

					</a>

				</li>





				<!--<li>

					<a href="#nav-payment" data-toggle="collapse" aria-expanded="false">

						<span class="ti-money"></span> Payments

					</a>

					<ul class="collapse list-unstyled" id="nav-payment">

						<li>

							<a href="add-payment.html">Add Payment</a>

						</li>

						<li>

							<a href="payments.html">All Payments</a>

						</li>

						<li>

							<a href="about-payment.html">Payment Invoice</a>

						</li>

					</ul>

				</li>-->

				<!--<li>

					<a href="#nav-rooms" data-toggle="collapse" aria-expanded="false">

						<span class="ti-key"></span> Room Allotments

					</a>

					<ul class="collapse list-unstyled" id="nav-rooms">

						<li>

							<a href="add-room.html">Add Room Allotment</a>

						</li>

						<li>

							<a href="rooms.html">All Rooms</a>

						</li>

						<li>

							<a href="edit-room.html">Edit Room Allotment</a>

						</li>

					</ul>

				</li>

				<li class="nav-level-one">

					<a href="#nav-uiKit" data-toggle="collapse" aria-expanded="false">

						<span class="ti-layout-tab"></span> UI Kit

					</a>

					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-uiKit">

						<li>

							<a href="typography.html">Typography</a>

						</li>

						<li>

							<a href="buttons.html">Buttons</a>

						</li>

						<li>

							<a href="cards.html">Cards</a>

						</li>

						<li>

							<a href="tabs.html">Tabs</a>

						</li>

						<li>

							<a href="accordions.html">Accordions</a>

						</li>

						<li>

							<a href="modals.html">Modals</a>

						</li>

						<li>

							<a href="lists.html">Lists &amp; Media Object</a>

						</li>

						<li>

							<a href="grid.html">Grid</a>

						</li>

						<li>

							<a href="progress-bars.html">Progress Bars</a>

						</li>

						<li>

							<a href="notifications-alerts.html">Notifications &amp; Alerts</a>

						</li>

						<li>

							<a href="pagination.html">Pagination</a>

						</li>

						<li>

							<a href="carousel.html">Carousel</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="tables.html">

						<span class="ti-layout-menu-v"></span> Tables

					</a>

				</li>

				<li>

					<a href="#nav-charts" data-toggle="collapse" aria-expanded="false">

						<span class="ti-pie-chart"></span> Charts

					</a>

					<ul class="collapse list-unstyled" id="nav-charts">

						<li>

							<a href="charts-1.html">Morris</a>

						</li>

						<li>

							<a href="charts-2.html">Flot</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="#nav-maps" data-toggle="collapse" aria-expanded="false">

						<span class="ti-location-pin"></span> Maps

					</a>

					<ul class="collapse list-unstyled" id="nav-maps">

						<li>

							<a href="map-1.html">Google Maps</a>

						</li>

						<li>

							<a href="map-2.html">Vector Maps</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="forms.html">

						<span class="ti-layout-media-overlay-alt-2"></span> Forms

					</a>

				</li>

				<li>

					<a href="#nav-icons" data-toggle="collapse" aria-expanded="false">

						<span class="ti-themify-favicon"></span> icons

					</a>

					<ul class="collapse list-unstyled" id="nav-icons">

						<li>

							<a href="font-awesome.html">Font Awesome </a>

						</li>

						<li>

							<a href="themify.html">Themify</a>

						</li>

					</ul>

				</li>-->

			<!--	<li>

					<a href="#nav-pages" data-toggle="collapse" aria-expanded="false">

						<span class="ti-file"></span> Other Pages

					</a>

					<ul class="collapse list-unstyled" id="nav-pages">

						<li>

							<a href="login.html">Login </a>

						</li>

						<li>

							<a href="sign-up.html">Sign Up</a>

						</li>

						<li>

							<a href="404.html">404</a>

						</li>

						<li>

							<a href="blank-page.html">Blank Page</a>

						</li>

						<li>

							<a href="pricing.html">Pricing</a>

						</li>

						<li>

							<a href="faq.html">FAQ</a>

						</li>

						<li>

							<a href="invoice.html">Invoice</a>

						</li>

						<li>

							<a href="blank-page.html">Coming Soon</a>

						</li>

					</ul>

				</li>-->

			</ul>

			<div class="nav-help animated fadeIn">

				<h5><span class="ti-comments"></span> Need Help</h5>

				<h6>

					<span class="ti-mobile"></span> +91 9063233996</h6>

				<h6>

					<span class="ti-email"></span> info@invlabz.com</h6>

				  <p style="color: #fff;">Copyright @2021. Powered by <a href="https://agumentik.com/" rel="noopener" target="_blank">Agumentik Software Private Limited</a></p>

			</div>

		</nav>

		<!-- /Sidebar -->

		<!-- Page Content -->

		<div id="content">

			<!-- Top Navigation -->

			<nav class="navbar navbar-default">

				<div class="container-fluid">

					<div class="responsive-logo">

						<a href="index.php"><img src="/assets/img/logo1.png" class="logo" alt="logo"></a>

					</div>

					<ul class="nav">

						<li class="nav-item">

							<span class="ti-menu" id="sidebarCollapse"></span>

						</li>

						<li class="nav-item">

							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>

						</li>

					

						

						<li class="nav-item">

							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

								<span class="ti-user"></span>

							</a>

							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">

								<h5>John Willing</h5>

								<a class="dropdown-item" href="#">

									<span class="ti-settings"></span> Settings</a>

								<a class="dropdown-item" href="#">

									<span class="ti-help-alt"></span> Help</a>

								<a class="dropdown-item" href="logout.php">

									<span class="ti-power-off"></span> Logout</a>

							</div>

						</li>

					</ul>

				

				</div>

			</nav>

			<!-- /Top Navigation -->