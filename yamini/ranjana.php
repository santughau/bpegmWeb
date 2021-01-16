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

$download = [];
$sql = "SELECT * FROM download";

if($result = mysqli_query($con,$sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
     $sub = $row['subcode']; 
      $subQuery = "SELECT * FROM subject WHERE id = '$sub'";
      $subrun = mysqli_query($con,$subQuery);
      $rowSub = mysqli_fetch_assoc($subrun);
      
      
      $uploader = $row['uploaderId'];
      $uploaderQuery = "SELECT * FROM uploaderby WHERE id = '$uploader'";
      $uploaderrun = mysqli_query($con,$uploaderQuery);
      $rowuploader = mysqli_fetch_assoc($uploaderrun);
            
    
      $download[$i]['id'] = $row['id']; 
      $download[$i]['dates'] = $row['date']; 
      $download[$i]['views'] = $row['views']; 
      $download[$i]['subject'] = $row['subject']; 
      $download[$i]['links'] = $row['link']; 
      $download[$i]['className'] = $rowSub['className']; 
      $download[$i]['subjectName'] = $rowSub['subjectName']; 
      $download[$i]['type'] = $row['type']; 
      $download[$i]['uploadername'] = $rowuploader['name']; 
      $download[$i]['uploaderschoolName'] = $rowuploader['schoolName']; 
      $download[$i]['uploadermobile'] = $rowuploader['mobile']; 
      $download[$i]['uploaderinfo'] = $rowuploader['info']; 
      $download[$i]['uploaderimage'] = $rowuploader['image']; 
      $download[$i]['uploaderpassword'] = $rowuploader['password']; $i++;
  }

  echo json_encode($download);
}
else
{
  http_response_code(404);
}