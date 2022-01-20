<?php 
require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'list' : 
      $sql = "SELECT * from voucher";
      $query = $db->prepare($sql);
      $query->execute();
      $response = Array();
      if($query->rowCount() > 0){
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
          array_push($response,$row);
        }
        return print_r(json_encode(array("response" => 1, "message" => "showing result", "list" => $response, "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 1, "message" => "no result found", "timestamp" => $time)));
    
    case 'save_voucher':
      $sql = "INSERT INTO voucher(voucher_code,discount,status)VALUES(:voucher_code,:discount,:status)";
      $query = $db->prepare($sql);
      $data = [
        "voucher_code" => $_POST['voucher_code'],
        "discount" => $_POST['discount'],
        "status" => $_POST['status'],
      ];
      
      if($query->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "Voucher Saved", "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
    case 'update_voucher':
        $sql = "UPDATE voucher SET voucher_code =:voucher_code,discount=:discount,status=:status WHERE id = :id";
        $query = $db->prepare($sql);
        $data = [
          "id" => $_POST['id'],
          "voucher_code" => $_POST['voucher_code'],
          "discount" => $_POST['discount'],
          "status" => $_POST['status'],
        ];
        
        if($query->execute($data)){
          return print_r(json_encode(array("response" => 1, "message" => "Voucher Updated", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
  }

}