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
    
  $generalNumber = mysqli_real_escape_string($con, $request->generalNumber);
  $rollNumber = mysqli_real_escape_string($con, $request->rollNumber);
  $fullName = mysqli_real_escape_string($con, $request->fullName);
  $motherName = mysqli_real_escape_string($con, $request->motherName);
  $mobile = mysqli_real_escape_string($con, $request->mobile);
  $address = mysqli_real_escape_string($con, $request->address);
  $doa = mysqli_real_escape_string($con, $request->doa);
  $dob = mysqli_real_escape_string($con, $request->dob);
  $cast = mysqli_real_escape_string($con, $request->cast);
  $category = mysqli_real_escape_string($con, $request->category);
  $gender = mysqli_real_escape_string($con, $request->gender);
  $medium = mysqli_real_escape_string($con, $request->medium);
  $secondLanguage = mysqli_real_escape_string($con, $request->secondLanguage);
  $adharCard = mysqli_real_escape_string($con, $request->adharCard);
  $scholorship = mysqli_real_escape_string($con, $request->scholorship);
  $bankAccNo = mysqli_real_escape_string($con, $request->bankAccNo);
  $bankName = mysqli_real_escape_string($con, $request->bankName);
  $ifsc = mysqli_real_escape_string($con, $request->ifsc);
  $uid = mysqli_real_escape_string($con, $request->uid);


  // Create.
  $sql = "INSERT INTO `student` ( `generalNumber`, `rollNumber`, `fullName`, `motherName`, `mobile`, `address`, `doa`, `dob`, `cast`, `category`, `gender`, `medium`, `secondLanguage`, `adharCard`, `scholorship`, `bankAccNo`, `bankName`, `ifsc`, `uid`) VALUES ( '$generalNumber', '$rollNumber', '$fullName', '$motherName', '$mobile', '$address', '$doa', '$dob', '$cast', '$category', '$gender', '$medium', '$secondLanguage', '$adharCard', '$scholorship', '$bankAccNo', '$bankName', '$ifsc', '$uid')";

  if(mysqli_query($con,$sql))
  {    
    $download = [
      'lastInsertid'    => mysqli_insert_id($con)
    ];
    echo json_encode($download);
  }
  else
  {
    http_response_code(422);
  }
}