<!-- 
<?php 
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

	 <div class="col-md-12">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Song Name</th>
                                <th>Song Extension</th>
                                <th>Singer</th>
                                <th>Song Composer</th>
                                <th>Song Album</th>
                                <th>Source Country</th>
                                <th>Loves</th>
                                <th>Comments</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                                $query = "SELECT * FROM `songs`";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $song_id = $row['id'];
                                    $song_name = $row['name'];
                                    $song_extension = $row['extension'];
                                    $song_singer = $row['singer'];
                                    $song_composer = $row['composer'];
                                    $song_album = $row['album'];
                                    $song_sourcecountry = $row['source_country'];
                                    $loves = $row['loves'];
                                    $comments_count = $row['comments'];
                                    
                                    echo "<tr class='text-center'>
                                            <td>$song_id</td>
                                            <td>$song_name</td>
                                            <td>$song_extension</td>
                                            <td>$song_singer</td>
                                            <td>$song_composer</td>
											<td>$song_album</td>
                                            <td>$song_sourcecountry</td>
											<td>$loves</td>	
                                            <td>$comments_count</td>
                                            <td><a href='songs.php?delete=$song_id' class='btn btn-danger'>Delete</a></td>
                                         </tr>";
                                } 
                            ?>     
                        </table>
                    </div>

<?php 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $query = "DELETE FROM `songs` WHERE id = $delete_id";
        $result = mysqli_query($connect,$query);
        header('location:songs.php');
    }

    // if(isset($_GET['admin'])){
    //     $admin_id=mysqli_real_escape_string($connect,$_GET['admin']);

    //     $query="UPDATE `users` SET `user_role`='admin' WHERE user_id=$admin_id";
    //     mysqli_query($connect,$query);
    //     header('location:user.php');
    // }

    // if(isset($_GET['user'])){
    //     $user_id=mysqli_real_escape_string($connect,$_GET['user']);

    //     $query="UPDATE `users` SET `user_role`='user' WHERE user_id=$user_id";
    //     mysqli_query($connect,$query);
    //     header('location:user.php');
    // }
 ?>