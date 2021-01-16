<?php 
require_once('inc/db.php');
require_once('inc/top.php') ?>
    <?php
    if(isset($_POST["sub_id"]))  
  {
      $sub_id = $_POST["sub_id"];
      $output = "";
      $output .= "<table class='table table-bordered' id='table2excel'>";
      $output .= "<thead class='table-dark'>";
      $output .= " <tr>";
      $output .= " <th scope='col'>अ  क्र</th>";
      $output .= " <th scope='col'>दिनांक</th>";
      $output .= " <th scope='col'>घटक  </th>";      
      $output .= " <th scope='col'>वर्ग </th>";      
      $output .= " <th scope='col'>विषय </th>";
      $output .= " <th scope='col'>नाव  </th>";
      $output .= " <th scope='col'>फोटो  </th>";
      $output .= " <th scope='col'>फाईल चा प्रकार  </th>";
      $output .= " <th scope='col'>Views  </th>";
      $output .= " <th scope='col'>डाउनलोड  </th>";
      $output .= " </tr>";
      $output .= " </thead>";
      $output .= " <tbody >";
      
      
      $query = "SELECT * FROM download WHERE subcode = $sub_id ";
      $result = mysqli_query($con, $query);
      $ia=0;
      while($row = mysqli_fetch_array($result))
            {
                $download_id = $row['id'];
                $download_date = $row['date'];
                $download_subject = $row['subject'];
                $download_link = $row['link'];
                $subcode = $row['subcode'];
                $type = $row['type'];
                $uploaderId = $row['uploaderId'];                                                 
                $views = $row['views'];           
                if($uploaderId == 0){
                    $uploaderId = 1;
                }
                            
                $uploader = "SELECT * FROM uploaderby WHERE id = '$uploaderId'";
                $run_download = mysqli_query($con, $uploader);   
                $row_uploader = mysqli_fetch_array($run_download);
                $uploader_id = $row_uploader['id'];
                $uploader_name = $row_uploader['name'];
                $schoolName = $row_uploader['schoolName'];
                $mobile = $row_uploader['mobile'];
                $info = $row_uploader['info'];
                $image = $row_uploader['image'];
                
                
                $subCodeName = "SELECT * FROM subject WHERE id = '$subcode' ";
                $run_subCodeName = mysqli_query($con, $subCodeName);
                $row_subCodeName = mysqli_fetch_array($run_subCodeName);
                $subCodeName_id = $row_subCodeName['id']; 
                $subCodeName_className = $row_subCodeName['className'];
                $subCodeName_subjectName = $row_subCodeName['subjectName'];
                                
                                
                $subClassName = "SELECT * FROM class WHERE id = '$subCodeName_className' ";
                $run_subClassName = mysqli_query($con, $subClassName);
                $row_subClassName = mysqli_fetch_array($run_subClassName);
                $subClassName_id = $row_subClassName['id'];
                $subClassName_className = $row_subClassName['className'];
                $ia=$ia+1;
                
                $output .= "<tr class = ''>";                
                $output .= "<td>$ia</td>";
                $output .= "<td>$download_date</td>";
                $output .= "<td>$download_subject</td>";
                $output .= "<td>$subClassName_className</td>";
                $output .= "<td>$subCodeName_subjectName</td>";
                $output .= "<td>$uploader_name</td>";
                $output .= "<td><img src='images/$image' class='img-fulid' width='50' /></td>";
                $output .= "<td>$type</td>";
                $output .= "<td>$views</td>";
                $output .= "<td><a href='wazirx.php?id=$download_id' class='btn btn-primary' target='_blank'><i class='fa fa-eye' aria-hidden='true'></i></a></td></td>";
                $output .= "</tr>";
                //$output .= "<option value='$id'>$subjectName</option>";
            }
      $output .= "</tbody>";
      $output .= "</table>";
      echo $output;
  }
?>