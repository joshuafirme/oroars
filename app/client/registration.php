<?php

require_once('../../includes/connect.php');

date_default_timezone_set('Asia/Manila');
$time =  date('Y-m-d H:i:s');

$filename = generateFilename();
$filename2 = generateFilename2();
$filename3 = generateFilename3();
$sqlVerify = "SELECT * FROM registration where username=?";
$check = $db->prepare($sqlVerify);
$check->bindParam(1,$_POST['username']);
$check->execute();
if($check->rowCount() > 0){
    return print_r(json_encode(array("response" => 0, "message" => "Username already exist", "timestamp" => $time)));
}
 
$sql = "INSERT INTO registration (`fname`,lname,mname,username,`street_add`,city_add,zip_add,gender,contact,email,`password`,photo_path,front_id_path,back_id_path,region,province,barangay)VALUES(:fname,:lname,:mname,:username,:street_add,:city_add,:zip_add,:gender,:cnum,:email,:psw,:photo,:front_id,:back_id,:region,:province,:barangay)";
$result = $db->prepare($sql);

$data = [
    "fname" => $_POST['firstname'],
    "lname" => $_POST['lastname'],
    "mname" => $_POST['middlename'],
    "username" => $_POST['username'],
    "street_add" => $_POST['regstreet'],
    "city_add" => $_POST['regcity'],
    "zip_add" => $_POST['regzip'],
    "cnum" => $_POST['cnum'],
    "gender" => $_POST['gender'],
    "email" => $_POST['email'],
    "psw" => password_hash($_POST['psw'], PASSWORD_DEFAULT),
    "photo" => $filename . ".jpg",
    "front_id" => $filename2 . ".jpg",
    "back_id" => $filename3 . ".jpg",
    "region" => $_POST['region'],
    "province" => $_POST['province'],
    "barangay" =>  $_POST['barangay']
];


$fullpath = "../upload/" . $filename .".jpg";

$img =  base64_decode($_POST['image']);

if(!file_put_contents($fullpath, $img)){
    return print_r(json_encode(array("response" => 0, "message" => "unable to upload file", "timestamp" => $time)));
}


$fullpath2 = "../upload/" . $filename2 .".jpg";

$img2 =  base64_decode($_POST['image1']);

if(!file_put_contents($fullpath2, $img2)){
    return print_r(json_encode(array("response" => 0, "message" => "unable to upload file", "timestamp" => $time)));
}

$fullpath3 = "../upload/" . $filename3 .".jpg";

$img3 =  base64_decode($_POST['image2']);

if(!file_put_contents($fullpath3, $img3)){
    return print_r(json_encode(array("response" => 0, "message" => "unable to upload file", "timestamp" => $time)));
}


$stmt = $result->execute($data);
if($stmt){
    return print_r(json_encode(array("response" => 1, "message" => "user created", "timestamp" => $time)));
}
return print_r(json_encode(array("response" => 0, "message" => "error creating username", "timestamp" => $time)));

function generateFilename(){
    $bytes = random_bytes(20);
    $filename = bin2hex(($bytes));
    if(!filenameCheck($filename)){
        return $filename;
    }
    generateFilename();
}

function generateFilename2(){
    $bytes = random_bytes(20);
    $filename2 = bin2hex(($bytes));
    if(!filenameCheck($filename2)){
        return $filename2;
    }
    generateFilename2();
}

function generateFilename3(){
    $bytes = random_bytes(20);
    $filename3 = bin2hex(($bytes));
    if(!filenameCheck($filename3)){
        return $filename3;
    }
    generateFilename3();
}

function filenameCheck($file){
    $path = '../upload/';
    echo file_exists($path . $file . ".jpg");
    if(file_exists($path . $file . ".jpg")){
        return true;
    }
    return false;
}