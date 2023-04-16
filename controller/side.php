<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
<style>
body {
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
  font-size: 28px;
  color: #f1f1f1;
  display: block;
   margin-left: 5px;
   
}

.sidenav a:hover {
  color: #818181;
 
  
}

.main {
   margin-top: 50px;
  margin-left: 130px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
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
<body>
  <ul>
  <li><a class="active" href="side.php">Home</a></li>
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
          <a href="inquiry.php" onclick="showCategory()" style="font-size: 20px;" ><img src="./assets/images/customer-support.png" width="25" height="25" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Inquiries</a>
          <a href="#orders" style="font-size: 20px;" onclick="showOrders()" style="font-size: 20px;"><img src="./assets/images/folder.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Applicants</a>
      	<a href="logout.php" style="font-size: 20px;" onclick="javascript:return confirm('Are you sure you want to log out?');"><img src="./assets/images/logout.png" width="22" height="22" alt="Swiss Collection"  style="margin-left: -10px; margin-top:-5px;"></i> Logout</a>   
</div>

<div class="main">
  
</div>
   
</body>
</html> 
