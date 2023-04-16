


<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Username</th>
            <th>Description</th>
          
        </tr>
    </thead>
    <?php
        include_once "../config/server.php";
         $ID= $_GET['serviceid'];
        //echo $ID;
        $sql="select *  from servicelist where serviceid=$ID";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
               
    ?>
                <tr>
                  
                    <td><?=$row["username"]?></td>
      
                    <td style='text-align: left;margin left: 10px;'><?=$row["description"]?></td> 
                </tr>
    <?php
              
            }
        }{
            
        }
    ?>
</table>
</div>
