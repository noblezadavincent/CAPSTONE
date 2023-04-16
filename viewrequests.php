<?php include('server.php');

if(isset($_POST["jid"])){
	$_SESSION["job_id"]=$_POST["jid"];
	header("location: viewrequestdetails.php");
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
	body{padding-top: 1%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff;
	}
	#sticky{
		position:sticky;
		top:40px;
	}
	.hide-item{
		display:none;
	}
	.show-more-btn{
		background-color:#dff0d8;
		border:1px solid #379237;
		padding:10px;
		border-radius:50px;
		color:#3c763d;
	}
	.show-more-btn:hover{
		background-color:#379237;
		color:white;
	}
        .table {
            
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    
  border: 1px;
  color:#41444B;
  text-align: center;
  
  padding: 2px;
}

tr:nth-child(even) {
    color: #41444B;
  background-color: #97B394;
}
 .btn-info1 {
          background-color: #008251;
        }
        .btn-info1:hover{
          cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
        }
       .show-more-btn{
		color: whitesmoke;
                background-color: #97B394;	
		padding:10px;
		border-radius:10px;
                border-color:#97B394;
		
	}
	.show-more-btn:hover{
		color:whitesmoke;
 background-color: #008251;
	}
        
        
</style>

</head>
<body>

<!--Navbar menu-->
<?php include('header.php')?>
<!--End Navbar menu-->


<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:10px">
			<div class="panel panel-success1">
			  <div class="panel-heading"style="background-color:#97B394;color: whitesmoke;text-align:center;"><h3>Requests</h3></div>
			  <div class="panel-body"><h4>
                  <table style="width:100%">
                      <tr>
                          <td >Job Id</td>
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
                                <form action="viewrequests.php" method="post">
                                <input type="hidden" name="jid" value="'.$job_id.'">
                                    <tr class="hide-item">
                                    <td>'.$job_id.'</td>
                                    <td><input type="submit" class="btn btn-info1"style="color: whitesmoke; margin: 8px;" value="'.$title.'"></td>
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
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:10px">
			<p></p>
			<form action="viewrequests.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_title">
				  <center><button type="submit" class="btn btn-info1" style="color: whitesmoke;">Search by Title</button></center>
				</div>
	        </form>

	        <form action="viewrequests.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_type">
				  <center><button type="submit" class="btn btn-info1" style="color: whitesmoke;">Search by Type</button></center>
				</div>
	        </form>

	        <form action="viewrequests.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_employer">
				  <center><button type="submit" class="btn btn-info1" style="color: whitesmoke;">Search by Employer</button></center>
				</div>
	        </form>

	        <form action="viewrequests.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_id">
				  <center><button type="submit" class="btn btn-info1" style="color: whitesmoke;">Search by ID</button></center>
				</div>
	        </form>

	        <form action="viewrequests.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="recentJob" class="btn btn-warning">See all recent posted requests first</button></center>
				</div>
	        </form>

	        <form action="viewrequests.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="oldJob" class="btn btn-warning">See all older posted requests first</button></center>
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
<?php include 'footer.php'?>
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