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
    $id = $_GET['id'];
    $sqlQuery = "SELECT * FROM profarma WHERE id = '$id' ";
    $runSql = mysqli_query($con,$sqlQuery);
    $row=mysqli_fetch_array($runSql);
                                    
    $date= $row['date'];
    $subject= $row['subject'];
    $link = $row['link'];
    $uploaderId = $row['uploaderId'];
    $views = $row['views'];
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
                <h2 class="text-center bg-primary text-white">शालेय  प्रपत्रे     </h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="text-danger">विषय लिहा </label>
                        <input type="text" class="form-control" value="<?php echo $subject;?>" name="title" required> </div>
                    <div class="form-group ">
                        <label class="text-danger">गूगल ड्राईव्ह ची लिंक टाका </label>
                        <input type="text" class="form-control" value="<?php echo $link;?>" name="link" required> </div>
                    <div class="form-group " align="center">
                        <button type="submit" class="btn btn-success" name="submit">अपडेट करा </button>
                    </div>
                </form>
            </div>
            <div class="col-md-9"> </div>
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
      
  
     $insert_news = "update profarma set 
      subject = '$title',
      link = '$link'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('तुम्ही डाउनलोड ची लिंक यशस्वी रित्या  बदल केलेली  आहे  धंन्यवाद !')</script>";
            echo"<script>window.open('profarma.php','_self')</script>";
     
            }
    }

?>