 <?php
include ("includes/header.php");
include ("includes/config.php");

//for session function
session_start();
include ("includes/functions.php");

//for display a message 	
$msg =''; $msg1 =''; $msg2 ='';
	
		//button for SUBMIT
		if(isset($_POST['submit']))
		{
			//declare variable
			$password=$_POST['pass'];
			$cpassword=$_POST['cpass'];
			
			//enter new password
			if(empty($password))
			{
					$msg = "<div class  = 'error'>Please enter  New Password!</>";
			}
			//validation for password atleast 4 character 
			else if (strlen($password)<5)
			{
				$msg = "<div class  = 'error'>Password must contain 4 Characters!</>";
			}
			//enter confirm password
			else if(empty($cpassword))
				{
						$msg1 = "<div class  = 'error'>Please Confirm Password!</>";
				}
			//validation for not the same password	
			else if ($password!=$cpassword)
			{
				$msg1 = "<div class  = 'error'>Password is not the same!</>";
			}
			
			else {
				//password encryption
				$pass=md5($password);
				//for update the new password in the database
				mysqli_query($con, "UPDATE SET password='$password'");
				$msg2 = "<div class = 'success'><center>Password Changed Successfully! </center></div>";
			}
			
		}
		
		


?>

<title> CHANGE PASSWORD </title>
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
		
		
	<h2 align = 'center'> CHANGE PASSWORD</h2> <br>
	
	<?php echo $msg2;?> <br>	
	
	<form method ='post'>
		
	<div class = 'form-group'>
	<label> New Password: </label>
	<input type= 'password' name='pass' class = 'form-control'/>
	<?php echo $msg; ?>
	</div>
	
	<div class = 'form-group'>
	<label> Confrm Password: </label>
	<input type= 'password' name='cpass' class = 'form-control'/>
	<?php echo $msg1; ?>
	</div>	
		

	<div class = 'form=group'>
	<center> <input type = 'submit' value = 'Submit' name='submit' class='btn btn-warning' class = 'btn- btn-success' /> </center>
			<br> 
	</div>

	</form>
		
		
	</div>
</div>



</body>
</html>
