<?php


if(isset($_POST["job_id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "root", "", "fmarket");  
     $query = "SELECT * FROM job_offer WHERE job_id = '".$_POST["job_id"]."'";
  $result = mysqli_query($connect, $query);   


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
              <tr>  
                  
                   <td width="70%">'.$row["description"].'</td>  
              </tr>  
            
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  








}