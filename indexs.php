<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
       
       
     
       
       
  </head>
</head>
<body >
    
        <?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "./controller/config/dbconnect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                     <img src="./assets/images/group.png" width="80" height="80" alt="Swiss Collection">
                    <h4 style="color:white;font-size: 20px;" >Total Freelancers</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from freelancer ";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                        <img src="./assets/images/group.png" width="80" height="80" alt="Swiss Collection">
                    <h4 style="color:white;font-size: 20px;" >Total Employer</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from employer";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                   <img src="./assets/images/thinking.png" width="80" height="80" alt="Swiss Collection">
                    <h4 style="color:white;font-size: 20px;">Total Requests</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from job_offer where valid=1";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
             <div class="col-sm-3">
                <div class="card">
                     <img src="./assets/images/technical-support.png" width="80" height="80" alt="Swiss Collection">
                    <h4 style="color:white;font-size: 20px;">Total Services</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from servicelist";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                  <img src="./assets/images/completed-task.png" width="80" height="80" alt="Swiss Collection">
                    <h4 style="color:white;font-size: 20px;">Completed Jobs</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from selected";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                   <img src="./assets/images/problem.png" width="80" height="80" alt="Swiss Collection">
                    <h4 style="color:white;font-size: 20px;">Reports</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from message";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
        
    </div>
       
            
        <?php
            if (isset($_GET['category']) && $_GET['category'] == "success") {
                echo '<script> alert("Category Successfully Added")</script>';
            }else if (isset($_GET['category']) && $_GET['category'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>



    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>