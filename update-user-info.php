<?php
include 'header.php';
if (isset($_GET['id'])) {
    $user_info = $user_obj->view_user_by_user_id($_GET['id']);
  
  if (isset($_POST['update_user']) && $_GET['id'] === $_POST['id']) {
        $user_obj->update_user_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">VIEW USER LIST</a> 
        <h3>USER INFO</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($user_info['user_id'])) {
            echo $user_info['user_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="user_name">Name:</label>
                <input type="text" name="user_name" value="<?php if (isset($user_info['user_name'])) {
                   echo $user_info['user_name'];
        } ?>" id="user_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Email address:</label>
                <input type="email" class="form-control" value="<?php if (isset($user_info['email_address'])) {
            echo $user_info['email_address'];
        } ?>" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" value="<?php if (isset($user_info['contact'])) {
            echo $user_info['contact'];
        } ?>" name="contact" id="contact"  maxlength="50">
            </div>
           
		   <div class="form-group">
                <label for="gender">Gender:</labe'l>
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select</option>
                    <option value="Male" <?php if (isset($user_info['gender']) && $user_info['gender'] == 'Male') {
            echo 'selected';
        } ?>>Male</option>
                    <option value="Female" <?php if (isset($user_info['gender']) && $user_info['gender'] == 'Female') {
            echo 'selected';
        } ?>>Female</option>

                </select>
		</div>
		
        <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" value="<?php if (isset($user_info['address'])) {
            echo $user_info['address'];
        } ?>" id="address" class="form-control"  maxlength="50">
         </div>
			
		<div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" name="birthday" value="<?php if (isset($user_info['birthday'])) {
            echo $user_info['birthday'];
        } ?>" id="address" class="form-control"  maxlength="50">
            </div>	
			
			<div class="form-group">
                <label for="tripname">Trip Name:</labe'l>
                <select class="form-control" name="tripname" id="tripname">
                    <option value="">Select</option>
					
         <option value="Random Roadtrips"<?php if (isset($user_info['tripname']) && $user_info['tripname'] == 'Random Roadtrips')
		{
            echo 'selected';
        } ?>>Random Roadtrips</option>
                    <option value="Singles Roadtrips" <?php if (isset($user_info['tripname']) && $user_info['tripname'] == 'Singles Roadtrips') 
		{
            echo 'selected';
        } ?>>Singles Roadtrips</option>
			
			<option value="Retro Roadtrips"<?php if (isset($user_info['tripname']) && $user_info['tripname'] == 'Retro Roadtrips')
		{
            echo 'selected';
        } ?>>Retro Roadtrips</option>
       
			<option value="Special Roadtrips"<?php if (isset($user_info['tripname']) && $user_info['tripname'] == 'Special Roadtrips')
		{
            echo 'selected';
        } ?>>Special Roadtrips</option>
	   
			<option value="Random Outings"<?php if (isset($user_info['tripname']) && $user_info['tripname'] == 'Random Outings')
		{
            echo 'selected';
        } ?>>Random Outings</option>
	   
	   
	  
	   
		  </select>
		</div>
		
			
			
			
            <input type="submit" class="button button-green  pull-right" name="update_user" value="Update"/>
        </form> 
    </div>
</div>
<hr/>
<?php
?>

