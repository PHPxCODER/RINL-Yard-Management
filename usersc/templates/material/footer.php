<?php
require_once $abs_us_root . $us_url_root . 'usersc/templates/' . $settings->template . '/container_close.php'; //custom template container

require_once $abs_us_root . $us_url_root . 'users/includes/page_footer.php';

?>

<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
  });
</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
// (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
// function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
// e=o.createElement(i);r=o.getElementsByTagName(i)[0];
// e.src='//www.google-analytics.com/analytics.js';
// r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
// ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<!--Footer-->
<br><br>
<footer class="page-footer text-center font-small mt-4 wow fadeIn">
  <!--Copyright-->
  <div class="footer-copyright py-3">
    &copy;
      <?php echo date("Y"); ?>
       <?=$settings->copyright; ?>
       <font color="white">
       <br>
       <?php
  function getUserIpAddr(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      //ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      //ip pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
gethostbyaddr($_SERVER['REMOTE_ADDR']);

// API URL for IPAPI.is
// $api_url = 'https://api.ipapi.is/?q=' .getUserIpAddr();
// $api_url = 'https://api.ipapi.is/?q=162.218.156.0';
$api_url = 'https://api.ipapi.is/';


// Fetch JSON data from the API URL
$json_data = file_get_contents($api_url);

// Decode JSON data into a PHP object
$data_object = json_decode($json_data);

// Check if the 'asn' object exists in the JSON response
if (isset($data_object->asn)) {
    $asn = $data_object->asn;
    $company = $data_object->company;
    // Display specific information from the 'asn' object
    echo "<b>For Security Purposes We Store Your Internet Protocol Address (IP Address).<br>";
    echo "Your ISP is ".$company->name." (AS".$asn->asn.")."; 
} else {
    echo "ASN Information not found in the API response.";
}
?>

</font>
  </div>
  </div>
  <!--/.Copyright-->

</footer>


<!-- Initializations -->
<script type="text/javascript">
  // Animations initialization
  // new WOW().init();
</script>



<?php require_once($abs_us_root.$us_url_root.'users/includes/html_footer.php');?>
