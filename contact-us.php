<?php 
$page_title = "Contact Us";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke ";
$page_desc = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
include('inc/db.php');
include('inc/top.php');

?>
    <!-- Start from here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-4">
                <h2 class="text-secondary">संपर्क  करा </h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark"> नाव </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="आपले संपूर्ण नाव " name="name" style="border: 1px solid black; padding-left:10px;"> </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">ई-मेल </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="आपला  ई-मेल लिहा " name="email" style="border: 1px solid black; padding-left:10px;"> </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">मोबाइल क्र </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="आपला  मोबाइल क् लिहा" name="mobile" style="border: 1px solid black; padding-left:10px;"> </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">पत्ता</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="पत्ता लिहा " name="address" style="border: 1px solid black; padding-left:10px;"> </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Messages</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="textarea2" data-status-message="#counter2" rows="5" cols="100" name="message" style="border: 1px solid black; padding-left:10px;"></textarea>
                            <div id="counter2" class="text-left text-secondary"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            <div align="center"> </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5"> </div>
            <div class="col-md-3"> </div>
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