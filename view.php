<?php
include("connection.php");
include("header.php");
?>

<table class="table table-dark table-hover">
<thead>
    <tr class="text-center">
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Mail_Status</td>
        <td>Action</td>
    </tr>
  </thead>
  <?php
  $id = $_GET['id'];
  $qry = mysqli_query($connection,"SELECT * FROM user WHERE id='$id'"); 
  $row = mysqli_fetch_array($qry);
 ?>
  <tbody>
    <tr class="text-center">
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['message']?></td>
        <td>
            <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View</a>
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>           
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    </tbody>
  
  
  
</table>