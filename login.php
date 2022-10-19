<?php
include("connection.php");
include("header.php");

?>
<section class="container register w-50">
    <h2>Login : </h2>
    <h5>please fill this form to Login</h5>
<form style="border:3px solid blue;" method="POST">
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
    <div class="col-12">
<input type="submit" name="login" value="Login" class="mt-3 w-100 btn btn-success" >
</div>
</div>
<div class="row mt-3">
    <div class="col-6">
    <h4>If you want to to register : </h4> 
    </div>
    <div class="col-6">
     <a href="register.php" class="text-dark btn btn-info w-100">Register</a>
    </div>
    </div>
</form>
</section>
<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
    $result = mysqli_query($connection,$sql);
    while($row = mysqli_fetch_array($result)){
        $_SESSION['username'] =  $username;
        header("location:index.php");
    }
}
mysqli_close($connection);

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location:login.php");
}
?>
</body>
</html>
    
</body>
</html>