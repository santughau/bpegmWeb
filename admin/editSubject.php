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
    $sqlQuery = "SELECT * FROM subject WHERE id = '$id' ";
    $runSql = mysqli_query($con,$sqlQuery);
    $row=mysqli_fetch_array($runSql);
                                    
    $classNamea= $row['className'];
    $subjectName= $row['subjectName'];
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
                <h2 class="text-center bg-primary text-white">विषय ऍड करा    </h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="text-danger">विषय लिहा </label>
                        <input type="text" class="form-control" value="<?php echo $subjectName;?>" name="subject" required> </div>
                    <div class="form-group ">
                        <label class="text-danger">वर्ग निवडा </label>
                        <select class="form-control" name="class" required>
                            <?php
                            $class = "SELECT * FROM class ";
                            $runClass = mysqli_query($con, $class);
                            while($rowClass = mysqli_fetch_array($runClass)){
                                $classNameid = $rowClass['id'];
                                $className = $rowClass['className'];
                            ?>
                                <option value="<?php echo $classNameid;?>" <?php if($classNamea==$classNameid ){echo "selected"; }?>>
                                    <?php echo $className;?>
                                </option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="form-group " align="center">
                        <button type="submit" class="btn btn-success" name="submit">अपलोड करा </button>
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
      $subject = $_POST['subject'];
      $class = $_POST['class'];
      
  
     $insert_news = "update subject set 
      className = '$class',
      subjectName = '$subject'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('तुम्ही यशस्वी रित्या  बदल केलेली  आहे  धंन्यवाद !')</script>";
            echo"<script>window.open('subject.php','_self')</script>";
     
            }
    }

?>