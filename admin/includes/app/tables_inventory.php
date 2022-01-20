<?php 
require_once('../connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

if(isset($_GET['request'])){

  $req = $_GET['request'];

  switch($req){
    case 'list' : 
      $sql = "SELECT a.ID,a.table_number,a.seats,a.description,a.status,b.status_name FROM tableinventory a LEFT JOIN table_status b ON b.ID = a.status ";
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
    case 'table_status':
      $sql = "SELECT * FROM table_status";
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
    case 'save_table':
      $sql = "INSERT INTO tableinventory(table_number,seats,`description`,`status`)VALUES(:tbl,:seats,:descrip,:stat)";
      $query = $db->prepare($sql);
      $data = [
        "tbl" => $_POST['table_number'],
        "seats" => $_POST['seats'],
        "descrip" => $_POST['description'],
        "stat" => $_POST['status']
      ];
      
      if($query->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "Table Saved", "timestamp" => $time)));
      };
      return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
    case 'update_table':
        $sql = "UPDATE tableinventory SET table_number = :tbl,seats = :seats, `description` = :descrip ,`status`= :stat WHERE ID = :id";
        $query = $db->prepare($sql);
        $data = [
          "id" => $_POST['id'],
          "tbl" => $_POST['table_number'],
          "seats" => $_POST['seats'],
          "descrip" => $_POST['description'],
          "stat" => $_POST['status']
        ];
        
        if($query->execute($data)){
          return print_r(json_encode(array("response" => 1, "message" => "Table Updated", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong", "timestamp" => $time)));
    case 'best_seller_report':
      $sql ="SELECT a.ID,a.product_id,a.transaction_id,a.status,a.quantity,SUM(a.quantity) as total_quantity, b.ProductName,b.SRP,c.date_created FROM cart a LEFT JOIN product b ON a.product_id = b.ID LEFT JOIN order_transactions c ON a.transaction_id = c.ID WHERE a.status = 'purchased' AND date_created >= ? AND date_created <= ? GROUP BY a.product_id ORDER by total_quantity DESC";
      $query = $db->prepare($sql);
      $start = date_format(date_create($_GET['date_start'] . ' 12:00:00'),'Y-m-d H:i:s');
      $end = date_format(date_create($_GET['date_end'] .' 23:59:59'),'Y-m-d H:i:s');
      $query->bindParam(1,$start);
      $query->bindParam(2,$end);
      $query->execute();
      $response = Array();
        if($query->rowCount() > 0){
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                array_push($response,$row);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Showing Result", "list"=> $response, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));
  }

}