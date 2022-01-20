<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List of Reservation</h3>
  </div>
  <div class="card-body">
    <p><label for="res_filter">Filter Reservation</label><select id="res_filter">
      <option> select status to filter</option>
      <option value="reserved">reserved</option>
      <option value="dining">dining</option>
      <option  value="completed">completed</option>
    </select></p>
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>Reservation Number</th>
                    <th>Reservation Name</th>
                    <th>Contact Number</th>
                    <th>Table Number</th>
                    <th>Status</th>
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
  <script type="text/javascript">

    document.querySelector("#res_filter").addEventListener('change',function(){
        fetchList(this.value)
    })
    const status_change = (id,stat) =>{
      if(!confirm("Are you sure you want to change status of this reservation ?")){
        return
      }
        fetch(`includes/app/transactions.php?request=update_reservation&id=${id}&stats=${stat}`)
      .then(data => data.json())
      .then(data => {
        if(data.response == 1){
          alert(data.message);
          fetchList()
        }
        })
      }
    
    const fetchList = (filter = null) =>{
      fetch('includes/app/transactions.php?request=view_all_reservation')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#table_verification");
          container.innerHTML = "";
          var requestcontent = data.list.map(item =>{
              return `<tr>
                          <td>${item.reservation_date}</td>
                          <td>${item.reservation_time}</td>
                          <td>${item.reservation_ref}</td>
                          <td>${item.reservation_name}</td>
                          <td>${item.contact}</td>
                          <td>${item.table_number}</td>
                          <td>${item.status}</td>
                          <td>${item.status === "reserved" ? `<button class="btn btn-info" onclick="status_change(${item.ID},'dining')">Guest Arrived</button> &nbsp;<button class="btn btn-danger" onclick="status_change(${item.ID},'cancelled')">Cancel Reservation</button>` : 
                            item.status === "dining" ? `<button class="btn btn-success"  onclick="status_change(${item.ID},'completed')">Complete Reservation</button> &nbsp;<button class="btn btn-danger"  onclick="status_change(${item.ID},'cancelled')">Cancel</button>` :""}</td></td>
                         </tr>`
          })
          if(filter) {
            requestcontent = data.list.filter(i => i.status === filter).map(item =>{
                  return `<tr>
                          <td>${item.reservation_date}</td>
                          <td>${item.reservation_time}</td>
                          <td>${item.reservation_ref}</td>
                          <td>${item.reservation_name}</td>
                          <td>${item.contact}</td>
                          <td>${item.table_number}</td>
                          <td>${item.status}</td>
                          <td>${item.status === "reserved" ? `<button class="btn btn-info" onclick="status_change(${item.ID},'dining')">Guest Arrived</button> &nbsp;<button class="btn btn-danger" onclick="status_change(${item.ID},'cancelled')">Cancel Reservation</button>` : 
                            item.status === "dining" ? `<button class="btn btn-success"  onclick="status_change(${item.ID},'completed')">Complete Reservation</button> &nbsp;<button class="btn btn-danger"  onclick="status_change(${item.ID},'cancelled')">Cancel</button>` :""}</td></td>
                         </tr>`
            })
          }
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

