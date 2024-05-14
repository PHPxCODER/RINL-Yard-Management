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

<!--Footer-->
<br><br>
<footer class="page-footer text-center font-small mt-4 wow fadeIn">
  <!--Copyright-->
  <div class="footer-copyright py-3">
      <?php require_once 'asn.php' ?> 
      <!-- Footer Text with Copyright and ASN Details -->
  </div>
  </div>
  <!--/.Copyright-->

</footer>

<?php require_once($abs_us_root.$us_url_root.'users/includes/html_footer.php');?>