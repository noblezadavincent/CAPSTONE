
<?php include('server.php');
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
		$textBtn="Edit the request";
	}
}
else{
    $username="";
	//header("location: index.php");
}

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}
else{
    $job_id="";
    //header("location: index.php");
}

if(isset($_POST["f_user"])){
	$_SESSION["f_user"]=$_POST["f_user"];
	header("location: viewFreelancer.php");
}

if(isset($_POST["c_letter"])){
	$_SESSION["c_letter"]=$_POST["c_letter"];
	header("location: coverLetter.php");
}


if(isset($_POST["hire"])){
	$f_hire=$_POST["f_hire"];
	$f_price = $_POST["f_pri"];
	$sql = "INSERT INTO selected (f_username, job_id, e_username, price, valid) VALUES ('$f_hire', '$job_id', '$username','$f_price',1)";
    
    $result = $conn->query($sql);
    if($result==true){
    	$sql = "DELETE FROM apply WHERE job_id='$job_id'";
		$result = $conn->query($sql);
		if($result==true){
			$sql = "UPDATE job_offer SET valid=0 WHERE job_id='$job_id'";
			$result = $conn->query($sql);
			if($result==true){
				header("location: jobDetails.php");
			}
		}
    }
}


if(isset($_POST["f_done"])){
	$f_done=$_POST["f_done"];
	$sql = "UPDATE selected SET valid=0 WHERE job_id='$job_id'";
	$result = $conn->query($sql);
    if($result==true){
    	header("location: jobDetails.php");
    }
}

$sql = "SELECT * FROM job_offer WHERE job_id='$job_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$e_username=$row["e_username"];
        $title=$row["title"];
        $type=$row["type"];
        $description=$row["description"];
		$_SESSION["price"]=$row["budget"];
        $budget=$row["budget"];
        $skills=$row["skills"];
        $special_skill=$row["special_skill"];
        $timestamp=$row["timestamp"];
        $jv=$row["valid"];
        $date=$row["timestamp"];
		$deadline=$row["deadline"];
        }
} else {
    echo "0 results";
}

$_SESSION["msgRcv"]=$e_username;



 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background-color: #f5f5f5;
  font-family: Arial, Helvetica, sans-serif;
}
.wrapper{
  background-color: #fff;
  width: 500px;
  padding: 25px;
  margin: 25px auto 0;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.wrapper h2{
  background-color: #fcfcfc;
  color: #7ed321;
  font-size: 24px;
  padding: 10px;
  margin-bottom: 20px;
  text-align: center;
  border: 1px dotted #333;
}
h4{
  padding-bottom: 5px;
  color: #7ed321;
}
.input-group{
  margin-bottom: 8px;
  width: 100%;
  position: relative;
  display: flex;
  flex-direction: row;
  padding: 5px 0;
}
.input-box{
  width: 100%;
  margin-right: 12px;
  position: relative;
}
.input-box:last-child{
  margin-right: 0;
}
.name{
  padding: 14px 10px 14px 50px;
  width: 100%;
  background-color: #fcfcfc;
  border: 1px solid #00000033;
  outline: none;
  letter-spacing: 1px;
  transition: 0.3s;
  border-radius: 3px;
  color: #333;
}
.name:focus, .dob:focus{
  -webkit-box-shadow:0 0 2px 1px #7ed32180;
  -moz-box-shadow:0 0 2px 1px #7ed32180;
  box-shadow: 0 0 2px 1px #7ed32180;
  border: 1px solid #7ed321;
}
.input-box .icon{
  width: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  color: #333;
  background-color: #f1f1f1;
  border-radius: 2px 0 0 2px;
  transition: 0.3s;
  font-size: 20px;
  pointer-events: none;
  border: 1px solid #00000033;
  border-right: none;
}
.name:focus + .icon{
  background-color: #7ed321;
  color: #fff;
  border-right: 1px solid #7ed321;
  border: none;
  transition: 1s;
}
.dob{
  width: 30%;
  padding: 14px;
  text-align: center;
  background-color: #fcfcfc;
  transition: 0.3s;
  outline: none;
  border: 1px solid #c0bfbf;
  border-radius: 3px;
}
.radio{
  display: none;
}
.input-box label{
  width: 50%;
  padding: 13px;
  background-color: #fcfcfc;
  display: inline-block;
  float: left;
  text-align: center;
  border: 1px solid #c0bfbf;
}
.input-box label:first-of-type{
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-right: none;
}
.input-box label:last-of-type{
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.radio:checked + label{
  background-color: #7ed321;
  color: #fff;
  transition: 0.5s;
}
.input-box select{
  display: inline-block;
  width: 50%;
  padding: 12px;
  background-color: #fcfcfc;
  float: left;
  text-align: center;
  font-size: 16px;
  outline: none;
  border: 1px solid #c0bfbf;
  cursor: pointer;
  transition: all 0.2s ease;
}
.input-box select:focus{
  background-color: #7ed321;
  color: #fff;
  text-align: center;
}
button{
  width: 100%;
  background: transparent;
  border: none;
  background: #7ed321;
  color: #fff;
  padding: 15px;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.35s ease;
}
button:hover{
  cursor: pointer;
  background: #5eb105;
}
    </style>
<body>
    <div class="wrapper">
        <h2 style='font-size: 20px; color: #2C2D2D;'>Payment Form</h2>
        <form method="POST">
            <h4 style='font-size: 20px; color: #2C2D2D;'>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Username" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4 style='font-size: 20px; color: #2C2D2D;'> Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4 style='font-size: 20px; color: #2C2D2D;'> Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio">
                    <label style='font-size: 16px; color: #2C2D2D;' for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label style='font-size: 16px; color: #2C2D2D;' for="b2">Female</label>
                </div>
            </div>
             <div class="input-group">
                <div class="input-box">
                    <h4 style='font-size: 20px; color: #2C2D2D;'>Total Amount</h4>
                    
                  <h4 style='font-size: 50px; color: #2C2D2D;'> <?php echo $budget?><br></h4>
                   
                </div>
            </div>
               
              
                   
               
          
            <div class="input-group">
                <div class="input-box">
                    <button type="submit" style='font-size: 20px; color: #2C2D2D;'>PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>