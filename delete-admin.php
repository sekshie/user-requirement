<?php
include ("includes/config.php");
	
	//mysql delete query
	$id=$_GET['del'];
	mysqli_query($con, "DELETE FROM users WHERE id='$id'");
	header("location:admin-panel.php");
	


?>
