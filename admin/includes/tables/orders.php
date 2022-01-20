<!-- Default box -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">List of <?php echo $_GET['stat'] === "cancelled" ? "Cancelled Orders" : ($_GET['stat'] === "pending" ? "New Order" : ($_GET['stat'] === "completed" ? "Completed Order" : "Orders For Delivery")) ?></h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align:center">
                    <th>Date</th>
                    <th>Order ID</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Payment method</th>
                    <th>change status to</th>
                  </tr>
                  </thead>
                  <tbody id="table_verification">
                                <!-- <tr>

                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <a class="btn btn-success id" href='#'>Verify</a>
                                    <a href="#" class="btn btn-danger">Denied</a>
                                  </td>
                                </tr> -->
                  </tbody>

                </table>
  </div>
  <div class="card-footer">
  </div>
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
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <script type="text/javascript">

    const status_change = (id,stat) =>{
      if(!confirm("Are you sure you want to change status of this order ?")){
        return
      }
      fetch(`includes/app/transactions.php?request=update_order&id=${id}&stats=${stat}`)
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
        alert(data.message);
        fetchList()
      }
      })
    }
    
    const viewModal = (id,title) =>{
      $("#exampleModalCenter").show();
      $("#exampleModalLongTitle").text('Order Number : ' + title)
      fetch(`includes/app/transactions.php?request=getOrderList&id=${id}`)
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

    const fetchList = () =>{
      fetch('includes/app/transactions.php?request=view_order')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#table_verification");
          container.innerHTML = "";
          let params = (new URL(document.location)).searchParams;
          let filter = params.get('stat');
          const requestcontent = data.list.filter(item => item.status === filter).map(item =>{
              return `<tr>
                          <td>${item.date_created}</td>
                          <td>${item.ref}</td>
                          <td>${item.quantity}</td>
                          <td style="text-align:right">${parseFloat(item.totalamount).toFixed(2)}</td>
                          <td>${item.status}</td>
                          <td>${item.payment_method}</td>
                          <td><button class="btn btn-success mr-2" onclick="viewModal('${item.ID}','${item.ref}')"> view </button> ${item.status === "pending" ? `<button class="btn btn-info" onclick="status_change(${item.ID},'delivery')">for delivery</button> &nbsp;<button class="btn btn-danger" onclick="status_change(${item.ID},'cancelled')">cancel</button>` : item.status === "delivery" ? `<button class="btn btn-success"  onclick="status_change(${item.ID},'completed')">complete order</button> &nbsp;<button class="btn btn-danger"  onclick="status_change(${item.ID},'cancelled')">cancel</button>` : ""}</td>
                      </tr>`
          })

          requestcontent.forEach(el=>{
              container.innerHTML += el
          })

          if(requestcontent.length < 1){
            container.innerHTML +=`<tr>
                          <td colspan="7" style="text-align:center">No Orders Found</td>`
          }
      }
    })
    }


    fetchList()

   </script>


</div>

