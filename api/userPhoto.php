<h2 class="text-center bg-danger text-white">मी  अपलोड  केलेली   छायाचित्रे   </h2>
<hr>
<table class="table table-bordered " id="table2excel5">
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
                           $download = "SELECT * FROM photo WHERE uploaderId = '$id' ORDER BY id DESC ";
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
                <td class="align-middle"> <img src="<?php echo $download_link;?>" class="img-fulid" width="150" height="100" /> </td>
                <td class="align-middle">
                    <?php echo $views;?>
                </td>
                <td class="align-middle"><a href="google-firebase-storage.php?id=<?php echo $download_id;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
            <?php } ?>
    </tbody>
</table>