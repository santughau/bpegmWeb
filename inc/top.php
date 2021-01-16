<?php
$ogImage = 'bpegm.jpg';
$title = 'Blog For Primary Educational Group Of Maharashtra';
$desc = 'Blog For Primary Educational Group Of Maharashtra';
$whatsappSql = "SELECT * FROM whatsappgr WHERE id = 1 ";
$run_whatsapp = mysqli_query($con, $whatsappSql);
$row_whatsapp = mysqli_fetch_array($run_whatsapp);
$whatsappLink = $row_whatsapp['link'];
if(isset($_GET['user'])){
    $user = $_GET['user'];
    $userSql = "SELECT * FROM uploaderby WHERE id = '$user' ";
    $run_userSql = mysqli_query($con, $userSql);
    $row_userSql = mysqli_fetch_array($run_userSql);
    $title = $row_userSql['name'];
    $desc = $row_userSql['schoolName'];
    $ogImage = $row_userSql['image'];
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            var OneSignal = window.OneSignal || [];
            OneSignal.push(function () {
                OneSignal.init({
                    appId: "c7882752-50eb-4baf-b98c-1e2a5eb9529e"
                , });
            });
        </script>
        <script data-ad-client="ca-pub-4151366218309776" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98126235-18"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-98126235-18');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="images/mylogo.png" rel="icon" type="image/png" />
        <title>
            <?php echo $page_title; ?>
        </title>
        <meta name="keywords" content="<?php echo $title; ?>" />
        <meta name="description" content="<?php echo $desc; ?> " />
        <!----------------------css----------------------->
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="<?php echo $title; ?>">
        <meta itemprop="description" content="<?php echo $desc ;?>">
        <meta itemprop="image" content="https://bpegm.in/images/<?php echo $ogImage ;?>">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="<?php echo $title ;?>">
        <meta name="twitter:description" content="<?php echo $desc ;?>">
        <meta name="twitter:creator" content="@author_handle">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="https://bpegm.in/images/<?php echo $ogImage ;?>">
        <!-- Open Graph data -->
        <meta property="og:title" content="<?php echo $title ;?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://bpegm.in/" />
        <meta property="og:image" itemprop="image" content="https://bpegm.in/images/<?php echo $ogImage ;?>" />
        <meta property="og:image:secure_url" content="https://bpegm.in/images/<?php echo $ogImage ;?>" />
        <meta property="og:image:width" content="452" />
        <meta property="og:image:height" content="274" />
        <meta property="og:description" content="<?php echo $desc ;?>" />
        <meta property="og:site_name" content="Blog For Primary Educational Group Of Maharashtra" />
        <meta property="article:published_time" content="2020-04-05T05:59:00+01:00" />
        <meta property="article:modified_time" content="2020-04-05T05:59:00+01:00" />
        <meta property="article:section" content="Article Section" />
        <meta property="article:tag" content="Article Tag" />
        <meta property="fb:admins" content="Facebook numberic ID" />
        <!----------------------css----------------------->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- Bootstrap++ -->
        <!--------------Fontawaysome---------->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!----------------------css----------------------->
        <!-- Railway fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
        <style>
            body {
                font-family: 'Raleway';
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <!----------------------JS----------------------->
    </head>

    <body>