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
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-3 mb-4">
                <div class="card  border-primary">
                    <div class="card-header text-white bg-primary">User ऍड करा </div>
                    <div class="card-body"> <a href="user.php" class="btn btn-primary pull-right">पहा </a> </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card  border-danger">
                    <div class="card-header text-white bg-danger">विषय ऍड करा </div>
                    <div class="card-body"> <a href="subject.php" class="btn btn-danger pull-right">Add Subject</a> </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card  border-success">
                    <div class="card-header text-white bg-success">Header</div>
                    <div class="card-body"> <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card  border-warning">
                    <div class="card-header text-white bg-warning">Header</div>
                    <div class="card-body"> <a href="#" class="btn btn-primary">Go somewhere</a> </div>
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