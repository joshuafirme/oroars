<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');
$req = isset($_GET['request']) ? $_GET['request'] : "";

switch($req){
    case 'check_validated':
        return validation_reload($db);
    case 'myaccount' : 
        $result = selectUser($db);
        if($result->rowCount() > 0){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return print_r(json_encode(array("response" => 1, "message" => "Showing Result", "list"=> $row, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));
    default : createUser($db);
}

function validation_reload($db){
    $time =  date('Y-m-d H:i:s');
    $sql = "SELECT validated FROM registration WHERE username = :username";
    $result = $db->prepare($sql);

    $data = [
        "username" => $_GET['username'],
    ];

    $result->execute($data);

    if($result->rowCount() > 0){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return print_r(json_encode(array("response" => 1, "message" => "showing results", "list" => $row, "timestamp" => $time)));
    }

    return print_r(json_encode(array("response" => 0, "message" => "something went wrong!", "timestamp" => $time)));
}

function selectUser($db){
    $sql = "SELECT * FROM registration where `ID` =:user";
        $result = $db->prepare($sql);
        $data = [
            "user" => $_GET['user_id']
        ];
    $result->execute($data);
    return $result;
}

function createUser($db){
    $time =  date('Y-m-d H:i:s');
    $sql = "SELECT * FROM registration WHERE username = :username";
    $result = $db->prepare($sql);

    $data = [
        "username" => $_POST['username'],
    ];

    $result->execute($data);

    if($result->rowCount() > 0){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if(password_verify($_POST['pw'],$row['password'])){
            return print_r(json_encode(array("response" => 1, "message" => "Login Successful!", "user"=> $row, "timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 0, "message" => "Username and Password did not Match!", "timestamp" => $time)));
    }

    return print_r(json_encode(array("response" => 0, "message" => "Username is not registered!", "timestamp" => $time)));
}