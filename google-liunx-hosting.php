<?php 
$page_title = "Google Linux Hosting";
$page_key = "Google Linux Hosting ";
$page_desc = "Google Linux Hosting";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM generaldownload WHERE id = '$id' ";
        $run_download = mysqli_query($con, $download);
        $row_download = mysqli_fetch_array($run_download);
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
    
        $updatedViews = $views +1;
        $updateViews = "update generaldownload set 
        views = '$updatedViews'
        where id = '$id'";      
        $updateQuery = mysqli_query($con, $updateViews);
}
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3 text-justify">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center"><b>या माहितीचे निर्माते </b></div>
                    
                    <div class=" col-md-12" style="background-color: #f9f0f7">
                        
                        <img class="img-fluid" src="images/<?php echo $image;?>" width="150" align="left" vspace="5" hspace="5" />
                        <h4 class="text-center text-danger" style="margin-top:10px;"><?php echo $uploader_name;?></h4>
                        <h6 class="text-center"> ( <?php echo $schoolName;?> )</h6> </div>
                </div>
                <hr>
                <h2 class="text-center bg-primary text-white"> <?php echo $download_subject;?> </h2>
                <hr>
                <div align="center">
                    <a class="btn btn-danger" href="<?php echo $download_link;?>" target="_blank">येथे क्लिक करा </a>
                    <div >
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div >
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                </div>
                
            </div>
            <div class="col-md-9">
                <h1 class=" text-primary text-center">Google Linux Hosting Service</h1>
                <hr>
                <div><small class="pull-left">Author : Santosh Kendre</small> <small class="pull-right">Date : 23/08/2019</small>
                    <br>
                    <hr> </div>
                <p class="text-justify" style="text-indent: 50px;"><b>Google Linux Hosting</b> is one of the best cloud service in IT .VPS, or Virtual Private Server. It  is one which is equipped for playing out all the elements of a real physical server. Since a Virtual Private Server has its own working framework. So  it is known as a "virtual" server. The VPS of Linux is a facilitating procedure, comprising of one physical server, through which various virtual servers run, while being totally free of each other. Being an open source working framework, Linux is allowed to utilize and convey. There is no compelling reason to pay any charges for the permit and it can likewise be introduced in any number of PCs according to the necessities.</p> <img src="images/Google-Linux-Hosting.jpg" alt="Google-Linux-Hosting" class="img-fluid" width="100%" />
                <h2>Benifits Of Google Linux Hosting Service :</h2>
                <p>In my opinion , Here are some of benifits of <b>google linux hosting</b> when we purchase from google.</p>
                <ul class="list-group">
                    <li class="list-group-item">It is very easily host a secure and relaible website on google cloud without any efforts.</li>
                    <li class="list-group-item">It protect your website and your valuable customers from malicious code.</li>
                    <li class="list-group-item">Do more for less with Google Cloud.</li>
                </ul>
                <br>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <p class="text-justify" style="text-indent: 50px;">You can relay on <a href="https://cloud.google.com/" target="_blank">googles cloud </a>service which is one of the best service in IT which improves innovative technology like global load balancing to protect against hackers and denial of service attacks. You can reach your customers with the lowest latency time periods . Its availability is more than 99.95% and downtime is very negligible.</p>
                <p class="text-justify" style="text-indent: 50px;">If you are using Wordpess website , then it is a popular web publishing platform used to easily set up blogs and websites. And if you are a PHP developer then you can manage LAMP that is Linux Apache, MySQL, and PHP very easily on  cloud platform.</p>
                <p class="text-justify" style="text-indent: 50px;">Google will bill you how you utilize your <b>google linux hosting </b>so it is better pricing other than competitors. When you use Wordpress Hosting it improves your website performance.</p>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
        <div class="container-fluid">
            <div class="row bg-dark" style="padding-top:20px;">
                <?php include('inc/footer.php');?>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
    </div>
    </body>

    </html>