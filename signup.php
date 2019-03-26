<?php 
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

//for display  message 
$msg =''; $msg1 =''; $msg2 =''; $msg3 =''; $msg4 =''; 	$msg5 =''; $msg6 ='';

//button for SUBMIT
if(isset($_POST['submit']))
	
  {
	//declare a variable  
	$firstname= ($_POST['fname']);
	$lastname= ($_POST['lname']);
	$email=($_POST['mail']);
	$password=$_POST['pass'];
	$c_pass=$_POST['cpass'];
	
	$checkbox=isset($_POST['check']);
	
	
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$password."</br>".$c_pass."</br>".$image."</br>".$checkbox;
	
	//validation for firstname
	if (strlen($firstname)<3){		
		$msg = "<div class  = 'error'>First name must contain atleast 2 characters!</>";
	}
	//validation for lastname 
	else if(strlen($lastname)<3){		
		$msg1 = "<div class  = 'error'>Last name must contain atleast 2 characters!</>";
	}
	//validation for firstname 
	else if(preg_match('/[^a-zA-Z_]+$/i', $firstname)){
		$msg = "<div class  = 'error'>First Name may only contain Letters and Spaces!</>";
	}
	//validation for lastname 
	else if(preg_match('/[^a-zA-Z_]+$/i', $lastname)){
		$msg = "<div class  = 'error'>Last Name may only contain Letters and Spaces!</>";
	}
	//validation for email invalid
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$msg2 = "<div class  = 'error'>Enter Valid Email</>";
	}
	//validation for email exist
	else if(email_exists($email,$con)){
		$msg2="<div class  = 'error'>Email Already Exist!</>";
	}
	//validation for password
	else if (strlen($password)<5){		
		$msg3 = "<div class  = 'error'>Please enter your Password!</>";
	}
	//validation for password not the same
	else if ($password!==$c_pass){		
		$msg4 = "<div class  = 'error'>Password is not the same!</>";
	}
	//validation for terms and conditions
	else if ($checkbox==''){		
		$msg5 = "<div class  = 'error'>Please agree our Terms and Conditions!</>";
	}
	
	//mysql select query
	else {
		$password=md5($password);
		mysqli_query($con, "INSERT INTO users(first_name,last_name,mail,password,trip) 
		VALUES ('$firstname','$lastname', '$email', '$password', '$tripname')");
	$msg6 = "<div class = 'success'><center>You are Successfully Registered! </center></div>";
		
	}
	
}

?>

<title> EXPH SIGN UP FORM </title>
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
	<center> <div class = 'login-form col-md-10 offset-md-0'> </center>
	
	<div class = 'jumbotron' style = 'margin-top:20px;padding-top:20px;padding-bottom:20px;'>
	
	<h2 align = 'center'> SIGN UP FORM </h2> <br>
	
	<!-- display a message -->
	<?php echo $msg6;?> <br>	
	
	<form method = 'post' enctype = "multipart/form-data">
	
	<!-- user sign up form -->
	<div class = 'form-group'>
	<label>First Name:  </label>
	<input type = 'text' name='fname' class = 'form-control'>
	<?php echo $msg;?>
	</div>	
	
	<div class = 'form-group'>
	<label> Last Name:  </label>
	<input type = 'text' name='lname'  class = 'form-control'>
	<?php echo $msg1;?>	
	</div>	
  
	<div class = 'form-group'>
	<label> Email:  </label>
	<input type = 'email' name='mail'  class = 'form-control'>
	<?php echo $msg2 ;?>	
	</div>	
	
	<div class = 'form-group'>
	<label> Password:  </label>
	<input type = 'password' name='pass'  class = 'form-control'>
	<?php echo $msg3 ;?>
	</div>	
  
	<div class = 'form-group'>
	<label> Confirm Password:  </label>
	<input type = 'password' name='cpass'  class = 'form-control'>
	<?php echo $msg4 ;?>
	</div>	
	
	<div class="form-group">
                <label for="gender">Trip Name:</label>
                <select class="form-control" name="tripname" id="tripname">
                    <option value="" selected>Select</option>
                    <option value="Random Roadtrips" >Random Roadtrips</option>
                    <option value="Singles Roadtrips" >Singles Roadtrips</option>
					<option value="Retro Roadtrips" >Retro Roadtrips </option>
					<option value="Special Roadtrips" >Special Roadtrips </option>
					<option value="Random Outings" >Random Outings</option>
                </select>
            </div> 
	
	<div class = 'form-group'>
	<input type = 'checkbox' name='check'/>
	I Agree the terms and conditions 
	<?php echo $msg5 ;?>
	</div>	<br>
	
	<center> <input type = 'submit' value = 'Submit' name='submit' class='btn btn-warning' class = 'btn- btn-success' /> </center> <br>
	
	Already  Registered? <a href = 'login.php'> Sign In</a> </center>
	
  </form>
  
  
  
  
		
	 </div>	
   </div>
 </div>
 
 
	</body>
</html>

  
  
  
  
  
