<?php
include ("includes/header.php");
include ("includes/config.php");
include ("includes/functions.php");

//for session function
session_start();

//for display a message 
$msg =''; $msg1 =''; 
	
	//button for SUBMIT
	if (isset($_POST['submit']))
	{	
		//declare a variable
		$fname=$_POST['name'];
		$password=$_POST['pass'];
	
		//enter your name
	if (empty($fname))
	{
		$msg = "<div class  = 'error'>Please enter your Name!</>";
		}
	//enter your password
	else if (empty($password))
	{	
		$msg1 = "<div class  = 'error'>Please enter your Password!</>";
		}	
	else 
	{	

	$pass=mysqli_query($con, "SELECT password FROM admin WHERE  username ='$fname'");
	$pass_w=mysqli_fetch_array($pass);	
	$dpass=$pass_w['password'];
	//$password=md5($password);
	
	//validation for wrong password
	if($password!==$dpass) {
		
		$msg1= "<div class  = 'error'>Password is Wrong!</>";
	}
	else {
		//echo "You are Logged in! ";
		
		//for session
		$_SESSION['name']=$fname;
		header ("location:admin-panel.php");
	}
	
	
}
	
}
?>

<title> ADMIN LOGIN </title>
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
 <div class = 'container'>
	<div class = 'login-form col-md-4 offset-md-8'>
		<div class = 'jumbotron'style = 'margin-top:50px; padding-top:20px; padding-bottom:10px;'>
		
	<h2 align = 'center'> ADMIN LOGIN </h2> <br>
	
	<form method ='post'>
		
	<div class = 'form-group'>
	<span class="glyphicon glyphicon-user"></span> <label> Username: </label>
	<input type= 'text'  name='name' class = 'form-control'/> 
	<?php echo $msg; ?>
	</div>
	
	<div class = 'form-group'>
	<span class="glyphicon glyphicon-lock"></span>
	<label> Password: </label>
	<input type= 'password' name='pass' class = 'form-control'/>
	<?php echo $msg1; ?>
	</div>	
			
	
	<div class = 'form=group'>
	<center> <input type = 'submit' value = 'Login' name='submit' class='btn btn-warning' class = 'btn- btn-success' /> </center>
			<br> 
	</div>

	</form>
		
		
	</div>
</div>



</body>
</html>

