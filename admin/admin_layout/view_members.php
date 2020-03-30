 <div class="col-md-12">

    <div class="hs-text">
         <h2>All Members</h2><br>
     </div>

                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                                $query = "SELECT * FROM `users` WHERE user_role IN ('member','vip')";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $member_id = $row['user_id'];
                                    $member_name = $row['user_name'];
                                    $member_email = $row['user_email'];
                                    $member_password = $row['user_password'];
                                    $member_role = $row['user_role'];
                                    
                                    echo "<tr class='text-center'>
                                            <td>$member_id</td>
                                            <td>$member_name</td>
                                            <td>$member_email</td>
                                            <td>$member_password</td>
                                            <td>$member_role</td>
                                            <td><a href='users.php?source=edit_user&edit_id=$member_id' class='btn btn-warning'>Update</a></td>
                                            <td><a href='users.php?delete=$member_id' class='btn btn-danger'>Delete</a></td>
                                         </tr>";
                                } 
                            ?>     
                        </table>
                    </div>

<?php 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $query = "DELETE FROM `users` WHERE user_id = $delete_id";
        $result = mysqli_query($connect,$query);
        header('location:users.php');
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