<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Billing Form</h3>
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
    <form method='POST' action=''>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Series</label>
          <input type="text" class="form-control" name='Series' placeholder="Series">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Card No</label>
          <input type="text" class="form-control" name='CardNo' placeholder="CardNo">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Expiration Month</label>
          <input type="text" class="form-control" name='Expmonth' placeholder="September">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Expiration Year</label>
          <input type="text" class="form-control" name='Expyear' placeholder="2016">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">CCV No</label>
          <input type="text" class="form-control" name='CCVNo' placeholder="CCVNo">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date Expired</label>
          <input type="text" class="form-control" id="" name='DateExpired' placeholder="DateExpired">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
