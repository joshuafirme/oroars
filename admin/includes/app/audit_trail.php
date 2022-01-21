<?php 
require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'list' : 
      $sql = "SELECT e.Name, at.module, at.action, at.date_time from audit_trail at
              LEFT JOIN employees e
              ON at.user_id = e.ID;";
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
    
    case 'add':
      $sql = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
      $query = $db->prepare($sql);
      $data = [
        "user_id" => $_SESSION["username"],
        "module" => $_POST['module'],
        "action" => $_POST['action'],
        "date_time" => date('Y-m-d H:m:s'),
      ];
      
      if($query->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "audit_trail Saved", "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
   
  }

}