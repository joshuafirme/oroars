<?php
require_once('../connect.php');

include_once 'utils.php';
require_once '../../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$utils = new Utils();

$date_start = isset($_GET['date_start']) ? $_GET['date_start'] : "";
$date_end = isset($_GET['date_end']) ? $_GET['date_end'] : "";

$data = $_GET;
$sql = "SELECT * FROM registration WHERE date_created >= :date_start AND date_created <= :date_end AND `validated` = :validated";
unset($data['request']);
$data['date_start'] = date_format(date_create($date_start . ' 12:00:00'),'Y-m-d H:i:s');
$data['date_end'] = date_format(date_create($date_end.' 23:59:59'),'Y-m-d H:i:s');
$result = $db->prepare($sql);
$result->execute($data);

$output = '';

$output .= $utils->printLayoutTemplate('Customer Information Report');

$output .= '
<p style="text-align:left;">Date: '. date("F j, Y", strtotime($date_start)) .' - '. date("F j, Y", strtotime($date_end)) .'</p>';

$output .='

<table width="100%" style="border-collapse:collapse; border: 1px solid;">                
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Address</th>
        <th>Contact No</th>
        <th>Email</th>
        <th>Status</th>
        <th>Date Created</th>
       
    <tbody>';
    if($result->rowCount() > 0){

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
           $output .='      
           <tr class="align-text">   
           <td>'.$ID.'</td>
           <td>'.$lname .' '. $fname .' '. $mname.'</td>
           <td>'.$username.'</td>
           <td>'.$street_add .'.'.$city_add. ' '.$zip_add.'</td>
           <td>'.$contact.'</td>
           <td>'.$email.'</td>
           <td>'.(!$validated ? "waiting for validation" : "validated") .'</td>
           <td>'.$date_created.'/td>
          </tr>';
           
        }
    
    }
    else {
        $output .= "No data found.";
    }

$dompdf->loadHtml($output);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);
?>