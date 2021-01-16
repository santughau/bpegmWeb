<?php 
$page_title = "Wazirx";
$page_key = "Wazirx";
$page_desc = "Wazirx";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM download WHERE id = '$id' ";
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
        $uploader = "SELECT * FROM uploaderby WHERE id = '$uploaderId'";
        $run_download = mysqli_query($con, $uploader);   
        $row_uploader = mysqli_fetch_array($run_download);
        $uploader_id = $row_uploader['id'];
        $uploader_name = $row_uploader['name'];
        $schoolName = $row_uploader['schoolName'];
        $mobile = $row_uploader['mobile'];
        $info = $row_uploader['info'];
        $image = $row_uploader['image']; 
    
        $updatedViews = $views +1;
        $updateViews = "update download set 
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
                <h2 class="text-center bg-primary text-white"><?php echo $download_subject;?></h2>
                <hr>
                <div align="center"> <a class="btn btn-danger" href="<?php echo $download_link;?>" target="_blank">येथे क्लिक करा </a>
                    <div style="margin-top:-5px;">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div><br>
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
                <h1 class=" text-primary text-center">Advantages and disadvantages of wazirx</h1>
                <hr>
                <div><small class="pull-left">Author : Santosh Kendre</small> <small class="pull-right">Date : 23/08/2019</small>
                    <br>
                    <hr> </div>
                <h2>What is wazirx</h2>
                <p class="text-justify" style="text-indent: 50px;"><b>WazirX</b> is an Indian crypto exchange, launched on 8 March 2018. It is run by Indians.On 21 November 2019, <b>WazirX</b> announced in an email to its users that it had been acquired by Binance. This made <b>WazirX</b> the first Indian crypto trading platform to ever be acquired by an international trading platform, further erasing national boundaries between players in the crypto world.There are a large number of crypto exchanges based in India. The only Indian crypto exchanges with more than a dozen different cryptocurrencies traded are <b>WazirX</b> and ZebPay..wazirx listing schedule on 5th February 2020 .<b>WazirX</b> Trading will begin from 7:30 AM IST, and you’ll be able to buy, sell WRX in our high liquidity markets at par with international market prices . In this post we will see advantages of wazirx and also disadvantages . You will know little bit about cryptocurrency that is virtual currency which is available in golbal market.</p> <img src="images/wazirx.jpg" alt="wazirx" class="img-fluid" width="100%" />
                <h2>What Is a Cryptocurrency and wazirx ? :</h2>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <p class="text-justify" style="text-indent: 50px;">According to Investopedia " A cryptocurrency is a digital or virtual currency that is secured by cryptography, which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger enforced by a disparate network of computers. A defining feature of cryptocurrencies is that they are generally not issued by any central authority, rendering them theoretically immune to government interference or manipulation."</p>
                <p class="text-justify" style="text-indent: 50px;">The word “cryptocurrency” is derived from the encryption techniques which are used to secure the network. Cryptocurrency is an internet-based medium of exchange which uses cryptographical functions to conduct financial transactions. Cryptocurrencies leverage blockchain technology to gain decentralization, transparency, and immutability.Cryptocurrency developers build these protocols on advanced mathematics and computer engineering principles that render them virtually impossible to break, and thus to duplicate or counterfeit the protected currencies. These protocols also mask the identities of cryptocurrency users, making transactions and fund flows difficult to attribute to specific individuals or groups.</p>
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