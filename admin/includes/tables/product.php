<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Product</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">New</button>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th>Series</th> -->
                    <th>Product Name</th>
                    <th>Category</th>
                    <!-- <th>Sub-Category</th> -->
                    <th>Product Price</th>
                    <th>SRP</th>
                    <th>Photo</th>
                    <th>Button</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT `product`.ID, `product`.ProductName, `category`.CategoryName, `subcategory`.SubCategoryName,
                    `category`.ID as CategoryID, `subcategory`.ID as SubCategoryID,
                     `product`.ProductPrice, `product`.status, `product`.SRP, `product`.photo FROM `product` 
                    LEFT JOIN `category` ON `category`.ID = `product`.CategoryID 
                    LEFT JOIN `subcategory` ON `subcategory`.`ID` = `product`.`SubCategoryID` 
                                  WHERE product.status = 1";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>

                                  <!-- <td></td> -->
                                  <td><?php echo $row['ProductName'];?></td>
                                  <td><?php echo $row['CategoryName'];?></td>
                                  <td><?php echo $row['ProductPrice'];?></td>
                                  <td style="text-align:right"><?php echo $row['SRP'];?></td>
                                  <td><img src ="<?php echo '../' . $row['photo'];?>" height="50px" width="50px"/></td>
                                  <td>
                                  <button class="btn btn-secondary btn-edit" 
                                  data-id="<?php echo $row['ID'];?>"
                                  data-name="<?php echo $row['ProductName'];?>"
                                  data-category-id="<?php echo $row['CategoryID'];?>"
                                  data-subcat-id="<?php echo $row['SubCategoryID'];?>"
                                  data-price="<?php echo $row['ProductPrice'];?>"
                                  data-srp="<?php echo $row['SRP'];?>"
                                  data-photo="<?php echo $row['photo'];?>"
                                  data-status="<?php echo $row['status'];?>"
                                  data-toggle="modal" data-target="#updateModal"
                                  > EDIT</button>
                                    <button data-toggle="modal" data-id="<?php echo $row['ID'];?>" data-target="#confirmation" class="btn btn-danger btn-archive">Archive</button>
                                  </td>
                                </tr>

                    <?php
                    }

                    ?>

                  </tbody>

                </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>

<div class="modal fade" id="confirmation" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Archive confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure do you want to archive this product?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="btn-confirm-archive">Yes</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-primary" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add New Products</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <?php include_once 'includes/Contents/form_product.php';?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Save changes</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="updateModal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Update Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            
        <div class="form-group">
          <input type="hidden"  id="product_id">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" id="name" name='ProductName' placeholder="ProductName">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category ID</label>
          <select class="form-control" name='cat_id' id="cat_id" required>

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
          <input type="text" class="form-control" id="price" name='ProductPrice' placeholder="ProductPrice">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">SRP</label>
          <input type="text" class="form-control" id="srp" name='SRP' placeholder="SRP">
        </div>
      <!--   <div class="form-group">
          <label for="exampleInputPassword1">Photo</label>
          <input type="file" class="form-control" id="photo" name='Photo' placeholder="Photo">
        </div>
-->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="btn-update">Update changes</button>
         
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-primary2" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Products</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <?php include_once 'includes/Contents/edit_product.php';?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Save changes</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
