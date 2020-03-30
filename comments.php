<?php ob_start(); ?>
<?php include_once('admin_layout/header.php'); ?>
<?php include_once('../database.php'); ?>
<?php include_once('admin_layout/navigation.php'); ?>
    

 <div class="col-md-12">

    <div class="hs-text">
         <h2>All Comments</h2><br>
     </div>

                        <table class="table table-hover table-bordered text-center">
                            <tr>
                                <th>ID</th>
                                <th>Commented User Email</th>
                                <th>Content</th>
                                <th>Commented Song ID</th>
                                <th>Commented Date</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                                $query = "SELECT * FROM `comments`";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $comment_id = $row['comment_id'];
                                    $comment_email = $row['comment_email'];
                                    $comment_content = $row['comment_content'];
                                    $commented_songid = $row['commented_song_id'];
                                    $commented_date = $row['comment_date'];
                                    
                                    echo "<tr class='text-center'>
                                            <td>$comment_id</td>
                                            <td>$comment_email</td>
                                            <td>$comment_content</td>
                                            <td>$commented_songid</td>
                                            <td>$commented_date</td>
                                            <td><a href='comments.php?delete=$comment_id' class='btn btn-danger'>Delete</a></td>
                                         </tr>";
                                } 
                            ?>     
                        </table>
                    </div>

<?php 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $query = "DELETE FROM `comments` WHERE comment_id = $delete_id";
        $result = mysqli_query($connect,$query);
        header('location:comments.php');
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

 <?php include_once('admin_layout/footer.php'); ?>