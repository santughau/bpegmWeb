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
    $del_query = "DELETE  FROM download WHERE id = '$del_id'  ";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
       echo "<script>window.open('download.php','_self')</script>";  
    }
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
                        <input type="text" class="form-control textbox" placeholder="घटकाचे  नाव  " name="title" required> </div>
                    <div class="form-group ">
                        <label>लिंक ऍड करा </label>
                        <input type="text" class="form-control textbox" placeholder="लिंक ऍड  करा " name="link" required> </div>
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
                            <option value="PDF">PDF</option>
                            <option value="DOC">DOC</option>
                            <option value="XLX">XLX</option>
                            <option value="PPT">PPT</option>
                            <option value="CDR">CDR</option>
                            <option value="PSD">PSD</option>
                            <option value="JPEG">JPEG</option>
                            <option value="PAGEMAKER">PAGEMAKER</option>
                            <option value="ONLINE EXAM">ONLINE EXAM</option>
                            <option value="YOUTUBE">Youtube</option>
                        </select>
                    </div>
                    <div class="form-group " align="center">
                        <button type="submit" class="btn btn-success" name="submit">अपलोड करा </button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i>इयत्ता नुसार डाउनलोड  </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ क्र</th>
                                <th scope="col">दिनांक</th>
                                <th scope="col"> घटक </th>
                                <th scope="col"> वर्ग </th>
                                <th scope="col"> विषय </th>
                                <th scope="col">नाव </th>
                                <th scope="col"> फाईल चा प्रकार </th>
                                <th scope="col">Views</th>
                                <th scope="col">Link </th>
                                <th scope="col">Edit </th>
                                <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $download = "SELECT * FROM download ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $subcode = $row_download['subcode'];
                                $type = $row_download['type'];
                                $uploaderId = $row_download['uploaderId'];                                 
                                $views = $row_download['views'];             
                                if($uploaderId == 0){ $uploaderId = 1; }
                            
                                $uploadera = "SELECT * FROM uploaderby WHERE id = $uploaderId";
                                $run_downloada = mysqli_query($con, $uploadera);
                                $row_uploadera = mysqli_fetch_array($run_downloada); 
                                $uploader_ida = $row_uploadera['id']; 
                                $uploader_namea = $row_uploadera['name'];
                                $schoolNamea = $row_uploadera['schoolName']; 
                                $mobilea = $row_uploadera['mobile']; 
                                $infoa = $row_uploadera['info'];
                                $imagea = $row_uploadera['image'];
                                
                                
                                
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
                                        <?php echo $subClassName_className;?>
                                    </td>
                                    <td>
                                        <?php echo $subCodeName_subjectName;?>
                                    </td>
                                    <td>
                                        <?php echo $uploader_namea;?>
                                    </td>
                                    <td>
                                        <?php echo $type;?>
                                    </td>
                                    <td>
                                        <?php echo $views;?>
                                    </td>
                                    <td><a href="<?php echo $download_link;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    <td><a href="editdownload.php?id=<?php echo $download_id;?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="download.php?id=<?php echo $download_id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
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
      
      $insert_news = "INSERT INTO download (date,subject,link,subcode,type) VALUES (NOW(),'$title','$link','$sub','$fType')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('आताच तुम्ही  डाउनलोड ची  लिंक ऍड  केली  आहे ')</script>";
	   echo"<script>window.open('download.php','_self')</script>";
        }
  } 
    
?>