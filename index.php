<?php
include 'header.php';
$user_list = $user_obj->user_list();


?>

<div class="container " > 
    <div class="row content">
		
        <a  href="create-user-info.php"  class="button button-purple mt-12 pull-right">ADD USER</a>  
		
        <h3>USER LIST</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Gender</th>
					<th>Address</th>
					<th>Birthday</th>
					<th>Trip Name</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($user_list->num_rows > 0) {
  while ($row = $user_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["user_name"] ?></td>
                <td><?php echo $row["email_address"] ?></td>
                <td><?php echo $row["contact"] ?></td>
                <td><?php echo $row["gender"] ?></td>
				<td><?php echo $row["address"] ?></td>
				<td><?php echo $row["birthday"] ?></td>
				<td><?php echo $row["tripname"] ?></td>
				
                <td class="text-right">
                    <a  href="<?php echo 'delete-user-info.php?id=' . $row["user_id"] ?>" class="button button-red">Delete</a>  
                    <a  href="<?php echo 'update-user-info.php?id=' . $row["user_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-user-info.php?id=' . $row["user_id"] ?>" class="button button-green">View	</a>
                </td>
            </tr>
			
    <?php
    }
}
?>
           </tbody>
        </table>
    </div>
</div>
<?php
?>  

