


<?php

 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/header.php");
?>



<!-- Page Content -->
		<div id="content">
			
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-3">
					<h4 class="block-title text-white">MANAGE CONTACT DETAILS </h4>
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
						<li class="breadcrumb-item active">Contact Details</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<div>
								<div class="row">
									<div class="col-md-12">
							<h3 class="widget-title">Details</h3></div>
						</div></div>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												PHONE No.
											</th>
											
											
											<th>WHATSAPP No.</th>
											<th>Address</th>
											<th>FB link</th>
											<th>Twitter Link</th>
											<th>Insta Link</th>
											<th>Linkedin link</th>
											<th>Email</th>
											
											
										</tr>
									</thead>
									<tbody>


										  <?php
    include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");

    $query = "SELECT * FROM contact_details ORDER BY id ASC";

    $query_run = mysqli_query($connection, $query);

?>
                   
                        <?php
    if (mysqli_num_rows($query_run) > 0)

    {

        while ($row = mysqli_fetch_assoc($query_run))

        {

?>
        
										<tr>
											<td>
												<?php echo $row['pnumber'] ?>
											</td>
											<td><?php echo $row['wnumber'] ?></td>
											<td>

												<?php echo $row['address'] ?>
											</td>
											
											<td ><?php echo $row['fb'] ?></td>
											<td ><?php echo $row['insta'] ?></td>
											<td ><?php echo $row['twitter'] ?></td>
											<td ><?php echo $row['link'] ?></td>
											<td ><?php echo $row['email'] ?></td>
									
											
						
									</tr>
									<div class="row">	
										<div class="col-md-12 d-flex justify-content-center">
		 <a href="#"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#contact_edit">
                              <i class="ti-pencil-alt">
                              </i>
                              EDIT
                              </a>
                          </div></div>
                             
                          <!-- Modal -->

                          
<div class="modal fade" id="contact_edit" tabindex="-1" role="dialog" aria-labelledby="contact_edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UPDATE CONATCT DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo $_SERVER[PHP_SELF]?>"  method="POST" id="search_form">
      <div class="modal-body">
        <div class="form-group">
    <label for="exampleInputEmail1">Phone NO.</label>
    <input type="text" name="pnumber" class="form-control"  aria-describedby="emailHelp" placeholder="Phone number" value="<?php echo $row['pnumber'] ?>" required>
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Whatsapp NO.</label>
    <input type="text" name="wnumber" class="form-control"  aria-describedby="emailHelp" placeholder="Whatsapp number" value="<?php echo $row['wnumber'] ?>" required>
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">EMail </label>
    <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email" value="<?php echo $row['email'] ?>" required>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <textarea name="address" class="form-control"  aria-describedby="emailHelp" placeholder="Address" rows="2" required><?php echo $row['address'] ?> </textarea>
    
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Fb Link</label>
    <input type="text" name="fb" class="form-control"  aria-describedby="emailHelp" placeholder="Fb Link" <?php echo $row['fb'] ?>>
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Instagram Link</label>
    <input type="text" name="insta" class="form-control"  aria-describedby="emailHelp" placeholder="Insta Link" value="<?php echo $row['insta'] ?>" required>
    
  </div>



<div class="form-group">
    <label for="exampleInputEmail1">Twitter Link</label>
    <input type="text" name="twitter" class="form-control"  aria-describedby="emailHelp" placeholder="Twitter LInk" value="<?php echo $row['twitter'] ?>" required>
    
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Linkedin Link</label>
    <input type="text" name="link" class="form-control"  aria-describedby="emailHelp" placeholder="Linkedin link" value="<?php echo $row['link'] ?>" required>
    
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="ss">
      </div>
    </div>
  </div>
</div>

</form>
 

																		
      <?php
        }

    }

    else
    {

        echo "No Record Found";

    }

?>

	
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



<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/footer.php");
?>
<?php ob_end_flush(); ?>