<?php
 include 'header.php';
 
 if(isset($_GET['id'])){
	 $user_id = $_GET['id'];
  $user_info=$user_obj->view_user_by_user_id($_GET['id']);
    $servername = "localhost";
    $dbname = "crud";
    $username = "root";
    $password = "";
      $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $conn=$conn;  
       }
  
   $result=mysqli_query($conn,"SELECT tripinfo.roadtrip FROM usertrips INNER JOIN tripinfo ON tripinfo.roadtrip=usertrips.tripid WHERE usertrips.userid = $user_id");
  
  $row=mysqli_num_rows($result);
  
     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
   <a  href="index.php"  class="button button-purple mt-12 pull-right">VIEW USER LIST</a> 
     
 <h3>VIEW USER INFO</h3>
       
    
     <hr/>
   
   
 
      
    <label >Name:</label>
   <?php  if(isset($user_info['user_name'])){echo $user_info['user_name']; }?>

<br/>
    <label>Email Address:</label>
  <?php  if(isset($user_info['email_address'])){echo $user_info['email_address'];} ?>
    
    <br/>
    <label >Contact:</label>
      <?php  if(isset($user_info['contact'])){echo $user_info['contact'];} ?>
    <br/>

  <label >Gender:</label>
   <?php  if(isset($user_info['gender'])){echo $user_info['gender'];} ?>
  <br/>
    <label >Address:</label>
      <?php  if(isset($user_info['address'])){echo $user_info['address'];} ?>
    <br/>
	<label >Birthday:</label>
      <?php  if(isset($user_info['birthday'])){echo $user_info['birthday'];} ?>
    <br/>
	
	<label >Trip Name:</label>
	<?php
	  while($retrieve=mysqli_fetch_array($result)) {
	  $trip=$retrieve['roadtrip'];
	  echo $trip;
	}

	?>
   <?php  if(isset($trip_info['roadtrip'])){echo $trip_info['roadtrip'];} ?>
  <br/>
         
    <a href="<?php echo 'update-user-info.php?id='.$user_info["user_id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 ?>

