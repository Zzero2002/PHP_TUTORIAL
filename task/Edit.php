<?php
include("connection.php");
include("header.php");
?>
 <?php
 $id = $_GET['id'];
 $qry = mysqli_query($connection,"SELECT * FROM user WHERE id='$id'"); 
 $row = mysqli_fetch_array($qry); 
 if(isset($_POST['update'])) // when click on Update button
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $status = $_POST['message'];
    
    $sql = "UPDATE user SET name='$name',email = '$email',gender ='$gender',message ='$status' WHERE id='$id'";
   
     
     if(mysqli_query($connection,$sql))
     {
         header("location:index.php"); 
         exit;
         mysqli_close($connection); 

     }
       	
 }
 
 ?>
 <div class="content-wrapper">
 <section class="container register w-50">
    <h2>Update : </h2>
<form method="POST">
    <div class="row">
        <div class="col-2">
    <label for="">Name: </label>
    </div>
    <div class="col-10">
    <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
    </div>
    </div>
    <div class="row mt-5">
        <div class="col-2">
    <label for="">Email: </label>
    </div>
    <div class="col-10">
    <input value="<?php echo $row['email']?>" type="email" name="email" class="form-control">
    </div>
    </div>
    <div class="row mt-5">
        <div class="col-2">
    <label for="">Gender : </label>
    </div>
    <div class="row col-10">
        <div class="col-3">
    <div class="form-check">
  <input <?php if($row['gender']=="M"){ echo "checked";} ?> class="form-check-input" value="M" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
</div>
<div class="col-3">
<div class="form-check">
     <input <?php if($row['gender']=="F"){ echo "checked";} ?> class="form-check-input" type="radio" value="F" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Female
  </label>
</div>
</div>
</div>
    </div>
    <div class="form-check mt-5">
  <input <?php if($row['message']=="Yes"){ echo "checked";} ?> value="Yes" class="form-check-input" type="checkbox" value="Yes" id="flexCheckDefault" name="status">
  <label class="mx-2 form-check-label"  for="flexCheckDefault">
    Recieve emails from us
  </label>
</div>
<div class="row">
    <div class="col-12">
<input type="submit" name="update" value="Update" class="mt-3 w-100 btn btn-success" >
</div>
</div>
</div>
</form>
</section>