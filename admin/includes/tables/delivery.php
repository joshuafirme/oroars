<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Delivery Fee List</h3>
  </div>
    <div class="px-4 py-2">
      <label class="btn btn-primary" style="text-align:center" for="modal1" id="btnAddNew"><i class="fa fa-plus"></i> Add New Entry</label>
    </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>KM</th>
                    <th>Price</th>
                  </tr>
                  </thead>
                  <tbody id="table_list">
                               
                  </tbody>

                </table>
  </div>
  <div id="css-only-modals"><input class="css-only-modal-check" id="modal1" type="checkbox" />
			<div class="css-only-modal">
			<label class="css-only-modal-btn btn btn-danger btn-lg" for="modal1" style="padding:5px 10px;float:right">X</label>
			<h2>Fill up details to add new delivery fee</h2>
        <form style="text-align:left;margin-top:2em">
            <div class="mb-3">
                <label for="input_km" class="form-label">KM</label>
                <input type="text" class="form-control" id="input_km" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="input_price" class="form-label">Price</label>
                <input type="number" class="form-control" id="input_price">
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
      fetch('includes/app/delivery.php?request=list')
    .then(data => data.json())
    .then(data => {
      if(data.response == 1){
          const container = document.querySelector("#table_list");
          container.innerHTML = "";
          if(data.hasOwnProperty("list")){
          const requestcontent = data.list.map(item =>{
              return `<tr>
                          <td>${item.KM}</td>
                          <td>${parseFloat(item.PRICE).toFixed(2)}</td>
                          <td><button class="btn btn-secondary" onclick="editRow(${item.id},${item.KM},${item.PRICE})"> EDIT</button> <button class="btn btn-danger"> DELETE</button></td>
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
    const editRow = (id,km,price) =>{
      var checkbox = document.querySelector("#modal1");
      checkbox.checked = !checkbox.checked
      selector("#input_km").value = km
      selector("#input_price").value = parseFloat(price).toFixed(2)
      $table_id = id;
    }

  const saveTable = (formData) =>{
      fetch('includes/app/delivery.php?request=save_delivery_fee', {method: "POST",body:formData})
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
    fetch('includes/app/delivery.php?request=update_delivery_fee', {method: "POST",body:formData})
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
      selector("#input_km").value = ""
      selector("#input_price").value = ""
    }

    fetchList()
    
    document.querySelector("#btnEscape").addEventListener("click",() => $table_id = 0)
    document.querySelector("#btnNewSubmit").addEventListener("click",(event)=>{
      var formData = new FormData()
      formData.append("km",selector("#input_km").value)
      formData.append("price",selector("#input_price").value)
      !$table_id ? saveTable(formData) : updateTable(formData);
      event.preventDefault()
    })

   </script>


</div>

