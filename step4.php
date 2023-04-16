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
 
           <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
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



  .hovertext {
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
  margin-top: 500px;
margin-left: 200px;
  position: absolute;
  z-index: 1;
  left: 0;
  top: 110%;
}

.hovertext:hover:before {
  opacity: 0.5;
  visibility: visible;
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
  margin-top: -22px;
margin-left: 140px;
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
<?php include('header.php')?>
<!--End Navbar menu-->

 
<div class="container">
  
    <div class="row">
       
        <p><img id="optionalstuff" src="image/apply.png"  style="margin-left: 20px;position: relative;width:450px;height:420px;margin-top:150px;float: left;"> </p>
  <div class="col-md-6 col-md-offset-1"  id="login">
            <div class="page-header">
                
                <h2 style="color: #41444B; ">Schedule your Interview</h2>
            </div>
        

            <form id="registrationForm" method="post" class="form-horizontal">
                <div style="color:red;">
                    <p><?php echo $errorMsg2; ?></p>
                </div>
               
                <div class="form-group">
                   
                    <label class="col-sm-4 control-label" style="color: #41444B;">Position</label>
                    <div class="col-sm-5">
                     <div class="col-sm-15">
                    <input type="checkbox"  id="vehicle1" name="vehicle1" value="Bike"> Custom Software Development 
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Manage IT Services <br>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Cloud services<br>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Business & Productivity <br>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Digital Services <br>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Game Developer <br>
                
                    </div>
                    </div>
                </div>

                <div class="form-group">
                  
                         <label class="col-sm-4 control-label" style="color: #41444B;">Prefer Date</label>
                    <div class="col-sm-5">
                        
                           <span class="hovertext" data-hover="ENCOURAGE to set the date 10 days after the application period">
                        <input type="date" class="" name="myfile"></span>
                       
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Gmeet link</label>
                    <div class="col-sm-5">
                       <input type="text" class="form-control" name="myfile">
                        
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
      <div class="stepper-item completed">
        <div class="step-counter">3</div>
        <div class="step-name">Verification</div>
      </div>
      <div class="stepper-item active">
        <div class="step-counter">4</div>
        <div class="step-name">Interview Schedule</div>
      </div>
    </div>
 

 

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button --><br>
                        <button type="submit" name="register" onclick="myFunction()" class="btn btn-info1 btn-lg"style="color:white;">Sign up</button>
                    </div>
                </div>
            </form>
            
          <script>
function myFunction() {
  alert("Your application has been successfully completed! A confirmation e-mail will be sent to you after we ");
}
</script>
            
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