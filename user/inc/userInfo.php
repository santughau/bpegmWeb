<?php 
$uploadera = "SELECT * FROM uploaderby WHERE id = $userId"; 
$run_downloada = mysqli_query($con, $uploadera); 
$row_uploadera = mysqli_fetch_array($run_downloada); 
$uploader_id = $row_uploadera['id'];
$uploader_name = $row_uploadera['name']; 
$schoolName = $row_uploadera['schoolName'];
$mobile = $row_uploadera['mobile'];
$info = $row_uploadera['info']; 
$image = $row_uploadera['image'];

?>