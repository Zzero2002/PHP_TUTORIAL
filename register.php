<?php
include("connection.php");
include("header.php");

?>
<section class="container register w-50">
    <h2>Register : </h2>
    <h5>please fill this form to create account</h5>
<form method="POST">
    <div class="row">
        <div class="col-2">
    <label for="">username: </label>
    </div>
    <div class="col-10">
    <input type="text" name="username" class="form-control">
    </div>
    </div>
    <div class="row mt-5">
        <div class="col-2">
    <label for="">password: </label>
    </div>
    <div class="col-10">
    <input type="password" name="password" class="form-control">
    </div>
    </div>
    
<div class="row">
    <div class="col-6">
<input type="submit" name="submit" value="Submit" class="mt-3 w-100 btn btn-success" >
</div>
    <div class="col-6">
<input type="reset" value="clear" class="mt-3 w-100 btn btn-secondary" >
</div>
</div>
<div class="row mt-3">
    <div class="col-6">
    <h4>If you already have an email </h4> 
    </div>
    <div class="col-6">
     <a href="login.php" class="text-dark btn btn-info w-100">Login</a>
    </div>
    </div>
</form>
</section>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";
    if (mysqli_query($connection, $sql)) {
        header('location:login.php');
    } else {
        echo "error";
    }
}
mysqli_close($connection);



?>
</body>
</html>
    
</body>
</html>