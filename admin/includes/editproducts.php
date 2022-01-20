  <?php
  $id = $_GET['id'];

  $query = "SELECT * FROM `product` WHERE `id` = :id";
  $statement = $db->prepare($query);
  $statement->execute( array(
          'id'     =>     $id
     ));
    $row = $statement->fetch();
  ?>
  
  <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <label for="Product Image" class="headingdays">Product Image:</label>
                <br><br><img class="product-image" alt="Product Image" src='<?php echo $row['photo'];?>'/>
              </div>
              <div class="col-12 product-image-thumbs">       
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <form action="functions/addproduct.php" method="POST">
              <h2 class = "heading"> Product Description</h2>
                    <input type="hidden" name="Series" id="Series" value="<?php echo $id;?>"/>
                    <label for="Product Name" class="headingdays">Product Name:</label>
                    <input type="text" name="ProductName" id="ProductName" value='<?php echo $row['ProductName'];?>'>
                    <br>
                    <label for="Product Description" class="headingdays">Description:</label>
                    <br>    
                    <textarea name="pdesc" id="" cols="60" rows="5" value=''> Description</textarea>
                    <br>
                    
                    <label for="Category" class="headingdays">Category:</label>
                        <select id="CategoryID" name="CategoryID" value='<?php echo $row['CategoryName'];?>' >
                        <option value="All day breakfast">All day breakfast</option>
                        <option value="Value Meals">Value Meals</option>
                        <option value="Sizzling">Sizzling</option>
                        <option value="Milk tea">Milk Tea</option>
                        <option value="Fruit tea">Fruit Tea</option>
                    </select>
    </br>
                    <label for="SubCategoryID" class="headingdays">SubCategory:</label>
                        <select id="SubCategoryID" name="SubCategoryID" value='<?php echo $row['SubCategoryName'];?>' >
                        <option value=""></option>
                        <option value="chicken">Chicken</option>
                        <option value="Pork">Pork</option>
                        <option value="Beef">Beef</option>
                        <option value="Seafood">Seafood</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Peach">Peach</option>
                        <option value="Taro">Taro</option>
                    </select>
                    <br>
                    <label for="Product Price" class="headingdays">Price:</label>
                    <input type="text" name="ProductPrice" id="ProductPrice" placeholder="&#8369.00" value='<?php echo $row['ProductPrice'];?>'rquir>
                    <br>
                    <label for="SRP" class="headingdays">SRP:</label>
                    <input type="text" name="SRP" id="SRP" placeholder="&#8369.00" value='<?php echo $row['SRP'];?>' >
                    <br>
                    
                    <div class = "buttons">
                    <input type="Submit" class= "editbtn editbtn-primary" value="Edit"/>
                    <input type="Submit" class= "backbtn backbtn-primary" value="Back"/>
                    </div>
                    </form>
              <hr>
              
            </div>
          </div>
        </div>
