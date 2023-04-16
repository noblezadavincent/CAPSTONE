<?php include('server.php');
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		$linkPro="freelancerProfile.php";
		$linkEditPro="editFreelancer.php";
		$linkBtn="applyJob.php";
		$textBtn="Apply for this job";
	}
	else{
		$linkPro="employerProfile.php";
		$linkEditPro="editEmployer.php";
		$linkBtn="editJob.php";
		$textBtn="Edit the job offer";
	}
}
else{
    $username="";
	//header("location: index.php");
}

$sql = "SELECT * FROM messengeruser WHERE username='$username'";
$result = $conn->query($sql);
$f=0;

if(isset($_POST["messages"])){
	$_SESSION["sender"] = $_POST["sender"];
	$_SESSION["reciever"] = $_POST["reciever"];
	header("location: messenger.php");
}

// if(isset($_POST["s_inbox"])){
// 	$t=$_POST["s_inbox"];
// 	$sql = "SELECT * FROM message WHERE receiver='$username' and sender='$t' ORDER BY timestamp DESC";
// 	$result = $conn->query($sql);
// 	$f=0;
// }

// if(isset($_POST["s_sm"])){
// 	$t=$_POST["s_sm"];
// 	$sql = "SELECT * FROM message WHERE sender='$username' and receiver='$t' ORDER BY timestamp DESC";
// 	$result = $conn->query($sql);
// 	$f=1;
// }

// if(isset($_POST["inbox"])){
// 	$sql = "SELECT * FROM message WHERE receiver='$username' ORDER BY timestamp DESC";
// 	$result = $conn->query($sql);
// 	$f=0;
// }

// if(isset($_POST["sm"])){
// 	$sql = "SELECT * FROM message WHERE sender='$username' ORDER BY timestamp DESC";
// 	$result = $conn->query($sql);
// 	$f=1;
// }

// if(isset($_POST["rep"])){
// 	$_SESSION["msgRcv"]=$_POST["rep"];
// 	header("location: sendMessage.php");
// }




 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
 .navbar-inverse1{
            background-color: #798777;
            border-bottom-color: white;
          color: whitesmoke;
            
        }
            .btn-primary2 {
  color: white;
 background-color:#008251; 
  padding: 10px;
}
.btn-primary2:hover,
.btn-primary2.hover {
  color: white;
  background-color:#46A349;
  
}

</style>

</head>
<body>

<!--Navbar menu-->
<nav class="navbar navbar-inverse1 navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navber-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><img src="image/logos.png"style="height: 200px;margin-top:-101px;margin-bottom:-15px">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="allservices.php">Services</a></li>
				<li><a href="allJob.php">Request</a></li>
				<li><a href="allFreelancer.php">Freelancers</a></li>
				<li><a href="allEmployer.php">Student clients</a></li>
				<li class="dropdown" style="background:#5E6B5C;color: whitesmoke;padding:0 10px 0 10px;">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?>
			        </a>
			        <ul class="dropdown-menu list-group list-group-item-info">
			        	<a href="<?php echo $linkPro; ?>" class="list-group-item"><span class="glyphicon glyphicon-home"></span>  View profile</a>
			          	<a href="<?php echo $linkEditPro; ?>" class="list-group-item"><span class="glyphicon glyphicon-inbox"></span>  Edit Profile</a>
					  	<a href="message.php" class="list-group-item"><span class="glyphicon glyphicon-envelope"></span>  Messages</a> 
					  	<a href="logout.php" class="list-group-item" onclick="javascript:return confirm('Are you sure you want to log out?');"><span class="glyphicon glyphicon-ok"></span>  Logout</a>    
			        </ul>
			    </li>
			</ul>
		</div>		
	</div>	
</nav>
<!--End Navbar menu-->


<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-12">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:10px">
			<div class="panel panel-success1">
			  <div class="panel-heading" style="background-color:#97B394;color: whitesmoke;text-align:center; font-size: 30px;"> All Messages</h3></div>
			  <div class="panel-body"><h4>
                  <table style="width:100%">
                      <tr>
                          <td style="color: #41444B;">Username</td>
                      </tr>
                      <?php
                      	if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        $reciever=$row["e_username"];
								$sender=$row["username"];					
								
									echo '
									<form action="message.php" method="post">
									<input type="hidden" name="sender" value="'.$sender.'">
									<input type="hidden" name="reciever" value="'.$reciever.'">
										<tr>
										<td><input type="submit" name="messages" class="btn btn-primary2" style="margin: 7px;" value="'.$reciever.'"></td>
										</tr>
									</form>
									';
								
								}
                        } else {
                            echo "<tr></tr><tr><td></td><td>Nothing to show</td></tr>";
                        }
                       ?>
                     </table>
              </h4></div>
			</div>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->

	</div>
<!--End Column 1-->


<!--Column 2-->
	<div class="col-lg-3">

<!--Main profile card-->
		<!-- <div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<form action="message.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_inbox">
				  <center><button type="submit" class="btn btn-info">Search Inbox</button></center>
				</div>
	        </form>

	        <form action="message.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_sm">
				  <center><button type="submit" class="btn btn-info">Search Sent Messages</button></center>
				</div>
	        </form>

	        <form action="message.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="inbox" class="btn btn-warning">Inbox Messages</button></center>
				</div>
	        </form>

	        <form action="message.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="sm" class="btn btn-warning">Sent Messages</button></center>
				</div>
	        </form>

	        <p></p>
	    </div> -->
<!--End Main profile card-->

	</div>
<!--End Column 2-->

</div>
</div>
<!--End main body-->


<!--Footer-->
<?php include 'footer.php'?>
<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>