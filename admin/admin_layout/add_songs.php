<!-- <?php 
		$query = "SELECT * FROM `songs`";
        $result = mysqli_query($connect,$query);

        while($row=mysqli_fetch_assoc($result)){
        	$song = $row['song'];
        	$song_name = $row['name'];
        	echo"
        	<b>$song_name</b><br>
        	<audio controls>
  				<source src='audio/$song' type='audio/mpeg'>
			</audio>";
		}
 ?> -->

 <div class="hs-text">
         <h2>Add a New Song!</h2><br>
 </div>

<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="" class="control-label">Insert Song Name</label>
		<input type="text" class="form-control" name="song_name">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Insert Song Here</label>
		<input type="file" name="song" accept"audio/mpeg">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Insert Song Extension</label>
		<input type="text" class="form-control" name="song_extension">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Insert the Singer</label>
		<input type="text" class="form-control" name="song_singer">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Insert the Song Composer</label>
		<input type="text" class="form-control" name="song_composer">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Insert the Album</label>
		<input type="text" class="form-control" name="song_album">
	</div>
		<div class="form-group">
		<label for="" class="control-label">Insert the Song's Source Country</label>
		<input type="text" class="form-control" name="song_sourcecountry">
	</div>
	<div class="form-group text-center">
		<input class="btn btn-success" type="submit" name="add_song" value="Add New Song">
	</div>
</form>

<?php 
	if(isset($_POST['add_song'])){
		$song_name = $_POST['song_name'];
       	
       	$song = $_FILES['song']['name'];
		$song_temp = $_FILES['song']['tmp_name'];
		move_uploaded_file($song_temp,'../audio/'.$song);

		$song_extension = $_POST['song_extension'];
		$song_singer = $_POST['song_singer'];
		$song_composer = $_POST['song_composer'];
		$song_album = $_POST['song_album'];
		$song_sourcecountry = $_POST['song_sourcecountry'];
	
		$query = "INSERT INTO `songs`(`name`, `song`, `extension`, `singer`, `composer`, `album`, `source_country`, `loves`, `comments`) VALUES ('$song_name','$song','$song_extension','$song_singer','$song_composer','$song_album','$song_sourcecountry','0','0')";
		$result = mysqli_query($connect,$query);
		if(!$result){
			die("Query has Failed!");
		}else{
			echo "Created Successfully <a href='songs.php' class ='btn btn-primary'>View All Songs</a>"; 
		}
	} 
 ?>