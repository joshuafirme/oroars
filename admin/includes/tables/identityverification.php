<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Identity Verification</h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Fullname</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>ID</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                    <th>Action</th>
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
    Footer
  </div>
  <script type="text/javascript">

    const approvePerson = (id,email) =>{
      // $('#preloader').show()
        fetch(`includes/app/identity_verification.php?request=approve&id=${id}&email=${email}`)
        .then(data => data.json())
        .then(data => {
            if(data.response == 1){
              alert('user has been approved')
              fetchList()
              // $('#preloader').hide()
            }
        })
    }

    const fetchList = () =>{
      fetch('includes/app/identity_verification.php?request=list&status=0')
    .then(data => data.json())
    .then(data => {
      const container = document.querySelector("#table_verification");
      if(data.response == 1){
          
          container.innerHTML = "";
          const requestcontent = data.result.map(item =>{
              return `<tr>
                          <td>${item.lname}, ${item.fname} ${item.mname}</td>
                          <td>${item.contact}</td>
                          <td>${item.email}</td>
                          <td><a href="../app/upload/${item.photo_path}" target="_blank">VIEW CLIENT PHOTO</a><br><a href="/rmord/app/upload/${item.front_id_path}" target="_blank">VIEW ID PHOTO</a><br><a href="/rmord/app/upload/${item.back_id_path}" target="_blank">VIEW BACK OF ID PHOTO</a></td>
                          <td>${item.date_created}</td>
                          <td>${!parseInt(item.validated) ? "pending" : "active" }</td>
                          <td>${!parseInt(item.validated) ? `<button class="btn btn-sm btn-success" id="${item.ID}" onclick="approvePerson(this.id,'${item.email}')" ><i class="fas fa-check"></i> approve </button> <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i> disapprove </button>` : ''}</td>
                      </tr>`
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
    }


    fetchList()

   </script>


</div>

