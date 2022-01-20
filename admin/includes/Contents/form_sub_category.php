
    <form method='POST' action='functions/addsubcategory.php'>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Series</label>
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
          <label for="exampleInputEmail1">Sub Category Name</label>
          <input type="text" class="form-control" name='SubCategoryName' placeholder="SubCategoryName">
        </div>
      </div>
            </form><!-- /.card-body -->
