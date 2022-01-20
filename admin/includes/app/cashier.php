<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');
$req = isset($_GET['request']) ? $_GET['request'] : "";

switch($req){
    case 'create_order':
        $data = json_decode(file_get_contents('php://input'), true);
        $result = create_order($db,$data);
        if($result){
            foreach($data['items'] as $key => $value){
                addorder_list($db,$data['trans'],$value);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Transaction Created", "timestamp" => $time)));
        };
        return print_r(json_encode(array("response" => 1, "message" => "Error Saving", "timestamp" => $time)));

    case 'get_all_list':
       $sql = "(SELECT a.ID,a.transaction_ref as transaction_ref,a.reservation_type,a.total_amount,a.table_number,a.date_created,a.status,a.payment_method,a.card_details FROM cashier_order a WHERE a.status <> 'PENDING') 
                UNION ALL 
                (SELECT b.ID, b.reservation_ref as transaction_ref,b.reservation_type,b.total_amount,b.table_number,b.date_created,b.status,b.payment_method,b.card_details FROM reservation b WHERE b.status <> 'PENDING')";
       $result = $db->prepare($sql);
       $result->execute();
       $count = $result->rowCount();
       $response = Array();
        if($count > 0){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                array_push($response,$row);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Result Found", "list" => $response, "timestamp" => $time)));
       }
       return print_r(json_encode(array("response" => 1, "message" => "no result found", "timestamp" => $time)));
    case 'get_order':
        $sql = "SELECT a.transaction_ref,a.prod_id,a.quantity,b.ProductName,b.SRP,b.photo FROM cashier_order_list a LEFT JOIN product b ON a.prod_id = b.ID WHERE a.transaction_ref = :trans ";
        if(substr($_GET['trans'],0,3) == "RES"){
        $sql = "SELECT a.reservation_id,a.product_id,a.quantity,b.ProductName,b.SRP,b.photo FROM reservation_food a LEFT JOIN product b ON a.product_id = b.ID WHERE a.reservation_id = :trans ";
        }
        $result = $db->prepare($sql);
        $result->bindParam(":trans",$_GET['trans']);
        $result->execute();
        $count = $result->rowCount();
        $response = Array();
         if($count > 0){
             while($row = $result->fetch(PDO::FETCH_ASSOC)){
                 array_push($response,$row);
             }
             return print_r(json_encode(array("response" => 1, "message" => "Result Found", "list" => $response, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "no result found", "timestamp" => $time)));

        case 'update_status':
            $data = json_decode(file_get_contents('php://input'), true);
            $sql = "UPDATE cashier_order SET `status` = :stats , payment_method = :payment, `card_details` = :card_details WHERE transaction_ref = :trans";
            if(substr($data['trans'],0,3) === "RES"){
                $sql ="UPDATE reservation SET `status` =:stats , payment_method = :payment,`card_details` = :card_details WHERE reservation_ref = :trans";
            }
            $result = $db->prepare($sql);
            $result->bindParam(":trans",$data['trans']);
            $result->bindParam(":stats",$data['stat']);
            $result->bindParam(":payment",$data['payment']);
            $result->bindParam(":card_details",$data['card_details']);
             if($result->execute()){
                return print_r(json_encode(array("response" => 1, "message" => "Transaction Updated", "timestamp" => $time)));
            };
            return print_r(json_encode(array("response" => 1, "message" => "Error Updating", "timestamp" => $time)));
    
}


function create_order($db,$data){
    $sql = "INSERT INTO cashier_order(transaction_ref ,total_amount, date_created,`status`,`table_number`) VALUES (?,?,?,?,?)";
    $result = $db->prepare($sql);
    $result->bindParam(1, $data['trans']);
    $result->bindParam(2, $data['total_amount']);
    $result->bindParam(3, $data['date_created']);
    $result->bindParam(4, $data['stats']);
    $result->bindParam(5, $data['table_number']);
    $result->execute();
    return $result;
}

function addorder_list($db,$ref,$data){
    $sql = "INSERT INTO `cashier_order_list`(`transaction_ref`,`prod_id`,`quantity`) VALUES (:ref,:id,:quantity)";
    $result = $db->prepare($sql);
    $data['ref'] = $ref;
    unset($data['price']);
    unset($data['prodname']);
    $result->execute($data);
    return $result;
}