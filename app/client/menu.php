<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');


if(isset($_GET["term"]))
{
    $sql = "SELECT a.ID,a.ProductName,a.CategoryID,a.ProductPrice,a.SRP,a.photo,b.CategoryName FROM product a LEFT JOIN category b ON b.ID = a.CategoryID WHERE a.ProductName LIKE ? ORDER BY a.ProductName ASC";
    $data = "%" . $_GET["term"] . "%";
}else{
    $sql = "SELECT a.ID,a.ProductName,a.CategoryID,a.ProductPrice,a.SRP,a.photo,b.CategoryName FROM product a LEFT JOIN category b ON b.ID = a.CategoryID";
}

$result = $db->prepare($sql);
isset($_GET["term"]) ? $result->bindParam(1, $data) : null;
$result->execute();
$response = Array();
$count = $result->rowCount();
if(isset($_GET["term"])){
    if($count > 0){
        foreach($result as $row)
        {
        $temp_array = array();
        $temp_array['value'] = $row['ProductName'];
        $temp_array['label'] = '<a style="display:block" href="menu.php#item-menu-'. $row['ID'] . '" ><img src="'.$row['photo'].'" width="70" />&nbsp;&nbsp;&nbsp;'.$row['ProductName'].'</a>';
        $output[] = $temp_array;
        }
    }else{
        $output['value'] = '';
        $output['label'] = 'No Record Found';
    }

    return print_r(json_encode($output));
}

if($count > 0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        array_push($response,$row);
    }
    
    return print_r(json_encode(array("response" => 1, "message" => "Showing Result", "list"=> $response, "timestamp" => $time)));
}
return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));