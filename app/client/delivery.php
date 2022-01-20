<?php 
require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'list' : 
      $sql = "SELECT * from delivery_fee";
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
    
    case 'save_delivery_fee':
      $sql = "INSERT INTO delivery_fee(km,price)VALUES(:km,:prce)";
      $query = $db->prepare($sql);
      $data = [
        "km" => $_POST['km'],
        "prce" => $_POST['price'],
      ];
      
      if($query->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "Delivery Fee Saved", "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
    case 'update_delivery_fee':
        $sql = "UPDATE delivery_fee SET km =:km,price=:price WHERE ID = :id";
        $query = $db->prepare($sql);
        $data = [
          "id" => $_POST['id'],
          "km" => $_POST['km'],
          "price" => $_POST['price']
        ];
        
        if($query->execute($data)){
          return print_r(json_encode(array("response" => 1, "message" => "Delivery Fee Updated", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
  }

}