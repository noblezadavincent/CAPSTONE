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
           background-color: #008251;
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
       
           
        </div>

      
        </div><br>
            <br>
            <h1 style="margin-left: 20%;">Free Consultation</h1>
       
        
            <form id="registrationForm" style="margin-top:20px;"method="post" class="form-horizontal">
                
                <div style="color:red;">
                    <p><?php echo $errorMsg2; ?></p>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Full Name</label>
                    <div class="col-sm-3">
                        <input type="text"  pattern="^[\sa-zA-Z]*$" class="form-control" name="name" value="<?php echo $name; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Email</label>
                    <div class="col-sm-3">
                        <input type="email"  class="form-control" name="email" value="<?php echo $username; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">Phone</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="contactNo" pattern="^(09|\+639)\d{9}$" value="<?php echo $email; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" style="color: #41444B;">How can we help?</label>
                    <div class="col-sm-3">
                         <textarea name="text" class="form-control" style=" height: 100px; width: 370px;"name="description" id="description" onkeyup="fbws('description')" value="" /></textarea></span>
                       
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
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button --><br>
                        <button type="submit" name="register" class="btn btn-info1 btn-lg"style="color:white; margin-left: 95px; margin-top: -15px;">SUBMIT</button>
                    </div>
                </div>
            </form>
            
       
            
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