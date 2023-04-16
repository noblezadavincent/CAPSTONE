
<?php include('server.php');
error_reporting(0);
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		$linkPro="freelancerProfile.php";
		$linkEditPro="editFreelancer.php";
		$linkBtn="editservice.php";
		$textBtn="Edit this service";
	}
	else{
		$linkPro="employerProfile.php";
		$linkEditPro="editEmployer.php";
		$linkBtn="sendMessage.php";
		$textBtn="Inquire now";
                
	}
}
else{
    $username="";
	//header("location: index.php");
}

if(isset($_SESSION["serviceid"])){
    $serviceid=$_SESSION["serviceid"];
}
else{
    $serviceid="";
    //header("location: index.php");
}

if(isset($_POST["f_user"])){
	$_SESSION["f_user"]=$_POST["f_user"];
	header("location: viewFreelancer.php");
}

if(isset($_POST["c_letter"])){
	$_SESSION["c_letter"]=$_POST["c_letter"];
	header("location: coverLetter.php");
}


if(isset($_POST["f_hire"])){
	$f_hire=$_POST["f_hire"];
	$f_price=$_POST["f_price"];
	$sql = "INSERT INTO selected (f_username, job_id, e_username, price, valid) VALUES ('$f_hire', '$job_id', '$username','$f_price',1)";
    
    $result = $conn->query($sql);
    if($result==true){
    	$sql = "DELETE FROM apply WHERE job_id='$job_id'";
		$result = $conn->query($sql);
		if($result==true){
			$sql = "UPDATE job_offer SET valid=0 WHERE job_id='$job_id'";
			$result = $conn->query($sql);
			if($result==true){
				header("location: jobDetails.php");
			}
		}
    }
}


if(isset($_POST["f_done"])){
	$f_done=$_POST["f_done"];
	$sql = "UPDATE selected SET valid=0 WHERE job_id='$job_id'";
	$result = $conn->query($sql);
    if($result==true){
    	header("location: jobDetails.php");
    }
}

$sql = "SELECT * FROM servicelist WHERE serviceid='$serviceid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$e_username=$row["username"];
        $title=$row["title"];
        $price=$row["price"];
        $description=$row["description"];
        $date=$row["date"];
        }
} else {
    echo "";
}

$_SESSION["msgRcv"]=$e_username;
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>    .body {
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
    
 <ul>
  <li><a href="side.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<div class="sidenav">
     <img src="./assets/images/logo.png" style="text-align: center; margin-left: 30px;" width="80" height="80" alt="Swiss Collection"> 
    <h5 style="margin-top:10px; font-size: 17px; margin-left: 17px; color: whitesmoke;">USASS ADMIN</h5>
   <a class="active" href="viewCustomers.php"   style="font-size: 20px;"onclick="showCustomers()" ><img src="./assets/images/groups.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Users</a>
    <a href="view.php" style="font-size: 20px;" ><img src="./assets/images/click.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Team</a>
      <a href="servicesall.php" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/technology.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Services</a>
          <a href="inquiry.php" onclick="showCategory()" style="font-size: 20px;" ><img src="./assets/images/customer-support.png" width="25" height="25" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Inquiries</a>
          <a href="#orders" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/folder.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Applicants</a>
      	<a href="logout.php" style="font-size: 20px;" onclick="javascript:return confirm('Are you sure you want to log out?');"><img src="./assets/images/logout.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Logout</a>   
</div>

     <div class="main">

  <h2>Student Clients</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username</th>
          <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact No</th>
        <th class="text-center">Address</th>
        <th class="text-center" colspan="2">Status</th>
      </tr>
    </thead>
    
     
    <?php
   include_once "server.php";
      $sql="SELECT * from employer";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["username"]?> </td>
      <td>  <?=$row["Name"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["contact_no"]?></td>
      <td><?=$row["address"]?></td>
            <td><button class="btn btn-success" style="height:40px" onclick="variationEditForm('<?=$row['status']?>')">Active</button></td>
            <td ><a href = "mailto:<?php echo $row["email"] ?> " class="btn btn-primary">Email</a></td> 
           
    </tr>
    
    <?php
            $count=$count+1;
           
        }
    }
    ?>
    
  </table>

 
<div id="ordersBtn" >
  <h2>Freelancers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username</th>
          <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact No.</th>
        <th class="text-center">Address</th>
        <th class="text-center" colspan="2">Status</th>
        
      </tr>
      
    </thead>
    <?php
    include_once "server.php";
      $sql="SELECT * from freelancer";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
   <tr>
      <td><?=$count?></td>
      <td><?=$row["username"]?> </td>
      <td>  <?=$row["name"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["contact_no"]?></td>
      <td><?=$row["address"]?></td>
     <td><button class="btn btn-success" style="height:40px" onclick="variationEditForm('<?=$row['status']?>')">Active</button></td>
           <td ><a href = "mailto:<?php echo $row["email"] ?> " class="btn btn-primary">Email</a></td> 
           
    </tr>
     
   </tr>
    
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>
    </div>
     </div>