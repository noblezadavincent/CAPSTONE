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
         .navbar-inverse1{
            background-color: #798777;
            border-bottom-color: white;
          color: whitesmoke;
            
        }
    
</style>

</head>
<body>

<!--Navbar menu-->
<nav class="navbar navbar-inverse1 navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navber-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                    <a href="" class="navbar-brand"><img src="image/VIEWING.png"style="height: 210px; width: 310px;margin-top:-104px;margin-bottom:-20px; margin-left: 200px;">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			
			<ul class="nav navbar-nav navbar-right">
                        
				<li><a href="indexs.php"> BACK TO ADMIN PAGE</a></li>
				
			
			</ul>
		</div>		
	</div>	
</nav>
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
		       <a href="#how" type="button" class="btn btn-primary2 btn-lg"style=" border-color:#FF4646; margin-top:-100px;">How it works</a>
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
			<div class="col-lg-6 card" style="border-radius:10px;">     
				<h1 style="color: #41444B;">Need help with school?</h1>
				<p style="color: #41444B;">Simply post a school-related task you need help with and receive offers from other students within minutes. Whatever your needs, be it graphics and design, writing, video editing, programming or tutorials, we've got you covered.</p>
				<p></p>
				<a href="loginReg.php" class="btn btn-primary2 btn-lg" style="color:whitesmoke">Get Started</a>
			
                    </div>
			<div class="col-lg-6 card" style="border-radius:10px;">
				<h1 style="color: #41444B;">Looking for a sidegig?</h1>
				<p style="color: #41444B;">If you are skilled in carrying out school-related tasks and want to earn additional money, don't hesitate to join our platform.</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<p></p>
				<a href="loginReg.php" class="btn btn-primary2 btn-lg" style="color:whitesmoke">Get Started</a>
			</div>
		</div>
	</div>
</div>
<!--End Individual register tip-->


<!--Popular Categories-->
<div class="container text-center" style="padding:4%;" id="category">
	<h1 class="card header2" style="background:#97B394;border-radius:10px; color: whitesmoke;">Popular Categories</h1>
	<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-color:#F6EDD9">
				<a href="loginReg.php"><img src="image/graphic.png"style="height: 50px;">
				<h3 style="color: #41444B;">Graphic and Design</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px;background-color:#F6EDD9">
                            <a href="loginReg.php"><img src="image/knowledge.png"style="height: 50px;">
				<h3 style="color:#41444B;">Tutorial</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; background-color:#F6EDD9">
				<a href="loginReg.php"><img src="image/notes.png"style="height: 50px;">
				<h3 style="color:#41444B;">Writing</h3>
				
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; background-color:#F6EDD9">
				<a href="loginReg.php"><img src="image/data.png"style="height: 50px;">
				<h3 style="color:#41444B;">Programming</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; background-color:#F6EDD9">
				<a href="loginReg.php"><img src="image/video.png"style="height: 50px;">
				<h3 style="color:#41444B;">Video editing</h3>
				
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;border-radius:10px; background-color:#F6EDD9">
				<a href="loginReg.php"><img src="image/camera.png"style="height: 50px;">
                                    <h3  style="color:#41444B;">Photography</h3> </a>
				
			</div>
		</div>
	</div>
</div>
<!--End Popular Categories-->

<!--How it works-->
<div style="background:#F6EDD9;">
<div class="container text-center" style="padding:4%;" id="how">
	<h1 class="card header2" style="background:#97B394;border-radius:10px;color:whitesmoke;">How it works</h1>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px; border-radius:10px">
		<div class="col-lg-6">
			<h3  style="color:#41444B;"><br>Post a job request indicating your allotted budget and schedule.</h3>
			
		</div>
		<div class="col-lg-4">
			<img src="image/posting.png" style="width:220px;">
		</div>
	</div>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px; border-radius:10px">
		<div class="col-lg-6">
			<h3  style="color:#41444B;">Browse through the services offered according to title, category, or working student and choose a helper based on their review and ratings.</h3>
			
		</div>
		<div class="col-lg-4">
			<img src="image/browse.png" style="width:220px;">
		</div>
	</div> 
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px; border-radius:10px">
		<div class="col-lg-6">
			<h3  style="color:#41444B;">For student helpers, create a profile that’ll show off your achievements and accomplishments and increase your chances of getting selected.</h3>
		
		</div>
            <div class="col-lg-4">
			<img src="image/profile.png" style="width:220px;">
		</div>
	</div>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;border-radius:10px">
		<div class="col-lg-6">
			<h3  style="color:#41444B;">Chat, pay, and review all in one platform. Only pay once the job request has been completed. </h3>
		
		</div>
		<div class="col-lg-4">
			<img src="image/chat.png" style="width:220px;">
		</div>
	</div>
</div>
</div>
<!--End How it works-->


<!--FAQ-->
<div class="container text-center" style="padding:4%;" id="faq">
  <h1 class="card header2" style="background:#97B394;border-radius:10px; color:whitesmoke;">FAQ</h1>
  <div class="btn-group-vertical" style="width:100%">
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo" style="width:100%;white-space: normal;background-color:#F6EDD9"><h3  style="color:#41444B;">What is a Service Marketplace?</h3></button>
  <div id="demo" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;background-color:#F6EDD9">
  		<h4  style="color:#41444B;" > A service marketplace is an online outsourcing platform where users can search for or offer services. University of San Agustin Student Services or USASS is a type of service marketplace catered to University of San Agustin Students. It lets students meet and engage with fellow students who are looking to offer their services. Any student registered in the system can post a job request, select from a list of services offered and advertise their services. Through this platform, students are able to help other students with their school requirements and make money at the same time. It’s a win-win scenario for all parties. 
</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo1" style="width:100%; white-space: normal;"><h3  style="color:#41444B;">I need help with my school requirements, how will this site work for me?</h3></button>
  <div id="demo1" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;background-color:#F6EDD9">
  		<h4  style="color:#41444B;">This website connects you with other students who have the necessary skills to help and ease your burden in carrying out your school requirements. Whether it’s an essay that needs proofreading, a presentation that needs designing, a video that needs editing, a website that needs building, or a subject that you need tutoring, this is the place for you! All you need to do is post a job request or browse the catalog of services offered. This is the ideal platform for you as its rates are more in line with your financial capabilities.   </h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo2" style="width:100%; white-space: normal;background-color:#F6EDD9"><h3  style="color:#41444B;">I would like to offer my services, how will this site work for me?</h3></button>
  <div id="demo2" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;background-color:#F6EDD9">
  		<h4  style="color:#41444B;">With USASS, you can advertise your skills and services for students in need to choose from through our catalog. Include a description and show them past outputs to entice them to select your service. Compared to existing service marketplaces such as Fiverr and Upwork which are saturated with professional freelancers, there is a greater chance of you being hired. That’s basically all you need to know and do to start earning additional money and to hone your skills. What are you waiting for? Register now!
</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo3" style="width:100%; white-space: normal;"><h3  style="color:#41444B;">Do I have to pay to use the website?</h3></button>
  <div id="demo3" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;background-color:#F6EDD9">
  		<h4  style="color:#41444B;">No. Almost all of the features of the website are absolutely free. This is the case for viewing the catalog, posting job requests, and advertising services. The only time you need to pay is when your job request is successfully completed.  </h4>
  	</div>
  </div>
  </div>
</div>
<!--End FAQ-->


<!--Footer-->

<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>