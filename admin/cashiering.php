
<?php
include_once 'includes/auth.php';
include_once 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OROARS | Dashboard</title>
  <?php include_once 'includes/head.php';?>
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
   <?php include_once 'includes/leftnav.php';?>
  <?php include_once 'includes/topnav.php';?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
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
            <h1>Cashiering</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cashiering</a></li>
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
    <h3 class="card-title">List of Orders</h3>
  </div>
    <div class="px-4 py-2">
      <a href="create_order.php" class="btn btn-primary" style="text-align:center;margin-bottom:0" for="modal1" id="btnAddNew"><i class="fa fa-plus"></i> Add New Order</a>
    </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Date/Time</th>
                    <th>Order Number</th>
                    <th>Order Type</th>
                    <th>Ordered Menu</th>
                    <th>Status</th>
                    <th>Table Number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="table_list">
                               
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
<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        
      </div>
      <div class="modal-body">
        <div class="list-group" id="body_order_container">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose">Close</button>
      </div>
    </div>
  </div>
</div>
 <?php include_once 'includes/footer.php'?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
 <script type="text/javascript">
    const viewModal = (title) =>{
        $("#exampleModalCenter").show();
        $("#exampleModalLongTitle").text('Order Number : ' + title)
        fetch(`includes/app/cashier.php?request=get_order&trans=${title}`)
        .then(data => data.json())
        .then(data =>{
          const container = document.querySelector("#body_order_container");
          container.innerHTML = "";
          if(data.response == 1){
            const requestcontent = data.list.map(item =>{

              return `<a class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">${item.ProductName}</h5>
                        <small>item total price: Php ${parseFloat(item.SRP * item.quantity).toFixed(2)}</small>
                    </div>
                    <div class="d-flex w-100 justify-content-between">
                    <img src="../${item.photo}" style="width:50px;height:auto">
                    <p class="mb-1">Quantity : ${item.quantity}<br> Price : Php ${item.SRP}</p>
                    </div>
                    <a>`
            })

            requestcontent.forEach(el=>{
                container.innerHTML += el
            })
          }
        })
      }
    document.querySelector("#btnClose").addEventListener('click',()=>{
      $("#exampleModalCenter").hide();
    })
    async function printBill(id,ref,date,amount,type){

      if(!confirm("Are you sure you want to print bill for customer ?")){
        return
      }
      var doc = new jsPDF();
      const res =  await fetch(`includes/app/cashier.php?request=get_order&trans=${ref}`)
      .then(data => data.json())
      .then(data => items = data.list)
      doc.setFontSize(14);
      doc.text(`Date : ${date}`, 70, 20);
      doc.text(`DAVID'S GRILL RESTAURANT  `, 20, 40);
      doc.text(`Transaction Ref: ${ref}`, 20, 60);      
      doc.text(`Charge Break Down: `, 20, 70);
      var vposition = 70;
      res.map(item =>{
        vposition += 20
        doc.text(`${item.ProductName} x (${item.quantity})`, 20 , vposition);
        doc.text(`Php ${parseFloat(item.SRP * item.quantity).toFixed(2)}`, 140 , vposition);
      })
      
      ref.substring(0,3) === "RES" ? type  === "food_reservation" ? doc.text(`Partial Payment During Online Reservation: Php ${parseFloat(amount/2).toFixed(2)}`) : doc.text(`Online Reservation fee: Php 50 (PAID)`):``
      doc.text(`Total Amount (VAT INCLUDED): ${ ref.substring(0,3) === "RES" ? type  === "food_reservation" ? parseFloat(amount/2).toFixed(2) : parseFloat(amount).toFixed(2) : parseFloat(amount).toFixed(2)}`, 70, vposition + 50);

      data = {
        stat : "BILL-OUT",
        payment: null,
        card_details: null,
        trans: ref
      }
      await fetch(`includes/app/cashier.php?request=update_status`,{method:"POST",body:JSON.stringify(data)})
      .then(data => data.json())
      .then(data => items = data.list) 

      getList();
      doc.save(`${ref}.pdf`)
    }
    function changeStatus(id,stat,payment = null,card_details = null){
      if(!confirm("Are you sure you want to cancel this entry ?")){
        return
      }
      data = {
        trans:id,stat,payment,card_details
      }
      fetch(`includes/app/cashier.php?request=update_status`,{method:"POST",body:JSON.stringify(data)})
      .then(data => data.json())
      .then(data => {
        
          if(data.response){
            if(data.hasOwnProperty("message")){
               alert(data.message)
            }
          }
      }) 

      getList();
    }

    function buttonAction(item){
      if(item.status.toUpperCase() === "CANCELLED" || item.status.toUpperCase() == "PAID"){
          return ``;
      }
      if(item.status.toUpperCase() === "BILL-OUT"){
        return `<a href="cashier_payment.php?id=${item.ID}&ref=${item.transaction_ref}&total=${item.total_amount}" class="btn btn-outline-secondary">Accept Payment</a>`
      }
      if(item.status.toUpperCase() === "RESERVED"){
        if(item.reservation_type === "food_reservation"){
          return `<button class="btn btn-outline-secondary" onclick="changeStatus('${item.transaction_ref}','DINING')">Dining</button>
                  <button class="btn btn-outline-danger ml-2" onclick="changeStatus('${item.transaction_ref}','CANCELLED')">Cancel</button>`
        }
        if(item.reservation_type !== "food_reservation"){
          return `<a href="create_order.php" class="btn btn-outline-secondary"> Create Order </a>`
        }
      }
      return `<button class="btn btn-outline-secondary" onclick="printBill('${item.ID}','${item.transaction_ref}','${item.date_created}','${item.total_amount}','${item.reservation_type}')">Bill-Out (print bill)</button>
                  <button class="btn btn-outline-danger ml-2" onclick="changeStatus('${item.transaction_ref}','CANCELLED',')">Cancel</button>`
    }
    function getList(){
      fetch('includes/app/cashier.php?request=get_all_list')
      .then(data => data.json())
      .then(data => {

        var container =  document.querySelector("#table_list");
            if(data.hasOwnProperty("list")){
                container.innerHTML = "";
                        const requestcontent = data.list.map(item =>{
                            return `<tr>
                                        <td>${item.date_created}</td>
                                        <td>${item.transaction_ref}</td>
                                        <td>${item.transaction_ref.substring(0,3) === "RES" ? "ONLINE RESERVATION" : "WALK-IN"}</td>
                                        <td><button class="btn btn-outline-success" onclick="viewModal('${item.transaction_ref}')">view</button></td>
                                        <td>${item.status.toUpperCase()}</td>
                                        <td>${item.table_number}</td>
                                        <td>${buttonAction(item)}</td>
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
                    return container.innerHTML = `<tr><td colspan='4' style="text-align:center">No Result Found</td></tr>`
        })
    }

    getList()
        </script>
</body>
</html>
