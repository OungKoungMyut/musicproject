<!-- <ul class="nav justify-content-center navbar navbar-light" style="background-color: #e3f2fd;">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../index.php" role="button" aria-haspopup="true" aria-expanded="false">Songs</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="songs.php">View All Songs</a>
      <a class="dropdown-item" href="songs.php?source=add_songs">Add New Songs</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
  </li>
   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</ul> -->

<!-- Header section -->
  <header class="header-section clearfix">
    <a href="index.html" class="site-logo">
      <img src="../img/logo.png" alt="">
    </a>
    <div class="header-right">
      <div class="user-panel">
        <a href="../index.php" class="login" style="padding: 2px 0;">Home</a><span>|</span>
        <a href="admin_layout/logout.php"><i class="fa fa-fw fa-power-off"></i></a>
        <span>|</span>
        <a href="register.php" class="register" style="padding: 2px 0;"><b>Hello <?php echo $_SESSION['user_name']; ?></b></a>
      </div> 
    </div>
    <ul class="main-menu">
      <li><a href="#"  class="dropdown-toggle" data-toggle="dropdown" >Music <span class="caret"></span></a>
        <ul class="sub-menu" style=" width: 180px; background-color: #673ab7; margin-bottom: 10px; margin-top: -20px; margin-left: -15px; border-radius: 12px;">
          <li><a href="songs.php?source=add_songs">Add New Music</a></li>
          <li><a href="songs.php?source=view_songs">View All Music</a></li>
        </ul>
      </li>

      <li><a href="#"  class="dropdown-toggle" data-toggle="dropdown" >Admins <span class="caret"></span></a>
        <ul class="sub-menu" style=" width: 180px; background-color: #673ab7; margin-bottom: 10px; margin-top: -20px; margin-left: -15px; border-radius: 12px;">
          <li><a href="users.php?source=add_admin">Add New Admin</a></li>
          <li><a href="users.php?source=view_admins">View All Admins</a></li>
          <li><a href="users.php?source=view_members">View All Members</a></li>
        </ul>
      </li>

       <li><a href="#"  class="dropdown-toggle" data-toggle="dropdown" >Albums <span class="caret"></span></a>
        <ul class="sub-menu" style=" width: 180px; background-color: #673ab7; margin-bottom: 10px; margin-top: -20px; margin-left: -15px; border-radius: 12px;">
          <li><a href="albums.php?source=add_album">Add New Album</a></li>
          <li><a href="albums.php?source=view_albums">View All Albums</a></li>
        </ul>
      </li>

      <li><a href="comments.php" style="padding: 1px 0;">Comments</a></li>
      <!-- <li><a href="download.php">Download Music</a></li> -->
    </ul>
  </header>