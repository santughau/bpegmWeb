<?php 
$page_title = "Adobe photoshop 2019 download for windows 10";
$page_key = "Adobe photoshop 2019 download for windows 10";
$page_desc = "Adobe photoshop 2019 download for windows 10";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM video WHERE id = '$id' ";
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
        $updateViews = "update video set 
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
                        <h2 class=" text-white text-center" style="background-color: #f40fd5">या  व्हिडीओ  चे    निर्माते </h2> <img class="img-fluid" src="images/<?php echo $image;?>" width="150" align="left" vspace="5" hspace="5" />
                        <h4 class="text-center text-danger"><?php echo $uploader_name;?></h4>
                        <h6 class="text-center"> ( <?php echo $schoolName;?> )</h6> </div>
                </div>
                <hr>
                <h2 class="text-center bg-primary text-white"> <?php echo $download_subject;?> </h2>
                <hr>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $download_link;?>?rel=0" allowfullscreen></iframe>
                </div>
                <br>
                <div align="center">
                    <a class="btn btn-danger" href="index.php" target="_blank">मुख्य पानावर जा !</a> 
                    <div style="margin-top:-5px">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                </div>
            </div>
            <div class="col-md-9">
                <h1 class=" text-primary text-center">Adobe Photoshop 2019 Download For Windows 10 ! Try it</h1>
                <hr>
                <div><small class="pull-left">Author : Santosh Kendre</small> <small class="pull-right">Date : 23/08/2019</small>
                    <br>
                    <hr> </div>
                <p class="text-justify" style="text-indent: 50px;"><b>Adobe Photoshop 2019 Download For Windows 10</b> is a raster graphics editor tool, developed by Adobe Systems. It facilitates you to create high-quality graphical content and manipulate images through a wide range of options. It can also work with complex 3D designs. It’s a licensed tool, but you can download and use its free trial for 30 days with the help of Adobe Creative Cloud. However, it’s a heavy application, which is why the downloading and installing process may take some time. This software is suitable for beginners as well as pro users due to its intuitive user interface.</p> <img src="images/Adobe-photoshop-2019-download-for-windows-10.jpg" alt="Adobe-photoshop-2019-download-for-windows-10" class="img-fluid" width="100%" />
                <p class="text-justify" style="text-indent: 50px;">Unlike many other graphics editors, Adobe Photoshop facilitates you to work in layers. You can create separate layers and overlay them on top of images or other layers. This way, you can enhance the quality of videos or images without tampering with the existing content.</p>
                <p class="text-justify" style="text-indent: 50px;"><b>Adobe Photoshop 2019 Download For Windows 10</b>, computer application software used to edit and manipulate digital images. Photoshop was developed in 1987 by the American brothers Thomas and John Knoll, who sold the distribution license to Adobe Systems Incorporated in 1988.</p>
               <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <p class="text-justify" style="text-indent: 50px;"><b>Adobe Photoshop 2019 Download For Windows 10</b> is software that is extensively used for raster image editing, graphic design and digital art. It makes use of layering to allow for depth and flexibility in the design and editing process, as well as provide powerful editing tools, that when combined, are capable of just about anything.</p>
                <p class="text-justify" style="text-indent: 50px;">It was created by brothers Thomas and John Knoll in 1988. In 1989, John sold the program to Adobe Systems, which marketed it as “Photoshop.” Since then, the program has become the de facto industry standard for raster graphics editing. It is published for both macOS and Windows, but not Linux.</p>
                <p class="text-justify" style="text-indent: 50px;"><b>Adobe Photoshop 2019 Download For Windows 10</b> is specifically designed to allow users to create and edit raster images in multiple layers. These overlays or layers can support transparency and can also act as masks or filters that can alter underlying images in the layers below them. Shadows and other effects such as alpha compositing can be applied. It is also possible of apply several color models to these layers – CMYK, RGB, Spot Color, and Duotone and Lap color space.</p>
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