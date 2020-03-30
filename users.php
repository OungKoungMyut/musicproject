<?php include_once "admin_layout/header.php"; ?>
<?php include_once "../database.php"; ?>
        <!-- Navigation -->
<?php include_once "admin_layout/navigation.php"; ?>

                
                <?php 
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }else{
                        $source = "";
                    }

                    //switch is used cuz multiple files can be linked together at one place
                    switch ($source) {
                        case 'add_admin':
                            include_once "admin_layout/add_admin.php";
                            break;

                        case 'edit_admin':
                            include_once "admin_layout/edit_admin.php";
                            break;

                        case 'view_admins':
                            include_once "admin_layout/view_admins.php";
                            break;

                        case 'view_members':
                            include_once "admin_layout/view_members.php";
                            break;

                        case 'edit_member':
                            include_once "admin_layout/edit_member.php";
                            break;
                        
                        default:
                            include_once "admin_layout/view_admins.php";
                            break;
                    }
                 ?>
                </div>
                <!-- /.row -->

<?php 
    include_once "admin_layout/footer.php";
 ?>

