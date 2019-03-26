	<?php
include ("includes/header.php");
include ("includes/config.php");
include ("includes/functions.php");


$msg =''; $msg1 =''; $msg2 ='';$msg3 =''; $email =''; $password =''; $cpassword =''; 

	if (isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$cpassword=$_POST['cpass'];
		
		if(empty($email))
		{
		$msg = "<div class  = 'error'>Please enter your Email!</>";
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$msg = "<div class  = 'error'>Please enter valid Email!</>";
		}
		
		else if (empty($password))
		{
		$msg1 = "<div class  = 'error'>Please enter your Password!</>";
		}
		else if(strlen($password)<5) {
			$msg1 = "<div class  = 'error'>Password must contain atleast 4 Characters!</>";
		}
		
		else if (empty($cpassword))
		{
		$msg2 = "<div class  = 'error'>Please confirm your Password!</>";
		}
		else if($password!=$cpassword) {
			
			$msg2= "<div class  = 'error'>Password don't Match!</>";
		}
		else if (email_exists($email,$con)) {
			//$msg= "<div class  = 'error'>Email Found!</>";
			$result=mysqli_query($con, "SELECT SET WHERE mail='email'");
			$retrieve = mysqli_fetch_array($result);
			$EM = $retrieve['mail'];
			
			if ($email==$EM) {
				$pass=md5($password);
				mysqli_query($con, "UPDATE users SET password='$pass'");
				$msg3 = "<div class  = 'success'>Password Changed Successfully!</>";
			}
		}
		else {
			$msg= "<div class  = 'error'>Email does not Exist!</>";
		}
	}
	

?>


<title> FORGOT PASSWORD </title>
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
  <div class ='container'>
	<div class = 'login-form col-md-4 offset-md-4'>
	
	<div class = 'jumbotron' style = 'margin-top:20px;padding-top:20px;padding-bottom:20px;'>
	
	<h2 align = 'center'>FORGOT PASSWORD </h2> 
	<?php echo $msg3; ?> <br>
	
	<form method = 'post' enctype = "multipart/form-data">
	
	<div class ='form-group'>
	<label> Email: </label>
	<input type ='email' name = 'email' value ="<?php echo $email;?>" class ='form-control'>
	<?php echo $msg;?>
	</div>
	
	<div class ='form-group'>
	<label> New Password: </label>
	<input type ='password' name = 'pass' value ="<?php echo $password;?>" class ='form-control'>
	<?php echo $msg1;?>
	</div>
	
	<div class ='form-group'>
	<label> Confirm Password: </label>
	<input type ='password' name = 'cpass' class ='form-control'>
	<?php echo $msg2;?>
	</div>
	<br>	
	<center> <input type = 'submit' value = 'Submit' name='submit' class='btn btn-warning' class = 'btn- btn-success' /> </center> <br>
	
	
	</div>
	</form>	
	 </div>	
   </div>
 </div>
 
 
	</body>
</html>

  
  
  
  
  
