<div class="list-group">
    <a href="index.php" class="list-group-item list-group-item-action active titlefont"> <i class="fa fa-tachometer" aria-hidden="true"></i>नवीन सूचना </a>
<?php
    $notice = "SELECT * FROM notice  ORDER BY id DESC LIMIT 25 ";
    $run_notice = mysqli_query($con, $notice);
    $ia=0;
    while($row_notice = mysqli_fetch_array($run_notice)){
    $notice_id = $row_notice['id'];
    $notice_title = $row_notice['title'];
    $notice_date = $row_notice['date'];
?>
<a href="viewnotice.php?id=<?php echo $notice_id;?>" class="list-group-item list-group-item-action"> <i class="fa fa-circle text-danger" aria-hidden="true"></i> <?php echo $notice_title;?> </a>
<?php } ?>
</div><br>
<a href="viewnotice.php" class="btn btn-primary btn-sm pull-right">View More </a><br>