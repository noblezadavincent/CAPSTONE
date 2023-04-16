<!DOCTYPE html>
<!---Coding By CoderGirl!--->
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
 
}
.pic{
  height: 250px;
  width:  250px;
 border-radius: 500px;
}
.about{
  width: 1000px;
  max-width: 70%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 50px;
  font-weight: 600;
  margin-bottom: 10px;

}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
 color: whitesmoke;
 background-color:#008251;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
 color: white;
  background-color:#46A349;
}
 





    
    
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


.btn1 {
   
   margin-left: 10px;
   
border-radius: 5px;
     color: white;
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #97B394;
  cursor: pointer;
  font-size: 18px;
  
}

/* Style the active class, and buttons on mouse-over */
.active{
    background-color: #666;
  color: white;
} 
.btn1:hover {
  background-color: #666;
  color: white;
}
        </style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Our Team</title>
  <!---Custom Css File!--->
 
</head>

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
      <a href="#" style="color: #41444B;">Graphic Design</a>
      <a href="#" style="color: #41444B;">Film Editing</a>
      <a href="#" style="color: #41444B;">Data Analyst</a>
      <a href="#" style="color: #41444B;">Game Development</a>
      <a href="#" style="color: #41444B;">Web Development</a>
      <a href="#" style="color: #41444B;">Application Development</a>
         
    </div>
				
			
                                
                                
                                <li style="background-color: #97B394; border-radius: 12px; height: 35px; margin-top:8px; margin-left: 4px;  "><a href="loginReg.php" class="request" ><p style='margin-top:-8px;'>Login</p></a></li>
                                <li style="background-color: #008251; border-radius: 12px; height: 35px; margin-top:8px; margin-left: 4px; "><a href="login.php" " ><p style='margin-top:-8px;'>ADMIN LOGIN </p></a></li>
			</ul>
		</div>		
	</div>	
</nav>

<body>
    

  <section class="about-us" style="margin-top: -50px;">
   
  <?php include 'paginationourteam.php'?>
    <div class="about">
  
    

      
      <div class="text">
        <h2>Co-Founder</h2>
        <h5>Ayrand B. Alayon</span></h5>
          <p><b>Motto:</b> “You are capable of more than you know. Choose a goal that seems right for you and strive to be the best, however hard the path. Aim high. Behave honorably.”</p>
        <div class="data">
        <a href = "mailto: Aalayon@usa.edu.ph " class="hire">Email Me</a>
        </div>
      </div>
        <img src="image/ayrand.png" class="pic">
    </div>
 
    <section class="about-us">
    <div class="about">
     
      <div class="text">
        <h2>Web-Developer</h2>
        <h5>Vincent N. Noblezada</span></h5>
          <p><b>Motto: </b>“In the long run, we shape our lives, and we shape ourselves. The process never ends until we die. And the choices we make are ultimately our own responsibility”</p>
        <div class="data">
       <a href = "mailto: vnoblezada@usa.edu.ph" class="hire">Email Me</a>
        </div>
      </div>
     <img src="image/vincent.png" class="pic">
 </div>
        
         <section class="about-us">
    <div class="about">
     
      <div class="text">
        <h2>Web-Developer</h2>
        <h5>Vincent N. Noblezada</span></h5>
          <p><b>Motto: </b>“In the long run, we shape our lives, and we shape ourselves. The process never ends until we die. And the choices we make are ultimately our own responsibility”</p>
        <div class="data">
       <a href = "mailto: vnoblezada@usa.edu.ph" class="hire">Email Me</a>
        </div>
      </div>
     <img src="image/vincent.png" class="pic">
 </div>
              <section class="about-us">
    <div class="about">
     
      <div class="text">
        <h2>Web-Developer</h2>
        <h5>Vincent N. Noblezada</span></h5>
          <p><b>Motto: </b>“In the long run, we shape our lives, and we shape ourselves. The process never ends until we die. And the choices we make are ultimately our own responsibility”</p>
        <div class="data">
       <a href = "mailto: vnoblezada@usa.edu.ph" class="hire">Email Me</a>
        </div>
      </div>
     <img src="image/vincent.png" class="pic">
 </div>
                   <section class="about-us">
    <div class="about">
     
      <div class="text">
        <h2>Web-Developer</h2>
        <h5>Vincent N. Noblezada</span></h5>
          <p><b>Motto: </b>“In the long run, we shape our lives, and we shape ourselves. The process never ends until we die. And the choices we make are ultimately our own responsibility”</p>
        <div class="data">
       <a href = "mailto: vnoblezada@usa.edu.ph" class="hire">Email Me</a>
        </div>
      </div>
     <img src="image/vincent.png" class="pic">
 </div>
                        <section class="about-us">
    <div class="about">
     
      <div class="text">
        <h2>Web-Developer</h2>
        <h5>Vincent N. Noblezada</span></h5>
          <p><b>Motto: </b>“In the long run, we shape our lives, and we shape ourselves. The process never ends until we die. And the choices we make are ultimately our own responsibility”</p>
        <div class="data">
       <a href = "mailto: vnoblezada@usa.edu.ph" class="hire">Email Me</a>
        </div>
      </div>
     <img src="image/vincent.png" class="pic">
 </div>
</body>
<br>
<br>
<br>
<br>
</html>

<?php include 'footer.php'?>