<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/header.php");

include "connection.php";
if(isset($_POST['submit']))
{
	if(empty($_POST['name']))
	{
		$error_1="invalid";
	}
	else
	{
		$name=$_POST['name'];
	}
	if(empty($_POST['designation']))
	{
		$error_2="invalid";
	}
	else
	{
		$designation=$_POST['designation'];
	}
	if(empty($_POST['fb']))
	{
		$error_1="invalid";
	}
	else
	{
		$fb=$_POST['fb'];
	}
	if(empty($_POST['twitter']))
	{
		$error_1="invalid";
	}
	else
	{
		$twitter=$_POST['twitter'];
	}
	if(empty($_POST['linked']))
	{
		$error_1="invalid";
	}
	else
	{
		$linked=$_POST['linked'];
	}
	if(empty($_POST['insta']))
	{
		$error_1="invalid";
	}
	else
	{
		$insta=$_POST['insta'];
	}
	
	// Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
	
	
	$sql = "INSERT INTO teams (name, designation, fb,twitter,linked,insta,photo) 
	VALUES ('$name', '$designation', '$fb','$twitter','$linked','$insta','$filename')";
if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>


<div class="container">
  <h2>Add team members</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label>Designation:</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
    </div>
 
 <div class="form-group">
      <label>fb:</label>
      <input type="text" class="form-control" id="fb" placeholder="Enter fb" name="fb">
    </div>
	<div class="form-group">
      <label>twitter:</label>
      <input type="text" class="form-control" id="twitter" placeholder="Enter twitter" name="twitter">
    </div>
	<div class="form-group">
      <label>linked:</label>
      <input type="text" class="form-control" id="linked" placeholder="Enter linked in id" name="linked">
    </div>
	<div class="form-group">
      <label>insta:</label>
      <input type="text" class="form-control" id="insta" placeholder="Enter insta id" name="insta">
    </div>
	<div class="form-group">
      <label>profile:</label>
       <input type="file" name="photo" id="fileSelect">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

<?php
 include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/footer.php");
?>
