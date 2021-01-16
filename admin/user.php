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
    $del_query = "DELETE  FROM uploaderby WHERE id = '$del_id'  ";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
       echo "<script>window.open('user.php','_self')</script>";  
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
                <h2 class="text-center bg-primary text-white">User ऍड करा  </h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>नाव </label>
                        <input type="text" class="form-control textbox" placeholder="नाव   " name="name" required> </div>
                    <div class="form-group ">
                        <label>शाळेचे नाव </label>
                        <input type="text" class="form-control textbox" placeholder="शाळेचे नाव  " name="school" required> </div>
                    <div class="form-group ">
                        <label>मोबाइल </label>
                        <input type="text" class="form-control textbox" placeholder="मोबाइल  " name="mobile" required> </div>
                    <div class="form-group ">
                        <label>माहिती </label>
                        <input type="text" class="form-control textbox" placeholder="माहिती   " name="info" required> </div>
                    <div class="form-group ">
                        <label>पासवर्ड </label>
                        <input type="text" class="form-control textbox" placeholder="पासवर्ड   " name="password" required> </div>
                    <div class="form-group ">
                        <input type="file" class="btn btn-danger" name="u_image" required="required"> </div>
                    <div class="form-group " align="center">
                        <button type="submit" class="btn btn-success" name="submit">अपलोड करा </button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i>User ऍड करा   </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ क्र</th>
                                <th scope="col">नाव</th>
                                <th scope="col"> शाळेचे नाव </th>
                                <th scope="col">मोबाइल </th>
                                <th scope="col"> माहिती </th>
                                <th scope="col">फोटो </th>
                                <th scope="col"> पासवर्ड </th>
                                <th scope="col">ID </th>
                                <th scope="col">Edit </th>
                                <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $download = "SELECT * FROM uploaderby ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $name = $row_download['name'];
                                $schoolName = $row_download['schoolName'];
                                $mobile = $row_download['mobile'];
                                $info = $row_download['info'];
                                $image = $row_download['image'];
                                $password = $row_download['password']; 
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
                                        <?php echo $schoolName;?>
                                    </td>
                                    <td>
                                        <?php echo $mobile;?>
                                    </td>
                                    <td>
                                        <?php echo $info;?>
                                    </td>
                                    <td> <img src="../images/<?php echo $image;?>" class="img-fulid" width="50" /> </td>
                                    <td>
                                        <?php echo $password;?>
                                    </td>
                                    <td>
                                        <?php echo $download_id;?>
                                    </td>
                                    <td><a href="editUser.php?id=<?php echo $download_id;?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="user.php?id=<?php echo $download_id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
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
    $username = $_POST['name'];
    $schoolName = $_POST['school'];
    $info = $_POST['info'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $u_image = $_FILES['u_image']['name'];
    $image_tmp = $_FILES['u_image']['tmp_name'];
    move_uploaded_file($image_tmp,"../images/$u_image");
                                    
                                    
 echo $insert_news = "INSERT INTO uploaderby (name,schoolName,mobile,info,image,password) VALUES ('$username','$schoolName','$mobile','$info','$u_image','$password')";
 $run = mysqli_query($con,$insert_news);
if($run){
     $last_id = mysqli_insert_id($con);    
    if(file_exists("../images/$u_image")){
        if(rename("../images/$u_image","../images/$last_id.jpg")){
            $imagePhoto = $last_id.'.jpg';
            $updatePhoto = "update uploaderby set 
            image = '$imagePhoto'
            where id = '$last_id'";            
            $upate_pro = mysqli_query($con, $updatePhoto);
        }
        else{
            echo "<script>alert('Error in Rename !')</script>";
        }
    }
else{
         echo "<script>alert('File does not exit')</script>";
    }   
      
    if($upate_pro){
        echo"<script>alert('तुम्ही डाउनलोड ची लिंक यशस्वी रित्या  बदल केलेली  आहे  धंन्यवाद !')</script>";
        echo"<script>window.open('user.php','_self')</script>";
     
    }
}
else{
    echo "<script>alert('User has not been added!')</script>";  
    }
}
?>