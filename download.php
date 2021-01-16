<?php 
$page_title = "Download";
$page_key = "Santosh Kendre Nanded ";
$page_desc = "Santosh Kendre Nanded";
$message = "Santosh Kendre Nanded ";
require_once('inc/db.php');
include('inc/top.php');

function load_country()
{
    global $con;
    $output = '';
    $sql = "SELECT * FROM class ORDER BY id ASC";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $className = $row['className'];
         $output .="<option value='$id'>$className</option>";
    }
    return $output;
    
}

?>
    <!-- Start from here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-8 text-justify">
                <h2 class="text-center bg-primarys text-white" style="background: linear-gradient(to right, rgba(255,93,177,1) 0%, rgba(239,1,124,1) 100%);">इयत्ता नुसार  डाउनलोड करा  </h2>
                <hr>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div>
                    <form method="post">
                        <div class="form-row align-items-center">
                            <div class="col-sm-4 my-1">
                                <label class="text-danger">वर्ग निवडा </label>
                                <select name="cl" id="cl" class="custom-select">
                                    <option value="">खालील पैकी एक </option>
                                    <?php echo load_country(); ?>
                                </select>
                            </div>
                            <div class="col-sm-4 my-1">
                                <label class="text-danger">विषय निवडा </label>
                                <select name="sub" id="state" class="custom-select">
                                    <option value="">खालील पैकी एक</option>
                                </select>
                            </div>
                            <div class="col-md-2"> <a class="btn btn-primary btn-block" href="download.php" style="margin-top:20px;">ALl Class</a> </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive" id="tbl">
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ क्र</th>
                                <th scope="col"> घटक </th>
                                <th scope="col"> वर्ग </th>
                                <th scope="col"> विषय </th>
                                <th scope="col">नाव </th>
                                <th scope="col">फोटो </th>
                                <th scope="col"> फाईल चा प्रकार </th>
                                <th scope="col">डाउनलोड </th>
                            </tr>
                        </thead>
                        <tbody id="">
                            <?php
                           $download = "SELECT * FROM download ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $subcode = $row_download['subcode'];
                                $type = $row_download['type'];
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
                                
                                
                                
                            $subCodeName = "SELECT * FROM subject WHERE id = '$subcode' ";
                            $run_subCodeName = mysqli_query($con, $subCodeName);
                            $row_subCodeName = mysqli_fetch_array($run_subCodeName);
                            $subCodeName_id = $row_subCodeName['id'];
                            $subCodeName_className = $row_subCodeName['className'];
                            $subCodeName_subjectName = $row_subCodeName['subjectName'];
                                
                                
                            $subClassName = "SELECT * FROM class WHERE id = '$subCodeName_className' ";
                            $run_subClassName = mysqli_query($con, $subClassName);
                            $row_subClassName = mysqli_fetch_array($run_subClassName);
                            $subClassName_id = $row_subClassName['id'];
                            $subClassName_className = $row_subClassName['className'];
                                
                                $ia=$ia+1;
                                ?>
                                <tr class="">
                                    <td>
                                        <?php echo $ia;?>
                                    </td>
                                    <td>
                                        <?php echo $download_subject;?>
                                    </td>
                                    <td>
                                        <?php echo $subClassName_className;?>
                                    </td>
                                    <td>
                                        <?php echo $subCodeName_subjectName;?>
                                    </td>
                                    <td>
                                        <?php echo $uploader_namea;?>
                                    </td>
                                    <td> <img src="images/<?php echo $imagea;?>" class="img-fulid" width="50" /> </td>
                                    <td>
                                        <?php echo $type;?>
                                    </td>
                                    <td><a href="wazirx.php?id=<?php echo $download_id;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                    <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                </div>
                <br>
                <br> </div>
            <div class="col-md-4"> </div>
        </div>
        <!--------------------Footer---------------------------------->
        <div class="container-fluid">
            <div class="row bg-dark" style="padding-top:20px; ">
                <?php include('inc/footer.php');?>
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
        $(document).ready(function () {
            $('#cl').change(function () {
                var class_id = $(this).val();
                //console.log(class_id);
                $.ajax({
                    url: "api.php"
                    , method: "POST"
                    , data: {
                        class_id: class_id
                    }
                    , dataType: "text"
                    , success: function (data) {
                        $('#state').html(data);
                    }
                });
                $('#state').change(function () {
                    var sub_id = $(this).val();
                    console.log(sub_id);
                    $.ajax({
                        url: "dl.php"
                        , method: "POST"
                        , data: {
                            sub_id: sub_id
                        }
                        , dataType: "html"
                        , success: function (data) {
                            $('#tbl').html(data);
                        }
                    });
                });
            });
        });
    </script>