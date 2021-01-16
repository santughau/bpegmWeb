<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

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

$sql = "SELECT * FROM user WHERE uid = '$id'";

if($result = mysqli_query($con,$sql))
{
  $row = mysqli_fetch_assoc($result);
  
      $download['id'] = $row['id']; 
      $download['name'] = $row['name']; 
      $download['mobile'] = $row['mobile']; 
      $download['email'] = $row['email']; 
      $download['school'] = $row['school']; 
      $download['class'] = $row['class']; 
      $download['divi'] = $row['divi']; 
      $download['district'] = $row['district']; 
      $download['taluka'] = $row['taluka']; 
      $download['password'] = $row['password']; 
      $download['uid'] = $row['uid']; 
  

  echo json_encode($download);
}
else
{
  http_response_code(404);
}