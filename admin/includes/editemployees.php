<?php
  $id = $_GET['id'];

  $query = "SELECT * FROM `employees` WHERE `id` = :id";
  $statement = $db->prepare($query);
  $statement->execute( array(
          'id'     =>     $id
     ));
    $row = $statement->fetch();
  ?>

      <!-- Edit Employees -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <h2 class = "heading"> Personal Information</h2>
              <form method="POST" action="functions/updateemployee.php">
                  <input type="hidden" name="Series" id="Series" value="<?php echo $id;?>"/>

                  <label for="Employee name" class="headingdays">Name:</label>
                  <input type="text" name="names" id="names" value='<?php echo $row['Name'];?>' >
                  <br>
                  <br>
                  
                  <label for="Email" class="headingdays">Email</label>
                  <input type="email" name="email" id="email" value='<?php echo $row['Email'];?>'>
                  <br>
                  <br>

                  <label for="Address" class="headingdays">Address</label>
                  <input type="text" name="address" id="address" value='<?php echo $row['Address'];?>' >
                  <br>
                  <br>
                  <label for="Password" class="headingdays">Password</label>
                  <input type="text" name="password" id="address" value='<?php echo $row['Password'];?>' >
                  <br>
                  <br>

                  <label for="Contactnumber" class="headingdays"><b>Contact Number</b></label>
                  <input type="tel" placeholder="0999-999-9999" name="contactno" id="contactno" value='<?php echo $row['ContactNo'];?>' pattern="[0-9-9-5]{4} [0-9-9]{3} [0-9-9-5]{4}" >
                  <br>
                  <br>

                  <label for="Job Description" class="headingdays">Job Description/Position:</label>
                  <input type="text" name="position" id="position" value='<?php echo $row['Position'];?>' >
                  <br>

                  <br>
                  <label for="privilege" class="headingdays">Privilege:</label>
                  <input type="text" name="priviledge" value='<?php echo $row['Priviledge'];?>' >
                  <br>
                <div class = "buttons">
                  <input type="Submit" class= "editbtn editbtn-primary" value="Save"/>
                  <input type="Submit" class= "backbtn backbtn-primary" value="Back"/>
                </div>
              </form>
            </div>
          </div>
        </div>
        