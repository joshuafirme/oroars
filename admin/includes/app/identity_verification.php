<?php 
require_once('../connect.php');
require_once('./mailer.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'list' : 
      $sql = "SELECT * FROM registration";
      $sql .= isset($_GET['status']) ? " WHERE validated = :stats" : "";
      $query = $db->prepare($sql);
      $data = isset($_GET['status']) ? array("stats" => $_GET['status']) : Array(); 
      $query->execute($data);
      $response = Array();
      if($query->rowCount() > 0){
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
          array_push($response,$row);
        }
        return print_r(json_encode(array("response" => 1, "message" => "showing result", "result" => $response, "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 0, "message" => "error getting data", "timestamp" => $time)));
      case 'approve':
        $sql = "UPDATE registration SET validated = 1 where id = :id";
        $query = $db->prepare($sql);
        $response = Array();
        if($query->execute(array("id" => $_GET['id']))){
          $email = new Mailer();
          $email->emailsend($_GET['email'], 'Your account has been verified and can now place orders. Thank you!', '');
          return print_r(json_encode(array("response" => 1, "message" => "user " . $_GET['id'] . " has been approved", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 0, "message" => "error getting data", "timestamp" => $time)));

  }

}