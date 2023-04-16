


<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Username</th>
            <th>Description</th>
          
        </tr>
    </thead>
    <?php
        include_once "server.php";
         $ID= $_GET['job_id'];
        //echo $ID;
        $sql="select *  from job_offer where job_id=$ID";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
               
    ?>
                <tr>
                  
                    <td><?=$row["e_username"]?></td>
      
                    <td style='text-align: left;margin-left: 10px;'><?=$row["description"]?></td> 
                </tr>
    <?php
              
            }
        }{
            
        }
    ?>
</table>
</div>
