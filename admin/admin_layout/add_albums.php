<div class="hs-text">
         <h2>Add New Album Here!</h2><br>
     </div>


<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="" class="control-label">Album Title</label>
		<input type="text" class="form-control" name="title" required="">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Album Singer</label>
		<input type="text" class="form-control" name="singer" required="">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Album Release Date</label>
		<input type="date" class="form-control" name="date" required="">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Album Photo</label>
		<input type="file" class="form-control" name="photo">
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
		<input type="submit" class="btn btn-success" name="add_album" value="Add New Album">
	</div>
</form>

<?php 
	if(isset($_POST['add_album'])){
		$album_title = $_POST['title'];
		$album_singer = $_POST['singer'];
		$album_releasedate = $_POST['date'];

		$album_photo = $_FILES['photo']['name'];
		$album_photo_temp = $_FILES['photo']['tmp_name'];
		move_uploaded_file($album_photo_temp, '../album_images/'.$album_photo);

		$query = "INSERT INTO `albums`(`album_title`, `album_singer`, `album_releasedate`, `album_photo`) VALUES ('$album_title','$album_singer','$album_releasedate','$album_photo')";
		$result = mysqli_query($connect,$query);
		if(!$result){
			die("Query has Failed!");
		}else{
			echo "Album Added Successfully! <a href='albums.php' class ='btn btn-primary'>View All Albums</a>"; 
		}
	} 
 ?>