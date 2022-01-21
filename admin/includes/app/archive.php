<?php 
require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'archive':
      $sql = "UPDATE product SET status =:status WHERE ID = :id";
      $query = $db->prepare($sql);
      $data = [
        "id" => $_GET['id'],
        "status" => 0,
      ];

      $sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
      $query_audit = $db->prepare($sql_audit);
          $data_audit = [
          "user_id" => $_SESSION["username"],
          "module" => "Product",
          "action" => "Archive",
          "date_time" => date('Y-m-d H:m:s'),
          ];

          $query_audit->execute($data_audit);
      
      if($query->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "Product archive!", "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));

      case 'restore':
        $sql = "UPDATE product SET status =:status WHERE ID = :id";
        $query = $db->prepare($sql);
        $data = [
          "id" => $_GET['id'],
          "status" => 1,
        ];
  
        $sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
        $query_audit = $db->prepare($sql_audit);
            $data_audit = [
            "user_id" => $_SESSION["username"],
            "module" => "Product",
            "action" => "Archive",
            "date_time" => date('Y-m-d H:m:s'),
            ];
  
            $query_audit->execute($data_audit);
        
        if($query->execute($data)){
          return print_r(json_encode(array("response" => 1, "message" => "Product restored!", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
   
  }

}