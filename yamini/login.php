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
  // Extract the data.
  $request = json_decode($postdata);



  // Sanitize.
  $name = mysqli_real_escape_string($con, trim($request->name));
  $mobile = mysqli_real_escape_string($con, trim($request->mobile));
  $email = mysqli_real_escape_string($con, trim($request->email));
  $school = mysqli_real_escape_string($con, trim($request->school));
  $class = mysqli_real_escape_string($con, trim($request->classs));
  $div = mysqli_real_escape_string($con, trim($request->div));
  $district = mysqli_real_escape_string($con, trim($request->district));
  $taluka = mysqli_real_escape_string($con, trim($request->taluka));
  $password = mysqli_real_escape_string($con, trim($request->password));
  $uid = mysqli_real_escape_string($con, trim($request->uid));


  // Create.
  $sql = "INSERT INTO user (name,mobile,email,school,class,divi,district,taluka,password,uid) VALUES ('$name','$mobile','$email','$school','$class','$div','$district','$taluka','$password','$uid')";

  if(mysqli_query($con,$sql))
  {   
    $download = [
      'lastInsertid' => mysqli_insert_id($con)
    ];
    echo json_encode($download);
  }
  else
  {
    http_response_code(422);
  }
}
?>