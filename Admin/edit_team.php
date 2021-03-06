<?php
include "connection.php";
$id=$_GET['id'];
$sql = "SELECT * FROM teams where id=$id";
$result = mysqli_query($connection, $sql);
	  //$count = mysqli_num_rows($result);
	  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  $name=$row['name'];
	  $designation=$row['designation'];
	  $fb=$row['fb'];
	  $twitter=$row['twitter'];
	  $linked=$row['linked'];
	  $insta=$row['insta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add team members</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo $name;?>" >
    </div>
    <div class="form-group">
      <label>Designation:</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="<?php echo $designation;?>">
    </div>
 
 <div class="form-group">
      <label>fb:</label>
      <input type="text" class="form-control" id="fb" placeholder="Enter fb" name="fb" value="<?php echo $fb;?>">
    </div>
	<div class="form-group">
      <label>twitter:</label>
      <input type="text" class="form-control" id="twitter" placeholder="Enter twitter" name="twitter" value="<?php echo $twitter;?>">
    </div>
	<div class="form-group">
      <label>linked:</label>
      <input type="text" class="form-control" id="linked" placeholder="Enter linked in id" name="linked" value="<?php echo $linked;?>">
    </div>
	<div class="form-group">
      <label>insta:</label>
      <input type="text" class="form-control" id="insta" placeholder="Enter insta id" name="insta" value="<?php echo $insta;?>">
    </div>
	<div class="form-group">
      <label>profile:</label>
       <input type="file" name="photo" id="fileSelect">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
<?php
  
  }
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
	
	
	$sql = "UPDATE teams SET name='$name', 
	designation='$designation', fb='$fb', twitter='$twitter', linked='$linked', insta='$insta', photo='$filename' WHERE id='$id'";
if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>