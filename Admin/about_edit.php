<?php ob_start(); ?>
<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/header.php");
?>




	<div id="content">
			<!-- Top Navigation -->
			
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->


			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">ABOUT US EDIT</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/Admin/index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">About us</li>
						<li class="breadcrumb-item active">Edit</li>
					</ol>
				</div>
			</div>
			
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<?php

    include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");

    $fetchqry = "SELECT * FROM `about_aboutus` ORDER BY id ASC";

    $result = mysqli_query($connection, $fetchqry);

    $num = mysqli_num_rows($result);

    if ($num > 0)

    {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        { ?>


			<div class="container-fluid">		
				<?php


				if(isset($_POST['submit'])) {



					$vision = mysqli_real_escape_string($connection, $_POST['vision']);


					$mission = mysqli_real_escape_string($connection, $_POST['mission']);




					$query = "UPDATE about_aboutus SET vision='$vision', mission='$mission' WHERE id=1";

					$query_run = mysqli_query($connection,$query);

					if ($query_run) {
							echo '<div class="alert alert-success alert-dismissible fade show text-center mt-2" role="alert">
									 Data Has Been Successfully <strong>Updated !</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>';
								 header('Refresh: 2; URL=/Admin/about_view.php');
					}

						else {
							echo '<div class="alert alert-warning alert-dismissible fade show text-center mt-2" role="alert">
									 Something Went Wrong <strong>Try Again !</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>';
								 header('Refresh: 2; URL=/Admin/about_view.php');
						}



}






				?>

				

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">	
				<!-- Main Content -->
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow min-h200">
							<h3 class="widget-title text-center">VISION</h3>
							<textarea placeholder="About us vision section content here" class="form-control mt-5 mb-5" id="summernote" rows="4" name="vision"><?php echo $row['vision'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow min-h200">
							<h3 class="widget-title text-center">MISSION</h3>
							<textarea  placeholder="About us mission section content here" class="form-control mt-5 mb-5" id="summernote" rows="4" name="mission"><?php echo $row['mission'] ?></textarea>
						</div>
					</div>
				</div>
			

			<div class="row "> <div class="col-md-12 d-flex justify-content-center mt-3"> 
										<button type="submit" name="submit" class="btn btn-primary btn-lg">UPDATE</button>
									</div> </div></div>

</form>

									 </div>
			<!-- /Main Content -->
		</div>



   <?php

        }

    }

?>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


 <script src="/Admin/summernote-bs4.min.js"></script>



  <script>
                  $(function() {
                    // Summernote
                    $('#summernote').summernote()
                      // CodeMirror
                    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                      mode: "htmlmixed",
                      theme: "monokai"
                    });
                  })


                  $('#summernote').summernote('disable');
                  </script> -->

<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/footer.php");
?>
<?php ob_end_flush(); ?>