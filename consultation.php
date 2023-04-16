<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Free Consultation</title>
    <style>
        
      

.form {
    margin: 50px auto;
    width: 350px;
    padding: 30px 25px;
    background: #008251;
}
h1.login-title {
    color: whitesmoke;
    margin: 0px auto 25px;
    font-size: 30px;
    font-weight: 400;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: whitesmoke;
    background: #97B394;
    border: 0;
    outline: 0;
    width: 30%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    border-radius: 5px;
    
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}
    </style>
</head>
<?php include('header.php')?>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['fullname'])) {
        // removes backslashes
        $fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
        $fullname = mysqli_real_escape_string($con, $fullname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phoneno = stripslashes($_REQUEST['phoneno']);
        $phoneno = mysqli_real_escape_string($con, $phoneno);
        $message = stripslashes($_REQUEST['message']);
        $message = mysqli_real_escape_string($con, $message);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (fullname, email, phoneno, message, create_datetime)
                     VALUES ('$fullname', '$email', '$phoneno','$message', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Free Consultation</h1>
        <p style="color: whitesmoke; font-style: normal; font-size: 19px; margin-bottom: 3px;">Name</p>
        <input type="text" class="login-input" name="fullname" placeholder="fullname" required />
       <p style="color:  whitesmoke; font-style: normal; font-size: 19px; margin-bottom: 3px; margin-top:-10px;">Email</p>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <p style="color:  whitesmoke; font-style: normal; font-size: 19px; margin-bottom: 3px; margin-top:-10px;">Phone</p>
        <input type="text" class="login-input" name="phoneno" placeholder="Phone Number">
       <p style="color:  whitesmoke; font-style: normal; font-size: 19px; margin-bottom: 3px; margin-top:-10px;">How can we help?</p>
       <textarea name="text" class="login-input" name="message" style="height: 90px;" placeholder="Message"></textarea>
        
        <input type="submit" name="submit" value="SUBMIT" class="login-button">
     
    </form>
<?php
    }
?>
</body>
</html>