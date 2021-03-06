

<?php

// if(!isset($_SESSION['id']))
// {
// 	header('location:index.php');
// }

 include ("header.php");

?>








<div id="content">

			<!-- Top Navigation -->

			

			<!-- /Top Navigation -->

			<!-- Breadcrumb -->





			<div class="row no-margin-padding">

				<div class="col-md-3">

					<h3 class="block-title">PLANS & PRICING</h3>

				</div>



					<div class="col-md-6" id="status"> 

					<?php



					if (isset($_GET['status'])) {

						# code...

					

					$status = $_GET['status'];







					if ($status == "success") {

						echo '<div class="alert alert-success alert-dismissible fade show text-center mt-2" role="alert">

									Save Changes Successfully <strong> !</strong>

									<button type="button" class="close" data-dismiss="alert" aria-label="Close">

										<span aria-hidden="true">×</span>

									</button>

								</div>';

					}

					

					if ($status == "failed") {

							echo '<div class="alert alert-warning alert-dismissible fade show text-center mt-2" role="alert">

									Something Went Wrong <strong> !</strong>

									<button type="button" class="close" data-dismiss="alert" aria-label="Close">

										<span aria-hidden="true">×</span>

									</button>

								</div>';

					}

					}

					?>



				</div>

				<div class="col-md-3">

					<ol class="breadcrumb">

						<li class="breadcrumb-item">

							<a href="/Admin/index.php">

								<span class="ti-home"></span>

							</a>

						</li>

						<li class="breadcrumb-item">Home</li>

						<li class="breadcrumb-item active">Plans & Pricing</li>

					</ol>

				</div>

			</div>

			

			<!-- /Breadcrumb -->

			<!-- Main Content -->

			<?php



    include ("connection.php");



    $fetchqry = "SELECT * FROM `plan` ORDER BY id ASC";



    $result = mysqli_query($connection, $fetchqry);



    $num = mysqli_num_rows($result);



    if ($num > 0)



    {

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

        { ?>




			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow min-h200">
							<h3 class="widget-title text-center"><?php echo $row['plan_name'] ?></h3>
							<div class="row">
								<div class="col-md-12 d-flex justify-content-center">
									<div class="form-inline">
										<div class="form-group mb-2">
											<span>Selling Price </span>
											<input type="text" class="form-control selling_<?php echo $row['id'] ?>"  id="staticEmail2" value="<?php echo $row['selling_price'] ?>"> </div>
										<div class="form-group mx-sm-3 mb-2  justify-content-center">
											<span>Discounted Price </span>
											<label for="inputPassword2" class="sr-only">Sellling Price</label>
											<input type="text" class="form-control discount_<?php echo $row['id'] ?>" id="inputPassword2" value="<?php echo $row['discounted_price'] ?>"> </div>
									</div>
								</div>
								<div class="col-md-12 d-flex justify-content-center mt-3"> <button id="<?php echo $row['id'] ?>" class="btn btn-primary btn-lg updateplan">Update</button> </div>
							</div>
						</div>
					</div>
				</div>
			
			</div>






   





<!-- basic plan modal  -->















<!--  -->









<!-- indivisual  plan modal  -->
















<!-- combo  plan modal  -->







<!-- Modal -->



<form action="plan-update.php" method="post">

<div class="modal fade" id="combo" tabindex="-1" role="dialog" aria-labelledby="combo" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Update Combo Plan Pricing</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

       <div class="form-group">

    <label for="exampleInputEmail1">DISCOUNTED PRICE</label>

    <input type="text" class="form-control" name="combo_discount"  placeholder="DISCOUNTED PRICE " value="<?php echo $row['combo_discount'] ?>">

    

  </div>

  <div class="form-group">

    <label for="exampleInputPassword1">SELLING PRICE</label>

    <input type="text" class="form-control" name="combo_real" placeholder="Selling Price" value="<?php echo $row['combo_real'] ?>">

  </div>

 

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" name="combo" class="btn btn-primary">Save changes</button>

      </div>

    </div>

  </div>

</div>



</form>



<?php



        }



    }



?>





<?php

 include ("footer.php");

?>

