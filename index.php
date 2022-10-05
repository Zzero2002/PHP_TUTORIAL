<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $user =($_POST['name']);
   $email =  $_POST['email'] ;
   $group =  $_POST['group'] ;
   $msg =  $_POST['message'] ;
   $gender =  $_POST['gender'] ;

   
   


if (!preg_match('/^[0-9]*$/', $user)) {

   $usererror = '<div class="alert alert-danger" role="alert">name must be 0 number</div>';
}
if(strlen($user) == 0){
   $usererrors = '<div class="alert alert-secondary" role="alert">name can\'t be empty</div>';
}
if(strlen($email) == 0){
   $emailerror = '<div class="alert alert-danger" role="alert">email can\'t be empty</div>';
}
if (strlen($msg) <= 10) {

   $msgerror  = '<div class="alert alert-secondary" role="alert">
   message be more than 10 characs</div>';
}
if (empty($gender)) {

   $gendererror  = '<div class="alert alert-success" role="alert">
   gender is required</div>';
}



}

?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <title>Document</title>
</head>

<body>
   <div class="container">
      <h1>PHP FORM FOR FULL-STACK WEB DEVELOPER</h1>
      <form class="" method="POST" action="">
      
         <input type="text" class="username form-control" name="name" placeholder="Name">
         <?php
         if(isset($usererror)){
            echo $usererror;
            
         }
         if(isset($usererrors)){
            echo $usererrors;
            
         }
         ?>
         <input type="text" class="email form-control" name="email" placeholder="email">
         <?php
         if(isset($emailerror)){
            echo $emailerror;
            
         }
        
         ?>
         <input type="text" class="phone form-control" name="group" placeholder="group">
         <textarea name="message" class="message form-control" placeholder="your message!" ></textarea>
         <div class="checks mt-5">
            <?php
         if(isset($msgerror)){
            echo $msgerror;
            
         }
         ?>
         <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
         <label class="form-check-label" for="flexRadioDefault1">
         Female
               </label>
               <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
         <label class="form-check-label" for="flexRadioDefault1">
         Male
               </label>
               <?php
         if(isset($gendererror)){
            echo $gendererror;
            
         }
         ?>
               </div>
               <select class="form-select" name = 'subject[]' multiple size = 6> 
                <option value = 'english'>ENGLISH</option>
                <option value = 'maths'>MATHS</option>
                <option value = 'computer'>COMPUTER</option>
                <option value = 'physics'>PHYSICS</option>
                <option value = 'chemistry'>CHEMISTRY</option>
                <option value = 'hindi'>HINDI</option>
            </select>
<?php
         if(isset($courseserror)){
            echo $courseserror;
            
         }
         ?>
         <input type="submit" name="submit" class="w-100 btn btn-primary" value="submit">
      </form>
   </div>
</body>
<div class="container">
<h3>Name :  <?php if(isset($user) && !isset($usererror) && !isset($usererrors)){
            echo $user;
         }?></h3>
<h3>Email :  <?php if(isset($email) && !isset($emailerror)){
            echo $email;
         }?></h3>
<h3>Group :  <?php if(isset($group) ){
            echo $group;
         }?></h3>
<h3>Class Details :  <?php if(isset($msg) && !isset($msgerror)){
            echo $msg;
         }?></h3>
<h3>Gender :  <?php if(isset($gender) && !isset($gendererror)){
            echo $gender;
         }?></h3>
<h3>Courses :  <?php
 if(isset($_POST["submit"]))
 { 

            if(isset($_POST["subject"]))
            {
               $subject = $_POST['subject'];
               if (is_array($subject) || is_object($subject)){

                // Retrieving each selected option
                foreach ($_POST['subject'] as $subject)
                    echo $subject . " ";
            }
        else{
            echo "Select an option first !!";
        }
      }
   }
         ?></h3>
</div>
<script src="js/script.js"></script>

</html>