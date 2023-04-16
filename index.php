<?php include('server.php');
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		header("location: freelancerProfile.php");
	}
	else{
		header("location: employerProfile.php");
	}
}
else{
    $username="";
	//header("location: index.php");
}

 ?>


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
  padding: 10px;
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
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.19), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
      border: 1px solid #ccc;
      border-radius: 4px;
    padding: 10px;
    margin-bottom: 25px;
    height: 40px;
    width: calc(100% - 10px);
   color: #41444B;
   
}
.login-input:focus {
    border-color:#99ccff;
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

</head>
<body>

<!--Navbar menu-->
<?php include('header.php')?>
<!--End Navbar menu-->



<!--Header and slider-->

<!--Header-->
<div class="row header1">
	<div class="col-lg-1">
		<div class="jumbotron">
			
		</div>
	</div>
<!--End Header-->

<!--slider-->
	<div class="col-lg-12" style="margin-top: -71px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="image/first.png" alt="Chania">
		      <div class="carousel-caption">
                         <a href="loginReg.php" class="btn btn-primary2 btn-lg" style=" border-color:#008251; margin-top:-100px;">Join Now</a> 
		      
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/second.png" alt="Chania">
		      <div class="carousel-caption">
		       <a href="#faq" type="button" class="btn btn-primary2 btn-lg"style=" border-color:#008251;margin-top:-100px; ">FAQ</a>
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/third.png" alt="Flower">
		      <div class="carousel-caption">
		       <a href="#how" type="button" class="btn btn-primary2 btn-lg"style=" border-color:#008251; margin-top:-100px;">How it works</a>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!--End slider-->
<!--End Header and slider-->


<!--Individual register tip-->
<div style="background:#F6EDD9;">
	<div class="container text-center" style="padding:5%;">
		<div class="row section2">    
			<div class="col-lg-6 card" style="border-radius:10px">     
				<img src="image/atd.png"style="height: 80px;margin-bottom: -30px;margin-top:-30px;">
				<h2 style="color: #100c08;">Need Our Service?</h2>
                                <p style="color: #100c08;">Simply post a task you need help with and receive offers from our team within minutes. Whatever your needs, be it graphics and design, Manage IT services, Cloud Servicing, Digital Services, and other technology solutions we've got you covered.</p>
                                <a href="loginReg.php" class="btn btn-primary2 btn-lg" style="position:relative;">Get Started</a>
			
				
                    </div>
			<div class="col-lg-6 card" style="border-radius:10px;">
                            <img src="image/TWO.png"style="height: 80px;width: 180px;margin-bottom: -30px;margin-top:-38px;">
				<h2 style="color: #100c08;">Be One Of Us</h2>
				<p style="color: #100c08;">If you are skilled in carrying out Digital support and want to earn additional money, don't hesitate to join our Team. </p>
				<a href="loginReg.php" class="btn btn-primary2 btn-lg" style=";position:relative;margin-top: 8%;">Get Started</a>
			</div>
		</div>
	</div>
</div>
<!--End Individual register tip-->
<div id="someElement">
	<div class="container text-center" style="padding:5%;">
	<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['fullname'])) {
        // removes backslashes
        $fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
        $fullname = mysqli_real_escape_string($con, $fullname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phoneno = stripslashes($_REQUEST['phoneno']);
        $phoneno = mysqli_real_escape_string($con, $phoneno);
        $messages = stripslashes($_REQUEST['messages']);
        $messages = mysqli_real_escape_string($con, $messages);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (fullname, email, phoneno, messages, create_datetime)
                     VALUES ('$fullname', '$email', '$phoneno', '$messages', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form' >
                  <h3>Thanks for contacting us! We will get in touch with you shortly. <br>
                  <br>
                  <br>
                  <br><br>
                  
                  </h3><br/>
                  
                  </div>";
           echo '<script>alert("Thanks for contacting us! We will get in touch with you shortly")</script>';
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                 
                  </div>";
        }
    } else {
?>
           
	<h1 class="card header2" style="margin-top:-10px;background:#97B394;border-radius:10px;">Free Consultation</h1>
	<div class="col-lg-4">
             <img src="image/CONSULT.png" width="700" height="400" style="margin-top: 70px;margin-left: -130px;">
        </div>
        
    <form class="form" action="" method="post">
       
        <p style=" font-style: normal; font-size: 19px; margin-bottom: 3px; text-align: left; margin-left: 5px;">Name</p>
        <input type="text" class="login-input" pattern="^[\sa-zA-Z]*$" name="fullname"  placeholder="Full Name" required />
       <p style=" font-style: normal; font-size: 19px; margin-bottom: 3px; margin-top:-10px; text-align: left; margin-left: 5px; ">Email</p>
        <input type="email" class="login-input" name="email" placeholder="Email Adress"  required>
        <p style=" font-style: normal; font-size: 19px; margin-bottom: 3px; margin-top:-10px; text-align: left; margin-left: 5px;">Phone</p>
        <input type="text" pattern="^(09|\+639)\d{9}$" class="login-input" name="phoneno" placeholder="Phone Number"  required>
       <p style=" font-style: normal; font-size: 19px; margin-bottom: 3px; margin-top:-10px;  text-align: left; margin-left: 5px;">How can we help?</p>
       <textarea  class="login-input" name="messages" style="height: 90px; " placeholder="Message"  required></textarea>
       <br>
        <input type="submit" name="submit" value="SUBMIT" class="login-button1">
     
    </form>
        </div>
<?php
    }
?>	
	</div>
</div>
<div style="background:#E0D8B0">
<!--Popular Categories-->
<div class="container text-center" style="padding:4%;" id="category">
	<h1 class="card header2" style="background:#97B394;border-radius:10px; color: whitesmoke;">Popular Categories</h1>
	<div class="row">
		<div class="col-lg-4" >
			<div class="card" style="height: 160px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/804675.png);background-size: contain;
background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
                            <a href="graphicanddesign.php">
                            </a>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="height: 160px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/804674.png);background-size: contain;
background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
                            <a href="tutorial.php">
				</a>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="height: 160px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/804676.png);background-size: contain;
background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
                            <a href="Proofreading.php"></a>
				
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-lg-4">
			<div class="card" style="height: 160px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/804679.png);background-size: contain;
background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
                            <a href="programming.php">
                                
                            </a>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="height: 160px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/804678.png);background-size: contain;
background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<a href="videoediting.php"></a>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="height: 160px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/804680.png);background-size: contain;
background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<a href="photography.php"></a>
				
			</div>
		</div>
	</div>
</div>
</div>
<!--End Popular Categories-->

<!--How it works-->
<div style="background:#F6EDD9;">
    
    <div class="container text-center" style="padding:2%;" id="category">
	<h1 class="card header2" style="background:#97B394;border-radius:10px; color: whitesmoke;">Why Choose Us</h1>
	<div class="row">
		<div class="col-lg-4">
			<div class="card" style="height: 220px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/back.png);background-size: contain;background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<img src="image/atd.png"style="height: 80px;margin-bottom: -20px;">
				<h4 style="color: #100c08;">Agile Team Dynamics</h4><br>
                    <h5 style="margin-top: -20px; color:#100c08;"> Our team is composed of young and vibrant professionals, 
                        who are continuously growing and evolving. 
                        We're always learning and moving fast to keep up with the changing times</h5>
				
			</div>
		</div>
    
    <div class="col-lg-4">
			<div class="card" style="height: 220px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/BACK.png);background-size: contain;background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<img src="image/IC.png"style="height: 80px;margin-bottom: -10px;margin-top: -15px;">
				<h4 style="color: #100c08;margin-top: 12px;">Integrated Connectivity</h4><br>
                    <h5 style="margin-top: -20px; color:#100c08;"> We want to ensure we're meeting your needs. Our team regularly sends project updates 
                            to keep you in the loop and monitor developments</h5>
				
			</div>
		</div>
            
            <div class="col-lg-4">
		<div class="card" style="height: 220px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/back.png);background-size: contain;background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<img src="image/247.png"style="height: 80px;width: auto;margin-bottom: -10px;margin-top: -15px;">
				<h4 style="color: #100c08;">24/7 Support</h4><br>
                    <h5 style="margin-top: -20px; color:#100c08;">Our support Team is always ready to help you with your concerns. Reach out to us anytime through chat or call.</h5>
				
			</div>
		</div>
            
            <div class="col-lg-4">
			<div class="card" style="height: 220px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/back.png);background-size: contain;background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<img src="image/SMT.png"style="height: 80px;width: auto;margin-bottom: -10px;margin-top: -15px;">
				<h4 style="color: #100c08;">Support Multiple Technologies</h4><br>
                    <h5 style="margin-top: -20px; color:#100c08;">We support a wide array of industry standard technologies to develop
                    comprehensive and innovative business solutions. </h5>
				
			</div>
		</div>
            
            <div class="col-lg-4">
			<div class="card" style="height: 220px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/back.png);background-size: contain;background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
				<img src="image/TMS.png"style="height: 80px;width: 150px;margin-bottom: -10px;margin-top: -15px;">
				<h4 style="color: #100c08;">Tailored-made Solutions</h4><br>
                    <h5 style="margin-top: -20px; color:#100c08;">We understand that organizations have unique needs. Our team develops bespoke solutions
                to meet your specific requirements.</h5>
				
			</div>
		</div>
    <div class="col-lg-4">
			<div class="card" style="height: 220px; padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-image:url(image/back.png);background-size: contain;background-repeat: no-repeat;background-size: cover;
background-position: center;background-size:100% 100%;border-radius:10px; max-width: 100%;">
                            <img src="image/ET.png"style="height: 80px;width: 180px;margin-bottom: -10px;margin-top: -15px;">
				<h4 style="color: #100c08;">Empowered Talent and Connections</h4><br>
                    <h5 style="margin-top: -20px; color:#100c08;"> Our greatest asset is our people. We continuously nourish their skills
                through various upskilling programs to empower them personally and professionally.</h5>
                                </a>
			</div>
		</div>
    
    </div>
</div>
    
   </div>

      
         
<!--End How it works-->


<!--FAQ-->
<div class="container text-center" style="padding:4%;" id="faq">
  <h1 class="card header2" style="background:#97B394;border-radius:10px; color:whitesmoke;">FAQ</h1>
  <div class="btn-group-vertical" style="width:100%">
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo" style="width:100%;white-space: normal;background-color:#F6EDD9"><h3  style="color:#41444B;">What is a IT Servicing Website?</h3></button>
  <div id="demo" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4  style="color:#41444B;" > Information technology (IT) services are the services that allow businesses to access the technical tools and information they use for their operational processes and daily tasks. Often, teams with expertise in IT or computer science manage these services for organizations in many industries. Depending on an organization's business type, IT services team can either comprise internal teams or external IT teams.
</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo1" style="width:100%; white-space: normal;background-color:#F6EDD9"><h3  style="color:#41444B;">What Do Digital Transformation Processes Look Like?</h3></button>
  <div id="demo1" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4  style="color:#41444B;">A digital transformation project involves a number of steps, such as:

The digital adoption of new technology, tools, software, and platforms, to maintain or gain a competitive advantage
IT modernization, from infrastructure to hardware to software
Implementation of digital-first business strategies
Refocusing efforts on the customer experience
These disparate efforts follow global trends that prioritize customers and technology. 

Such trends contrast to “old-fashioned” business models that follow waterfall design approaches.</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo2" style="width:100%; white-space: normal;background-color:#F6EDD9"><h3  style="color:#41444B;">I would like to offer my services, how will this site work for me?</h3></button>
  <div id="demo2" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4  style="color:#41444B;">With USASS, you can advertise your skills and services for people in need to choose from through our catalog. Include a description and show them past outputs to entice them to select your service. Compared to existing service marketplaces such as Fiverr and Upwork which are saturated with professional freelancers, there is a greater chance of you being hired. That’s basically all you need to know and do to start earning additional money and to hone your skills. What are you waiting for? Apply now!
</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo3" style="width:100%; white-space: normal;background-color:#F6EDD9"><h3  style="color:#41444B;">Do I have to pay to use the website?</h3></button>
  <div id="demo3" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4  style="color:#41444B;">No. Almost all of the features of the website are absolutely free. This is the case for viewing the catalog, posting job requests, and advertising services. The only time you need to pay is when your job request is successfully completed.  </h4>
  	</div>
  </div>
  </div>
</div>
<!--End FAQ-->


<!--Footer-->
<?php include 'footer.php'?>
<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>