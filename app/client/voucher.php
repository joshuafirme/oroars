<?php 
require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');



$sql = "SELECT * FROM voucher where `voucher_code` = :voucher_code";
$result = $db->prepare($sql);
$data['voucher_code'] = $_GET['voucher_code'];
$result->execute($data);

$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
  return print_r(json_encode(array("response" => 1, "message" => "Discount data", "discount"=> $row['discount'], "timestamp" => $time)));
}
return print_r(json_encode(array("response" => 1, "message" => "No Result Found.", "timestamp" => $time)));
