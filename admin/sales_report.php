<!DOCTYPE html>
<?php
include'includes/auth.php';
include'includes/connect.php';
?>
<html lang="en">
<head>
  <title>OROARS | Dashboard</title>
  <?php include'includes/head.php';?>
  <style>
      .form-select{
	  display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
	background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
	}
	.form-select:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
	}
    /*---------------Pop up css------------*/ 
		#css-only-modals { 
		position:fixed; 
		pointer-events:none;
		left:0;
		top:0;
		right:0;
		bottom:0;
		z-index:10000000;
		text-align:center;
		white-space:nowrap;
		height:100%;
		}
		#css-only-modals:before {
		content:'';
		display:inline-block;
		height:100%;
		vertical-align:middle;
		margin-right:-.25em;
		}
		.css-only-modal-check {
		pointer-events:auto;
		display:none;
		}
		.css-only-modal-check:checked ~ .css-only-modal {
		opacity:1;
		pointer-events:auto;
		}
		.css-only-modal {
		width: 700px;
		background:#fff;
		z-index:1;
		display:inline-block;
		position:relative;
		pointer-events:auto;
		padding:25px;
		text-align:center;
		border-radius:4px;
		white-space:normal;
		display:inline-block;
		vertical-align:middle;
		opacity:0;
		pointer-events:none;
		max-width: 90%;
		}
		.css-only-modal h2 {
		text-align:center;
		}
		.css-only-modal p {
		text-align:center;
		}
		.btn-primary:hover {
		color:#fff;
		background-color:#999;
		border-color:#999;
		}
		.btn-primary {
		color:#fff;
		background-color:#777;
		border-color:#777;
		border-radius: 4px;
		padding: 6px 12px;
		}
		.css-only-modal-check:checked ~ #screen-shade {
		opacity:.5;
		pointer-events:none;
		}
		#modal1 { display: none; }
		#screen-shade {
		opacity:0;
		background:#000;
		position:absolute;
		left:0;
		right:0;
		top:0;
		bottom:0;
		pointer-events:none;
		transition:opacity .8s;
		}
		/*------------End pop up css------*/ 
      </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <?php include 'includes/leftnav.php';?>
  <?php include 'includes/topnav.php';?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/images/logo.png" alt="OROARS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Davids Grill</span>
    </a>

    <!-- Sidebar -->
  <?php include'includes/sidebaruser.php' ?>

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

      <?php include 'includes/sidemenu.php'?>
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
            <h1>Sales Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sales Report</a></li>
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
    <h3 class="card-title">List of Transactions</h3>
  </div>
  <div class="row">
          <div class="px-4 py-2">
              <div class="input-group col-12">
              <div class="input-group-prepend">
              <span class="input-group-text" id="">Select Dates</span>
              </div>
            <input type="date" class="form-control" id="date_start">
            <input type="date" class="form-control" id="date_end">
            <div class="input-group-append">
              <button class="btn btn-dark" style="text-align:center;margin-bottom:0" id="btn_generate"> generate report</button>
            </div>
          </div>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
                  <tr>
                    <th>Date Created</th>
                    <th>Reference Number </th>
                    <th>Product Name </th>
                    <th>Quantity </th>
                    <th>SRP </th>
                    <th>Payment Method</th>
                    <th>Total Amount</th>
                  </tr>
                  </thead>
                  <tbody id="table_clients">
                                
                  </tbody>
                  
                </table>
  </div>
  <div class="card-footer">
  </div>
 
  


</div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include'includes/footer.php'?>
 <script>
   $("#btn_generate").click(()=>{
     if($("#date_start").val() === "" || $("#date_end").val() === ""){
       return alert("Please select Dates");
     }
     fetch(`includes/app/transactions.php?request=sales_report&date_start=${$("#date_start").val()}&date_end=${$("#date_end").val()}`)
    .then(data => data.json())
    .then(data => {
        const container = document.querySelector("#table_clients");
      if(data.response == 1){
          
          container.innerHTML = "";
          if(data.hasOwnProperty("list")){
              console.log(data)
          const requestcontent = data.list.map(item =>{
              return `<tr>
                          <td>${item.date_created}</td>
                          <td>${item.ref_number}</td>
                          <td>${item.ProductName}</td>
                          <td>${item.quantity}</td>
                          <td>${item.SRP}</td>
                          <td>${item.payment_method}</td>
                          <td>${parseFloat(item.total_amount).toFixed(2)}</td>
                         
                           </tr>`
          })

          if(requestcontent.length < 1){
            return container.innerHTML = `<tr><td colspan='4' style="text-align:center">No Result Found</td></tr>`
          }

          requestcontent.forEach(el=>{
              container.innerHTML += el
          })
          return
          
        }
      }
      return container.innerHTML = `<tr><td colspan='7' style="text-align:center">No Result Found</td></tr>`
    })
   })
//    const fetchList = () =>{
//     fetch('includes/app/clients.php?request=account_list')
//     .then(data => data.json())
//     .then(data => {
//       if(data.response == 1){
//           const container = document.querySelector("#table_clients");
//           container.innerHTML = "";
//           if(data.hasOwnProperty("list")){
//           const requestcontent = data.list.map(item =>{
//               return `<tr>
//                           <td>${item.ID}</td>
//                           <td>${item.lname}, ${item.fname} ${item.mname}</td>
//                           <td>${item.username}</td>
//                           <td>${item.street_add} ,${item.city_add} ${item.zip_add}</td>
//                           <td>${item.contact}</td>
//                           <td>${item.email}</td>
                        
//                           <td>${!parseInt(item.validated) ? "waiting for validation" : "validated" }</td>
//                           <td>${item.date_created}</td>
//                            </tr>`
//           })

//           requestcontent.forEach(el=>{
//               container.innerHTML += el
//           })
//           }
//       }
//     })
//   }

    // fetchList()
</script>
</body>
</html>