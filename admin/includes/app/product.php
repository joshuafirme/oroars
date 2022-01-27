<?php 
require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'update_product':
  //    $filepath = "app/upload/" . $_POST["photo"];

    //    if(move_uploaded_file($_POST['photo']['tmp_name'], '../../'.$filepath)){

              //   echo 'Files has uploaded';
   //     };
        $sql = "UPDATE product SET ProductName=:ProductName,CategoryID=:CategoryID,
        ProductPrice=:ProductPrice,SRP=:SRP WHERE ID = :ID";
        $query = $db->prepare($sql);
        $data = [
          "ID" => $_POST['ID'],
          "ProductName" => $_POST['ProductName'],
          "CategoryID" => $_POST['CategoryID'],
        //  "SubCategoryID" => $_POST['SubCategoryID'],
          "ProductPrice" => $_POST['ProductPrice'],
          "SRP" => $_POST['SRP'],
        //  "photo" => $filepath,
        ];
        
        if($query->execute($data)){
          return print_r(json_encode(array("response" => 1, "message" => "product Updated", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
  }

}