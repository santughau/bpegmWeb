<?php

/*header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers:  Content-Type");*/

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
  // Extract the data.
  $request = json_decode($postdata);



  // Sanitize.
  $id = mysqli_real_escape_string($con, trim($request->id));
    
}



$download ;
$sql = "SELECT * FROM download WHERE id = '$id'";

if($result = mysqli_query($con,$sql))
{
  $i = 0;
 $row = mysqli_fetch_assoc($result);
  
     $sub = $row['subcode']; 
      $subQuery = "SELECT * FROM subject WHERE id = '$sub'";
      $subrun = mysqli_query($con,$subQuery);
      $rowSub = mysqli_fetch_assoc($subrun);
      
      
      $uploader = $row['uploaderId'];
      $uploaderQuery = "SELECT * FROM uploaderby WHERE id = '$uploader'";
      $uploaderrun = mysqli_query($con,$uploaderQuery);
      $rowuploader = mysqli_fetch_assoc($uploaderrun);
            
    
      $download['dates'] = $row['dates']; 
      $download['views'] = $row['views']; 
      $download['subject'] = $row['subject']; 
      $download['links'] = $row['links']; 
      $download['className'] = $rowSub['className']; 
      $download['subjectName'] = $rowSub['subjectName']; 
      $download['type'] = $row['type']; 
      $download['uploadername'] = $rowuploader['name']; 
      $download['uploaderschoolName'] = $rowuploader['schoolName']; 
      $download['uploadermobile'] = $rowuploader['mobile']; 
      $download['uploaderinfo'] = $rowuploader['info']; 
      $download['uploaderimage'] = $rowuploader['image']; 
      $download['uploaderpassword'] = $rowuploader['password']; $i++;
  

  echo json_encode($download);
}
else
{
  http_response_code(404);
}