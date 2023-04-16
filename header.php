
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO USASS</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<style>
    
    
	body{
		padding-top: 3%;
		margin: 0; 
		overflow-x:hidden
	}
	.header1{
		background-color: #EEEEEE;
	}
	.header2{
		color:#fff;
	}
	.card{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
		background:white;
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
        .navbar-inverse1{
            background-color: #798777;
            border-bottom-color: white;
          color: whitesmoke;
            
        }
           .btn-primary1 {
  color: white;
  background-color: #ff4a35;
 margin-left: 5px;
  padding: 10px;
  margin: 5px;
}
.btn-primary1:hover{
  color: white;
  background-color:#007BFF;
  
}
 
li {
  float: left;
 
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

li a:hover, .dropdown:hover .dropbtn {
  
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F6EDD9;
  min-width: 198px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
   border-bottom-color: whitesmoke;
  border-bottom-style: solid;
   border-width: thin 10px;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
</style>

</head>
<body>

<nav class="navbar navbar-inverse1 navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navber-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                    <a href="index.php" class="navbar-brand"><img src="image/logos.png"style="height: 200px;margin-top:-101px;margin-bottom:-20px">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			
			<ul class="nav navbar-nav navbar-right">
				  <li class="dropdown">
    <a href="whyusass.php"class="dropbtn">Why USASS?</a>
    <div class="dropdown-content">
     <a href="ABOUTUS.php" style="color: #41444B;">Who We Are?</a>
      <a href="meetourteam.php" style="color: #41444B;">Team</a>
      <a href="TAC.php" style="color: #41444B;">Terms & Conditions</a>
     
         
    </div>
				
                                 <li class="dropdown">
    <a href="viewservices.php"class="dropbtn" style=" margin-left:-10px;">Services</a>
    <div class="dropdown-content">
      <a href="#" style="color: #41444B;">Custom Development Software</a>
      <a href="#" style="color: #41444B;">Manage IT Services</a>
      <a href="#" style="color: #41444B;">Cloud Services</a>
      <a href="#" style="color: #41444B;">Business & Productivity</a>
      <a href="#" style="color: #41444B;">Digital Services</a>
      <a href="#" style="color: #41444B;">Game Developer</a>
         
    </div>
				
			
                                
                                <li style="background-color: #008251; border-radius: 5px; height: 35px; margin-top:8px; margin-left: 4px;  "><a href="loginpage.php" class="request" ><p style='margin-top:-8px;'>Login</p></a></li>
                                <li style="background-color: #97B394; border-radius: 5px; height: 35px; margin-top:8px; margin-left: 4px;  "><a href="choose.php" class="request" ><p style='margin-top:-8px;'>Sign Up</p></a></li>
                                
			</ul>
		</div>		
	</div>	
</nav>