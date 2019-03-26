<?php
include ("includes/header.php");
include ("includes/config.php");

//for session function
session_start();
include ("includes/functions.php");

//for log in 
	if(logged_in())
{
	header("location:login.php");
}	
	else {
		
	if(isset($_COOKIE['name']))
{
	//echo "You are logged in through cookies!";
	
	//for cookie
	$email=$_COOKIE['name'];
	$result=mysqli_query($con, "SELECT first_name, last_name FROM users WHERE mail='$email'");
	$retrieve=mysqli_fetch_array($result);
	//print_r($retrieve);

		//display firstname & lastname
		$firstname = $retrieve['first_name']; 
		$lastname =  $retrieve['last_name'];

?>


	
<title> PROFILE PAGE </title>
<style type = 'text/css'>
	
   .bodybg{
    background: orange;}
  .error
  {
	  color: red;
  }
  
  .success
  {
	  color: green;
	  font-weight: bold;
  }
  
  
  </style>
 </head>
<body class =  'bodybg'> 
	<div class = 'container' style = 'padding-top:10px;background-color:#fff; margin-top:20px;margin-bottom:20px;width:1200px;height:640px'> 

	<h2 align = 'center'> WELCOME <?php echo ucfirst($firstname)." ".ucfirst($lastname)?> </h2>
	<a href = 'logout.php'> <button class ='btn btn-outline-warning' style='margin-top:20px;float:right'> LOGOUT </button></a>
	<a href = 'changepass.php'> <button class ='btn btn-outline-warning' style='margin-top:20px;float:left'> CHANGE PASSWORD </button></a>

</div>
</body>
</html>
<?php 
}

else {
 //for session
 //echo "You are logged in through session!";
 $email=$_SESSION['mail'];
 $result=mysqli_query($con, "SELECT first_name, last_name FROM users WHERE mail='$email'");
 $retrieve=mysqli_fetch_array($result);
//print_r($retrieve);

	//display firstname & lastname
	$firstname = $retrieve['first_name']; 
	$lastname =  $retrieve['last_name'];

?>

<title> PROFILE PAGE </title>
</head>
<style type = 'text/css'>
	
   .bodybg{
    background: orange;}
  .error
  {
	  color: red;
  }
  
  .success
  {
	  color: green;
	  font-weight: bold;
  }
  
  
  </style>
  
<body class =  'bodybg'> 
<div class = 'container' style = 'padding-top:10px;background-color:#fff; margin-top:20px;margin-bottom:20px;width:1200px;height:640px'> 

	<h2 align = 'center'> WELCOME <?php echo ucfirst($firstname)." ".ucfirst($lastname)?> </h2>

<a href = 'logout.php'> <button class ='btn btn-outline-warning' style='margin-top:20px;float:right'> LOGOUT </button> </a>


</div>
</body>
</html>
 

<?php

	}
}
?>
 