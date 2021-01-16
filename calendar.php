<?php 
$page_title = "Calender";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke ";
$page_desc = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
//include('inc/db.php');
include('inc/top.php');

?>
    <?php include_once('functions.php'); ?>
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- Start from here-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php include('inc/navbar.php');?>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-md-8 ">
                    <div class="w3-light-grey">
                        <div class="w3-content" style="max-width:1600px">
                            <!-- Grid -->
                            <div class="w3-row w3-padding w3-border">
                                <!-- Blog entries -->
                                <div class="w3-col l12 s12">
                                    <!-- Blog entry -->
                                    <div class="w3-container w3-white w3-margin w3-padding-large">
                                        <h2 class="text-white bg-primary" style="text-align: center" ;>शाळेतील  शैक्षणिक  कार्यक्रम </h2>
                                        <br>
                                        <div id="calendar_div">
                                            <?php echo getCalender(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------Footer---------------------------------->
            <div class="container-fluid">
                <div class="row bg-dark" style="padding-top:20px;">
                    <?php include('inc/footer.php');?>
                </div>
            </div>
            <!--------------------Footer---------------------------------->
        </div>
        </body>

        </html>