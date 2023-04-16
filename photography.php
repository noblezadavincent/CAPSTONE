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

if(isset($_POST["serid"])){
	$_SESSION["serviceid"]=$_POST["serid"];
	header("location: viewservicesdetails.php");
}

$sql = "SELECT * FROM servicelist WHERE category='Photography' ORDER BY date DESC";
$result = $conn->query($sql);

if(isset($_POST["s_title"])){
	$t=$_POST["s_title"];
	$sql = "SELECT * FROM servicelist WHERE category='Photography'";
	$result = $conn->query($sql);
}

if(isset($_POST["s_category"])){
	$t=$_POST["s_category"];
	$sql = "SELECT * FROM servicelist WHERE category='$t'";
	$result = $conn->query($sql);
}

if(isset($_POST["s_freelancer"])){
	$t=$_POST["s_freelancer"];
	$sql = "SELECT * FROM servicelist WHERE username='$t'";
	$result = $conn->query($sql);
}

if(isset($_POST["s_id"])){
	$t=$_POST["s_id"];
	$sql = "SELECT * FROM servicelist WHERE serviceid='$t'";
	$result = $conn->query($sql);
}

if(isset($_POST["recent"])){
	$sql = "SELECT * FROM servicelist WHERE category='Photography' ORDER BY date DESC";
	$result = $conn->query($sql);
}

if(isset($_POST["old"])){
	$sql = "SELECT * FROM servicelist  WHERE category='Photography' ORDER BY date ASC";
	$result = $conn->query($sql);
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Photography Services</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">

<style>
	body{padding-top: 1%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff;
	}
	.services{
		display:flex;
		flex-direction:row;
		flex-wrap:wrap;
		gap:10px;
		justify-content:center;
	}
	.services-info{
		width:100%;
		padding:10px;
		text-align:center;
                height: 29%;
                background-color: #97B394;
             
	}
	.services-child:hover{
		cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		box-shadow:0px 10px 10px 0px;
	}
	#sticky{
		position:sticky;
		top:40px;
	}
	.hide-item{
		display:none;
	}
	.show-more-btn{
		color: whitesmoke;
                background-color: #97B394;	
		padding:10px;
		border-radius:10px;
		 border-color:#97B394;
	}
	.show-more-btn:hover{
		color: whitesmoke;
  background-color: #008251;
	}
        .btn-info1{
            background-color: #008251;
        }
        .btn-info1:hover{
           cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		
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
<!--Column 2-->
<div class="col-lg-3" id="sticky">

<!--Main profile card-->
		
<!--End Main profile card-->

	</div>
<!--End Column 2-->

<!--Column 1-->
	<div class="col-lg-12">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:5px 5px 5px 5px;margin-top:10px;">
			<div class="panel panel-success1" >
			  <div class="panel-heading"style="background-color:#97B394;color: whitesmoke;text-align:center;"><h3>Photography</h3></div>
			  <div class="panel-body"><h4>
				<div class="services">
                <?php 
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $serviceid=$row["serviceid"];
                        $title=$row["title"];
                        $category=$row["category"];
                        $price=$row["price"];
                        $date=$row["date"];
						$e_username=$row["username"];
						$img=$row["img"];
								
				?>
						<form class="hide-item" action="viewservices.php" method="post">
							<div class="services-child" style="width: 200px; height:250px; border:1px black solid; border-radius:5px;displayl:flex; flex-direction:column;">
							<img src="<?php echo $img?>" alt="" srcset="" style="width:100%; height:70%; object-fit:cover;background-color:#f0ad4e; border-radius:10px 10px 0px 0px;">
								<div class="services-info">
									<input type="hidden" name="serid" value="<?php echo $serviceid ?>">
									<input type="submit" class="btn btn-info1"style="   color: whitesmoke;" value="<?php echo $title?>">
									<p  style="color:#41444B;"><?php echo $e_username ?></p>
								</div>
							</div>
						</form>
				<?php
						}
                        } else {
                            echo "<tr></tr><tr><td></td><td>Nothing to show</td></tr>";
                        }

                       ?>
					   </div>
                                  <br>
                                  <button class="show-more-btn">Load more</button><br>
                                  <br>
                                
                                            <form action="phtography.php" method="post">
				<div class="form-group">
                                    <center> <button type="submit" name="recent" class="btn btn-warning">See all recent posted first</button> <center>
				</div>
	        </form>

	        <form action="phtography.php" method="post">
				<div class="form-group">
				 <center> <button type="submit" name="old" class="btn btn-warning">See all older posted first</button> <center>
				</div>
	        </form>
              </h4></div>
			</div>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->

	</div>
<!--End Column 1-->

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
    $(".hide-item:hidden").slice(0,4).fadeIn();
    if ($(".hide:hidden").length < 1) $(this).fadeOut();
  })
})
</script>


</body>
</html>