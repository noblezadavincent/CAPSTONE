 <?php
      include("./config/server.php");
      
      
      
      
      $id =$_GET['id'];
      $status =$_GET['status'];
      $updatequery = "DELETE from users WHERE id=$id ";
      mysqli_query($conn, $updatequery);
      header('location:inquiry.php');
      ?>