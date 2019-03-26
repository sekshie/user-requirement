<?php 
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");


$msg =''; $msg1 =''; $msg2 =''; $msg3 =''; $msg4 =''; 	$msg5 =''; $msg6 ='';
$id=$_GET['user'];
		if(isset($id)){ 
	  $result=mysqli_query($con, "SELECT  first_name, last_name, mail FROM users WHERE id='$id'");
	  $retrieve=mysqli_fetch_array($result);
	  $name=$retrieve['first_name'];
	  $last=$retrieve['last_name'];
	  $mail=$retrieve['mail'];
	 }
if(isset($_POST['submit']))
	
  {
	  
	  
	$firstname= ($_POST['fname']);
	$lastname= ($_POST['lname']);
	$email=($_POST['mail2']);
	
	
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$password."</br>".$c_pass."</br>".$image."</br>".$checkbox;
	
	//validation for firstname 
	if (strlen($firstname)<3){		
		$msg = "<div class  = 'error'>Fisrt name must contain atleast 2 characters!</>";
	}
	//validation for lastname 
	else if(strlen($lastname)<3){		
		$msg1 = "<div class  = 'error'>Last name must contain atleast 2 characters!</>";
	}
	//validation for email
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$msg2 = "<div class  = 'error'>Enter Valid Email</>";
	}
	
	//to update database
	else {
		//$password=md5($password);
		//mysql update query
		mysqli_query($con, "UPDATE users SET first_name='$firstname',last_name='$lastname',mail='$email' WHERE id='$id'");
		$msg6 = "<div class = 'success'><center> User Details Successfully Updated! </center></div>";
		header("location:admin-panel.php");
	}

}

?>

<title> EXPH UPDATE USER</title>
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
	<div class = 'login-form col-md-10 offset-md-1'>
	
	<div class = 'jumbotron' style = 'margin-top:20px;padding-top:20px;padding-bottom:20px;'>
	
	<h2 align = 'center'> UPDATE USER DETAILS</h2> <br>
	
	<?php echo $msg6;?> <br>	
	
	<form method = 'post'>
	
	<div class = 'form-group'>
	<label>First Name:  </label>
	<input type = 'text' name='fname' class = 'form-control' value ='<?php echo $name; ?>''>
	<?php echo $msg;?>
	</div>	
	
	<div class = 'form-group'>
	<label> Last Name:  </label>
	<input type = 'text' name='lname'  class = 'form-control' value ='<?php echo $last; ?>'>
	<?php echo $msg1;?>	
	</div>	
  
	<div class = 'form-group'>
	<label> Email:  </label>
	<input type = 'email' name='mail2'  class = 'form-control' value ='<?php echo $mail; ?>'>
	<?php echo $msg2 ;?>	
	</div>	
	
	<br>

	<center> <input type = 'submit' value = 'Update' name='submit' class='btn btn-warning' class = 'btn- btn-success' /> </center> <br>

	
  </form>
  
  
  
  
		
	 </div>	
   </div>
 </div>
 
 
	</body>
</html>

  
  
  
  
  
