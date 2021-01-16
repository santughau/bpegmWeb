<hr>
<div class="col-md-3 text-white">
    <h2 class="text-center">BPEGM  </h2>
    <hr>
    <p></p>
    <p class="text-center">© 2020 <a href="http://www.bpegm.in"> BPEGM </a>, All rights reserved</p>
</div>
<div class="col-md-3">
    <h4 class="text-white">Menu</h4>
    <ul class="text-white">
        <li><a href="generaldown.php"> डाउनलोड  </a></li>
        <li><a href="download.php">इयत्ता नुसार डाउनलोड</a></li>
        <li><a href="calendar.php"> शै. कालनिर्णया</a></li>
        <li><a href="profarma.php">शालेय  प्रपत्रे </a></li>
        <li><a href="result.php">परीक्षांचे  निकाल </a></li>
        <li><a href="gr.php"> शासकिय निर्णय </a></li>
    </ul>
</div>
<div class="col-md-3">
    <h4 class="text-white">Quick Links</h4>
    <ul class="text-white">
        <li><a href="../privacy-policy.php">Privacy Policy</a></li>
        <li><a href="../disclaimer.php">Disclamier</a></li>
        <li><a href="../termsandcondition.php">Terms & Condition</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../coppa.php">COPPA</a></li>
    </ul>
</div>
<div class="col-md-3 text-white">
    <h4 class="text-white">भेट  देण्यारांची  संख्या </h4>
    <!-- hitwebcounter Code START -->
    <a href="https://www.hitwebcounter.com" target="_blank"> <img src="https://hitwebcounter.com/counter/counter.php?page=7220864&style=0009&nbdigits=9&type=page&initCount=1001" title="User Stats" Alt="PHP Hits Count" border="0"> </a>
</div>
<script>
    $("#but").click(function () {
        $("#table2excel").table2excel({
            // exclude CSS class
            exclude: ".noExl"
            , name: "Worksheet Name"
            , filename: "schoolSocity.xls" //do not include extension
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#table2excel').DataTable();
    });
</script>