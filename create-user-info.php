<?php
include 'header.php';
if (isset($_POST['create_user'])) {
    $user_obj->create_user_info($_POST);
}
?>
                    
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">VIEW USER LIST</a> 
        <h3>ADD USER INFO</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="user_name">Name:</label>
                <input type="text" name="user_name" id="user_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Email Address:</label>
                <input type="email" class="form-control" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" name="contact" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control"  maxlength="50">
            </div>
			<div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" name="birthday" id="birthday" class="form-control date-picker" maxlength="50">
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
			
            <input type="submit" class="button button-green  pull-right" name="create_user" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
?>

