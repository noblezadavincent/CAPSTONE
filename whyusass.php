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
    
  height: 300px;
  width: 400px;
 border-radius: 0px;
}
.about{
  width: 1130px;
  max-width: 85%;
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
   
  <?php include 'paginationwhyusass.php'?>
    <div class="about">
   <img src="image/culture.png" class="pic">
    
      <div class="text" >
  
        <h2>Our Culture</h2>
                 
          <p>USASS is made up of college students intent on delivering efficient and effective results to clients. We’re just like you and your team! Get to know us and you’ll discover that we have lots in common. We are courteous, professional, personable, and willing to go the extra mile to get things done right. </p>
        <div class="data">
       <a href = "mailto: jmfernandez@usa.edu.ph " class="hire">WORK WITH US</a>
        </div>
      </div>
      
    </div>
  
    <section class="about-us">
    <div class="about">
      <img src="image/service.png" class="pic">
      <div class="text">
        <h2>Service</h2>
        <h5></span></h5>
          <p>Our work lifeblood is the Latin motto, Ut Prosim – “That I May Serve”. Our service ethic is demonstrated in every interaction and colors our service delivery culture. Our service is everything; we are of one mind and one purpose as we exemplify complete responsiveness, honesty, integrity, humility, kindness and intelligence.</p>
        <div class="data">
     
        </div>
      </div>
        
    </div>
 
    <section class="about-us">
    <div class="about">
      <img src="image/leadership.png" class="pic">
      <div class="text">
        <h2>Leadership</h2>
        <h5></span></h5>
          <p>We believe that each individual has the capacity to become a leader. We take the initiative to develop intelligence in the workplace, and promote development, training and coaching within our teams. Our knowledgeable, intelligent, and wise employees are continually showing initiative in their efforts to better our processes, our company and themselves. </p>
        <div class="data">
      
        </div>
      </div>
    
 </div>
         <section class="about-us">
    <div class="about">
      <img src="image/commited.png" class="pic">
      <div class="text">
        <h2>Commitment</h2>
        <h5></span></h5>
          <p>We are committed to a higher purpose; our loyalty to our clients and each other is unsurpassed. Our stewardship is the solemn responsibility of overseeing and protecting our i.t.NOW work family, our amazing clients, and delivering a stellar experience for both.</p>
        <div class="data">

        </div>
      </div>
    
 </div>
             
                <section class="about-us">
    <div class="about">
      <img src="image/innovate.png" class="pic">
      <div class="text">
        <h2>Innovation</h2>
        <h5></span></h5>
          <p>We thrive on innovation and have a passion for technology. We develop strong and collaborative relationships while at work and know that i.t.NOW is a circle of safety. As we strive to promote creative, open-minded thinking, individuality becomes a natural extension of our adventurous selves. Know this: Only excellence will suffice!</p>
        <div class="data">
      
        </div>
      </div>
    
 </div>
</body>
<br>
<br>
<br>
<br>
</html>

<?php include 'footer.php'?>