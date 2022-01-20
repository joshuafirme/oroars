<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Client</h3>

    <div class="card-tools">
      <!--Declaration of New Button para sa adding ng new category-->
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>ID Picture</th>
                    <th>Status</th>
                    <th>Date Created</th>
                  </tr>
                  </thead>
                  <tbody id="table_clients">
                                
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
<script>
    const fetchList = () =>{
      fetch('includes/app/clients.php?request=account_list')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#table_clients");
          container.innerHTML = "";
          const requestcontent = data.list.map(item =>{
              return `<tr>
                          <td>${item.ID}</td>
                          <td>${item.lname}, ${item.fname} ${item.mname}</td>
                          <td>${item.username}</td>
                          <td>${item.street_add} ,${item.city_add} ${item.zip_add}</td>
                          <td>${item.contact}</td>
                          <td>${item.email}</td>
                          <td><a href="/rmord/app/upload/${item.photo_path}" target="_blank">VIEW</a></td>
                          <td>${!parseInt(item.validated) ? "waiting for validation" : "validated" }</td>
                          <td>${item.date_created}</td>
                           </tr>`
          })

          requestcontent.forEach(el=>{
              container.innerHTML += el
          })
      }
    })
    }


    fetchList()
</script>