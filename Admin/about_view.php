
<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/header.php");
?>




	<div id="content">
			<!-- Top Navigation -->
			
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->


			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">ABOUT US VIEW</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/Admin/index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">About us</li>
						<li class="breadcrumb-item active">View</li>
					</ol>
				</div>
			</div>
			
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<?php

    //include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");
    include ("Admin/connection.php");

    $fetchqry = "SELECT * FROM `about_aboutus` ORDER BY id ASC";

    $result = mysqli_query($connection, $fetchqry);

    $num = mysqli_num_rows($result);

    if ($num > 0)

    {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        { ?>


			<div class="container-fluid">				
				<!-- Main Content -->
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow min-h200">
							<h3 class="widget-title text-center">VISION</h3>
							<textarea placeholder="About us vision section content here" class="form-control mt-5 mb-5" id="about-doctor" rows="4" readonly><?php echo $row['vision'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow min-h200">
							<h3 class="widget-title text-center">MISSION</h3>
							<textarea placeholder="About us mission section content here" class="form-control mt-5 mb-5" id="about-doctor" rows="4" readonly><?php echo $row['mission'] ?></textarea>
						</div>
					</div>
				</div>
			

			<div class="row "> <div class="col-md-12 d-flex justify-content-center mt-3"> 
										<a href="about_edit.php" class="btn btn-primary btn-lg">Edit</a>
									</div> </div></div> </div>
			<!-- /Main Content -->
		</div>



   <?php

        }

    }

?>








<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/footer.php");
?>
