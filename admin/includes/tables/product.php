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
                    $datatable = "SELECT `product`.ID, `product`.ProductName, `category`.CategoryName, `subcategory`.SubCategoryName, `product`.ProductPrice, `product`.SRP, `product`.photo FROM `product` LEFT JOIN `category` ON `category`.ID = `product`.CategoryID LEFT JOIN `subcategory` ON `subcategory`.`ID` = `product`.`SubCategoryID`";
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
                                    <a class="btn btn-success id" href='edit_product.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                    <a href="functions/delproduct.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
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
  <script>
      // $('#id').click(function() {
      // var id = $(this).data('id');

      // $('.id2S').val(id);
      // } );
   </script>
  <!-- /.card-footer-->
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
              <?php include'includes/contents/form_product.php';?>
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
              <?php include'includes/contents/edit_product.php';?>
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
