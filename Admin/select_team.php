<?php
   include('connection.php');
   if(isset($_GET['page']))
   {
	   $page=$_GET['page'];
   }
   else
   {
	   $page=1;
   }
   $num_per_page=3;
   $start_from=($page-1)*3;
?>
<html>
   
   <head>
      <title>Teams </title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color:  #e7e7e7;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  text-transform:uppercase;
}
</style>
   </head>
   
   <body>
      <h1 style="color:red;">TEAM MEMBERS</h1> 
	  <table id="customers">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DESIGNATION</th>
	<th>FB</th>
	<th>TWITTER</th>
	<th>LINKED IN</th>
	<th>INSTA</th>
	<th>PHOTO</th>
	<th colspan="2">UPDATE</th>
  </tr>
  <?php
  $sql = "SELECT * FROM teams limit $start_from, $num_per_page";
$result = mysqli_query($connection, $sql);
	  //$count = mysqli_num_rows($result);
	  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   
 

 echo " <tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['designation']."</td>
	<td>".$row['fb']."</td>
	<td>".$row['twitter']."</td>
	<td>".$row['linked']."</td>
	<td>".$row['insta']."</td>
	<td><img src='upload/".$row['photo']."'height='100px' width='100px'></td>
	<td><a href='edit.php?id=".$row['id']."'>Edit</td>
	<td><a href='delete.php?id=".$row['id']."'>Delete</td>
  </tr>";
  


 }


?>
</table>
<?php
$page_query="select * from teams";
$page_result=mysqli_query($connection,$page_query);
$total_record=mysqli_num_rows($page_result);
$total_page=ceil($total_record/$num_per_page);
if($page>1)
{
	echo "<a class='btn btn-danger' href='select_team.php?page=".($page-1)."'>Previuos</a>";
}
for($i=1;$i<=$total_page;$i++)
{
	echo "<a class='btn btn-primary' href='select_team.php?page=".$i."'>".$i."</a>";
}
if($i>$page)
{
	echo "<a class='btn btn-danger' href='select_team.php?page=".($page+1)."'>Next</a>";
}
?>
      
   </body>
   
</html>

