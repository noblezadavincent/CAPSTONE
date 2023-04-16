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


@media (max-width:629px) {
  img#optionalstuff {
    display: none;
  }
}
@media (max-width:629px) {
  div#login {
    margin-top:80px;
  }
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

<!--Navbar menu-->
<?php include('header.php')?>
<!--End Navbar menu-->

 
<div class="container">
  
    <div class="row">
       
        <p><img id="optionalstuff" src="image/apply.png"  style="margin-left: 20px;position: relative;width:450px;height:420px;margin-top:150px;float: left;"> </p>
  <div class="col-md-6 col-md-offset-1"  id="login">
            <div class="page-header">
                
                <h2 style="color: #41444B; ">Application Form</h2>
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
                    <label class="col-sm-4 control-label" style="color: #41444B;"></label>
                    <div class="col-sm-8">
                        <div class="checkbox" style="color: #41444B;">
                            <label>
                                <input type="checkbox" name="usertype" value="freelancer" /> <p style=" margin-right: -20px;">By ticking, you are confirming that you agree to USASS <a href="TAC.php"> Terms </a>and that you have read our  
    <a href="TAC.php#mydiv2">Data Policy</a>, including our  <a href="TAC.php#mydiv3">Cookie Use</a></p>
                            </label>
                        </div>
                      
                    </div>
                </div>
           <div class="w3-container">
 

 </h1>
    <div class="stepper-wrapper">
      <div class="stepper-item active">
        <div class="step-counter">1</div>
        <div class="step-name">Account Details</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">2</div>
        <div class="step-name">Requirements</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">3</div>
        <div class="step-name">Verification</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">4</div>
        <div class="step-name">Interview Schedule</div>
      </div>
    </div>


 

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button --><br>
                        <button type="submit" name="register" class="btn btn-info1 btn-lg"style="color:white;">Sign up</button>
                    </div>
                </div>
            </form>
            
          
            
            <br>
            <br>
            <br>
            <br>
        </div>
         
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
                        message: 'Check the terms and condition of USASS'
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
                        message: 'Check the terms and condition of USASS'
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