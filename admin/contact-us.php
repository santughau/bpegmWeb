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
    $del_query = "DELETE  FROM subject WHERE id = '$del_id'  ";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
       echo "<script>window.open('subject.php','_self')</script>";  
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
            <div class="col-md-12">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i> विषय ऍड करा  </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ. क्र.</th>
                                <th scope="col">नाव </th>
                                <th scope="col">मोबाइल </th>
                                <th scope="col">ई-मेल </th>
                                <th scope="col">पत्ता </th>
                                <th scope="col">संदेश </th>
                                <th scope="col">दिनांक </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM contact ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $name = $row_download['name'];
                                $email = $row_download['email'];
                                $mobile = $row_download['mobile'];
                                $address = $row_download['address'];
                                $message = $row_download['message'];
                                $date = $row_download['date'];
                                
                                
                                $ia=$ia+1;
                                ?>
                                <tr class="">
                                    <td>
                                        <?php echo $ia;?>
                                    </td>
                                    <td>
                                        <?php echo $name;?>
                                    </td>
                                    <td>
                                        <?php echo $email;?>
                                    </td>
                                    <td>
                                        <?php echo $mobile;?>
                                    </td>
                                    <td>
                                        <?php echo $address;?>
                                    </td>
                                    <td>
                                        <?php echo $message;?>
                                    </td>
                                    <td>
                                        <?php echo $date;?>
                                    </td>
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
      $subName = $_POST['subject']; 
      $className = $_POST['class']; 
      
      $insert_news = "INSERT INTO subject (className,subjectName) VALUES ('$className','$subName')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
	   echo"<script>alert('आताच तुम्हीी  ऍड   केली  आहे ')</script>";
	   echo"<script>window.open('subject.php','_self')</script>";
        }
  } 
    
?>