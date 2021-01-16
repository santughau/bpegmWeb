<?php 
ob_start();
session_start();
if(!isset($_SESSION['id'])){    
        header('Location:login.php');
    }
$page_title = "Home Pages";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
$page_desc = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
require_once('../inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
    $del_id = $_GET['id'];    
    $del_query = "DELETE  FROM generaldownload WHERE id = '$del_id'  ";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
       echo "<script>window.open('generaldown.php','_self')</script>";  
    }
}
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3 mb-4">
                <h2 class="text-center bg-primary text-white">प्रपत्रे , PDF , इत्यादी   </h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="text-danger">विषय लिहा </label>
                        <input type="text" class="form-control" placeholder="विषय  लिहा " name="title" required> </div>
                    <div class="form-group ">
                        <label class="text-danger">गूगल ड्राईव्ह ची लिंक टाका </label>
                        <input type="text" class="form-control" placeholder="गूगल ड्राईव्ह  ची लिंक" name="link" required> </div>
                    <div class="form-group " align="center">
                        <button type="submit" class="btn btn-success" name="submit">अपलोड करा </button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i> प्रपत्रे , PDF , इत्यादी </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ. क्र.</th>
                                <th scope="col">दिनांक </th>
                                <th scope="col">विषय </th>
                                <th scope="col">निर्मात्याचे नाव </th>
                                <th scope="col">Views </th>
                                <th scope="col">Link </th>
                                <th scope="col">Edit </th>
                                <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM generaldownload ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $uploaderId = $row_download['uploaderId'];
                                $views = $row_download['views'];
                                if($uploaderId == 0){
                                     $uploaderId = 1;
                                }                                
                                $uploadera = "SELECT * FROM uploaderby WHERE id = $uploaderId"; 
                                $run_downloada = mysqli_query($con, $uploadera); 
                                $row_uploadera = mysqli_fetch_array($run_downloada); 
                                $uploader_id = $row_uploadera['id'];
                                $uploader_name = $row_uploadera['name']; 
                                $schoolName = $row_uploadera['schoolName'];
                                $mobile = $row_uploadera['mobile'];
                                $info = $row_uploadera['info']; 
                                $ia=$ia+1;
                                ?>
                                <tr class="">
                                    <td>
                                        <?php echo $ia;?>
                                    </td>
                                    <td>
                                        <?php echo $download_date;?>
                                    </td>
                                    <td>
                                        <?php echo $download_subject;?>
                                    </td>
                                    <td>
                                        <?php echo $uploader_name;?>
                                    </td>
                                    <td>
                                        <?php echo $views;?>
                                    </td>
                                    <td><a href="<?php echo $download_link;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    <td><a href="editGeneraldown.php?id=<?php echo $download_id;?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="generaldown.php?id=<?php echo $download_id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row bg-dark" style="padding-top:20px;">
                <?php include('inc/footer.php');?>
            </div>
        </div>
    </div>
    </body>

    </html>
    <?php
  if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $link = $_POST['link'];
      $insert_news = "INSERT INTO generaldownload (date,subject,link) VALUES (NOW(),'$title','$link')";      
      $insert_pro = mysqli_query($con,$insert_news);      
      if($insert_pro){          
           echo"<script>alert('Welcome, You have added a new Downloaded Stuff here !')</script>";
           echo"<script>window.open('generaldown.php','_self')</script>";
        }
  }     
?>