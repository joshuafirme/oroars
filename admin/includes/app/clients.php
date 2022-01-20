<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');
$req = isset($_GET['request']) ? $_GET['request'] : "";

switch($req){
    case 'account_list' : 
        $response = Array();
        $result = selectAllUser($db);
        if($result->rowCount() > 0){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                array_push($response,$row);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Showing Result", "list"=> $response, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));
    
    case 'account_report' : 
        $response = Array();
        $result = selectFilteredUser($db,$_GET);
        if($result->rowCount() > 0){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                array_push($response,$row);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Showing Result", "list"=> $response, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));
}


function selectAllUser($db){
    $sql = "SELECT * FROM registration";
        $result = $db->prepare($sql);
    $result->execute();
    return $result;
}

function selectFilteredUser($db,$data){
    $sql = "SELECT * FROM registration WHERE date_created >= :date_start AND date_created <= :date_end AND `validated` = :validated";
    unset($data['request']);
    $data['date_start'] = date_format(date_create($data['date_start'] . ' 12:00:00'),'Y-m-d H:i:s');
    $data['date_end'] = date_format(date_create($data['date_end'] .' 23:59:59'),'Y-m-d H:i:s');
    $result = $db->prepare($sql);
    $result->execute($data);
    return $result;
}