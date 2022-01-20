<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Category</h3>

    <div class="card-tools">
      <!--Declaration of New Button para sa adding ng new category-->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary"> New
      </button>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Series</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Button</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM category";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['CategoryName'];?></td>
                                  <td><?php
                                      if($row['Status'] == 0){
                                        echo 'Active';
                                      }else{
                                        echo 'De-activated';
                                      }
                                      ?>
                                    </td>
                                    <td>
                                    <a class="btn btn-success id" href='edit_category.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                    <a href="functions/delcateg.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
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

<!--Para sa form na nagpopup after na iclick ang new button sa adding ng category-->
<div class="modal fade" id="modal-primary" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add New Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <?php include'includes/contents/form_category.php';?>
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
