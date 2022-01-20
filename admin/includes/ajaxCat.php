<?php
//Include database configuration file
include('connect.php');

if(isset($_POST["cat_id"]) && !empty($_POST["cat_id"])){
	$result = $db->prepare("SELECT * FROM `subcategory` WHERE `Series` = '".$_POST['cat_id']."' AND Status = 0");
    $result->execute();
    //Count total number of rows
    $rowCount = $result->rowCount();

    //Display cities list
    if($rowCount > 0){
		echo'<label for="Sub">Sub Category</label>';
		echo '<select class="form-control show-tick" name="SubCategoryID" id="SubCategoryID"  required>';
        for($i=0; $row = $result->fetch(); $i++){
            echo '<option value="'.$row['ID'].'">'.$row['SubCategoryName'].'</option>';
        }
		echo'</select>';
    }else{
			echo'<label for="Sub">Sub Category</label>';
		echo '<select class="form-control show-tick" name="SubCategoryID" id="SubCategoryID">';
		echo '<option value="0">Sub Category not available</option>';
		echo'</select>';
    }
}
?>
