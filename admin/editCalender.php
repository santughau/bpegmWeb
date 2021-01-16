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
    $sqlQuery = "SELECT * FROM events WHERE id = '$id' ";
    $runSql = mysqli_query($con,$sqlQuery);
    $row=mysqli_fetch_array($runSql);
                                    
    $date= $row['date'];
    $title= $row['title'];
}
?>
    <link href="datepicker/css/datepicker.css" rel="stylesheet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3 mb-4">
                <h2 class="text-center bg-primary text-white">शालेय  प्रपत्रे     </h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>दिनांक </label>
                        <input type="text" class="form-control datepicker textbox" data-date-format="dd/mm/yyyy" name="date" value="<?php echo $date;?>"> </div>
                    <div class="form-group ">
                        <label>कालनिर्णयची माहिती </label>
                        <input type="text" class="form-control textbox" value="<?php echo $title;?>" name="title"> </div>
                    <button type="submit" class="btn btn-warning col-md-offset-5" name="update">Submit</button>
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
  if(isset($_POST['update'])){
      
      if(isset($_GET['id'])){
        $id = $_GET['id'];
      }
      $date = $_POST['date'];
      $title = $_POST['title'];
      
      $updateSql = "update events set 
      title = '$title',
      date = '$date'
      where id = '$id'";
      
      $insertSql = mysqli_query($con, $updateSql);
      
      if($insertSql){
          echo"<script>alert('धन्यवाद ! आपण शालेय  कालनिर्णयच्या  माहिती  मध्ये  बदल  यशस्वीरित्या केला आहे  . ')</script>";
            echo"<script>window.open('calendar.php','_self')</script>";
     
            }
    }
?>