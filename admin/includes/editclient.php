<!--Pagkuha ng id -->
<?php
  $id = $_GET['id'];
  $query = "SELECT * FROM `client` WHERE `id` = :id";
  $statement = $db->prepare($query);
  $statement->execute( array(
          'id'     =>     $id
     ));
    $row = $statement->fetch();
  ?>
      <!--Edit Client -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                  <br> <br>
                  <label for="Product Image">Client Valid ID</label>
                      <br>
                      <label for="front">Front</label>
                      <br>
                      <img class="fid" alt="pid" src='<?php echo $row['IDPicture'];?>'/>
                      <br>
                      <label for="back">Back</label>
                      <br>
                      <img class="bid" alt="bid" src='<?php echo $row['IDPicture'];?>'/>
                      <br>
                      <label for="withclient">Client Picture With the ID</label>
                      <br>
                      <img class="cwide" alt="cwid" src='<?php echo $row['IDPicture'];?>'/>
                      <br>
              </div>
              <div class="col-12 product-image-thumbs">       
              </div>
            </div>
            <div class="col-12 col-sm-6"><h2 class = "heading"> Client Information</h2>
            <form method="POST" action="functions/updateclients.php">
            <input type="hidden" name="Series" id="Series" value="<?php echo $id;?>"/>
              <label for="Employee name" class="headingdays">Name:</label>
              <input type="text" name="names" id="cname" value='<?php echo $row['Name'];?>'>
              <br>
              <br>
              <label for="Username" class="headingdays">Username</label>
              <input type="text" name="username" id="username" placeholder="Username" value='<?php echo $row['Username'];?>'>
              <br>
              <br>

              <label for="Address" class="headingdays">Address</label>
              <input type="text" name="address" id="caddress" value='<?php echo $row['Address'];?>'>
              <br>
              <br>

              <label for="Gender" class="headingdays">Gender</label>
                <select name="gender" id="gender">
                  <Option value="Male">Male</Option>
                  <Option Value="Female">Female</Option>
                </select>
              <label for="Contactnumber" class="headingdays"><b>Contact Number</b></label>
              <input type="tel" placeholder="0999-999-9999" name="contactno" pattern="[0-9-9-5]{4} [0-9-9]{3} [0-9-9-5]{4}" value="<?php echo $row['ContactNo'];?>">
              <br>
              <br>

              <label for="Email" class="headingdays">Email</label>
              <input type="email" name="email"  value='<?php echo $row['Email'];?>'>
              <br>
              <br>

              <label for="Password" class="headingdays">Password</label>
              <input type="text" name="password" value='<?php echo $row['Password'];?>'>
              <br>
              <br>
              <label for="repeatassword" class="headingdays">Repeatpassword</label>
              <input type="text" name="repeatpassword"  value='<?php echo $row['Repeatpassword'];?>'>
              <br>
              <br>

              <label for="Billing" class="headingdays">Billing</label>
              <input type="text" name="billing"   value = '<?php echo $row['Billing'];?>'>


              <div class = "buttons">
              <input type="Submit" class= "editbtn editbtn-primary" value="Save"/>
              <input type="Submit" class= "backbtn backbtn-primary" value="Back"/>
              </div>
              <hr>
    </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>