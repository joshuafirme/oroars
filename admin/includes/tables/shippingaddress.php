<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Shipping Address </h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Series</th>
                    <th>Address</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM shippingaddress";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['ID'];?></td>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['	Address'];?></td>
                                  <td>
                                  <a class="btn btn-success id" href='shippingfee.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                  <a href="function/Denied.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Denied!</a>
                                  </td>
                                </tr>

                    <?php
                    }

                    ?>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Series</th>
                    <th>Address</th>
                  </tr>
                  </tfoot>
                </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
