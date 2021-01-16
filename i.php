<?php 
ob_start();
session_start();

require_once('inc/db.php');
include ("PHPExcel/IOFactory.php");
$objPHPExcel = PHPExcel_IOFactory::load('.xlsx');
foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
	$highestRow = $worksheet->getHighestRow();
	for($row=2; $row<=$highestRow; $row++){
		$subject = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$date = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
		$link = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$year = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
		
		$sql = "INSERT INTO gr (date,subject,link,uploaderId,views,year) VALUES ('$date','$subject','$link','2','0','$year')";
        
		mysqli_query($con,$sql);
	}
}

?>