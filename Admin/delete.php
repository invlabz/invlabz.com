
<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "DELETE FROM teams WHERE id='$id'";

if ($connection->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location: select_team.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
?>