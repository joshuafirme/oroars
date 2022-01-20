<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Billing</h3>

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
                    <th>Card No</th>
                    <th>CCV No</th>
                    <th>Date Expired</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM billing";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['ID'];?></td>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['CardNo'];?></td>
                                  <td><?php echo $row['CCVNo'];?></td>
                                  <td><?php echo $row['	DateExpired'];?></td>
                                  <td>
                                    <a href="function/Approved.php?id=<?php echo $row['ID'];?>" class="btn btn-success">Approved!</a>
                                    <a href="function/Denied.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Denied!</a>
                                  </td>
                                </tr>

                    <?php
                    }

                    ?>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Series</th>
                    <th>Card No</th>
                    <th>CCV No</th>
                    <th>Date Expired</th>
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
