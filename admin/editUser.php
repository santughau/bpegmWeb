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
    $sqlQuery = "SELECT * FROM uploaderby WHERE id = '$id' ";
    $runSql = mysqli_query($con,$sqlQuery);
    $row=mysqli_fetch_array($runSql);
                                    
    $did= $row['id'];
    $name = $row['name'];
    $schoolName = $row['schoolName'];
    $mobile = $row['mobile'];
    $info = $row['info'];
    $image = $row['image'];
    $password = $row['password'];
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
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>नाव </label>
                        <input type="text" class="form-control textbox" value="<?php echo $name;?>" name="name" required> </div>
                    <div class="form-group ">
                        <label>शाळेचे नाव </label>
                        <input type="text" class="form-control textbox" value="<?php echo $schoolName;?>" name="school" required> </div>
                    <div class="form-group ">
                        <label>मोबाइल </label>
                        <input type="text" class="form-control textbox" value="<?php echo $mobile;?>" name="mobile" required> </div>
                    <div class="form-group ">
                        <label>माहिती </label>
                        <input type="text" class="form-control textbox" value="<?php echo $info;?>" name="info" required> </div>
                    <div class="form-group ">
                        <label>पासवर्ड </label>
                        <input type="text" class="form-control textbox" value="<?php echo $password;?>" name="password" required> </div>
                    <div class="form-group ">
                        <input type="file" class="btn btn-danger" name="u_image"> </div>
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
    $username = $_POST['name'];
    $schoolName = $_POST['school'];
    $info = $_POST['info'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $u_image = $_FILES['u_image']['name'];
    $image_tmp = $_FILES['u_image']['tmp_name'];
      
    if(empty($u_image))
    {
        echo $u_image = $image;
    }
     move_uploaded_file($image_tmp,"../images/$u_image");
      
  
    echo $insert_news = "update uploaderby set 
      name = '$username',
      schoolName = '$schoolName',
      mobile = '$mobile',
      info = '$info',
      image = '$u_image',
      password = '$password'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
           if(file_exists("../images/$u_image")){
        if(rename("../images/$u_image","../images/$id.jpg")){
            $imagePhoto = $id.'.jpg';
            $updatePhoto = "update uploaderby set 
            image = '$imagePhoto'
            where id = '$id'";            
            $upate_pro = mysqli_query($con, $updatePhoto);
        }
            else{
                echo "<script>alert('Error in Rename !')</script>";
            }
        }
         else{
             echo "<script>alert('File does not exit')</script>";
        } 
          
          echo"<script>alert('तुम्ही डाउनलोड ची लिंक यशस्वी रित्या  बदल केलेली  आहे  धंन्यवाद !')</script>";
            echo"<script>window.open('user.php','_self')</script>";
     
            }
    }

?>