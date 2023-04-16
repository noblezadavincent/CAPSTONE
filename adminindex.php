<?php include('server.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
        
       <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<style>
	body{
		padding-top: 3%;
		margin: 0; 
		overflow-x:hidden;
                    background: #E4E9F7;
	}
	.header1{
           padding-top: 14px;
		background-color: #EEEEEE;
	}
	.header2{
		color:#fff;
	}
	.card{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
		background:#fff;
                color: black;
	}
	.btnjoin{
		font-size:30px;
	}
	.section2{
		display:flex;
		flex-direction:row;
		gap:30px;
	}
	.card{
		padding:30px;
	}

	@media screen and (max-width:976px){
		.section2 {
			flex-direction:column;
		}
	}
        .btn-primary1 {
  color: white;
  background-color: #ff4a35;
  border-color: #2e6da4;
  padding: 10px;
}
.btn-primary1:hover,
.btn-primary1.hover {
  color: white;
  background-color:#007BFF;
  
}

    .card:hover{
		cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		box-shadow:0px 10px 10px 0px;
	}
    
        .row{
            margin-left: 100px;
        }
</style>

</head>
<body>

<!--Navbar menu-->
<?php include 'sidebar.php'?>
<!--Popular Categories-->
<div class="container text-center" style="padding:4%;" id="category">
	<h1 style="color:black;margin-top: -70px;">WELCOME TO ADMIN DASHBOARD</h1>
	<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px;">
				<a href="reg_employee.php">
				<h3 style="color:black;">STUDENT CLIENT</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px;">
                            <a href="reg_freelancer.php">
				<h3 style="color:black;">STUDENT FREELANCER</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; ">
				<a href="services.php">
				<h3 style="color:black;">LIST OF SERVICES</h3>
				
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; ">
				<a href="taskrequest.php">
				<h3 style="color:black;">LIST OF TASK REQUEST</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; ">
				<a href="loginReg.php">
				<h3 style="color:black;">CASH WITHDRAWAL</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; ">
				<a href="loginReg.php">
                                    <h3  style="color:black;">TOTAL INCOME</h3> </a>
				
			</div>
		</div>
	</div>
</div>
<!--End Popular Categories-->



<!--FAQ-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>