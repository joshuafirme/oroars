<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Setup address for users and delivery fee</h3>
  </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Province</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Barangay</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">City</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="px-4 py-2">
            <label class="btn btn-primary" style="text-align:center" for="modal1" id="btnAddNew"><i class="fa fa-plus"></i> Add New Province</label>
            </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Table Number</th>
                            <th>Number of Seats</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="table_list">
                                    
                        </tbody>

                        </table>
        </div>
        <div id="css-only-modals"><input class="css-only-modal-check" id="modal1" type="checkbox" />
                    <div class="css-only-modal">
                    <label class="css-only-modal-btn btn btn-danger btn-lg" for="modal1" style="padding:5px 10px;float:right">X</label>
                    <h2>Fill up details to add new province as address reference</h2>
                <form style="text-align:left;margin-top:2em">
                    <div class="mb-3">
                    <label for="input_table_number" class="form-label">Province</label>
                    <input type="email" class="form-control" id="input_table_number" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    <label for="tblStatus" class="form-label">Status</label>
                    <select class="form-select" id="tblStatus">
                    </select>
                    </div>
                    <button type="submit" id="btnNewSubmit" class="btn btn-primary">Submit</button>
                </form>
                        <label class="css-only-modal-btn btn btn-primary btn-lg" id="btnEscape" for="modal1" style="display:none;" style="padding:5px 10px;float:right">OK</label>
                    </div>
                    <div id="screen-shade"> </div>
                    </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
    
  <div class="card-footer">
  </div>
  <script type="text/javascript">

  const fetchList = () =>{
      fetch('includes/app/tables_inventory.php?request=list')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#table_list");
          container.innerHTML = "";
          if(data.hasOwnProperty("list")){
          const requestcontent = data.list.map(item =>{
              return `<tr>
                          <td>${item.table_number}</td>
                          <td>${item.seats}</td>
                          <td>${item.description}</td>
                          <td>${item.status_name}</td>
                          <td><button class="btn btn-secondary" onclick="editRow(${item.ID},'${item.table_number}','${item.seats}','${item.description}',${item.status})"> EDIT</button> <button class="btn btn-danger"> DELETE</button></td>
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
    const editRow = (id,number,seats,desc,status) =>{
      getStatus()
      var checkbox = document.querySelector("#modal1");
      checkbox.checked = !checkbox.checked
      selector("#input_table_number").value = number
      selector("#input_seats").value = seats
      selector("#input_description").value = desc
      selector("#tblStatus").value = status
      $table_id = id;
    }

    const getStatus = () =>{
      fetch('includes/app/tables_inventory.php?request=table_status')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#tblStatus");
          container.innerHTML = "";
          if(data.hasOwnProperty("list")){
          const requestcontent = data.list.map(item =>{
              return `<option value="${item.ID}">${item.status_name}</option>`
          })
          requestcontent.forEach(el=>{
              container.innerHTML += el
          })
          }
          if(!data.hasOwnProperty("list")){
            container.innerHTML = `<option>something went wrong please try refreshing!</option>`
          }
      }
    })
    }

  const saveTable = (formData) =>{
      fetch('includes/app/tables_inventory.php?request=save_table', {method: "POST",body:formData})
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
    fetch('includes/app/tables_inventory.php?request=update_table', {method: "POST",body:formData})
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

    const clearFields = () =>{
      selector("#input_table_number").value = ""
      selector("#input_seats").value = ""
      selector("#input_description").value = ""
    }

    fetchList()
    
    document.querySelector("#btnAddNew").addEventListener("click",getStatus)
    document.querySelector("#btnEscape").addEventListener("click",() => $table_id = 0)
    document.querySelector("#btnNewSubmit").addEventListener("click",(event)=>{
      var formData = new FormData()
      formData.append("table_number",selector("#input_table_number").value)
      formData.append("seats",selector("#input_seats").value)
      formData.append("description",selector("#input_description").value)
      formData.append("status",selector("#tblStatus option:checked").value)
      !$table_id ? saveTable(formData) : updateTable(formData);
      event.preventDefault()
    })

   </script>


</div>

