<?php
  $id = $_GET['id'];

  $query = "SELECT * FROM `subcategory` WHERE `id` = :id";
  $statement = $db->prepare($query);
  $statement->execute( array(
          'id'     =>     $id
     ));
    $row = $statement->fetch();
  ?>
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3><h2 class = "heading">SubCatgeory</h2>
              <form method="POST" action="functions/updatesubcategory.php">
              <input type="hidden" name="Series" id="Series" value="<?php echo $id;?>"/>
              <label for="SubCategoryName" class="headingdays">SubCategory Name</label>
              <input type="text" name="SubCategoryName" id="SubCategoryName" value='<?php echo $row['SubCategoryName'];?>' require>
              <br>
              <br>

              <label for="Status" class="headingdays">Status</label>
              <input type="text" name="status" id="Status" value='<?php echo $row['Status'];?>'>
              <br>
              <br>

              <br>
              <div class = "buttons">
                <input type="Submit" class= "editbtn editbtn-primary" value="Save"/>
                <input type="Submit" class= "backbtn backbtn-primary" value="Back"/>
              </div>
    </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
