<?php
include("connection.php");
include("header.php");

?>
<section class="container register w-50">
    <h2>Register : </h2>
<form method="POST">
    <div class="row">
        <div class="col-2">
    <label for="">Name: </label>
    </div>
    <div class="col-10">
    <input type="text" name="name" class="form-control">
    </div>
    </div>
    <div class="row mt-5">
        <div class="col-2">
    <label for="">Email: </label>
    </div>
    <div class="col-10">
    <input type="email" name="email" class="form-control">
    </div>
    </div>
    <div class="row mt-5">
        <div class="col-2">
    <label for="">Gender : </label>
    </div>
    <div class="row col-10">
        <div class="col-3">
    <div class="form-check">
  <input class="form-check-input" value="M" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
</div>
<div class="col-3">
<div class="form-check">
  <input class="form-check-input" type="radio" value="F" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Female
  </label>
</div>
</div>
</div>
    </div>
    <div class="form-check mt-5">
  <input class="form-check-input" type="checkbox" value="<?php if(isset($status))echo 'Yes';else{ echo 'No' ;} ?>" id="flexCheckDefault" name="status">
  <label class="mx-2 form-check-label"  for="flexCheckDefault">
    Recieve emails from us
  </label>
</div>
<div class="row">
    <div class="col-6">
<input type="submit" name="submit" value="Submit" class="mt-3 w-100 btn btn-success" >
</div>
    <div class="col-6">
<input type="reset" value="clear" class="mt-3 w-100 btn btn-secondary" >
</div>
</div>
</form>
</section>
   
<?php

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];

    $sql = "INSERT INTO user (name,email,gender,message) VALUES ('$name','$email','$gender','$status') ";

    $result = mysqli_query($connection,$sql);
    if($result){
        header('location:index.php');
    }else{
        echo "error";
    }

    mysqli_close($connection); 

}


?>
</body>
</html>