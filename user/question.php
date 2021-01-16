<?php 
ob_start();
session_start();
if(!isset($_SESSION['id'])){    
        header('Location:login.php');
    }
$userId = $_SESSION['id'];
if($userId != 173 ){
    header('Location:index.php');
}
$page_title = "Home Pages";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
$page_desc = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
require_once('../inc/db.php');
include('inc/top.php');
include('inc/userInfo.php');
if(isset($_GET['id'])){
    $del_id = $_GET['id'];    
    $del_query = "DELETE  FROM jaipal WHERE id = '$del_id'  ";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
       echo "<script>window.open('question.php','_self')</script>";  
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
                <h2 class="text-center bg-primary text-white">Write Question here </h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="text-danger">परीक्षेचे नाव लिहा </label>
                        <input type="text" class="form-control" placeholder="परीक्षेचे नाव   लिहा " name="title" required> </div>
                    <div class="form-group ">
                        <label class="text-danger"> लिंक टाका </label>
                        <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="date" placeholder="Choose Date" style="border: 1px solid black;padding:10px;"> </div>
                    
                    <div class="form-group ">
                       <label class="text-danger"> Type Questions </label>
                                        <textarea class="form-control" rows="3" name="post-data"></textarea></div>
                    <div class="form-group " align="center">
                        <button type="submit" class="btn btn-success" name="submit">अपलोड करा </button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i>परीक्षेचे निकाल  </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ. क्र.</th>
                                <th scope="col">दिनांक </th>
                                <th scope="col">परीक्षेचे नाव </th>
                                <th scope="col">Question </th>
                                <th scope="col">Views </th>
                                <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM jaipal ORDER BY id DESC";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $id = $row_download['id'];
                                $date = $row_download['date'];
                                $name = $row_download['name'];
                                $que = $row_download['que'];
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
                               
                                $ia=$ia+1;
                                ?>
                                <tr class="">
                                    <td>
                                        <?php echo $ia;?>
                                    </td>
                                    <td>
                                        <?php echo $date;?>
                                    </td>
                                    <td>
                                        <?php echo $name;?>
                                    </td>
                                    <td>
                                        <?php echo $que;?>
                                    </td>
                                    
                                    <td>
                                        <?php echo $views;?>
                                    </td>
                                    
                                   
                                    <td><a href="question.php?id=<?php echo $id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
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

<script>
        $(function() {
            $('.datepicker').datepicker();
        });
    </script>

<script>
        CKEDITOR.replace('post-data');
    </script>
    <?php
  if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $date = $_POST['date'];
      $postdata = $_POST['post-data'];
      $insert_news = "INSERT INTO jaipal (name,date,que,uploaderId,views ) VALUES ('$title','$date','$postdata','2','0')";      
      $insert_pro = mysqli_query($con,$insert_news);      
      if($insert_pro){          
           echo"<script>alert('Welcome, You have added a new Downloaded Stuff here !')</script>";
           echo"<script>window.open('question.php','_self')</script>";
        }
  }     
?>