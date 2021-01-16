<h2 class="text-center bg-danger text-white">मी  अपलोड  केलेली   इयत्ता नुसार डाउनलोड करा  </h2>
<hr>
<table class="table table-bordered " id="table2excel1">
    <thead class="table-dark">
        <tr>
            <th scope="col">अ क्र</th>
            <th scope="col">दिनांक</th>
            <th scope="col"> घटक </th>
            <th scope="col"> वर्ग </th>
            <th scope="col"> विषय </th>
            <th scope="col">नाव </th>
            <th scope="col">फोटो </th>
            <th scope="col"> फाईल चा प्रकार </th>
            <th scope="col">Views</th>
            <th scope="col">डाउनलोड </th>
        </tr>
    </thead>
    <tbody id="">
        <?php
                           $download = "SELECT * FROM download WHERE uploaderId = '$userId' ORDER BY id DESC ";
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
                    <?php echo $download_date;?>
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
                <td> <img src="../images/<?php echo $imagea;?>" class="img-fulid" width="50" /> </td>
                <td>
                    <?php echo $type;?>
                </td>
                <td>
                    <?php echo $views;?>
                </td>
                <td><a href="wazirx.php?id=<?php echo $download_id;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
            <?php } ?>
    </tbody>
</table>