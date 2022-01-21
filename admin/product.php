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
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Products</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?php include_once 'includes/tables/product.php';?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include_once 'includes/footer.php'?>
 
 <script>
   
   var id;
      $('.btn-archive').click(function() {
        id = $(this).attr('data-id');

      });
      $('#btn-confirm-archive').click(function() {
        archive(id)
      });


      function archive(id) {
        var formData = new FormData()
        formData.append("id",id)
        fetch('includes/app/archive.php?request=archive&id='+id, {method: "POST"})
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
