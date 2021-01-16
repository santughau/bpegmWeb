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
            <div class="col-md-3 mb-4">
                <h2 class="text-center bg-primary text-white">विषय ऍड करा    </h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="text-danger">विषय लिहा </label>
                        <input type="text" class="form-control" placeholder="विषय  लिहा " name="subject" required> </div>
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
                                <option value="<?php echo $classNameid;?>">
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
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i> विषय ऍड करा  </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ. क्र.</th>
                                <th scope="col">वर्ग </th>
                                <th scope="col">विषय </th>
                                <th scope="col">Edit </th>
                                <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM subject ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $className = $row_download['className'];
                                $subjectName = $row_download['subjectName'];
                                
                                $class = "SELECT * FROM class WHERE id = $className"; 
                                $run_class = mysqli_query($con, $class); 
                                $row_class = mysqli_fetch_array($run_class); 
                                $classNameR = $row_class['className'];
                                $ia=$ia+1;
                                ?>
                                <tr class="">
                                    <td>
                                        <?php echo $ia;?>
                                    </td>
                                    <td>
                                        <?php echo $classNameR;?>
                                    </td>
                                    <td>
                                        <?php echo $subjectName;?>
                                    </td>
                                    <td><a href="editSubject.php?id=<?php echo $download_id;?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="subject.php?id=<?php echo $download_id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
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