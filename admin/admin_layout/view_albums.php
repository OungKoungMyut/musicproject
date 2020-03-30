 <div class="col-md-12">

    <div class="hs-text">
         <h2>All Admins</h2><br>
     </div>

                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Singer</th>
                                <th>Release Date</th>
                                <th>Photo</th>
                                <th>Loves</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                                $query = "SELECT * FROM `albums`";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $album_id = $row['album_id'];
                                    $album_title = $row['album_title'];
                                    $album_singer = $row['album_singer'];
                                    $album_releasedate = $row['album_releasedate'];
                                    $album_photo = $row['album_photo'];
                                    $album_loves = $row['album_loves'];
                                    
                                    echo "<tr class='text-center'>
                                            <td>$album_id</td>
                                            <td>$album_title</td>
                                            <td>$album_singer</td>
                                            <td>$album_releasedate</td>
                                            <td><img src='../album_images/$album_photo' width='300px' height='150px'></td>
                                            <td>$album_loves</td>
                                            <td><a href='albums.php?delete=$album_id' class='btn btn-danger'>Delete</a></td>
                                         </tr>";
                                } 
                            ?>     
                        </table>
                    </div>

<?php 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $query = "DELETE FROM `albums` WHERE album_id = $delete_id";
        $result = mysqli_query($connect,$query);
        header('location:albums.php');
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