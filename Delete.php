<?php
include("connection.php");
include("header.php");
?>

<?php


$id = $_GET['id']; 
$sql = "DELETE FROM user WHERE id = '$id'";
$del = mysqli_query($connection,$sql); 

if($del)
{
    mysqli_close($connection); 
    header("location:index.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>
