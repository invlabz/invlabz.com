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
					<h3 class="block-title">Add Blog</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/Admin/index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">Blogs / All blogs</li>
						<li class="breadcrumb-item active">ADD</li>
					</ol>
				</div>
			</div>
			
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			


			<div class="container-fluid">				
				<!-- Main Content -->
				
			<div class="widget-area-2 proclinic-box-shadow min-h200">
				<div class="row">

					<div class="col-md-12">


						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Form Item -->
	


							<div class="proclinic-widget">



		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

			

									<div class="form-group">
										<label >Blog Ttitle </label>
										<input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Blog title"  required>
										
									</div>
									<div class="form-group">
										<label >Author Name</label>
										<input name="author" type="text" class="form-control"  placeholder="Author Name"  required>
									</div>
								
									

									<div class="form-group">
										<label >Blog Image</label>
										<input name="image" type="file" class="form-control"  placeholder="Choose Image" required>
									</div>
								

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Blog Content</label>
										<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6" required></textarea >
									</div>
								<input type="hidden" name="id" >
									<button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
							</form>
							</div>
							<!-- /Form Item -->
							</div>


					</div>
					</div>
			</div>

			
</div>






<!-- php  form process satrt here  -->
<?php

  // Create database connection

  

    require 'ImageResize.php';

    use \Gumlet\ImageResize;

  

  // If upload button is clicked ...

  if (isset($_POST['submit'])) {





    include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");

    // Get file name

    $image = $_FILES['image']['name'];



    $newfilename = preg_replace('/\s+/', '_',$image);

 

    $id= $_POST['id'];





    // image file directory

    $target = "images/".basename($newfilename);

    $uploaddir = "images/";

    $resizeimage = $uploaddir.'resize_'.$newfilename;

    $title = mysqli_real_escape_string($connection, $_POST['title']);

	$author = mysqli_real_escape_string($connection, $_POST['author']);

	$content = mysqli_real_escape_string($connection, $_POST['content']);

   

    

    

    // execute query

    



    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {



       $image = new ImageResize($target);

      $image->resize(750, 500);

      $image->save($resizeimage);


        


       $sql  =   "INSERT INTO blog (author,title,content,image) VALUES('$author', '$title', '$content', '$resizeimage')";
       	
         $result = mysqli_query($connection, $sql);



             
           
              if ($result)  {

             
             header('Refresh: 0; URL=/Admin/blog_list.php?status=success');
              }



              else

              {
              	
              	 header('Refresh: 0; URL=/Admin/blog_list.php?status=failed');
              }





    }

 else {


 }



 

    

}


?>
<!-- php form process end here  -->

<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/footer.php");
?>
<?php ob_end_flush(); ?>