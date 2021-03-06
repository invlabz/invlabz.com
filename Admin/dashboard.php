
<?php
 
 include ("connection.php");


if(!isset($_SESSION['id']))
{
	header('location:index.php');
}

include ("header.php");

?>


			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Quick Statistics</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/Admin/index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- 
			<div class="container-fluid home">


				<div class="row">
				
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-red">
							<div class="widget-left">
								<span class="ti-user"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Registred students</h4>
								<span class="numeric color-red">348</span>
								
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-green">
							<div class="widget-left">
								<span class="ti-email"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Query/Message Received</h4>
								<span class="numeric color-green">1585</span>
								
							</div>
						</div>
					</div>
				
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-yellow">
							<div class="widget-left">
								<span class="ti-eye"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Page Views</h4>
								<span class="numeric color-yellow">7300</span>
								
							</div>
						</div>
					</div>
					
				</div> -->


				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Payment History</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Email</th>
											<th>Phone Number</th>
											<th>Date</th>
											<th>Plan</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Rajesh</td>
											<td>Daniel@gmail.com</td>
											<td>+91 9886958347</td>
											<td>12-10-2020</td>
											<td>12:10PM</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>Riya</td>
											<td>Daniel@gmail.com </td>
											<td>+91 9886958347</td>
											<td>12-10-2020</td>
											<td>1:10PM</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>Siri</td>
											<td>Daniel@gmail.com </td>
											<td>+91 9886958347</td>
											<td>12-10-2020</td>
											<td>1:30PM</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>Rajesh</td>
											<td>Daniel@gmail.com</td>
											<td>+91 9886958347</td>
											<td>12-10-2020</td>
											<td>12:10PM</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>Riya</td>
											<td>Daniel@gmail.com</td>
											<td>+91 9886958347</td>
											<td>12-10-2020</td>
											<td>1:10PM</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>Siri</td>
											<td>Daniel@gmail.com </td>
											<td>+91 9886958347</td>
											<td>12-10-2020</td>
											<td>1:30PM</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>

			

			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	
	<?php 
	 include ("footer.php");

	?>

