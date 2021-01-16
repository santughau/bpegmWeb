<?php
    $db['db_host']= 'localhost';
    $db['db_user']= 'bpegmjk1_ranjana';
    $db['db_pass']= 'YaminiSontakke_2611';
    $db['db_name']= 'bpegmjk1_ranjana';
    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);    
    // mysqli_set_charset($con,'utf8');
?>