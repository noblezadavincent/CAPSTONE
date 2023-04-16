


<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
       
       <style>body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:  #3B3131;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
   margin-left: 5px;
    
}

.sidenav a:hover {
  color: #818181;
 
  
}

.main {
   margin-top: 20px;
  margin-left: 110px; /* Same as the width of the sidenav */
   
  font-size: 15px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #3B3131;
  position: fixed;
  top: 0;
  width: 100%;
}
li {
  float: right;
}

li a {
  display: block;
  color: #f1f1f1;
  text-align: center;
  padding: 9px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
 color: #818181;
}

.active {
  background-color: #04AA6D;
}
   </style>
     
       
       
  </head>
</head>
<body >



   <?php
        include_once "./config/server.php";
      ?>
    
   <ul>
  <li><a href="side.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<div class="sidenav">
     <img src="./assets/images/logo.png" style="text-align: center; margin-left: 30px;" width="80" height="80" alt="Swiss Collection"> 
    <h5 style="margin-top:10px; font-size: 17px; margin-left: 17px; color: whitesmoke;">USASS ADMIN</h5>
   <a href="#customers"   style="font-size: 20px;"onclick="showCustomers()" ><img src="./assets/images/groups.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Users</a>
    <a href="view.php" style="font-size: 20px;" ><img src="./assets/images/click.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Team</a>
      <a href="viewAllOrders.php" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/technology.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Services</a>
          <a class="active" href="inquiry.php" onclick="showCategory()" style="font-size: 20px;" ><img src="./assets/images/customer-support.png" width="25" height="25" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Inquiries</a>
          <a href="#orders" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/folder.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Applicants</a>
      	<a href="logout.php" style="font-size: 20px;" onclick="javascript:return confirm('Are you sure you want to log out?');"><img src="./assets/images/logout.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Logout</a>   
</div>

<div class="main">
 <div id="main-content"  class="container allContent-section py-4">
<div id="ordersBtn" >
  <h2>Inquiries</h2>
  <table class="table table-striped">
    <thead>
     <tr>
    <th class="text-center">I.D</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Message</th>
        <th class="text-center">Date</th>
      
           <th class="text-center">Status</th>
        <th class="text-center" >Action</th>
      </tr>
    </thead>
    <?php
      include_once "./config/server.php";
      $sql="SELECT * from users ORDER BY status DESC;";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
           <td><?=$row["id"]?></td> 
              <td><?=$row["fullname"]?></td> 
           <td><?=$row["messages"]?></td> 
      <td><?=$row["create_datetime"]?></td>
   
    
           <?php 
                if($row['status']==1){
                    echo '<td  ><p ><a href="active.php?id='.$row['id'].'&status=0" class="btn btn-success">On going</a></td>';
                    
                }
                else{
                     echo '<td  ><p><a href="deletemessage.php?id='.$row['id'].'&status=1"  class="btn btn-warning">Done</a></td>';
                }
            ?>
               
           
              
       <td ><a href = "mailto:<?php echo $row["email"] ?> " class="btn btn-danger"><b>EMAIL</b></p</a></td>  
           
    </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
  </div>
  
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>
   <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>