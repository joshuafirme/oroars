
    <form method='POST' action='functions/addproduct.php' enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" name='ProductName' placeholder="ProductName">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category</label>
          <select class="form-control" name='CategoryID' id="CategoryID" required>
            <option value=""></option>

            <!--combo box function Select and Option-->
            <?php
            $datatable = "SELECT * FROM category";
            $result = $db->prepare($datatable);
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
            ?>
              <option value="<?php echo $row['ID'];?>"><?php echo $row['CategoryName'];?></option>
            <?php  };?>
          </select>
        </div>
        <div class="form-group">
            <div class="subcat" id="subcat" name="subcat"></div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Product Price</label>
          <input type="text"  onkeyup="document.querySelector('#input_srp').value = parseFloat(parseFloat(this.value) + (parseFloat(this.value) * (parseFloat(document.querySelector('#vatpercent').value)/100))).toFixed(2)" class="form-control" id="ProductPrice" name='ProductPrice' placeholder="ProductPrice">
        </div> 
        <div class="form-group">
          <label for="exampleInputPassword1">VAT(in percentage)</label>
          <input type="text" class="form-control" id="vatpercent" onkeyup="document.querySelector('#input_srp').value = parseFloat(parseFloat(document.querySelector('#ProductPrice').value) + (parseFloat(document.querySelector('#ProductPrice').value) * (parseFloat(this.value)/100))).toFixed(2)" placeholder="VAT">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">SRP</label>
          <input type="text" class="form-control" id="input_srp" name='SRP' placeholder="SRP" style="background:#c2c2c2">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Photo</label>
          <input type="file" class="form-control" id="Photo" name='Photo' placeholder="Photo">
        </div>
