<?php 
$page_title = "Google NTP Server";
$page_key = "Google NTP Server";
$page_desc = "Google NTP Server";
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
            <div class="col-md-4 table-responsive" id="tbl">
                <table class="table table-bordered " id="table2excel">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">अ क्र</th>
                            <th scope="col">नाव </th>
                            <th scope="col">फोटो </th>
                            <th scope="col">पहा </th>
                        </tr>
                    </thead>
                    <tbody id="">
                        <?php
                           $download = "SELECT * FROM uploaderby ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $name = $row_download['name'];
                                $image = $row_download['image'];
                                $ia=$ia+1;
                                ?>
                            <tr class="">
                                <td>
                                    <?php echo $ia;?>
                                </td>
                                <td>
                                    <?php echo $name;?>
                                </td>
                                <td> <img src="images/<?php echo $image;?>" class="img-fulid" width="50" /> </td>
                                <td><a href="userDetails.php?id=<?php echo $download_id;?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
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
    <script>
        $(document).ready(function () {
            $('#table2excel').DataTable();
        });
    </script>