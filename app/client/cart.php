<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');


$req = isset($_GET['request']) ? $_GET['request'] : "";
$time =  date('Y-m-d H:i:s');
switch($req){
    case 'add' : 

        $result = getProduct($db);
        if($result->rowCount() > 0 ){
            return updateToCart($db,$result->fetch(PDO::FETCH_ASSOC));
        }
        return addToCart($db);
    case 'remove' :
        $idarr = explode(',',$_GET['id']);
        $err = Array();
        foreach ($idarr as $value){
            array_push($err,removeToCart($db,$value,$_GET['user_id']));
        }
        foreach ($err as $error){
            if(!$error) return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "Product Removed!", "timestamp" => $time)));
    case 'reduce':
        $result = getProduct($db);
        if($result->rowCount() > 0 ){
            return updateDetails($db,$result->fetch(PDO::FETCH_ASSOC),$req);
        }
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
    case 'increase':
        $result = getProduct($db);
        if($result->rowCount() > 0 ){
            return updateDetails($db,$result->fetch(PDO::FETCH_ASSOC),$req);
        }
        return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
    case 'list':
        return listCart($db);
}

function updateDetails($db,$res,$req){
    $time =  date('Y-m-d H:i:s');
    if($req === "reduce"){
        $res['quantity']--;
    }
    if($req === "increase"){
        $res['quantity']++;
    }
    if(!$res['quantity']){
        if(removeToCart($db,$res['product_id'],$res['user_id'])){
            return print_r(json_encode(array("response" => 1, "message" => "Product Removed!", "timestamp" => $time)));
        }
    }
    $sql = "UPDATE cart SET `quantity` = :quantity WHERE `user_id` = :user AND product_id = :prod";
    $data = [
        "quantity" => $res['quantity'],
        "user" => $res['user_id'],
        "prod" => $res['product_id']
    ];
    $result = $db->prepare($sql);
    if($result->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "Product Added!", "timestamp" => $time)));
    }

    return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
}

function getProduct($db){
    $sql = "SELECT * FROM cart where `user_id` =:user AND product_id = :prod AND `status`= :stat";
        $result = $db->prepare($sql);
        $data = [
            "user" => $_GET['user_id'],
            "stat" => isset($_GET['status']) ? $_GET['status'] : "pending",
            "prod" => $_GET['product_id']
        ];
    $result->execute($data);
    return $result;
}

function updateToCart($db,$res){
    $time =  date('Y-m-d H:i:s');
    $res['quantity']++;
    $sql = "UPDATE cart SET `quantity` = :quantity WHERE `user_id` = :user AND product_id = :prod AND `status` = :stat";
    $data = [
        "quantity" => $res['quantity'],
        "user" => $res['user_id'],
        "prod" => $res['product_id'],
        "stat" => "pending"
    ];
    $result = $db->prepare($sql);
    if($result->execute($data)){
        return print_r(json_encode(array("response" => 1, "message" => "Product Added!", "timestamp" => $time)));
    }

    return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
}

function removeToCart($db,$id,$user){
    
    $sql = "DELETE FROM cart where `user_id` =:user AND product_id = :prod AND `status`= :stat";

    $result = $db->prepare($sql);
        $data = [
            "user" => $user,
            "stat" => "pending",
            "prod" => $id
        ];
    if($result->execute($data)){
        return 1;
    }
    return 0;
    
}

function addToCart($db){
    $time =  date('Y-m-d H:i:s');
    $sql = "INSERT INTO cart (product_id,`status`,`user_id`,`quantity`)VALUES(:prod,:stat,:user,:quantity)";
        $result = $db->prepare($sql);

        $data = [
            "user" => $_GET['user_id'],
            "stat" => "pending",
            "prod" => $_GET['product_id'],
            "quantity" => 1
        ];
        if($result->execute($data)){
            return print_r(json_encode(array("response" => 1, "message" => "Product added!", "timestamp" => $time)));
        }

        return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
}

function listCart($db){
    $time =  date('Y-m-d H:i:s');
    $sql = "SELECT * FROM cart LEFT JOIN product ON cart.product_id = product.ID WHERE cart.`user_id` = :user and cart.status = :stat";
        $result = $db->prepare($sql);

        $data = [
            "user" => $_GET['user_id'],
            "stat" => isset($_GET['status']) ? $_GET['status'] : "pending",
        ];
        
        $response = Array();
        $result->execute($data);

        if($result->rowCount() > 0){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                array_push($response,$row);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Showing Result", "list"=> $response, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));
}