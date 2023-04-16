<?php include('server.php');
error_reporting(0);
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

if(isset($_POST["createlist"])){
    $category = test_input($_POST["category"]);
    $title=test_input($_POST["title"]);
    $price=test_input($_POST["price"]);
    $description=test_input($_POST["description"]);
    $date=date("Y/m/d");

    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['photo']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['photo']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['photo']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["photo"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."','".$title."','".$username."'),";
                }else{ 
                    $errorUpload .= $_FILES['photo']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['photo']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO serviceimages (img,title,username) VALUES $insertValuesSQL"); 
            if($insert ==true){ 
                $_SESSION["serviceid"] = $conn->insert_id;
                $sql = "INSERT INTO servicelist (username,category,title, price, description, date, img) 
                VALUES ('$username', '$category', '$title','$price','$description','$date', '$targetFilePath')";
                            
                $result = $conn->query($sql);
                if($result==true){
                    $_SESSION["serviceid"] = $conn->insert_id;
                    header("location: servicelistdetails.php");
                }
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>List a Service</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrapValidator.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
  .show-more-btn{
		color: whitesmoke;
                background-color: #97B394;	
		padding:10px;
		border-radius:10px;
		 border-color:#97B394;
	}
	.show-more-btn:hover{
		color: whitesmoke;
  background-color: #008251;
	}
    .btn-info1{
            background-color: #008251;
        }
        .btn-info1:hover{
           cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		
        }
          .navbar-inverse1{
            background-color: #798777;
            border-bottom-color: white;
          color: whitesmoke;
            
        }
.hovertext {
  position: relative;
  border-bottom: 1px dotted black;
}

.hovertext:before {
  content: attr(data-hover);
  visibility: hidden;
  opacity: 0;
  width: 190px;
  background-color: #008251;
  color: #fff;
  text-align: center;
  border-radius: 5px;
  padding: 2px 2px;
  transition: opacity 1s ease-in-out;

  position: absolute;
  z-index: 1;
  left: 0;
  top: 110%;
}

.hovertext:hover:before {
  opacity: 0.5;
  visibility: visible;
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
			<a href="index.php" class="navbar-brand"><img src="image/logos.png"style="height: 200px;margin-top:-101px;margin-bottom:-15px">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="allservices.php">Services</a></li>
				<li><a href="allJob.php">Request</a></li>
				<li><a href="allFreelancer.php">Freelancers</a></li>
				<li><a href="allEmployer.php">Student clients</a></li>
				<li class="dropdown" style="background:#5E6B5C;color: whitesmoke;padding:0 10px 0 10px;">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?>
			        </a>
			        <ul class="dropdown-menu list-group list-group-item-info">
			        	<a href="<?php echo $linkPro; ?>" class="list-group-item"><span class="glyphicon glyphicon-home"></span>  View profile</a>
			          	<a href="<?php echo $linkEditPro; ?>" class="list-group-item"><span class="glyphicon glyphicon-inbox"></span>  Edit Profile</a>
					  	<a href="message.php" class="list-group-item"><span class="glyphicon glyphicon-envelope"></span>  Messages</a> 
					  	<a href="logout.php" class="list-group-item" onclick="javascript:return confirm('Are you sure you want to log out?');"><span class="glyphicon glyphicon-ok"></span>  Logout</a>    
			        </ul>
			    </li>
			</ul>
		</div>		
	</div>	
</nav>
<!--End Navbar menu-->


<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>List a service</h2>
                </div>

                <form id="serviceform" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Category</label>
                    <div class="col-sm-5">
                        <select  class="form-control" name="category" id="" style="color: #41444B;">
                            <option value="---">---</option>
                            <option value="Design & Graphics">Design & Graphics</option>
                            <option value="Tutorial">Tutorial</option>
                            <option value="Programming">Programming</option>
                            <option value="Proofreading">Proofreading</option>
                            <option value="Video editing">Video editing</option>
                            <option value="Photography">Photography</option>
                            <option value="Social Media">Social Media</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Photo</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control" name="photo[]" multiple/>
                    </div>
                </div>

                <div class="form-group">
                    <span class="hovertext" data-hover="Hello! keep your title catchy and straightforward">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Title</label> 
                    <div class="col-sm-5">
                         
                        <input type="text" minlength="3" maxlength="25" required class="form-control" id="title" name="title" value="" onkeyup="fbws('title')" /></input></span>
                       
     <script>
    function fbws(text){  
    var input type = document.getElementById(text);
    var regex = /(masungit|putangina|gaga|gago|walang kwenta|bad|weak|suntukan|utang|bobo|Whore|puta ang ina mo|Anak ng puta|Fucking|shame|traitor|Ulol|Buwisit|bwisit|Leche|sex|porn|Punyeta|duw gago|fucking|pakshet|shet|tae|Galit|Lintik|gagi|gaga|Hell|dick|pussy|booty|vagina|walker|Bitch|dickhead|Piss Off|mango|qwerty|asd|zxcvbn|12345|asshole|xxx|bastard|screw|son of a bitch|masturbating|mother fucker|slut|bullshit|bull shit|tits|cock|motherfucker|fucker|cunt|nipple|lust|anal|pota|puta|haha|hehe|joke|fuck|inamo|inamo|chupain|tsupa|burat|inutil|kupal|malibog|pepe|jakol|pekpek|tubol|ambaho|jakulin|tamod|tomboy|bading|bakla|gay)/gi;
    var clean = textarea.value.replace(regex, "");
    input type.value = clean;
    }
    </script>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Price</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="price" value="" />
                    </div>
                </div>

                <div class="form-group">
                      <span class="hovertext" data-hover="The more detailed the description of your service, the greater the chances of being hired">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Description</label>
                    <div class="col-sm-5">
                        <textarea  class="form-control" name="description" id="description" onkeyup="fbws('description')" value="" /></textarea></span>
                        
     <script>
    function fbws(text){  
    var textarea = document.getElementById(text);
    var regex = /(masungit|putangina|gaga|gago|walang kwenta|bad|weak|suntukan|utang|bobo|Whore|puta ang ina mo|Anak ng puta|Fucking|shame|traitor|Ulol|Buwisit|bwisit|Leche|sex|porn|Punyeta|duw gago|fucking|pakshet|shet|tae|Galit|Lintik|gagi|gaga|Hell|dick|pussy|booty|vagina|walker|Bitch|dickhead|Piss Off|mango|qwerty|asd|zxcvbn|12345|asshole|xxx|bastard|screw|son of a bitch|masturbating|mother fucker|slut|bullshit|bull shit|tits|cock|motherfucker|fucker|cunt|nipple|lust|anal|pota|puta|haha|hehe|joke|fuck|inamo|inamo|chupain|tsupa|burat|inutil|kupal|malibog|pepe|jakol|pekpek|tubol|ambaho|jakulin|tamod|tomboy|bading|bakla|gay)/gi;
    var clean = textarea.value.replace(regex, "");
    textarea.value = clean;
    }
    </script>
    
         
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="createlist" class="btn btn-info1 btn-lg" style="color:whitesmoke;">Create</button>
                    </div>
                    <span><?php echo $statusMsg?></span>
                </div>
            </form>
            </div>
        </div>
    </div>


<!--Footer-->
<?php include 'footer.php'?>
<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/js/bootstrapValidator.js"></script>

<script>
$(document).ready(function() {
    $('#serviceform').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    }
                }
            },
            price: {
                validators: {
                    notEmpty: {
                        message: 'The price is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The price can only consist of number'
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: 'The description is required and cannot be empty'
                    }
                }
            },
            category:{
                validators:{
                    regexp: {
                        regexp: /^['a-zA-Z &']+$/,
                        message: 'The category is required and cannot be empty'
                    }
                }
            },
            photo:{
                validators:{
                    notEmpty: {
                        message: 'The photos is required and cannot be empty'
                    }
                }
            }
        }
    });
});
</script>

</body>
</html>