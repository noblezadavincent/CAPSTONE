<?php

	require "functions.php";
	check_login();
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'header.php'?>
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
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
 <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
	

	
 
	<?php if(check_login(true)):?>
                        
		<h1>Hi, <?=$_SESSION['USER']->username?>; </h1>

		<br><br>
		<?php if(!check_verified()):?>
			<a href="verify.php">
				 <button name="submit" name="submit" class="btn" type="submit">Verify Profile</button>
			</a>
		<?php endif;?>
	<?php endif;?>

     </div>
	</div>
             </div>
         </div>
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
  <?php include 'footer.php'?>
</html>