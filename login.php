<?php
include ("includes/header.php");
include ("includes/config.php");
include ("includes/functions.php");

//for session function
session_start();

//for display a message 
$msg =''; $msg1 =''; $email='';

//button for SUBMIT	
	if (isset($_POST['submit']))
	{
		$email=$_POST['mail'];
		$password=$_POST['pass'];
		$checkbox=isset($_POST['check']);

	//for enter email	
	if (empty($email))
	{
		$msg = "<div class  = 'error'>Please enter your Email!</>";
		}
	//for correct password
	else if (empty($password))
	{
		$msg1 = "<div class  = 'error'>Please enter your Password!</>";
		}	
	else if(email_exists($email,$con)){
	
	$pass=mysqli_query($con, "SELECT password FROM users WHERE  mail ='$email'");
	$pass_w=mysqli_fetch_array($pass);	
	$dpass=$pass_w['password'];
	//for password encryption
	$password=md5($password);
	
	//Validation for incorrect password
	if($password!==$dpass) {
		
		$msg1= "<div class  = 'error'>Password is Wrong!</>";
	}
	else {
		//echo "You are Logged in! ";
		
		$_SESSION['mail']=$email;
		if($checkbox=='on')
		{
			setcookie('name', $email, time()+3000);
			
		}
		header ("location: profile.php");
	}
	}
	//for email does not exist
	else {
		$msg="<div class  = 'error'>Email does not Exist!</>";
	}
}
?>

<title> EXPH LOGIN </title>
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
	<div class = 'login-form col-md-4 offset-md-4'>
		<div class = 'jumbotron'style = 'margin-top:50px; padding-top:20px; padding-bottom:10px;'>
		
	<h2 align = 'center'> LOGIN FORM </h2> <br>
	
	<form method ='post'>
		
	<div class = 'form-group'>
	<span class="glyphicon glyphicon-envelope"></span>
	<label> Email: </label>
	<input type= 'email' name='mail' class = 'form-control' value ='<?php echo $email; ?>'/>
	<?php echo $msg; ?>
	</div>
	
	<div class = 'form-group'>
	<span class="glyphicon glyphicon-lock"></span>
	<label> Password: </label>
	<input type= 'password' name='pass' class = 'form-control'/>
	<?php echo $msg1; ?>
	</div>	
		
	<div class = 'form-group'>
	<input type= 'checkbox' name='check'/>
	&nbsp; Keep me Logged in
	</div>	
	
	<div class = 'form=group'>
	<center> <input type = 'submit' value = 'Login' name='submit' class='btn btn-warning' class = 'btn- btn-success' /> </center>
			<br> 
	</div>
	<center><a href = 'forgot.php'>Forgot Password? </a> </center> <br>
	Create an Account? <a href = 'signup.php'> Sign Up </a>  	
	

	</form>
		
		
	</div>
</div>



</body>
</html>

