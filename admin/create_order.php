<!DOCTYPE html>
<?php
include'includes/auth.php';
include'includes/connect.php';
?>
<html lang="en">
<head>
  <title>OROARS | Dashboard</title>
  <?php include'includes/head.php';?>
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
            <h1>Create Order</h1>
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
    
  <div class="card-body">
       <div style="display:flex;justify-content:space-between;height:100%;">
           <div style="width:70%;display:flex;flex-wrap:wrap;flex-grow:1;" id="menu_container"></div>
           <div style="width:25%">
           <div class="card h-100">
            <h5 class="card-header">Selected From Menu</h5>
            <div class="card-body" style="display:flex;flex-direction:column;justify-content:space-between;">
                <div style="height:100%;" id="selected_order">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" >Table Number</span>
                </div>
                <input type="text" class="form-control" id="inputTableNumber" aria-describedby="basic-addon3">
                
                </div>
                <hr>
                <h6>Order</h6>
                </div>
                <div>
                    <div style="margin-bottom:1em;display:flex;justify-content:space-between"><h3>Total</h3><span style="float:right" id="total_order_price"></span></div>
                    <button class="btn btn-primary btn-block" id="btnCreateOrder">create order</button></div>
            </div>
            </div>
            
            </div>
       </div>
  </div>
  <div class="card-footer">
  </div>
  


</div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include'includes/footer.php'?>
 <script type="text/javascript">

        class Inventory{
            items = Array()

            addItems(item = {}){
                this.items.push(item);
            }

            reducequantity(id){
                var current = this.items.find(x => x.id == id)
                
                if(current.quantity == 1){
                    return this.removeitem(current.id)
                }
                this.items.find(x => x.id === current.id ).quantity--;
            }

            addquantity(id){
                this.items.find(x => x.id == id).quantity++
            }

            removeitem(id){
                this.items = this.items.filter(function(ele){
                    return ele.id != id
                })
            }

            getTotal(){
                return this.items.reduce((curr,a) => curr + a.price * a.quantity,0)
            }

        }
        var $Inventory = new Inventory()

        function decrease_service_count(el){
        let value = parseInt($(`#selected_order_quantity_${el}`).text())
        if(value === 1 || value == 1 || value == "1" || value === "1"){
            if(!confirm("Are you sure you want to remove this entry ?")){
                return
            }
            $(`#selected_order_menu_${el}`).remove()
        }
        $Inventory.reducequantity(el)
        var index = $Inventory.items.findIndex(x => x.id === el)
        console.log(index)
        if(index == -1){
            return
        }
        $(`#selected_order_quantity_${el}`).text($Inventory.items[index].quantity)
        $(`#selected_order_total_${el}`).text(`Php ${parseFloat($Inventory.items[index].price * $Inventory.items[index].quantity).toFixed(2)}`)
        updateTotal()
        }

        function increase_service_count(el){
        let value = parseInt($(`#selected_order_quantity_${el}`).text())
        $Inventory.addquantity(el)
        var index = $Inventory.items.findIndex(x => x.id === el)
        if(index == -1){
            return
        }
        $(`#selected_order_quantity_${el}`).text($Inventory.items[index].quantity)
        $(`#selected_order_total_${el}`).text(`Php ${parseFloat($Inventory.items[index].price * $Inventory.items[index].quantity).toFixed(2)}`)
        $(`#quantity_service_${el}`).text(++value)
        updateTotal()
        }

        function updateTotal(){
            var total = $Inventory.items.reduce((curr,a) => curr + a.quantity * a.price,0)
            return total
        }
        function addtomenu(id,prodname,price){
            var temp = $Inventory.items.find(x => x.id === id)
            if(temp){
                var index = $Inventory.items.findIndex(x => x.id === id)
                $($Inventory.items[index].quantity++)
                $(`#selected_order_quantity_${id}`).text($Inventory.items[index].quantity)
                $(`#selected_order_total_${id}`).text(`Php ${parseFloat($Inventory.items[index].price * $Inventory.items[index].quantity).toFixed(2)}`)
                return
            }
            $("#selected_order").append(`<p id="selected_order_menu_${id}">${prodname} ( Php ${parseFloat(price).toFixed(2)}) x <span id="selected_order_quantity_${id}">1</span><span id="selected_order_total_${id}" style="float:right;font-weight:700">Php ${parseFloat(price).toFixed(2)}</span> <button style="float:right;padding:0 10px;margin:2px;border-radius:5px" onclick="increase_service_count('${id}')"> + </button><button style="float:right;padding:0 10px;margin:2px;border-radius:5px" onclick="decrease_service_count('${id}')"> - </button></p> `)

            $Inventory.addItems({id,prodname,quantity:1,price})
            $("#total_order_price").text(`Php ${parseFloat(updateTotal()).toFixed(2)}`)
        }

        function generateUUID() { // Public Domain/MIT
        var d = new Date().getTime();//Timestamp
        var d2 = ((typeof performance !== 'undefined') && performance.now && (performance.now()*1000)) || 0;//Time in microseconds since page-load or 0 if unsupported
        return 'xxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16;//random number between 0 and 16
            if(d > 0){//Use timestamp until depleted
                r = (d + r)%16 | 0;
                d = Math.floor(d/16);
            } else {//Use microseconds since page-load if supported
                r = (d2 + r)%16 | 0;
                d2 = Math.floor(d2/16);
            }
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
      }

    $(document).ready(()=>{
        fetch('includes/app/menu.php')
        .then(data => data.json())
        .then(data =>{
            var container =  document.querySelector("#menu_container");
            if(data.hasOwnProperty("list")){
                container.innerHTML = "";
                        const requestcontent = data.list.map(item =>{
                            return `<div class="card" style="width: 18rem;margin:0 1em;">
                                        <img class="card-img-top" src="../${item.photo}" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title" style="font-size:28px;margin-bottom:1em">${item.ProductName}</h3>
                                            <p class="card-text mb-4">Php ${parseFloat(item.SRP).toFixed(2)}</p>
                                            <button class="btn btn-block btn-primary" onclick="addtomenu('${item.ID}','${item.ProductName}','${item.SRP}')">Add</button>
                                        </div>
                                    </div>`
                        })

                        if(requestcontent.length < 1){
                            return container.innerHTML = `<tr><td colspan='7' style="text-align:center">No Result Found</td></tr>`
                        }

                        requestcontent.forEach(el=>{
                            container.innerHTML += el
                        })
                        return
                        
                    }
                    return container.innerHTML = `<tr><td colspan='7' style="text-align:center">No Result Found</td></tr>`
        })

        $("#btnCreateOrder").click(function(event){
            event.preventDefault();

            if($("#inputTableNumber").val() == ""){
                $("#inputTableNumber").focus()
                return alert('Please indicate the table number')
            }

            if($Inventory.items.length < 1){
                return alert('No item selected')
            }

            var data = {
                trans : `ORDER-${generateUUID()}`,
                total_amount :  $Inventory.getTotal(),
                stats :  "DINING",
                date_created : new Date(),
                items : $Inventory.items,
                table_number: $("#inputTableNumber").val()
            }

            fetch('includes/app/cashier.php?request=create_order',{method:"POST",body:JSON.stringify(data)})
            .then(data => data.json())
            .then(data => {
                if(data.response){
                    alert(data.message)
                    window.location.href = "cashiering.php"
                }
            })
        })
    })
   </script>
</body>
</html>
