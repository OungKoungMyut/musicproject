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
                        case 'add_album':
                            include_once "admin_layout/add_albums.php";
                            break;
                        
                        default:
                            include_once "admin_layout/view_albums.php";
                            break;
                    }
                 ?>
                </div>
                <!-- /.row -->

<?php 
    include_once "admin_layout/footer.php";
 ?>

