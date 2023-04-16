<?php

    include_once "../config/sever.php";
   
    $order_id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT order_status from orders where order_id='$order_id'"; 
    $result=$conn-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
   // echo $row["pay_status"];
    
    if($row["status"]==1){
         $update = mysqli_query($conn,"UPDATE users SET status=0 where status='$status'");
    }
    else if($row["status"]==0){
         $update = mysqli_query($conn,"UPDATE users SET status=1 where status='$status'");
    }
    
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>