<?php 
// include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");
include ("Admin/connection.php");

if (isset($_POST['basic'])) {


	$basic_discount = $_POST['basic_discount'];

	$basic_real = $_POST['basic_real'];

	$sql = "UPDATE plan SET basic_discount='$basic_discount', basic_real='$basic_real' WHERE id=1";

	$run = mysqli_query($connection,$sql);
	if ($run) {
		
		// header("location : /Admin/plans-pricing.php?status=success#status");
		header('Refresh: 0; URL=/Admin/plans-pricing.php?status=success#status');
	}


	else {
		header('Refresh: 0; URL=/Admin/plans-pricing.php?status=failed#status');
	}
}


if (isset($_POST['indivisual'])) {


	$indivisual_discount = $_POST['indivisual_discount'];

	$indivisual_real = $_POST['indivisual_real'];

	$sql = "UPDATE plan SET indivisual_discount='$indivisual_discount', indivisual_real='$indivisual_real' WHERE id=1";

	$run = mysqli_query($connection,$sql);
	if ($run) {
		
		// header("location : /Admin/plans-pricing.php?status=success#status");
		header('Refresh: 0; URL=/Admin/plans-pricing.php?status=success#status');
	}


	else {
		header('Refresh: 0; URL=/Admin/plans-pricing.php?status=failed#status');
	}
}





if (isset($_POST['combo'])) {


	$combo_discount = $_POST['combo_discount'];

	$combo_real = $_POST['combo_real'];

	$sql = "UPDATE plan SET combo_discount='$combo_discount', combo_real='$combo_real' WHERE id=1";

	$run = mysqli_query($connection,$sql);
	if ($run) {
		
		// header("location : /Admin/plans-pricing.php?status=success#status");
		header('Refresh: 0; URL=/Admin/plans-pricing.php?status=success#status');
	}


	else {
		header('Refresh: 0; URL=/Admin/plans-pricing.php?status=failed#status');
	}
}





















































?>