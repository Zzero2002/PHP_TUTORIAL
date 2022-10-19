<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/popper.min.js"></script>
</head>
<body>
    <header class="container-fluid bg-light">
    <nav class="navbar navbar-expand-lg bg-light container">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img width="35" src="images/iti-logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">       
       <?php
       include('connection.php');
        if(isset($_SESSION['username'])){
          $user = $_SESSION['username'];
           $sql = "SELECT * FROM user WHERE username='$user'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result); 
   
           ?>   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?php echo $_SESSION['username']?>
         </a>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href='login.php?logout="1"'>Logout</a></li>
           </ul>
           
           <?php
        }    
       else{
       echo'<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Account
     </a>
     <ul class="dropdown-menu">
       <li><a class="dropdown-item" href="register.php">Register</a></li>
       <li><a class="dropdown-item" href="login.php">Login</a></li>
     </ul>
   </li>';
   }
       ?>
       
       
          
         
       
         <?php
         
   
   if(isset($_GET['logout'])){
       session_destroy();
       unset($_SESSION['username']);
       header("location:index.php");
   }
   ?>
   
        
               </li>
       
  </div>
</nav>
    </header>







    