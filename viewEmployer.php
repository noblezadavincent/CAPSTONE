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

if(isset($_SESSION["e_user"])){
	$e_user=$_SESSION["e_user"];
	$_SESSION["msgRcv"]=$e_user;
}

$sql = "SELECT * FROM employer WHERE username='$e_user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$name=$row["Name"];
		$email=$row["email"];
		$contactNo=$row["contact_no"];
		$gender=$row["gender"];
		$birthdate=$row["birthdate"];
		$address=$row["address"];
		$company=$row["company"];
		$profile_sum=$row["profile_sum"];
		$photo=$row["photo"];
		$fb=$row["facebook"];
		$gm=$row["gmail"];
		$tw=$row["twitter"];
		$li=$row["linkedin"];
	
	    }
} else {
    echo "0 results";
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Student client profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
	#sticky{
		position: sticky;
		top:40px;
	}
        
         .show-more-btn{
		 background-color: #ff4a35;	
		padding:10px;
		border-radius:10px;
		color:white;
	}
	.show-more-btn:hover{
		color: white;
  background-color:#007BFF;
	}
        .btn-info1{
            background-color: #008251;
            margin: 7px;
        }
        .btn-info1:hover{
           cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		
        }
          .navbar-inverse1{
            background-color: #798777;
            border-bottom-color: white;
          color: whitesmoke;
            
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
	<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:10px">
			<p></p>
			<div style="text-align:center">
				<img style="width:200px; height:200px; border-radius:50%; border:6px #337ab7 solid; object-fit: cover" src="<?php echo $photo?>">
			</div>
			<h2><?php echo $name; ?></h2>
			<p><span class="glyphicon glyphicon-user"></span> <?php echo $e_user; ?></p>
	        <center><a href="sendMessage.php" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span>  Send Message</a></center>
	        <p></p>
	    </div>
<!--End Main profile card-->

<!--Contact Information-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4 style="text-align: center;">Contact Information</h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Email</div>
			  <div class="panel-body"><?php echo $email; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php echo $contactNo; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><?php echo $address; ?></div>
			</div>
		</div>
<!--End Contact Information-->

<!--Reputation-->
		<!-- <div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-warning">
			  <div class="panel-heading"><h4>Reputation</h4></div>
			</div>
			<div class="panel panel-warning">
			  <div class="panel-heading">Reviews</div>
			  <div class="panel-body">Nothing to show</div>
			</div>
			<div class="panel panel-warning">
			  <div class="panel-heading">Ratings</div>
			  <div class="panel-body">Nothing to show</div>
			</div>
		</div> -->
<!--End Reputation-->

	</div>
<!--End Column 1-->

<!--Column 2-->
	<div class="col-lg-6">

<!--Employer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success1">
			  <div class="panel-heading" style="background-color:#97B394;color: whitesmoke;text-align:center;"><h3>Employer Profile Details</h3></div>
			</div>
			<div class="panel panel-success1">
			  <div class="panel-heading" style="background-color:#97B394;color: whitesmoke;">Section</div>
			  <div class="panel-body"><h4 style="color: #41444B;"><?php echo $company; ?></h4></div>
			</div>
			<div class="panel panel-success1">
			  <div class="panel-heading" style="background-color:#97B394;color: whitesmoke;">Previously Hired Freelancers</div>
			  <div class="panel-body"><h4 style="color: #41444B;"><?php echo $e_user; ?></h4></div>
			</div>
			<div class="panel panel-success1">
			  <div class="panel-heading"  style="background-color:#97B394;color: whitesmoke;">Profile Summery</div>
			  <div class="panel-body" ><h4 style="color: #41444B;"><?php echo $profile_sum; ?></h4></div>
			</div>
			
		</div>
<!--End Employer Profile Details-->

	</div>
<!--End Column 2-->


<!--Column 3-->
	<div class="col-lg-3" id="sticky">

<!--Social Network Profiles-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3 >Social Network Profiles</h3></div>
			</div>
			<ul class="list-group">
			<li class="list-group-item" style="font-size:20px;color:#3B579D;"><i class="fab fa-facebook-square"> <?php echo $fb ?></i></li>
			  <li class="list-group-item" style="font-size:20px;color:#D34438;"><i class="fab fa-google-plus-square"><?php echo $gm ?></i></li>
			  <li class="list-group-item" style="font-size:20px;color:#2CAAE1;"><i class="fab fa-twitter-square"> <?php echo $tw ?></i></li>
			  <li class="list-group-item" style="font-size:20px;color:#0274B3;"><i class="fab fa-linkedin"> <?php echo $li ?></i></li>
			</ul>
		</div>
<!--End Social Network Profiles-->

	</div>
<!--End Column 3-->

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