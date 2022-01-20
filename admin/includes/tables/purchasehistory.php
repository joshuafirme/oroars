<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Purchase History</h3>

    <div class="card-tools">
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Series</th>
                    <th>Client ID</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Bill</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM purchasehistory";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['ClientID'];?></td>
                                  <td><?php echo $row['Date'];?></td>
                                  <td><?php echo $row['Address'];?></td>
                                  <td><?php echo $row['Bill'];?></td>
                                  <td><?php echo $row['Status'];?></td>
                                  <td><?php
                                      if($row['Status'] == 0){
                                        echo 'Active';
                                      }else{
                                        echo 'De-activated';
                                      }
                                      ?>
                                    </td>
                                    <td>
                                    <a class="btn btn-success id" href='edit_product.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                    <a href="functions/delpurchasehistory.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
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
