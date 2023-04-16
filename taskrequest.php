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

if(isset($_POST["jid"])){
	$_SESSION["job_id"]=$_POST["jid"];
	header("location: jobDetails.php");
}

$sql = "SELECT * FROM job_offer WHERE valid=1 ORDER BY timestamp DESC";
$result = $conn->query($sql);

if(isset($_POST["s_title"])){
	$t=$_POST["s_title"];
	$sql = "SELECT * FROM job_offer WHERE title='$t' and valid=1";
	$result = $conn->query($sql);
}

if(isset($_POST["s_type"])){
	$t=$_POST["s_type"];
	$sql = "SELECT * FROM job_offer WHERE type='$t' and valid=1";
	$result = $conn->query($sql);
}

if(isset($_POST["s_employer"])){
	$t=$_POST["s_employer"];
	$sql = "SELECT * FROM job_offer WHERE e_username='$t' and valid=1";
	$result = $conn->query($sql);
}

if(isset($_POST["s_id"])){
	$t=$_POST["s_id"];
	$sql = "SELECT * FROM job_offer WHERE job_id='$t' and valid=1";
	$result = $conn->query($sql);
}

if(isset($_POST["recentJob"])){
	$sql = "SELECT * FROM job_offer WHERE valid=1 ORDER BY timestamp DESC";
	$result = $conn->query($sql);
}

if(isset($_POST["oldJob"])){
	$sql = "SELECT * FROM job_offer WHERE valid=1";
	$result = $conn->query($sql);
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>All Request</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">

<style>
	body{padding-top: 1%;margin: 0;margin-left: 100px;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff;
	}
	#sticky{
		position:sticky;
		top:10px;
	}
	.hide-item{
		display:none;
	}
	.btn-info1{
            background-color: #ff4a35;
        }
        .btn-info1:hover{
           cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		
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
<?php include 'sidebar.php'?>
<!--End Navbar menu-->


<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:5px">
			<div class="panel panel-success">
			  <div class="panel-heading"style="text-align: center;"><h3>All Request Tasks</h3></div>
			  <div class="panel-body"><h4>
                  <table style="width:100%">
                      <tr>
                          <td>Job Id</td>
                          <td>Title</td>
                          <td>Type</td>
                          <td>Budget</td>
                          <td>Student client</td>
                          <td>Posted on</td>
                      </tr>
                      <?php 
                      if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $job_id=$row["job_id"];
                                $title=$row["title"];
                                $type=$row["type"];
                                $budget=$row["budget"];
                                $e_username=$row["e_username"];
                                $timestamp=$row["timestamp"];

                                echo '
                                <form action="allJob.php" method="post">
                                <input type="hidden" name="jid" value="'.$job_id.'">
                                    <tr class="hide-item">
                                    <td>'.$job_id.'</td>
                                    <td><input type="submit" class="btn btn-info1"style="color: white;margin: 8px;" value="'.$title.'"></td>
                                    <td>'.$type.'</td>
                                    <td>'.$budget.'</td>
                                    <td>'.$e_username.'</td>
                                    <td>'.$timestamp.'</td>
                                    </tr>
                                </form>
                                ';

                                }
                        } else {
                            echo "<tr></tr><tr><td></td><td>Nothing to show</td></tr>";
                        }

                       ?>
                  </table><br>
					 <button class="show-more-btn">Load more</button></div>
              </h4>
			</div>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->

	</div>
<!--End Column 1-->


<!--Column 2-->
	<div class="col-lg-3" id="sticky">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:5px">
			<p></p>
			<form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_title">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by Title</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_type">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by Type</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_employer">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by Student client</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_id">
				  <center><button type="submit" class="btn btn-info1"style="color: white;">Search by ID</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="recentJob" class="btn btn-warning">See all recent posted first</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="oldJob" class="btn btn-warning">See all older posted first</button></center>
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