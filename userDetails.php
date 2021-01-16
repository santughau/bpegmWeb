<?php 
$page_title = "User Pages";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke ";
$page_desc = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
}
$uploadera = "SELECT * FROM uploaderby WHERE id = $id"; 
$run_downloada = mysqli_query($con, $uploadera); 
$row_uploadera = mysqli_fetch_array($run_downloada); 
$uploader_id = $row_uploadera['id'];
$uploader_name = $row_uploadera['name']; 
$schoolName = $row_uploadera['schoolName'];
$mobile = $row_uploadera['mobile'];
$info = $row_uploadera['info']; 
$image = $row_uploadera['image'];
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-6 mb-4">
                <h2 class=" text-white text-center" style="background-color: #f40fd5">माझा  अल्पपरिचय  </h2> <img class="img-fluid" src="images/<?php echo $image;?>" width="150" align="left" vspace="5" hspace="5" />
                <h4 class="text-center text-danger"><?php echo $uploader_name;?></h4>
                <h6 class="text-center"> ( <?php echo $schoolName;?> )</h6> </div>
            <div class="col-md-6 "> </div>
        </div>
        <div class="row">
            <div class="col-md-6 table-responsive mb-4">
                <?php require_once('api/userDl.php');?>
            </div>
            <div class="col-md-6 table-responsive mb-4">
                <?php require_once('api/classWiseDl.php');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 table-responsive mb-4">
                <?php require_once('api/userProfarma.php');?>
            </div>
            <div class="col-md-6 table-responsive mb-4">
                <?php require_once('api/userGr.php');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 table-responsive mb-4">
                <?php require_once('api/userResult.php');?>
            </div>
            <div class="col-md-6 table-responsive mb-4">
                <?php require_once('api/userPhoto.php');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 table-responsive mb-4">
                <?php require_once('api/userVideo.php');?>
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
            $('#table2excel').DataTable();
        });
        $(document).ready(function () {
            $('#table2excel1').DataTable();
        });
        $(document).ready(function () {
            $('#table2excel2').DataTable();
        });
        $(document).ready(function () {
            $('#table2excel3').DataTable();
        });
        $(document).ready(function () {
            $('#table2excel4').DataTable();
        });
        $(document).ready(function () {
            $('#table2excel5').DataTable();
        });
        $(document).ready(function () {
            $('#table2excel8').DataTable();
        });
    </script>