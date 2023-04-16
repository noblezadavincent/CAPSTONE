
<div >
  <h2>Service List</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Title</th>
        <th class="text-center">Category</th>
        <th class="text-center">Budget</th>
        <th class="text-center">Date</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "./config/server.php";
      $sql="SELECT * from servicelist";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["img"]?>'></td>
      <td><?=$row["username"]?></td> 
      <td><?=$row["title"]?></td>
      <td><?=$row["category"]?></td>      
      <td><?=$row["price"]?></td> 
      <td><?=$row["date"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['serviceid']?>')">Email</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['serviceid']?>')">Restrict</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
  
  <div >
  <h2>Request Task</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
          <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Title</th>
        <th class="text-center">Category</th>
        <th class="text-center">Budget</th>
        <th class="text-center">Date</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/server.php";
      $sql="SELECT * from job_offer";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>   <td><?=$count?></td>
       
   
   
      
      <td><?=$row["e_username"]?></td> 
      <td><?=$row["title"]?></td>
      <td><?=$row["type"]?></td>      
      <td><?=$row["budget"]?></td> 
      <td><?=$row["timestamp"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['job_id']?>')">Email</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['job_id']?>')">Restrict</button></td>
      
    </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
      
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" class="form-control" id="p_price" required>
            </div>
            <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" class="form-control" id="p_desc" required>
            </div>
            <div class="form-group">
              <label>Category:</label>
              <select id="category" >
                <option disabled selected>Select category</option>
                <?php

                  $sql="SELECT * from category";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   