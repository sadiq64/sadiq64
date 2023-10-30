<nav class="navbar rounded navbar-light " style="background-color:black">
    <div class=" container-fluid">
        <a class="navbar-brand text-light" href="index.php">
            <h4> <i class="fas fa-bars"></i> <!-- BeeBlogs --></h4>
        </a>
        <div class="d-flex">
            <?php 
        if(isset($_SESSION["user"])){
          ?>
            <a href="dashboard.php" class="nav-link text-white">Dashboard </a><span></span>
            <a href="logout.php" class="nav-link text-danger"> 
                <i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php
        }else{
          ?>
            <a href="admin/" class="nav-link text-white" target="_blank">
            <i class="fas fa-user"></i> Admin Panel </a>
            <?php
        }
      ?>
        </div>
    </div>
</nav>