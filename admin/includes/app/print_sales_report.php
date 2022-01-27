<?php
require_once('../connect.php');

include_once 'utils.php';
require_once '../../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$utils = new Utils();

$sql = "(SELECT c.ID,a.transaction_ref as ref_number, a.total_amount,a.date_created as date_created,a.payment_method,
c.prod_id as product_id,c.quantity,e.ProductName,e.SRP FROM cashier_order_list c 
LEFT JOIN  cashier_order a ON c.transaction_ref = a.transaction_ref 
LEFT JOIN product e ON c.prod_id = e.ID 
WHERE date_created >= ? and date_created <= ?) 
UNION
(SELECT d.ID,b.ref as ref_number,b.totalamount as total_amount,b.date_created as date_created,b.payment_method,
d.product_id as product_id,d.quantity,f.ProductName,f.SRP
 FROM cart d
LEFT JOIN order_transactions b On d.transaction_id = b.ID
LEFT JOIN product f on d.product_id = f.ID
WHERE date_created >= ? and date_created <= ?)";

$date_start = isset($_GET['date_start']) ? $_GET['date_start'] : "";
$date_end = isset($_GET['date_end']) ? $_GET['date_end'] : "";

$result = $db->prepare($sql);
$start = date_format(date_create($date_start . ' 12:00:00'),'Y-m-d H:i:s');
$end = date_format(date_create($date_end .' 23:59:59'),'Y-m-d H:i:s');
$result->bindParam(1,$start);
$result->bindParam(2,$end);
$result->bindParam(3,$start);
$result->bindParam(4,$end);
$result->execute();


$sql1 = "SELECT SUM(a.total_amount) as total_sale FROM cashier_order_list c 
LEFT JOIN  cashier_order a ON c.transaction_ref = a.transaction_ref 
LEFT JOIN product e ON c.prod_id = e.ID 
WHERE date_created >= ? and date_created <= ?";

$sql2 = "SELECT SUM(b.totalamount) as total_sale 
 FROM cart d
LEFT JOIN order_transactions b On d.transaction_id = b.ID
LEFT JOIN product f on d.product_id = f.ID
WHERE date_created >= ? and date_created <= ?";

$stmt = $db->prepare($sql1);
$stmt->bindParam(1,$start);
$stmt->bindParam(2,$end);
$stmt->execute();

$res = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $db->prepare($sql2);
$stmt2->bindParam(1,$start);
$stmt2->bindParam(2,$end);
$stmt2->execute();

$res2 = $stmt2->fetch(PDO::FETCH_ASSOC);

//$total_sale = $res['total_sale'] + $res2['total_sale'];

$output = '';

$output .= $utils->printLayoutTemplate('Sales Report');

$output .= '
<p style="text-align:left;">Date: '. date("F j, Y", strtotime($date_start)) .' - '. date("F j, Y", strtotime($date_end)) .'</p>';

$output .='

<table width="100%" style="border-collapse:collapse; border: 1px solid;">                
    <thead>
        <tr>
            <th>Date Created</th>
            <th>Reference Number </th>
            <th>Product Name </th>
            <th>Quantity </th>
            <th>SRP </th>
            <th>Payment Method</th>
            <th>Total Amount</th>
       
    <tbody>';
    $total_sale = 0;
    if($result->rowCount() > 0){

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
           $total_sale = $total_sale + $total_amount;
           $output .='
           <tr class="align-text">   

               <td>'.$date_created.'</td>
               <td>'.$ref_number.'</td>
               <td>'.$ProductName.'</td>
               <td>'.$quantity.'</td>
               <td style="text-align:right;"><span>&#8369;</span>'.$SRP.'</td>
               <td>'.$payment_method.'</td>
               <td style="text-align:right;"><span>&#8369;</span>'.$total_amount.'</td>
           </tr>';
           
        }
    
    }
    else {
        $output .= "No data found.";
    }
    
    $output .= '   <tr class="align-text">   
                    <td colspan="7"><p style="text-align:right;"> Total sales: <span>&#8369;</span> <b>'. number_format($total_sale,2,'.',',') .'</b></p></td>
                </tr>';

$dompdf->loadHtml($output);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);
?>