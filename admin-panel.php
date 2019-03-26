<?php
include ("includes/header.php");
include ("includes/config.php");

//session function
session_start();
$name = $_SESSION['name'];
	
	
	if(isset($name))
	{	
		//dispaly all data in the database
		$result=mysqli_query($con,"SELECT id,first_name,last_name,mail FROM users");
		$row=mysqli_num_rows($result); 
		
		//for the table of all data
		echo "<div class = 'container'>";
		echo " <h3> </br> WELCOME TO ADMIN PANEL</h3>"; 
		echo "Total Registered Users : ".$row;
		echo "<a href='admin-logout.php'> <button class ='btn btn-outline-warning' style='float:right;margin-left:150px;'>Logout</button></a>";
		echo "</br></br>";
		echo "<table class = 'table table-responsive table-striped'>";
		echo "<tr align='center'>";
		echo "<th>Users ID</th>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Email</th>";
		echo "<th>Delete Users</th>";
		echo "<th>Edit User Details</th>";
		echo "</tr>";
		$i=0;
		
		//for display all data in the database
		while($retrieve=mysqli_fetch_array($result))
		{
			$id=$retrieve['id'];
			$fname=$retrieve['first_name'];
			$lname=$retrieve['last_name'];
			$mail=$retrieve['mail'];
				
				echo "<tr align='center'>";
				echo "<th>".$i=$i+1;"</th>";
				echo "<th>$fname</th>";
				echo "<th>$lname</th>";
				echo "<th>$mail</th>";
				echo "<th> <a href = 'delete-admin.php?del=$id'> <button class ='btn btn-outline-warning'> DELETE</button> </a></th>";
				echo "<th> <a href = 'update-admin.php?user=$id'> <button class ='btn btn-outline-warning'> UPDATE</button> </a></th>";
				echo "</tr>";
		}
		
	echo "</table>";
		
	}
else
	{
	header("location:admin.php");
}
?>
