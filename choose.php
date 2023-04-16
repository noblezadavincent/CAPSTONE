<!DOCTYPE html>
<html>
<head>
	<title>USASS HOMEPAGE</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
        
       <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<style>
  
	body{
		padding-top: 0%;
		margin: 0; 
		overflow-x:hidden
	}
	.header1{
           padding-top: 0px;
		
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
        .btn-primary2 {
  color: white;
 background-color:#008251; 
  padding: 5px;
}
.btn-primary2:hover,
.btn-primary2.hover {
  color: white;
  background-color:#46A349;
  
}

    .card:hover{
		cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		box-shadow:1px 10px 10px 0px #97B394;
                
	}
    
        
        
        
        
        .form {
    margin: 50px auto;
    width: 400px;
    padding: 20px 25px;
    background: white;
    margin-left:580px;
    border-radius: 10px;
    margin-bottom: -30px;
    margin-top: 30px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
h1.login-title {
    color: whitesmoke;
    margin: 0px auto 25px;
    font-size: 30px;
    font-weight: 400;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #97B394;
    padding: 10px;
    margin-bottom: 25px;
    height: 40px;
    width: calc(100% - 10px);
   color: #41444B;
   
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button1 {
    color: whitesmoke;
    background: #008251;
    border: 0;
    outline: 0;
    width: 25%;
    height: 39px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    border-radius: 5px;
    margin-left: -247px;
    margin-top: -10px;
   
    
    
}

.login-button1:hover {
  color: white;
  background-color:#46A349;
  
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}
</style>

<?php include('header.php')?>

<div style="background:#F6EDD9;">
     
	<div class="container text-center" style="padding:5%;">
            <h1 style="color: #41444B;">Join as a client or Work with us</h1><br>
		<div class="row section2" style="display: flex;
justify-content: center;">    
                   
			<div class="col-lg-3 card" style="border-radius:10px;">    
                            
				<h4 style="color: #41444B;">I’m a client, hiring for a project</h1>
				
				<a href="loginReg2.php" class="btn btn-primary2" style="color:whitesmoke">Get Started</a>
			
                    </div>
			<div class="col-lg-3 card" style="border-radius:10px;">
				<h4 style="color: #41444B;">I’m a IT Graduate, looking for work</h1>
				
				<a href="loginReg1.php" class="btn btn-primary2 " style="color:whitesmoke">Get Started</a>
			</div>
                </div>         <br><br>  Already have an account? <a href="loginpage.php"   class="btn btn-info">Login</a>
            
	</div>
    <?php include 'footer.php'?>
</div>


<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>