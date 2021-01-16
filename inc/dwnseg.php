<div class="list-group">
    <a href="index.php" class="list-group-item list-group-item-action active titlefont"> <i class="fa fa-tachometer" aria-hidden="true"></i>नवीन सूचना </a>
<?php
                           $download = "SELECT * FROM generaldownload ORDER BY id DESC LIMIT 25 ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_date = $row_download['date'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $ia=$ia+1;
                                ?>
<a href="linkGeneral.php?id=<?php echo $download_id;?>" class="list-group-item list-group-item-action"> <i class="fa fa-circle text-danger" aria-hidden="true"></i> <?php echo $download_subject;?> </a>
<?php } ?>
</div><br>
<a href="generaldown.php" class="btn btn-primary btn-sm pull-right">View More </a><br>