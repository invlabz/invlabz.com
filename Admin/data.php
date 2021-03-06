<?php

include('connection.php');
$message = array();

if(isset($_POST['username']) && ($_POST['password'])) 
{
    
   $username = $_POST['username'];
   $password = $_POST['password'];
   
   $sql = "SELECT * FROM admin_users WHERE username = '$username' and password = '$password'";
   $res = mysqli_query($connection,$sql);
   $num = mysqli_num_rows($res);

   if($num == 1) 
   {
      while($row=mysqli_fetch_array($res))
      {
          $_SESSION['id']= $row['id'];
          $_SESSION['name']= $row['username'];
      }
      echo "1";
   }

   else
   {
     echo "0";
   }

}

else if(isset($_POST['id']) && ($_POST['selling_price']) && ($_POST['discount']) )
{
   $id = $_POST['id'];
   $selling_price = $_POST['selling_price'];
   $discount = $_POST['discount'];
   $sql = "UPDATE plan SET selling_price = $selling_price, discounted_price= $discount WHERE id = $id";
   $res = mysqli_query($connection,$sql);
   echo "Plan Successfully Updated";
}

else if(isset($_POST['tablename']) )
{
   $table = $_POST['tablename'];
   $sql = "SELECT * FROM $table";
   $res = mysqli_query($connection,$sql);
   $result = json_encode($res);
   print_r($result);

}

else if(isset($_POST['tabledelete']) )
{
   $table = $_POST['tabledelete'];
   $sql = "DELETE * FROM $table";
   $res = mysqli_query($connection,$sql);
   echo "success";
}











?>