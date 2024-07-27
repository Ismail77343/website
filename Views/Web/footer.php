<footer id="footer" class="footer">

<div class="footer-newsletter d-none">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <h4>Join Our Newsletter</h4>
        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
          <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="d-flex align-items-center">
        <span class="sitename">ERPALFRAS</span>
      </a>
      <div class="footer-contact pt-3">
        <p>AL-Kohaber 16 Street</p>
        <p>AL-Kohaber</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+966 547634419</span></p>
        <p><strong>Email:</strong> <span>info@pvcio.com</span></p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Links</h4>
      <ul>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12">
      <h4>Follow Us</h4>
      <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
      <div class="social-links d-flex">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">ErpAlfras</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="#">Eng.Ismail</a>
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/aos/aos.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo _Project."/"?>Views/Web/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo _Project."/"?>Views/Web/assets/js/main.js"></script>
    <!-- <script src="<?php echo _Project."/Views/Web/" ?>js/jquery-3.6.3.js"></script>
    <script src="<?php echo _Project."/Views/Web/" ?>js/bootstrap.js"></script> -->


    <script>
$(document).ready(function() {

    $(document).scroll(function() {
        if (Math.round($("#carouselExampleControls").offset().top) <= $(document).scrollTop()) {            
            $("#btn_home").addClass("active");
            $("#btn_about").removeClass('active');
            $("#btn_service").removeClass("active");
            $("#btn_gallery").removeClass("active");
            $("#btn_conn").removeClass("active");
        }
        if (Math.round($("#about").offset().top) <= $(document).scrollTop()) {            
            $("#btn_home").removeClass("active");
            $("#btn_about").addClass('active');
            $("#btn_service").removeClass("active");
            $("#btn_gallery").removeClass("active");
            $("#btn_conn").removeClass("active");
        }
        if (Math.round($("#Service").offset().top) <= $(document).scrollTop()) {            
            $("#btn_home").removeClass("active");
            $("#btn_about").removeClass('active');
            $("#btn_service").addClass("active");
            $("#btn_gallery").removeClass("active");
            $("#btn_conn").removeClass("active");
        }
        if (Math.round($("#gallery").offset().top) <= $(document).scrollTop()) {            
            $("#btn_home").removeClass("active");
            $("#btn_about").removeClass('active');
            $("#btn_service").removeClass("active");
            $("#btn_gallery").addClass("active");
            $("#btn_conn").removeClass("active");
        }
        if (Math.round($("#Content").offset().top) <= $(document).scrollTop()) {            
            $("#btn_home").removeClass("active");
            $("#btn_about").removeClass('active');
            $("#btn_service").removeClass("active");
            $("#btn_gallery").removeClass("active");
            $("#btn_conn").addClass("active");
        }
    });
    $("#btn_home").click(function() {
        $("#btn_home").addClass('active');
        $("#btn_about").removeClass("active");
        $("#btn_service").removeClass("active");
        $("#btn_gallery").removeClass("active");
        $("#btn_conn").removeClass("active");
        $('html, body').animate({
            scrollTop: $("#carouselExampleControls").offset().top
        }, 1000);
    });
    $("#btn_about").click(function() {
        $("#btn_about").addClass('active');
        $("#btn_home").removeClass("active");
        $("#btn_service").removeClass("active");
        $("#btn_gallery").removeClass("active");
        $("#btn_conn").removeClass("active");
        $('html, body').animate({
            scrollTop: $("#about").offset().top

        }, 1000);

    });
    $("#b_about").click(function() {
        $("#btn_about").addClass('active');
        $("#btn_home").removeClass("active");
        $("#btn_service").removeClass("active");
        $("#btn_gallery").removeClass("active");
        $("#btn_conn").removeClass("active");
        $('html, body').animate({
            scrollTop: $("#about").offset().top

        }, 1000);

    });
    $("#btn_service").click(function() {
        $("#btn_about").removeClass('active');
        $("#btn_home").removeClass("active");
        $("#btn_service").addClass("active");
        $("#btn_gallery").removeClass("active");
        $("#btn_conn").removeClass("active");
        $('html, body').animate({
            scrollTop: $("#Service").offset().top
        }, 1000);
    });
    $("#btn_gallery").click(function() {
        $("#btn_about").removeClass('active');
        $("#btn_home").removeClass("active");
        $("#btn_service").removeClass("active");
        $("#btn_gallery").addClass("active");
        $("#btn_conn").removeClass("active");
        $('html, body').animate({
            scrollTop: $("#gallery").offset().top
        }, 1000);
    });
    $("#btn_conn").click(function() {
        $("#btn_about").removeClass('active');
        $("#btn_home").removeClass("active");
        $("#btn_service").removeClass("active");
        $("#btn_gallery").removeClass("active");
        $("#btn_conn").addClass("active");
        $('html, body').animate({
            scrollTop: $("#Content").offset().top
        }, 1000);
    });

});


$(function() {
            $('.pop').on('click', function() {
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                $('#imagemodal').modal('show');   
            });     
    });
    </script>
    </body>

    </html>