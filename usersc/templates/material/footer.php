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
<div style="background-color: #f95169;">
            <div class="container">

                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
                        <h6 class="mb-0 white-text"><font color="#fff">Get Connected With Us On Social Networks !</font></h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="p-2 m-2 fa-lg fb-ic ml-0" href="https://facebook.com/RINLltd/" target=”_blank”>
                            <i class="fab fa-facebook-f white-text mr-lg-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="p-2 m-2 fa-lg tw-ic" href="https://twitter.com/RINL_VSP" target=”_blank”>
                            <i class="fab fa-twitter white-text mr-lg-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="p-2 m-2 fa-lg gplus-ic" href="#">
                            <i class="fab fa-google-plus-g white-text mr-lg-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="p-2 m-2 fa-lg li-ic" href="https://linkedin.com/company/rashtriya-ispat-nigam-limited-visakhapatnam-steel-plant" target=”_blank”>
                            <i class="fab fa-linkedin-in white-text mr-lg-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="p-2 m-2 fa-lg ins-ic" href="https://instagram.com/r.i.n.l/" target=”_blank”>
                            <i class="fab fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>




<section id="contact-us">
<footer class="footer-area ">
  <div class="footer-big">
    <!-- start .container -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="widget-about">
              <img src="<?=$us_url_root?>users/images/RINL_LogoW.png" alt="Codevizag Academy" class="img-fluid" width="50%">
              <p style="color:#fff; !important">Rashtriya Ispat Nigam Limited(RINL) is an Excellent Choice For Businesses Who Wants To Purchase <b>Industy Grade</b> Steel at an Affordable Price.</p>
              <ul class="contact-details">
                <li>
                <span class="icon-earphones"></span> Call Us : 
                  <a href="tel:+91-9493202447">+91-8391078718</a>
                </li>
                <li>
                  <span class="icon-envelope-open"></span>
                  E-Mail : <a href="mailto:sales@vizagsteel.com">sales@vizagsteel.com</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-4 -->
        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
            <div class="footer-menu footer-menu--1">
              <h4 class="footer-widget-title">Helpful & Useful Links</h4>
                                <?php 
        if($user->isLoggedIn()){?>
          <ul>
                <li>
                  <a href="<?=$us_url_root?>users/account">Account Dashboard</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/user_settings">Edit Your Profile</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/messages">Messages</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/logout">Logout</a>
                </li>
              </ul>
        <?php }else{?>
          <ul>
                <li>
                  <a href="<?=$us_url_root?>users/login">Sign-In</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/join">Sign-Up</a>
                </li>
                <li>
                <a href="<?=$us_url_root?>users/forgot_password">Reset Password</a>
                </li>
                <li>
                <a href="<?=$us_url_root?>users/verify_resend">Resend Activation Link</a>
                </li>
              </ul>
        <?php } ?>
              

              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-3 -->

        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
            <div class="footer-menu">
              <h4 class="footer-widget-title">Our Company</h4>
              <ul>
                <li>
                  <a class="pagescroll" href="<?=$us_url_root?>#ourhome">Home</a>
                </li>
                <li>
                  <a class="pagescroll" href="<?=$us_url_root?>#aboutus">About Us</a>
                </li>
                <li>
                  <a class="pagescroll" href="<?=$us_url_root?>#our-team">Team</a>
                </li>
                <li>
                  <a class="pagescroll" href="<?=$us_url_root?>#our-features">Features</a>
                </li>
                <li>
                  <a class="pagescroll" href="<?=$us_url_root?>#our-pricings">Plans &amp; Pricing</a>
                </li>
                <li>
                  <a class="pagescroll" href="<?=$us_url_root?>#contact-us">Contact Us</a>
                </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-lg-3 -->

        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
            <div class="footer-menu no-padding">
              <h4 class="footer-widget-title">Help & Support</h4>
              <ul>
                <li>
                  <a href="<?=$us_url_root?>users/Support">Support Forums</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/T&Cs">Terms &amp; Conditions</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/PrivacyPolicy">Privacy Policy</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>users/ReturnPolicy">Return Policy</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>robots.txt">Robots</a>
                </li>
                <li>
                  <a href="<?=$us_url_root?>sitemap.xml">Sitemap</a>
                </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- Ends: .col-lg-3 -->

      </div>
      <!-- end /.row -->
    </div>
    <!-- end /.container -->
  </div>
  <!-- end /.footer-big -->
<!--Footer-->

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