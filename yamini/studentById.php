<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: application/json");

define('DB_HOST', 'localhost');
define('DB_USER', 'bpegmjk1_ranjana');
define('DB_PASS', 'YaminiSontakke_2611');
define('DB_NAME', 'bpegmjk1_ranjana');


function connect()
{
  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

  if (mysqli_connect_errno($connect)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}

$con = connect();

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{  
  $request = json_decode($postdata);  
  $id = mysqli_real_escape_string($con, trim($request->id));      
}

$download = [];
$sql = "SELECT * FROM student WHERE id = '$id' ";

if($result = mysqli_query($con,$sql))
{
  $row = mysqli_fetch_assoc($result);
  
         
      $download['id'] = $row['id']; 
      $download['generalNumber'] = $row['generalNumber']; 
      $download['rollNumber'] = $row['rollNumber']; 
      $download['fullName'] = $row['fullName']; 
      $download['motherName'] = $row['motherName']; 
      $download['mobile'] = $row['mobile']; 
      $download['address'] = $row['address']; 
      $download['doa'] = $row['doa']; 
      $download['dob'] = $row['dob']; 
      $download['cast'] = $row['cast']; 
      $download['category'] = $row['category']; 
      $download['gender'] = $row['gender']; 
      $download['medium'] = $row['medium']; 
      $download['secondLanguage'] = $row['secondLanguage']; 
      $download['adharCard'] = $row['adharCard']; 
      $download['scholorship'] = $row['scholorship']; 
      $download['bankAccNo'] = $row['bankAccNo']; 
      $download['bankName'] = $row['bankName']; 
      $download['ifsc'] = $row['ifsc']; 
      $download['uid'] = $row['uid']; 
      
  

  echo json_encode($download);
}
else
{
  http_response_code(404);
}