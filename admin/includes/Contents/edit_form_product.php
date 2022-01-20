
    <form method='POST' action='functions/addproduct.php'>
        <input type="text" class="form-control id2" placeholder="Series">
        <div class="form-group">
          <label for="exampleInputEmail1">Series</label>
          <input type="text" class="form-control" name='Series' placeholder="Series">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" name='ProductName' placeholder="ProductName">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category ID</label>
          <select class="form-control" name='CategoryID' id="CategoryID" required>
            <option value=""></option>

            <!--combo box function Select and Option-->
            <?php
            $datatable = "SELECT * FROM category";
            $result = $db->prepare($datatable);
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
            ?>
              <option value="<?php echo $row['ID'];?>"><?php echo $row['CategoryName'];?></option>
            <?php  };?>
          </select>
        </div>
        <div class="form-group">
            <div class="subcat" id="subcat" name="subcat"></div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Product Price</label>
          <input type="text" class="form-control" id="" name='ProductPrice' placeholder="ProductPrice">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">SRP</label>
          <input type="text" class="form-control" id="" name='SRP' placeholder="SRP">
        </div>
