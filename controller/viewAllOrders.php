




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
   margin-top: 50px;
  margin-left: 170px; /* Same as the width of the sidenav */
  margin-right: 30px;
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


<?php
        include_once "config/server.php";
      ?> <ul>
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
      <a class="active" href="viewAllOrders.php" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/technology.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Services</a>
          <a  href="inquiry.php" onclick="showCategory()" style="font-size: 20px;" ><img src="./assets/images/customer-support.png" width="25" height="25" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Inquiries</a>
          <a href="#orders" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/folder.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Applicants</a>
      	<a href="logout.php" style="font-size: 20px;" onclick="javascript:return confirm('Are you sure you want to log out?');"><img src="./assets/images/logout.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Logout</a>   
</div>

<div class="main">

  <h2>Service List</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Title</th>
        <th class="text-center">Category</th>
        <th class="text-center">Budget</th>
        <th class="text-center">Date</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "config/server.php";
      $sql="SELECT * from servicelist";
      $result=$conn-> query($sql);
       
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            
         
    ?>
    <tr>
      
      <td><?=$count?></td>
          <td><img height='100px' src='"uploads/"<?=$row["img"]?>'></td>
      <td><?=$row["username"]?></td> 
      <td><?=$row["title"]?></td>
      <td><?=$row["category"]?></td>      
      <td><?=$row["price"]?></td> 
      <td><?=$row["date"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['serviceid']?>')">Email</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['serviceid']?>')">Restrict</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
  
  <div >
  
  <div id="ordersBtn" >
  <h2>TASK REQUEST</h2>
  <table class="table table-striped">
    <thead>
     <tr>
        <th class="text-center">TR.N</th>
        <th class="text-center">Name</th>
        <th class="text-center">Title</th>
        <th class="text-center">Category</th>
        <th class="text-center">Budget</th>
        <th class="text-center">Date</th>
          
       
          <th class="text-center">Status</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tr>
       
  <?php
      include_once "./config/server.php";
      $sql="SELECT * from job_offer ORDER BY valid DESC";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
        <td><?=$row["job_id"]?></td> 
      <td><?=$row["e_username"]?></td> 
      <td><?=$row["title"]?></td>
      <td><?=$row["type"]?></td>      
      <td><?=$row["budget"]?></td> 
      <td><?=$row["timestamp"]?></td> 
       
    
           <?php 
                if($row["valid"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['valid']?>')"> FINISHED </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['valid']?>')"> ON GOING</button></td>
        
            <?php
            }
           
            ?>
              
        <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?job_id=<?=$row['job_id']?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
            
        }
      }
    ?>
     </div>
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
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