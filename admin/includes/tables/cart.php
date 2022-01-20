<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Reservation</h3>

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
                    <th>ProductName</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>ShippingFee</th>
                    <th>TotalBill</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM cart";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['ProductName'];?></td>
                                  <td><?php echo $row['Quantity'];?></td>
                                  <td><?php echo $row['Price'];?></td>
                                  <td><?php echo $row['ShippingFee'];?></td>
                                  <td><?php echo $row['TotalBill'];?></td>
                                  <a class="btn btn-success id" href='edit_product.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                  <a href="function/Denied.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>

                    <?php
                    }
                    ?>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Anna</td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td>X</td>
                  </tr>
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
