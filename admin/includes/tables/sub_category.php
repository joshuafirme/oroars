<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Subcategory</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-info" data-card-widget="add" title="add" data-toggle="modal" data-target="#modal-primary">
        <i class="fas fa-add">New</i>
      </button>
    <!--<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>-->
    </div>
  </div>
  <div class="card-body">

    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Series</th>
                    <th>Sub_Category Name</th>
                    <th>Status</th>
                    <th>Button</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM subcategory";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['SubCategoryName'];?></td>
                                  <td><?php
                                      if($row['Status'] == 0){
                                        echo 'Active';
                                      }else{
                                        echo 'De-activated';
                                      }
                                      ?></td>
                                  <td>
                                  <a class="btn btn-success id" href='edit_subcategory.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                  <a href="functions/delsubcateg.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
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
<!-- /.card -->

<div class="modal fade" id="modal-primary" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <?php include'includes/contents/form_sub_category.php'?>
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
