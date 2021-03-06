
<?php ob_start(); ?>

<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/header.php");
?>






<!-- Page Content -->
		<div id="content">
			
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-3">
					<h3 class="block-title">BLOGS LIST</h3>
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
                        <li class="breadcrumb-item">Blogs</li>
						<li class="breadcrumb-item active">All blogs</li>
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
							<h3 class="widget-title">BLOGS</h3></div>
							<div class="col-md-12 d-flex justify-content-center">
							<a href="/Admin/blog-add.php" class="btn btn-danger btn-sm">
                              <i class="ti-plus">
                              </i>
                              Add Blog
                              </a></div></div></div>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												ID
											</th>
											<th>Title  & Author</th>
											
											<th>Content</th>
																						<th>Image</th>
											<th>Manage</th>
											
										</tr>
									</thead>
									<tbody>


										  <?php
    // include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");
    include ("Admin/connection.php");

    $query = "SELECT * FROM blog ORDER BY id ASC";

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
												<?php echo $row['id'] ?>
											</td>
											<td><?php echo $row['title'] ?><br>

												<?php echo $row['author'] ?>
											</td>
											
											<td class="content " style="max-width: 300px !important;"><?php echo $row['content'] ?></td>
											<td><img src="<?php echo $row['image'] ?>" width="100px" height="100px"></td>
											<td> <a href="/Admin/blog-edit.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">
                              <i class="ti-pencil-alt">
                              </i>
                              EDIT
                              </a>
                               <a href="#" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">
                              <i class="ti-trash">
                              </i>
                              Delete
                              </a>
                          </td>
											
										</tr>



										<div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">This action cannot be undone. Are you sure you want to delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <!--  -->
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/Admin/blog-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" name="delete">Sure</a>
      </div>
    </div>
  </div>
</div>




																		
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
                                
								<!--Export links-->
							<!-- 	<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav> -->
								<!-- /Export links-->
							
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->




<style type="text/css">
	
	.content {
		max-width: 20%;
	}
</style>








<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/footer.php");
?>
<?php ob_end_flush(); ?>