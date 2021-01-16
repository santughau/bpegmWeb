<?php 
$page_title = "Google DNS Tools";
$page_key = "Google DNS Tools";
$page_desc = "Google DNS Tools";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM profarma WHERE id = '$id' ";
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
    
        $updatedViews = $views +1; $updateViews = "update profarma set views = '$updatedViews' where id = '$id'"; $updateQuery = mysqli_query($con, $updateViews);
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
                    <div class="card-header bg-primary text-white text-center"><b>BPEGM's Whatsapp Group </b></div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>नवनवीन शैक्षणिक माहिती मिळवण्याकरिता आमच्या व्हाट्सअँप ग्रुप ला आजच जॉईन व्हा आणि नवनवीन शैक्षणिक माहिती रोज मिळवा . </p>
                            <div align="center"> <a href="<?php echo $whatsappLink;?>" class="btn btn-success" target="_blank"><i class="fa fa-whatsapp fa-4x"></i></a></div>
                        </blockquote>
                    </div>
                    <hr>
                    <div class=" col-md-12" style="background-color: #f9f0f7">
                        <h2 class=" text-white text-center" style="background-color: #f40fd5">या  माहितीचे   निर्माते </h2> <img class="img-fluid" src="images/<?php echo $image;?>" width="150" align="left" vspace="5" hspace="5" />
                        <h4 class="text-center text-danger"><?php echo $uploader_name;?></h4>
                        <h6 class="text-center"> ( <?php echo $schoolName;?> )</h6> </div>
                </div>
                <hr>
                <h2 class="text-center bg-primary text-white"><?php echo $download_subject;?></h2>
                <hr>
                <div align="center"> <a class="btn btn-danger" href="<?php echo $download_link;?>" target="_blank">येथे क्लिक करा </a>
                    <div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h1 class=" text-primary text-center">What Is  Google  DNS tools Server?</h1>
                <hr>
                <div><small class="pull-left">Author : Santosh Kendre</small> <small class="pull-right">Date : 23/08/2019</small>
                    <br>
                    <hr> </div>
                <p class="text-justify" style="text-indent: 50px;">A Google DNS tools server is any computer that is registered to join the DNS. It has an index of domain names and IP addresses, and when requested, it can tell you the current IP address associated with a domain name. If it doesn't know, then it will try to find out from other  DNS servers.</p>
                <p class="text-justify" style="text-indent: 50px;">The Domain Name System (DNS) is the phonebook of the Internet. When users type domain names such as ‘google.com’ or ‘nytimes.com’ into web browsers, DNS is responsible for finding the correct IP address for those sites. Browsers then use those addresses to communicate with origin servers or CDN edge servers to access website information. This all happens thanks to DNS servers: machines dedicated to answering DNS queries.</p>
                <p class="text-justify" style="text-indent: 50px;">The Internet maintains two principal namespaces, the domain name hierarchy[1] and the Internet Protocol (IP) address spaces.[2] The Domain Name System maintains the domain name hierarchy and provides translation services between it and the address spaces. Internet name servers and a communication protocol implement the Domain Name System.[3] A DNS name server is a server that stores the DNS records for a domain; a DNS name server responds with answers to queries against its database.</p>
                <h2>Primary and Secondary DNS Servers</h2>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <p class="text-justify" style="text-indent: 50px;">In most cases, a primary and a secondary DNS server are configured on your router or computer when you connect to your internet service provider. There are two DNS servers in case one of them happens to fail, in which case the second is used to resolve hostnames you enter.</p>
                <h2>DNS server unavailable? Here’s what to do</h2>
                <p class="text-justify" style="text-indent: 50px;">When your browser isn’t able to establish a connection to the internet, the Windows Troubleshooting function will occasionally respond with the message: ‘DNS server not responding’ or 'Your computer appears to be correctly configured, but the device or resource (DNS server) is not responding'. There are many factors that can cause this notification to appear. Fortunately, this problem can generally be corrected in just a few simple steps. Find out here about some of the most common causes of problems and their solutions.</p>
                <h2>Why does DNS matter?</h2>
                <p class="text-justify" style="text-indent: 50px;">The Domain Name System (DNS) protocol is an important part of the web's infrastructure, serving as the Internet's phone book: every time you visit a website, your computer performs a DNS lookup. Complex pages often require multiple DNS lookups before they start loading, so your computer may be performing hundreds of lookups a day.</p>
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
    <?php
if(isset($_POST['submit'])){
       
        
    
      $insert_news = "update uploaderby set 
      name = '$username', 
      schoolName = '$schoolName', 
      mobile = '$mobile', 
      info = '$info', 
      image = '$u_image' 
      where id = '$ida'";
      $insert_pro = mysqli_query($con, $insert_news);
      if($insert_pro){
	   echo"<script>alert('Welcome, You have Updated Succcessfully !')</script>";
	   echo"<script>window.open('adduploader.php','_self')</script>";
       }
    else{
        echo"Not";
    }
    }

?>