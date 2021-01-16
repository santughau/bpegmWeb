<h2 class="text-center bg-warning text-white">मी  अपलोड  केलेली  शालेय  प्रपत्रे  डाउनलोड करा  </h2>
<hr>
<table class="table table-bordered " id="table2excel2">
    <thead class="table-dark">
        <tr>
            <th scope="col">अ क्र</th>
            <th scope="col">दिनांक</th>
            <th scope="col"> विषय </th>
            <th scope="col">नाव </th>
            <th scope="col">फोटो </th>
            <th scope="col">Views</th>
            <th scope="col">डाउनलोड </th>
        </tr>
    </thead>
    <tbody>
        <?php
                           $download = "SELECT * FROM profarma WHERE uploaderId = '$id' ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $uploaderId = $row_download['uploaderId'];                                
                                $views = $row_download['views'];                                          
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
                    <?php echo $download_date;?>
                </td>
                <td>
                    <?php echo $download_subject;?>
                </td>
                <td>
                    <?php echo $uploader_name;?>
                </td>
                <td> <img src="images/<?php echo $image;?>" class="img-fulid" width="50" /> </td>
                <td>
                    <?php echo $views;?>
                </td>
                <td><a href="google-dns-tools.php?id=<?php echo $download_id;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
            <?php } ?>
    </tbody>
</table>