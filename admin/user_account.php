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
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User Maintenance</a></li>
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
    <h3 class="card-title">List of Employee/Users</h3>
  </div>
    <div class="px-4 py-2">
      <label class="btn btn-primary" style="text-align:center;margin-bottom:0" for="modal1" id="btnAddNew"><i class="fa fa-plus"></i> Add New Employee</label>
      <a class="btn btn-primary" style="text-align:center" href="user_role.php"><i class="fa fa-users"></i> Manage User Roles</a>
    </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Position</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="table_list">
                               
                  </tbody>

                </table>
  </div>
  <div id="css-only-modals"><input class="css-only-modal-check" id="modal1" type="checkbox" />
			<div class="css-only-modal"  style="height:600px;">
			<label class="css-only-modal-btn btn btn-danger btn-lg" for="modal1" style="padding:5px 10px;float:right">X</label>
			<h2>Fill up details to add new Employee</h2>
        <form style="text-align:left;margin-top:2em;height:450px;overflow-y:auto">
            <div class="mb-3">
                <label for="input_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="input_name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="input_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="input_email">
            </div>
            <div class="mb-3">
                <label for="input_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="input_password">
            </div>

            <div class="mb-3">
                <label for="input_cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="input_cpassword">
            </div>

            <div class="mb-3">
                <label for="input_address" class="form-label">Address</label>
                <input type="text" class="form-control" id="input_address">
            </div>

            <div class="mb-3">
                <label for="input_contact" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="input_contact">
            </div>
            
            <div class="mb-3">
            <label for="select_position" class="form-label">Position</label>
                <select  class="form-select" id="select_position"></select>
            </div>
        
            <button type="submit" id="btnNewSubmit" class="btn btn-primary">Submit</button>
        </form>
				<label class="css-only-modal-btn btn btn-primary btn-lg" id="btnEscape" for="modal1" style="display:none;" style="padding:5px 10px;float:right">OK</label>
			</div>
			<div id="screen-shade"> </div>
			</div>
  <div class="card-footer">
  </div>
  <script type="text/javascript">

  const fetchList = () =>{
      fetch('includes/app/user.php?request=view_user')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#table_list");
          container.innerHTML = "";
          if(data.hasOwnProperty("list")){
          const requestcontent = data.list.map(item =>{
              return `<tr>
                          <td>${item.ID}</td>
                          <td>${item.Name}</td>
                          <td>${item.Email}</td>
                          <td>${item.ContactNo}</td>
                          <td>${item.Address}</td>
                          <td>${item.position}</td>
                          <td><button class="btn btn-secondary" onclick="editRow(${item.ID},'${item.Name}','${item.Email}','${item.ContactNo}','${item.Address}','${item.position_id}')"> EDIT</button></td>
                      </tr>`
          })

          requestcontent.forEach(el=>{
              container.innerHTML += el
          })
          }
          if(!data.hasOwnProperty("list")){
            container.innerHTML = `<tr><td colspan="5" style="text-align:center">No result found</td></tr>`
          }
      }
    })
    }

    const selector = (name) =>{
      return document.querySelector(name)
    }

    var $table_id = 0;
    const editRow = (id,name,email,contact,address,position) =>{
      var checkbox = document.querySelector("#modal1");
      checkbox.checked = !checkbox.checked
      getPosition()
      selector("#input_name").value = name
      selector("#input_email").value = email
      selector("#input_address").value = address
      selector("#input_contact").value = contact
      selector("#position").value = position
      $table_id = id;
    }

  const saveTable = (formData) =>{
      fetch('includes/app/user.php?request=save_user', {method: "POST",body:formData})
        .then(data => data.json())
        .then(data => {
          if(data.response == 1){
            if(data.hasOwnProperty("message")){
              clearFields()
              fetchList()
              return alert(data.message)
            }
          }
        })
    }

  const updateTable = (formData) => {
    formData.append("id",$table_id)
    fetch('includes/app/user.php?request=update_user', {method: "POST",body:formData})
        .then(data => data.json())
        .then(data => {
          if(data.response == 1){
            if(data.hasOwnProperty("message")){
              clearFields()
              fetchList()
              $table_id = 0;
              return alert(data.message)
            }
          }
    })
  }
   const getPosition = () =>{
    fetch('includes/app/user.php?request=view_position')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
        if(data.hasOwnProperty("list")){
          data.list.map(item =>{
              $("#select_position").append(`<option value="${item.ID}">${item.position} ( ${item.privilege} )</option>`)
          })
        }
        }
        })
   }

    const clearFields = () =>{
      selector("#input_name").value = ""
      selector("#input_email").value = ""
      selector("#input_password").value = ""
      selector("#input_cpassword").value = ""
      selector("#input_address").value = ""
      selector("#input_contact").value = ""
    }

    fetchList()

    
    document.querySelector("#btnAddNew").addEventListener("click",() => getPosition())
    document.querySelector("#btnEscape").addEventListener("click",() => $table_id = 0)
    document.querySelector("#btnNewSubmit").addEventListener("click",(event)=>{
        event.preventDefault()
      if(selector("#input_password").value !== selector("#input_cpassword").value){
          return alert("Password Did not match!");
      }
      var formData = new FormData()
      formData.append("name",selector("#input_name").value)
      formData.append("email",selector("#input_email").value)
      formData.append("password",selector("#input_password").value)
      formData.append("address",selector("#input_address").value)
      formData.append("contact",selector("#input_contact").value)
      formData.append("position",selector("#select_position").value)
      !$table_id ? saveTable(formData) : updateTable(formData);
      
    })

   </script>


</div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include'includes/footer.php'?>
</body>
</html>
