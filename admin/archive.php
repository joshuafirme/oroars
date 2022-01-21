<?php
include_once 'includes/auth.php';
include_once 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OROARS | Dashboard</title>
  <?php include_once 'includes/head.php';?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <?php include_once 'includes/leftnav.php';?>
  <?php include_once 'includes/topnav.php';?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/images/logo.png" alt="OROARS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Davids Grill</span>
    </a>

    <!-- Sidebar -->
  <?php include_once 'includes/sidebaruser.php' ?>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <?php include_once 'includes/sidemenu.php'?>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Archive</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Archive</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Archive</h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Product Price</th>
                    <th>SRP</th>
                    <th>Photo</th>
                    <th>Button</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $datatable = "SELECT `product`.ID, `product`.ProductName, `category`.CategoryName, `subcategory`.SubCategoryName, `product`.ProductPrice, `product`.SRP, `product`.photo FROM `product` LEFT JOIN `category` ON `category`.ID = `product`.CategoryID LEFT JOIN `subcategory` ON `subcategory`.`ID` = `product`.`SubCategoryID` 
                                  WHERE product.status = 0";
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
                                    <button data-toggle="modal" data-id="<?php echo $row['ID'];?>" data-target="#confirmation" class="btn btn-success btn-restore">Restore</button>
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
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure do you want to restore this product?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="btn-confirm-restore">Yes</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include_once 'includes/footer.php'?>
 
 <script>
   
   var id;
      $('.btn-restore').click(function() {
        id = $(this).attr('data-id');

      });
      $('#btn-confirm-restore').click(function() {
        restore(id)
      });


      function restore(id) {
        var formData = new FormData()
        formData.append("id",id)
        fetch('includes/app/archive.php?request=restore&id='+id, {method: "POST"})
            .then(data => data.json())
            .then(data => {
              if(data.response == 1){
                alert(data.message) 
                  
                location.reload();
              }
        })
      }
 </script>
</body>
</html>
