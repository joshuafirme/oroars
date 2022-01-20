<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');

$req = isset($_GET['request']) ? $_GET['request'] : "";
$time =  date('Y-m-d H:i:s');
switch($req){
    case 'getlist' :
        $sql = "SELECT * FROM feedback";
        $result = $db->prepare($sql);
        $result->execute();
        if($result->rowCount() > 0){
            $response = Array();
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                array_push($response,$row);
            }
            return print_r(json_encode(array("response" => 1, "message" => "Showing result","list"=> $response,"timestamp" => $time)));
        }
        return print_r(json_encode(array("response" => 1, "message" => "No result Found","timestamp" => $time)));
    default:
    $time =  date('Y-m-d H:i:s');
    $sql = "INSERT INTO feedback (fullname,`email`,`phone`,`subject`,`comment`)VALUES(:fullname,:email,:phone,:subj,:comment)";
        $result = $db->prepare($sql);
        if($result->execute($_POST)){
            return print_r(json_encode(array("response" => 1, "message" => "Feedback/Suggestion Submitted", "timestamp" => $time)));
        }

        return print_r(json_encode(array("response" => 0, "message" => "something went wrong. unable to add to cart", "timestamp" => $time)));
}