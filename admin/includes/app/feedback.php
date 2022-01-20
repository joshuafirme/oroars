<?php

require_once('../connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');
$req = isset($_GET['request']) ? $_GET['request'] : "";
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
    case 'notification':
        $sql = "SELECT reference_number, `status`, `type`,date_created FROM
        (SELECT a.ref as reference_number,a.status as `status`,'new order' as `type`,a.date_created FROM order_transactions a WHERE a.status = 'pending' AND DATE_ADD(a.date_created, INTERVAL 3 MINUTE) >= NOW()
        UNION ALL
        SELECT b.reservation_ref as reference_number,b.status as `status`, 'new reservation' as `type`,b.date_created FROM reservation b WHERE b.status = 'reserved'  AND DATE_ADD(b.date_created, INTERVAL 3 MINUTE) >= NOW())
        AS Derived
        UNION ALL
        SELECT c.email as reference_number,c.validated as `status`,'new registration' as `type`,c.date_created FROM registration c WHERE c.validated = 0 AND DATE_ADD(c.date_created, INTERVAL 3 MINUTE) >= NOW()";
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