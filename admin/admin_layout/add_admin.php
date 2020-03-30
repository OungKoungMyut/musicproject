<div class="hs-text">
         <h2>Register New Admin Here!</h2><br>
     </div>


<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="" class="control-label">Admin Name</label>
		<input type="text" class="form-control" name="name" required="">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Admin Email</label>
		<input type="email" class="form-control" name="email" required="">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Password</label>
		<input type="text" class="form-control" name="password" required="">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Admin Phone</label>
		<input type="text" class="form-control" name="phone" required="">
	</div>
<!-- 	<div class="form-group">
		<label for="" class="control-label">Role</label>
		<select name="role" id="" class="form-control">
			<option value="">----Select User Role----</option>
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
	</div> -->
	<div class="form-group text-center">
		<input type="submit" class="btn btn-success" name="add_admin" value="Add New Admin">
	</div>
</form>

<?php 
	if(isset($_POST['add_admin'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];

		$query = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`, `user_phone`, `user_role`) VALUES ('$name','$email','$password','$phone','admin')";
		$result = mysqli_query($connect,$query);
		if(!$result){
			die("Query has Failed!");
		}else{
			echo "Registered Successfully! <a href='users.php' class ='btn btn-primary'>View All Admins</a>"; 
		}
	} 
 ?>