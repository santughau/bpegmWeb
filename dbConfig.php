<?php
//db details
$dbHost = 'localhost';
$db['db_user']= 'bpegm_new';
$db['db_pass']= 'Orange_2611';
$db['db_name']= 'bpegm_new';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>