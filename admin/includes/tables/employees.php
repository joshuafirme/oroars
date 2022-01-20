<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Employees</h3>

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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Position</th>
                    <th>Priviledge</th>
                    <th>Button</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT * FROM employees";
                    $result = $db->prepare($datatable);
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>
                                <tr>
                                  <td><?php echo $row['Series'];?></td>
                                  <td><?php echo $row['Name'];?></td>
                                  <td><?php echo $row['Email'];?></td>
                                  <td><?php echo $row['Address'];?></td>
                                  <td><?php echo $row['ContactNo'];?></td>
                                  <td><?php echo $row['Position'];?></td>
                                  <td><?php echo $row['Priviledge'];?></td>
                                  <td>
                                  <a class="btn btn-success id" href='edit_employees.php?id=<?php echo $row['ID'];?>'>Edit</a>
                                  <a href="functions/delemployee.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
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
