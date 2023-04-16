 <?php
      include("./config/server.php");
      
      
      
      
      $id =$_GET['id'];
      $status =$_GET['status'];
      $updatequery = "UPDATE users SET status=$status WHERE id=$id ";
      mysqli_query($conn, $updatequery);
      header('location:inquiry.php');
      ?>