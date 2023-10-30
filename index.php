<?php

session_start();

 require "inc/header.php";   
 // require "body.php"; 

 ?>

<div class="container">
   <?php require './pages/header-home.php'; ?>
   <div class="container-fluid my-3">
       <div class="row">
       <div class="px-4  text-center">
       <h1 class="header-w3ls">
		Table Booking System</h1>
   <div class="col-lg-6 mx-auto">
    <!--  <p class="lead mb-4">Quickly get access to all Pass Questions in different courses and sessions.</p> -->
     <div class="row mt-5">
     <div class="col d-grid gap-2 d-sm-flex justify-content-sm-center mt-5">
     <a href="home.php" class="btn btn-md " style="background-color: #fed136;" >
     <i class="fas fa-table"></i> Book a Table</a>
     </div>
     <div class="col d-grid gap-2 d-sm-flex justify-content-sm-center mt-5">
      <a href="check-status.php" class="btn btn-md " style="background-color: #fed136;" >
      <i class="fas fa-check"></i> Check Booking Status</a>
     </div>
     </div>
    
   </div>
   </div>
 </div>
</div>

</div>

 <?php 
 require "inc/footer.php"; 
 ?>

