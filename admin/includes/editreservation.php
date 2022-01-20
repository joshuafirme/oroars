<?php
  $id = $_GET['id'];

  $query = "SELECT * FROM `reservation` WHERE `id` = :id";
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
            <form method="POST" action="functions/updatereservation.php">
              <h3 class="d-inline-block d-sm-none"></h3><h2 class = "heading">Reservation</h2>
              <input type="hidden" name="Series" id="Series" value="<?php echo $id;?>"/>
              
              <label for="Name" class="headingdays">Name</label>
              <input type="text" name="names"  value='<?php echo $row['Name'];?>' require>
              <br>
              <br>

              <label for="Contact no" class="headingdays">Contact No.</label>
              <input type="tel" name="contactno"  value='<?php echo $row['ContactNo'];?>'>
              <br>
              <br>

              <label for="Date" class="headingdays">Date</label>
              <input type="date" name="rdate"  value='<?php echo $row['Date'];?>'>
              <br>
              <br>

              <label for="Time" class="headingdays">Time</label>
              <input type="time" name="rtime"  value='<?php echo $row['Time'];?>'>
              <br>
              <br>

              <br>
              <div class = "buttons">
              <input type="Submit" class= "savetbtn editbtn-primary" value="Save"/>
              <input type="Submit" class= "backbtn backbtn-primary" value="Back"/>
              </div>
    </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
