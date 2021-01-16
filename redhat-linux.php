<?php 
$page_title = "Devexpresss Angular";
$page_key = "Devexpresss Angular";
$page_desc = "Devexpresss Angular";
require_once('inc/db.php');
include('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM jaipal WHERE id = '$id' ";
        $run_download = mysqli_query($con, $download);
        $row_download = mysqli_fetch_array($run_download);
        $download_id = $row_download['id'];
        $download_date = $row_download['date'];
        $name = $row_download['name'];
        $que = $row_download['que'];
        $uploaderId = $row_download['uploaderId'];         
        $views = $row_download['views'];           
    
                                      
       
}
?>
    <!-- Start from here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3 text-justify">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center"><b> <?php echo $name; ?>  </b> <small class="pull-right">दिनांक : <?php echo $download_date;?> </small></div>
                    <div class="card-body">
                        <?php echo $que; ?>
                    </div>
                </div>
               
                <h2 class="text-center bg-success text-white"> Go To Home </h2>
                
                <div align="center"> <a class="btn btn-danger" href="index.php" target="_blank">येथे क्लिक करा </a>
                    <div style="margin-top:-5px">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <hr>
                         <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h1 class=" text-primary text-center">Devexpress angular A Feature-Complete Angular Component Suite For You</h1>
                <hr>
                <div><small class="pull-left">Author : Santosh Kendre</small> <small class="pull-right">Date : 23/08/2019</small>
                    <br>
                    <hr> </div>
                <p class="text-justify" style="text-indent: 50px;">The <b>devexpress Angular</b> Component Suite is a feature-complete set of 65+ responsive and touch-enabled UI components for Angular applications. The suite includes a data grid, interactive charts, data editors, navigation and multi-purpose widgets. <b>Devexpress Angular</b> UI Components are distributed via npm and integrated with Angular CLI, Webpack, SystemJS and other modern toolsets. With dozens of examples and a support team ready to help you at every turn, we’ve made it easy to incorporate our products in your next great web app.    Every <b>Devexpress Angular</b> UI Component is built from nested components that you configure directly in the HTML template. This gives you all the power inherent in Angular bindings and its change detection mechanism, while your markup maintains consistency and readability.</p> <img src="images/Devexpresss-Angular.jpg" alt="Devexpresss-Angular" class="img-fluid" width="100%" />
                <p class="text-justify" style="text-indent: 50px;">The appearance and UI behavior of Google’s Material Design perfectly complements the power of <b>devexpress Angular</b> Components. Our Material Theme follows Google’s guidelines and allows our components to easily integrate into any application based on Material Design application layout templates. DevExtreme editors, navigation and data components can be rendered on the server without any extraneous configuration. DevExtreme offers full support for Angular AOT compilation. All the benefits of Angular Ahead-of-Time compilation (early error detection, faster app loading, better security) are available to you out-of-the-box. Compiled from TypeScript, DevExtreme Angular Components deliver all the advantages of TypeScript, including Intellisence and compile-time type checking support. TypeScript support makes our Angular UI Library a perfect choice for large scale projects and enterprise-wide apps.</p>
                <p class="text-justify" style="text-indent: 50px;">Angular one of the most popular software development instruments and it is a part of the JavaScript ecosystem. It was introduced by Google in the year 2009. According to a survey by StackOverflow this year, 30.7 percent of software engineers apply AngularJS and the new version Angular 2+ to create user interfaces. In this blog on “Advantages and Disadvantages of Angular”, we will walk you through the main features, pros and cons of angular in terms of front-end engineering.</p>
                <h2>What is Angular?</h2>
                <div align="center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Resp --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="1545253489" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <p class="text-justify" style="text-indent: 50px;">An Angular framework makes it easy to develop web applications. Combining dependency injection, declarative templates, end-to-end tooling, and integrated best practices, it solves almost all the challenges when creating a web app.</p>
                <p class="text-justify" style="text-indent: 50px;">In Angular 8, two elements were introduced Ivy renderer, Bazel (build interface). Another major improvement is differential loading that is used to upload browser-specific bundles in order to support legacy browsers and upload content faster.</p>
                <p class="text-justify" style="text-indent: 50px;">One of the biggest advantage of Angular is that it is supported by Google. The best part about it is Google’s Long-Term Support (LTS). This sheds light on Google’s plan to stick with it and further scale up the Angular ecosystem.</p>
                <p class="text-justify" style="text-indent: 50px;">Google apps also use this framework and their team is very optimistic about Angular’s stability. Other Angular developers also get a golden opportunity to learn from certified professionals.</p>
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