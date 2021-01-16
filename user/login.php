<?php 
ob_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>USER Login</title>
        <!-- meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="" />
        <!-- /meta tags -->
        <!-- custom style sheet -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!-- /custom style sheet -->
        <!-- fontawesome css -->
        <link href="css/fontawesome-all.css" rel="stylesheet" />
        <!-- /fontawesome css -->
        <!-- google fonts-->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- /google fonts-->
    </head>

    <body>
        <h1>BPEGM USER LOGIN</h1>
        <div class=" w3l-login-form">
            <h2>लॉगिन  करा </h2>
            <form method="POST">
                <div class=" w3l-form-group">
                    <label>मोबाईल नंबर </label>
                    <div class="group"> <i class="fas fa-mobile"></i>
                        <input type="text" class="form-control" name="mobile" placeholder="मोबाईल नंबर " required="required" /> </div>
                </div>
                <div class=" w3l-form-group">
                    <label>पासवर्ड </label>
                    <div class="group"> <i class="fas fa-unlock"></i>
                        <input type="password" class="form-control" name="password" placeholder="पासवर्ड " required="required" /> </div>
                </div>
                <div align="center" style="color:white;">
                    <p>Santosh Kendre : 8446085083</p>
                </div>
                <button type="submit" name="login">लॉगिन करा </button>
            </form>
            <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
        </div>
        <footer>
            <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </footer>
    </body>

    </html>
    <?php 
session_start();
        require_once('../inc/db.php');
       if (isset($_POST['login'])){        
         $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        $get_user = "SELECT * FROM uploaderby where mobile = '$mobile' AND password = '$password'";
        $run_user = mysqli_query($con,$get_user);
        $check = mysqli_num_rows($run_user);
        
        if($check == 1){
            $row_user = mysqli_fetch_array($run_user);
            $id = $row_user['id'];
            $_SESSION['id'] = $id;
            echo "<script>window.open('index.php','_self')</script>";            
        }               
        else {            
            echo "<script>alert('Email Or Password is not correct !')</script>";            
        }       
        }   
?>