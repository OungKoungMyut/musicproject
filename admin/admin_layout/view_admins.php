 <div class="col-md-12">

    <div class="hs-text">
         <h2>All Admins</h2><br>
     </div>

                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                                $query = "SELECT * FROM `users` WHERE user_role='admin' ";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $admin_id = $row['user_id'];
                                    $admin_name = $row['user_name'];
                                    $admin_email = $row['user_email'];
                                    $admin_password = $row['user_password'];
                                    $admin_phone = $row['user_phone'];
                                    
                                    echo "<tr class='text-center'>
                                            <td>$admin_id</td>
                                            <td>$admin_name</td>
                                            <td>$admin_email</td>
                                            <td>$admin_password</td>
                                            <td>$admin_phone</td>
                                            <td><a href='users.php?source=edit_admin&edit_id=$admin_id' class='btn btn-warning'>Update</a></td>
                                            <td><a href='users.php?delete=$admin_id' class='btn btn-danger'>Delete</a></td>
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