<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}
include('server.php');
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		$linkPro="freelancerProfile.php";
		$linkEditPro="editFreelancer.php";
		$linkBtn="applyJob.php";
		$textBtn="Apply for this job";
	}
	else{
		$linkPro="employerProfile.php";
		$linkEditPro="editEmployer.php";
		$linkBtn="editJob.php";
		$textBtn="Edit the job offer";
	}
}
else{
    $username="";
	//header("location: index.php");
}
$sql = "SELECT * FROM freelancer WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$name=$row["name"];
		$email=$row["email"];
		$contactNo=$row["contact_no"];
		$gender=$row["gender"];
		$birthdate=$row["birthdate"];
		$address=$row["address"];
		$prof_title=$row["prof_title"];
		$skills=$row["skills"];
		$profile_sum=$row["profile_sum"];
		$education=$row["education"];
		$experience=$row["experience"];
	    }
} else {
    echo "0 results";
}

if(isset($_POST["editFreelancer"])){
    $target_dir = "profile/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
	$name=test_input($_POST["name"]);
	$email=test_input($_POST["email"]);
	$contactNo=test_input($_POST["contactNo"]);
	$gender=test_input($_POST["gender"]);
	$birthdate=test_input($_POST["birthdate"]);
	$address=test_input($_POST["address"]);
	$prof_title=test_input($_POST["prof_title"]);
	$skills=test_input($_POST["skills"]);
	$profile_sum=test_input($_POST["profile_sum"]);
	$education=test_input($_POST["education"]);
	$experience=test_input($_POST["experience"]);


	$sql = "UPDATE freelancer SET name='$name',email='$email',contact_no='$contactNo', address='$address', 
            gender='$gender',prof_title='$prof_title',profile_sum='$profile_sum',education='$education',experience='$experience', 
            birthdate='$birthdate', skills='$skills', photo='$target_file' WHERE username='$username'";

	
	$result = $conn->query($sql);
	if($result==true){
		header("location: freelancerProfile.php");
	}
}


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
	<title>Signup</title>
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
	<h1>Signup</h1>

	
	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
			 
			 <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" />
			
			<br>
			 <button name="submit" name="submit" class="btn" type="submit">Register</button>
		</form>
               <div class="social-icons">
                            <p>Have an Account?<a href="login.php">Login here</a>.</p>
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
      <?php include 'footer.php'?>
</body>
</html>