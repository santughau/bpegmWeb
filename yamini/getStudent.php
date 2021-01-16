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
$sql = "SELECT * FROM student WHERE uid = '$id' ORDER BY  rollNumber ASC";

if($result = mysqli_query($con,$sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
        
      $download[$i]['id'] = $row['id']; 
      $download[$i]['generalNumber'] = $row['generalNumber']; 
      $download[$i]['rollNumber'] = $row['rollNumber']; 
      $download[$i]['fullName'] = $row['fullName']; 
      $download[$i]['motherName'] = $row['motherName']; 
      $download[$i]['mobile'] = $row['mobile']; 
      $download[$i]['address'] = $row['address']; 
      $download[$i]['doa'] = $row['doa']; 
      $download[$i]['dob'] = $row['dob']; 
      $download[$i]['cast'] = $row['cast']; 
      $download[$i]['category'] = $row['category']; 
      $download[$i]['gender'] = $row['gender']; 
      $download[$i]['medium'] = $row['medium']; 
      $download[$i]['secondLanguage'] = $row['secondLanguage']; 
      $download[$i]['adharCard'] = $row['adharCard']; 
      $download[$i]['scholorship'] = $row['scholorship']; 
      $download[$i]['bankAccNo'] = $row['bankAccNo']; 
      $download[$i]['bankName'] = $row['bankName']; 
      $download[$i]['ifsc'] = $row['ifsc']; 
      $download[$i]['uid'] = $row['uid']; 
      $i++;
  }

  echo json_encode($download);
}
else
{
  http_response_code(404);
}