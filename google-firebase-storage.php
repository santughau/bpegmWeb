<?php 
$page_title = "Google Firebase Storage";
$page_key = "Google Firebase Storage";
$page_desc = "Google Firebase Storage";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM photo WHERE id = '$id' ";
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
        $updateViews = "update photo set 
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
                <h2 class="text-center bg-primary text-white"> <?php echo $download_subject;?> </h2>
                <hr> <img class="img-fluid" src="https://drive.google.com/uc?export=view&id=<?php echo $download_link;?>" />
                <div align="center">
                     <a class="btn btn-danger" href="index.php?>" target="_blank">मुख्य पानावर जा !</a> 
                     <div style="margin-top:-5px;">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                </div>
            </div>
            <div class="col-md-9">
                <h1 class=" text-primary text-center">Advantage Of google firebase storage</h1>
                <hr>
                <div><small class="pull-left">Author : Santosh Kendre</small> <small class="pull-right">Date : 23/08/2019</small>
                    <br>
                    <hr> </div>
                <p class="text-justify" style="text-indent: 50px;"><b>Google firebase storage</b> was established by Andrew Lee and James Tamplin back in 2011 yet was launched formally in April 2012. Initially, the framework was expected to be a real-time database giving its APIs, enabling users to store and synchronize information across various customers. However, the plans changed a little bit when Firebase was taken over by Google two years after its release. Today, the service has various functions that a wise entrepreneur may find exceptionally valuable. Firebase has reached from 110,000 developers when it was initially obtained by Google in October of 2014 to a booming number of 450,000 plus developers at present.</p>
                <h2>Benefits of using Google  Firebase Sotrage :</h2>
                <p>In my opinion , Here are some of benifits of <b>Google  Firebase Sotrage</b> when we purchase from google.</p> <img src="images/Google-Firebase-Storage.jpg" alt="Google-Firebase-Storage" class="img-fluid" width="100%" />
                <ul class="list-group">
                    <li class="list-group-item">Real-time Database</li>
                    <li class="list-group-item">Hosting</li>
                    <li class="list-group-item">Authentication</li>
                    <li class="list-group-item">Storage</li>
                    <li class="list-group-item">Cloud Messaging</li>
                    <li class="list-group-item">Remote Config</li>
                    <li class="list-group-item">Test Lab</li>
                    <li class="list-group-item">Crash Reporting</li>
                    <li class="list-group-item">Notifications</li>
                </ul>
                <br><div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <p class="text-justify" style="text-indent: 50px;">The cloud-hosted NoSQL database is offered by Google firebase storage real-time database that helps you store and synchronize data between the clients. This indeed makes it easier for the developers to access the data using any of the devices and helps developing collaborative feature.</p>
                <p class="text-justify" style="text-indent: 50px;">Another advantage of a real-time database for the developers is that they do not need the support of backend to build apps as it comes with SDKs for various platforms, including Android, iOS and Web.</p>
                <p class="text-justify" style="text-indent: 50px;">Google firebase storage has real-time and cloud-based database where you can store data is JSON and synchronized continuously to all connected clients. If you want to create an Android, iOS, or Web app which provides real-time updates to users without creating Database or API then you should use firebase. It is capabilities to manage backend components of applications. The real-time database is the foremost advantage of the Firebase.</p>
                <p class="text-justify" style="text-indent: 50px;">Google firebase storage provides ample opportunities to create and develop high-quality applications. The internal features, operations, and functions make app development a unique affair. Here are some of the innovative features that make your job easier than ever! With these incredible benefits, Google’s Firebase emerges as the best option for business app development. You will surely want your business to grow, which is the prime reason for leveraging this innovative framework.</p>
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