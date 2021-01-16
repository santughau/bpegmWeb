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
    $sqlQuery = "SELECT * FROM download WHERE id = '$id' ";
    $runSql = mysqli_query($con,$sqlQuery);
    $row=mysqli_fetch_array($runSql);
                                    
    $date= $row['date'];
    $subject= $row['subject'];
    $link = $row['link'];
    $uploaderId = $row['uploaderId'];
    $views = $row['views'];
    $subcode = $row['subcode'];
    $type = $row['type'];
}
function load_country()
{
    global $con;
    $output = '';
    $sql = "SELECT * FROM class ORDER BY id ASC";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $className = $row['className'];
         $output .="<option value='$id'>$className</option>";
    }
    return $output;    
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
                <h2 class="text-center bg-primary text-white">इयत्ता नुसार डाउनलोड </h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>घटकाचे नाव </label>
                        <input type="text" class="form-control textbox" value="<?php echo $subject;?>" name="title" required> </div>
                    <div class="form-group ">
                        <label>लिंक ऍड करा </label>
                        <input type="text" class="form-control textbox" value="<?php echo $link;?>" name="link" required> </div>
                    <div class="form-group ">
                        <label>वर्ग निवडा </label>
                        <select name="cl" id="cl" class="custom-select" required>
                            <option value="">खालील पैकी एक </option>
                            <?php echo load_country(); ?>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label>विषय निवडा </label>
                        <select name="sub" id="state" class="custom-select" required>
                            <option value="">खालील पैकी एक</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label>फाईल चा प्रकार </label>
                        <select name="fType" id="cl" class="custom-select" required>
                            <option value="">खालील पैकी एक </option>
                            <option value="PDF" <?php if($type=='PDF' ){echo "selected"; }?>>PDF</option>
                            <option value="DOC" <?php if($type=='DOC' ){echo "selected"; }?>>DOC</option>
                            <option value="XLX" <?php if($type=='XLX' ){echo "selected"; }?>>XLX</option>
                            <option value="PPT" <?php if($type=='PPT' ){echo "selected"; }?>>PPT</option>
                            <option value="CDR" <?php if($type=='CDR' ){echo "selected"; }?>>CDR</option>
                            <option value="PSD" <?php if($type=='PSD' ){echo "selected"; }?>>PSD</option>
                            <option value="JPEG" <?php if($type=='JPEG' ){echo "selected"; }?>>JPEG</option>
                            <option value="PAGEMAKER" <?php if($type=='PAGEMAKER' ){echo "selected"; }?>>PAGEMAKER</option>
                            <option value="ONLINE EXAM" <?php if($type=='ONLINE EXAM' ){echo "selected"; }?>>ONLINE EXAM</option>
                            <option value="YOUTUBE" <?php if($type=='YOUTUBE' ){echo "selected"; }?>>Youtube</option>
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
    <script>
        $(document).ready(function () {
            $('#cl').change(function () {
                var class_id = $(this).val();
                //console.log(class_id);
                $.ajax({
                    url: "../api.php"
                    , method: "POST"
                    , data: {
                        class_id: class_id
                    }
                    , dataType: "text"
                    , success: function (data) {
                        $('#state').html(data);
                    }
                });
                $('#state').change(function () {
                    var sub_id = $(this).val();
                    console.log(sub_id);
                    $.ajax({
                        url: "../dl.php"
                        , method: "POST"
                        , data: {
                            sub_id: sub_id
                        }
                        , dataType: "html"
                        , success: function (data) {
                            $('#tbl').html(data);
                        }
                    });
                });
            });
        });
    </script>
    <?php
  if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $link = $_POST['link'];
      $cl = $_POST['cl'];
      $sub = $_POST['sub'];
      $fType = $_POST['fType'];
      
  
     $insert_news = "update download set 
      subject = '$title',
      link = '$link',
      subcode = '$sub',
      type = '$fType'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('तुम्ही डाउनलोड ची लिंक यशस्वी रित्या  बदल केलेली  आहे  धंन्यवाद !')</script>";
            echo"<script>window.open('download.php','_self')</script>";
     
            }
    }

?>