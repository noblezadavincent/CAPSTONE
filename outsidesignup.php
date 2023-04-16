<?php  

require "functions1.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: outsidelogin.php");
		die;
	}
}


 ?>



<!DOCTYPE html>
<html>
<head>
      
    	<meta charset="utf-8">
         <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<title>USA</title>
        
        <style>.hovertext {
  position: relative;
 
}

.hovertext:before {
  content: attr(data-hover);
  visibility: hidden;
  opacity: 0;
  width: 200px;
  background-color: #008251;
  color: #fff;
  text-align: left;
  border-radius: 5px;
  padding: 2px 2px;
  transition: opacity 1s ease-in-out;
  margin-top: -40px;
margin-left: 278px;
  position: absolute;
  z-index: 1;
  left: 0;
  top: 110%;
}

.hovertext:hover:before {
  opacity: 0.5;
  visibility: visible;
}
        
        
 
.stepper-wrapper {
  margin-top: auto;
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}
.stepper-item {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  flex: 1;
}
  @media (max-width: 768px) {
    font-size: 12px;
  }

.stepper-item::before {
  position: absolute;
  content: "";
  border-bottom: 2px solid #ccc;
  width: 100%;
  top: 20px;
  left: -50%;
  z-index: 2;
}

.stepper-item::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #ccc;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 2;
}

.stepper-item .step-counter {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ccc;
  margin-bottom: 6px;
}

.stepper-item.active {
  font-weight: bold;
}

.stepper-item.completed .step-counter {
  background-color: #4bb543;
}

.stepper-item.completed::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #4bb543;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 3;
}

.stepper-item:first-child::before {
  content: none;
}
.stepper-item:last-child::after {
  content: none;
}
       
        
        
 </style>
</head>
<body>
  
     <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                  <div class="alert-close" style="background-color:white;">
                        
                    </div>
                    <div class="w3l_form align-self" style="margin-top: 50px;">
                        <div class="left_grid_info">
                            <img src="image/gmail.png" alt="">  
                        </div>
                    </div>
                    <div class="content-wthree" style="margin-top: 50px;">
	<h1 style="font-size: 30px;">REGISTER GMAIL</h1>

	
	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
			 <span class="hovertext" data-hover="Use your university email">
			 <input type="text" class="form-control" " name="email" placeholder="Email"></span>
                          <input type="password" class="form-control" name="password" placeholder="Password">
			
                        
			<br>
			 <button name="submit" name="submit" class="btn" type="submit">Register</button>
		
                </form>
               
	</div>
             </div>
         </div>
             </div>
             </div> 
     </h1>
    <div class="stepper-wrapper">
      <div class="stepper-item completed">
        <div class="step-counter">1</div>
        <div class="step-name">Account Details</div>
      </div>
      <div class="stepper-item completed">
        <div class="step-counter">2</div>
        <div class="step-name">Requirements</div>
      </div>
      <div class="stepper-item active">
        <div class="step-counter">3</div>
        <div class="step-name">Verification</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">4</div>
        <div class="step-name">Interview Schedule</div>
      </div>
    </div>
	</div>
       
 
          <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
      
</body>
</html>