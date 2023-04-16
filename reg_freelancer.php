<?php include('server.php');
error_reporting(0);
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

if(isset($_POST["f_user"])){
	$_SESSION["f_user"]=$_POST["f_user"];
	header("location: viewFreelancer.php");
}

$sql = "SELECT * FROM freelancer";
$result = $conn->query($sql);

if(isset($_POST["s_username"])){
	$t=$_POST["s_username"];
	$sql = "SELECT * FROM freelancer WHERE username='$t'";
	$result = $conn->query($sql);
}

if(isset($_POST["s_name"])){
	$t=$_POST["s_name"];
	$sql = "SELECT * FROM freelancer WHERE name='$t'";
	$result = $conn->query($sql);
}

if(isset($_POST["s_email"])){
	$t=$_POST["s_email"];
	$sql = "SELECT * FROM freelancer WHERE email='$t'";
	$result = $conn->query($sql);
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>All Freelancer</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">

<style>
	body{padding-top: 1%;margin: 0;margin-left: 100px;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
	#sticky{
		position:sticky;
		top:10px;
	}
	.hide-item{
		display:none;
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
            background-color: #ff4a35;
        }
        .btn-info1:hover{
           cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		
        }
                .table {
            
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    
  border: 1px solid black;
  text-align: center;
  
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #f0ad4e;
}
</style>

</head>
<body>

<!--Navbar menu-->

<!--End Navbar menu-->
<?php include 'sidebar.php'?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:5px">
			<div class="panel panel-success">
			  <div class="panel-heading"style="text-align: center;"><h3>Student Freelancer</h3></div>
			  <div class="panel-body"><h4>
                  <table style="width:100%">
                      <tr>
                          <td>Username</td>
                          <td>Name</td>
                          <td>Professional Title</td>
                          <td>Email</td>
                          <td>Skill</td>
                      </tr>
                      <?php 
                      if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $f_username=$row["username"];
                                $name=$row["name"];
                                $prof_title=$row["prof_title"];
                                $email=$row["email"];
                                $skills=$row["skills"];

                                echo '
                                <form action="allFreelancer.php" method="post">
                                <input type="hidden" name="f_user" value="'.$f_username.'">
                                    <tr class="hide-item">
                                    <td><input type="submit" class="btn btn-info1"style="color: white;margin: 8px;" value="'.$f_username.'"></td>
                                    <td>'.$name.'</td>
                                    <td>'.$prof_title.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$skills.'</td>
                                    </tr>
                                </form>
                                ';

                                }
                        } else {
                            echo "<tr></tr><tr><td></td><td>Nothing to show</td></tr>";
                        }

                       ?>
                  </table><br>
					 <button class="show-more-btn">Load more</button>
              </h4></div>
			</div>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->

	</div>
<!--End Column 1-->


<!--Column 2-->
	<div class="col-lg-3" id="sticky">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<form action="allFreelancer.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_username">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by username</button></center>
				</div>
	        </form>

	        <form action="allFreelancer.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_name">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by Name</button></center>
				</div>
	        </form>

	        <form action="allFreelancer.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_email">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by Email</button></center>
				</div>
	        </form>

	        <p></p>
	    </div>
<!--End Main profile card-->

	</div>
<!--End Column 2-->

</div>
</div>
<!--End main body-->


<!--Footer-->

<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function($){
  $(".hide-item:hidden").slice(0,10).fadeIn();
  $(".show-more-btn").click(function(e){
    $(".hide-item:hidden").slice(0,10).fadeIn();
    if ($(".hide:hidden").length < 1) $(this).fadeOut();
  })
})
</script>

</body>
</html>