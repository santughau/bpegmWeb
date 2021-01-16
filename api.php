<?php 
require_once('inc/db.php');
require_once('inc/top.php') ?>



<?php
    if(isset($_POST["class_id"]))  
  {
      $class_id = $_POST["class_id"];
      $output = '';
      $query = "SELECT * FROM subject WHERE className = $class_id ";
      $result = mysqli_query($con, $query);
       $output = "<option value=''>खालील पैकी  एक </option>";
      while($row = mysqli_fetch_array($result))
            {
                $id = $row['id'];
                $subjectName = $row['subjectName'];
                $output .= "<option value='$id'>$subjectName</option>";
            }
      echo $output;
  }
?>