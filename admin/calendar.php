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
    $del_query = "DELETE  FROM events WHERE id = '$del_id'  ";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
       echo "<script>window.open('video.php','_self')</script>";  
    }
}
?> <link href="datepicker/css/datepicker.css" rel="stylesheet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3 mb-4">
                <h2 class="text-center bg-primary text-white"> शाळेतील शैक्षणिक कार्यक्रम    </h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>दिनांक </label>
                        <input type="text" class="form-control datepicker textbox" data-date-format="dd/mm/yyyy" name="date" placeholder="दिनांक निवडा "> </div>
                    <div class="form-group ">
                        <label>कालनिर्णयची माहिती </label>
                        <input type="text" class="form-control textbox" placeholder="कालनिर्णयची माहिती " name="title"> </div>
                    <button type="submit" class="btn btn-warning col-md-offset-5" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i> शाळेतील शैक्षणिक कार्यक्रम  </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ. क्र.</th>
                                <th scope="col">दिनांक </th>
                                <th scope="col"> शाळेतील शैक्षणिक कार्यक्रम </th>
                                <th scope="col">Edit </th>
                                <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM events ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $title = $row_download['title'];
                                 
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
                                        <?php echo $title;?>
                                    </td>
                                    <td><a href="editCalender.php?id=<?php echo $download_id;?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="calender.php?id=<?php echo $download_id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
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
<script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function () {
            $('#table2excel').DataTable();
        });
    </script>
    <script>
        $("#but").click(function () {
            $("#table2excel").table2excel({
                // exclude CSS class
                exclude: ".noExl"
                , name: "Worksheet Name"
                , filename: "schoolSocity.xls" //do not include extension
            });
        });
    </script>
    <script>
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
    </script>
    <?php
  if(isset($_POST['submit'])){   
      $date = $_POST['date'];    
      $title = $_POST['title'];    
      
      $insert_news = "INSERT INTO events (title,date) VALUES ('$title','$date')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
	   echo"<script>alert('आताच तुम्ही  माहिती ऍड   केली  आहे ')</script>";
	   echo"<script>window.open('calendar.php','_self')</script>";
        }
  } 
    
?>