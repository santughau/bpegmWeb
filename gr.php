<?php 
$page_title = "Download Pages ";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
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
            <div class="col-md-8">
                <h2 class="text-center bg-primary text-white">वेगवेगळ्या  शासकीय  निर्णय   </h2>
                <hr>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div align="center"> </div>
                <div class="table-responsive">
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ क्र</th>
                                <th scope="col">दिनांक</th>
                                <th scope="col"> शासकीय निर्णय </th>
                                <th scope="col">लिंक पहा </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM gr ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $uploaderId = $row_download['uploaderId'];                                 
                                $views = $row_download['views'];                                          
                                 $year = $row_download['year'];
                                if($uploaderId == 0){
                                     $uploaderId = 1;
                                }                                
                                $uploadera = "SELECT * FROM uploaderby WHERE id = $uploaderId"; 
                                $run_downloada = mysqli_query($con, $uploadera); 
                                $row_uploadera = mysqli_fetch_array($run_downloada); 
                                $uploader_id = $row_uploadera['id'];
                                $uploader_name = $row_uploadera['name']; 
                                $schoolName = $row_uploadera['schoolName'];
                                $mobile = $row_uploadera['mobile'];
                                $info = $row_uploadera['info']; 
                                $image = $row_uploadera['image'];
                                $ia=$ia+1;
                                ?>
                                <tr class="">
                                    <td>
                                        <?php echo $ia;?>
                                    </td>
                                    <td>
                                        <?php echo $year;?>
                                    </td>
                                    <td>
                                        <?php echo $download_subject;?>
                                    </td>
                                    
                                    <td><a href="godaddy-renewal-code.php?id=<?php echo $download_id;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <hr> </div>
            <div class="col-md-4"> </div>
        </div>
        <hr>
        <!--------------------Footer---------------------------------->
        <div class="container-fluid">
            <div class="row bg-dark" style="padding-top:20px;">
                <?php include('inc/footer.php') ?>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
    </div>
    </body>

    </html>
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
                , filename: "download_list.xls" //do not include extension
            });
        });
    </script>