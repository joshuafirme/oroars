<?php
require_once('../connect.php');

include_once 'utils.php';
require_once '../../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$utils = new Utils();

$date_start = isset($_GET['date_start']) ? $_GET['date_start'] : "";
$date_end = isset($_GET['date_end']) ? $_GET['date_end'] : "";


$sql ="SELECT a.ID,a.product_id,a.transaction_id,a.status,a.quantity,SUM(a.quantity) as total_quantity, b.ProductName,b.SRP,c.date_created 
FROM cart a LEFT JOIN product b ON a.product_id = b.ID LEFT JOIN order_transactions c ON a.transaction_id = c.ID WHERE a.status = 'purchased' AND date_created >= ? AND date_created <= ? 
GROUP BY a.ID,a.product_id,a.transaction_id,a.status,a.quantity, b.ProductName,b.SRP,c.date_created 
ORDER by total_quantity DESC";
$query = $db->prepare($sql);
$start = date_format(date_create($date_start . ' 12:00:00'),'Y-m-d H:i:s');
$end = date_format(date_create($date_end .' 23:59:59'),'Y-m-d H:i:s');
$query->bindParam(1,$start);
$query->bindParam(2,$end);
$query->execute();

$output = '';

$output .= $utils->printLayoutTemplate('Best Seller Report');

$output .= '
<p style="text-align:left;">Date: '. date("F j, Y", strtotime($date_start)) .' - '. date("F j, Y", strtotime($date_end)) .'</p>';

$output .='

<table width="100%" style="border-collapse:collapse; border: 1px solid;">                
    <thead>
        <tr>
        <th>Date Created</th>
        <th>Product Name </th>
        <th>Total Sold base on Date</th>
        <th>Total Price</th>
       
    <tbody>';
    if($query->rowCount() > 0){
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
           $total = $SRP * $quantity;
           $output .='      
           <tr class="align-text">   
           <td>'.$date_created.'</td>
           <td>'.$ProductName.'</td>
           <td>'.$total_quantity.'</td>
           <td>Php '.$total.'</td>
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