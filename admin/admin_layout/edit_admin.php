
<?php 
	if(isset($_GET['edit_id'])){
		$edit_id = mysqli_real_escape_string($connect,$_GET['edit_id']);

		$query = "SELECT * FROM `users` WHERE user_id = $edit_id";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $user_id = $row['user_id'];
                                    $user_name = $row['user_name'];
                                    $user_email = $row['user_email'];
                                    $user_password = $row['user_password'];
          							$user_phone = $row['user_phone'];
								}
							}
 ?>


<div class="hs-text">
         <h2>Update Admin Info Here!</h2><br>
 </div>

<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="" class="control-label">Name</label>
		<input type="text" class="form-control" name="name" value="<?php echo $user_name; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $user_email; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Password</label>
		<input type="text" class="form-control" name="password" value="<?php echo $user_password; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Phone</label>
		<input type="text" class="form-control" name="phone" value="<?php echo $user_phone; ?>">
	</div>
	<div class="form-group text-center">
		<input type="submit" class="btn btn-success" name="update_admin" value="Update Admin Info">
	</div>
</form>

 <?php 
	if(isset($_POST['update_admin'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = password_hash($password,true);
		$phone = $_POST['phone'];

		$query = "UPDATE `users` SET `user_name`='$name',`user_email`='$email',`user_password`='$password',`user_phone`='$phone' WHERE user_id = $edit_id";
		$result = mysqli_query($connect,$query);
		if(!$result){
			die("Query has Failed!");
		}else{
			echo "Updated Successfully! <a href='users.php' class ='btn btn-primary'>View All Admins</a>"; 
		}
	} 
 ?>