<?php 
$page_title = "Home Pages";
$page_key = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
$page_desc = "Santosh Kendre Nanded, bpegm, nanded, zp teacher, zp school, santosh Sontakke";
require_once('inc/db.php');
include('inc/top.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-12 table-responsive">
                <h2 class="text-center bg-info text-white">वेगवेगळ्या शाळेतील शालेय उपक्रमाची छायाचित्रे </h2>
                <hr>
                <table class="table table-bordered " id="table2excel">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">अ क्र</th>
                            <th scope="col">दिनांक</th>
                            <th scope="col"> विषय </th>
                            <th scope="col">नाव </th>
                            <th scope="col">फोटो </th>
                            <th scope="col">फोटो </th>
                            <th scope="col">Views</th>
                            <th scope="col">डाउनलोड </th>
                        </tr>
                    </thead>
                    <tbody id="">
                        <?php
                           $download = "SELECT * FROM video ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $uploaderId = $row_download['uploaderId'];                                 
                                $views = $row_download['views'];             
                                if($uploaderId == 0){ $uploaderId = 1; }
                            
                                $uploadera = "SELECT * FROM uploaderby WHERE id = $uploaderId";
                                $run_downloada = mysqli_query($con, $uploadera);
                                $row_uploadera = mysqli_fetch_array($run_downloada); 
                                $uploader_ida = $row_uploadera['id']; 
                                $uploader_namea = $row_uploadera['name'];
                                $schoolNamea = $row_uploadera['schoolName']; 
                                $mobilea = $row_uploadera['mobile']; 
                                $infoa = $row_uploadera['info'];
                                $imagea = $row_uploadera['image'];
                                
                                $ia=$ia+1;
                                ?>
                            <tr class="text-center align-text-top">
                                <td class="align-middle">
                                    <?php echo $ia;?>
                                </td>
                                <td class="align-middle">
                                    <?php echo $download_date;?>
                                </td>
                                <td class="align-middle">
                                    <?php echo $download_subject;?>
                                </td>
                                <td class="align-middle">
                                    <?php echo $uploader_namea;?>
                                </td>
                                <td class="align-middle"> <img src="images/<?php echo $imagea;?>" class="img-fulid" width="50" /> </td>
                                <td class="align-middle" width="250px">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $download_link;?>?rel=0" allowfullscreen></iframe>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <?php echo $views;?>
                                </td>
                                <td class="align-middle"><a href="adobe-photoshop-2019-download-for-windows-10.php?id=<?php echo $download_id;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
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
    </script>