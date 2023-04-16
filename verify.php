

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
	<title>Verify</title>
        
        
        <style>
            
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
                        <img src="image/usalogo.png" alt="">  
                        </div>
                    </div>
                    <div class="content-wthree" style="margin-top: 47px;">

	<h1 style="font-size: 30px;  margin-top: 50px;">Verification Code</h1>


  
	
 	<div>
            <p style="color:red; font-size: 14px;">*An email was sent to your address paste the code from the email here</p>
			
		<div>
                    <?php

	require "mail.php";
	require "functions1.php";
	check_login();

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into code (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = '<p style="font-size:15px;">Hello! Here is the verification code for your account </p> <b style="font-size:40px;">'  . $vars['code'] ; 
		$subject = "USASS verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from code where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update verify set email_verified = email where id = '$id' limit 1";
					
					database_run($query);

					header("Location: index.php");
					die;
				}else{
					echo "Code expired";
				}

			}else{
				echo "wrong code";
			}
		}else{
			echo "You're already verified";
		}
	}

?>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
                    
			<input type="text" name="code" placeholder="Enter your Code" style="margin-top: -10px;"><br>
 			
                        
			 <button name="submit" name="submit" class="btn" type="submit">Verify</button>		</form>
	</div>

</body>
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
	</div>
       
</html>
