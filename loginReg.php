<?php include('server.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>USASS LOGIN/REGISTER</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrapValidator.css">

<style>
	body{padding-top: 3%;margin: 0;}
	.header1{background-color: #EEEEEE;padding-left: 1%;}
	.header2{padding:20px 40px 20px 40px;color:#fff;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
    #register, #registersvg{
        display:none;
        align-items:center;
    }
    .btn-info1{
            background-color:#008251; 
        }
        .btn-info1:hover{
           cursor: pointer;
		transform:translateY(-5px);
		transition:0.1s;
		
        }
        
        
        .popup {
            margin-left: 198px;
  position: relative; 
  color: cornflowerblue;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 390px;
 
  background-color: #555;
  color: #fff;
  text-align: justify;
  border-radius: 6px;
  padding: 8px 8px;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -200px;
  
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  opacity: 0.9;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
 opacity: 0.9;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 0.9;}
}


</style>

</head>
<body>

<!--Navbar menu-->
<?php include('header.php')?>
<!--End Navbar menu-->


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1" id="registersvg">
            <img src = "image/signin.png"  style="width:200%; align-items:center; padding-top:50px; margin-left: -220px;"/>
           
        </div>

        <div class="col-md-4 col-md-offset-1" id="login">
            <div class="page-header">
                <h2 style="color: #41444B;">Login</h2>
            </div>
            <form id="loginForm" method="post" class="form-horizontal">
                <div style="color:red;">
                    <p><?php echo $errorMsg; ?></p>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"style="color: #41444B;">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label"style="color: #41444B;">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label"style="color: #41444B;">Usertype</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <label style="color: #41444B;">
                                <input type="radio" name="usertype" value="freelancer" /> Freelancer
                            </label>
                        </div>
                        <div class="radio">
                            <label style="color: #41444B;">
                                <input type="radio" name="usertype" value="student" /> Client
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="login" class="btn btn-info1 btn-lg"style="color:whitesmoke;">Login</button>
                    </div>
                </div>
            </form>
            Don't have an account yet? <button class="register">Register</button>
        </div>

        <div class="col-md-6 col-md-offset-1" id="loginsvg">
            <img src = "image/welcome.png"  style="width:110%; padding-top:50px"/>
        </div>

        <div class="col-md-6 col-md-offset-1" id="register">
            <div class="page-header">
                <h2 style="color: #41444B;">Register</h2>
            </div>

            <form id="registrationForm" method="post" class="form-horizontal">
                <div style="color:red;">
                    <p><?php echo $errorMsg2; ?></p>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Name</label>
                    <div class="col-sm-5">
                        <input type="text"  pattern="^[\sa-zA-Z]*$" class="form-control" name="name" value="<?php echo $name; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Email address</label>
                    <div class="col-sm-5">
                        <input type="text"   class="form-control" name="email" value="<?php echo $email; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Password</label>
                    <div class="col-sm-5">
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password"  id="myInput" value="<?php echo $password; ?>" />
                         <input type="checkbox" style= "margin-top: 10px;" onclick="myFunction1()" > Show Password 
                    </div>
                </div>
<script>
function myFunction1() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                <div class="form-group">
                    <label class="col-sm-4 control-label"style="color: #41444B;">Retype Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="repassword" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Contact no.</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="contactNo" pattern="^(09|\+639)\d{9}$" value="<?php echo $contactNo; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Gender</label>
                    <div class="col-sm-5">
                        <div class="radio" style="color: #41444B;">
                            <label>
                                <input type="radio" name="gender" value="male" /> Male
                            </label>
                        </div>
                        <div class="radio" style="color: #41444B;">
                            <label>
                                <input type="radio" name="gender" value="female" /> Female
                            </label>
                        </div>
                        <div class="radio" style="color: #41444B;">
                            <label>
                                <input type="radio" name="gender" value="other" /> Other
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Date of birth</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="birthdate" value="<?php echo $birthdate; ?>" placeholder="YYYY-MM-DD" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Usertype</label>
                    <div class="col-sm-5">
                        <div class="radio" style="color: #41444B;">
                            <label>
                                <input type="radio" name="usertype" value="freelancer" /> Freelancer
                            </label>
                        </div>
                        <div class="radio" style="color: #41444B;">
                            <label>
                                <input type="radio" name="usertype" value="student" /> Client
                            </label>
                        </div>
                    </div>
                </div>
                <div class="popup" onclick="myFunction()">Why USASS collect your information?
                  
                    <span class="popuptext" id="myPopup">We gather information about you and your accounts so that we can: <br>(i) know who you are and thereby prevent unauthorized access to your information, <br>(ii) design and improve the products and services we offer, <br>(iii) this will be used as your identity in your profile.</span><br>
                    <script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</div>

 
<br><br> <p style="text-align: justify-all; margin-left: 198px; margin-right: -10px;">By clicking Sign up, you agree to our <a href="TAC.php"> Terms </a>and that you have read our  
    <a href="TAC.php#mydiv2">Data Policy</a>, including our  <a href="TAC.php#mydiv3">Cookie Use</a></p>
 
 
 
 

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button --><br>
                        <button type="submit" name="register" class="btn btn-info1 btn-lg"style="color:white;">Sign up</button>
                    </div>
                </div>
            </form>
            
            Already have an account? <button class="login">Login</button>
            <br>
            <br>
            <br>
            <br>
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
    $('#registrationForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    },
                    stringLength: {
                        min: 6,
                        message: '"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"'
                    }
                }
            },
            repassword: {
                validators: {
                    notEmpty: {
                        message: 'The password confirmation is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password  is not matched'
                    }
                }
            },
            contactNo: {
                validators: {
                    notEmpty: {
                        message: 'The contact number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The number is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            birthdate: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        message: 'The date of birth is not valid'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
            usertype: {
                validators: {
                    notEmpty: {
                        message: 'The usertype is required'
                    }
                }
            }
        }
    });
    $('#loginForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            },
            usertype: {
                validators: {
                    notEmpty: {
                        message: 'The usertype is required'
                    }
                }
            }
        }
    });

});
</script>

<script>
$(".register").click(function(){
  $("#register").slideDown("slow");
  $("#login").slideUp("slow");
  $("#loginsvg").slideUp("slow");
  $("#registersvg").slideDown("slow");
});
$(".login").click(function(){
  $("#register").slideUp("slow");
  $("#login").slideDown("slow");
  $("#loginsvg").slideDown("fast");
  $("#registersvg").slideUp("slow");
});
</script>

</body>
</html>