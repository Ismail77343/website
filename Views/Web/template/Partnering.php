
<?php
if(isset($_GET["ar"])):

?>

<section style="margin-top: 6%;min-height: 65vh !important;" id="hero" class="hero section light-background" >
<img style="width:100%;position: absolute; height: 100%;" src="<?php echo _Project . "/Views/Web/upload/25.png"?>" alt="">

  <div class="container">
    <div class="row gy-4">
      
      <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="Views/Web/assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
      <div class="col-lg-4 order-2 order-lg-2 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1 style="background: #00000014;box-shadow: black 2px 2px 38px 16px;">ERPALFRAS</h1>

        <div class="d-flex">
          <a href="#contact" class="btn-get-started">ابداء معنا</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="lightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span></span></a>
        </div>
      </div>
    </div>
  </div>

</section>

<section id="contact" class="contact section">

  <!-- عنوان القسم -->
  <div class="container section-title" data-aos="fade-up">
    <h2>اتصل بنا</h2>
    <p>تتحقق احتياجاته من خلال الهروب من شيء ما. اجلس وكن محترفًا. أي شخص لديه رغبة. ومنع الآخرون من عرقلة الأوامر. لأنك تشعر بالراحة في هذه الوظائف المؤلمة.</p>
  </div><!-- نهاية عنوان القسم -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-5">

        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>العنوان</h3>
              <p>المملكة العربية السعودية- الخبر - الخبر الشمالية -شارع الملك فيصل - تقاطع 16</p>
            </div>
          </div><!-- نهاية عنصر المعلومات -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>اتصل بنا</h3>
              <a href="https://api.whatsapp.com/send?phone=966546808583"><p>+966 546808583</p></a>
            </div>
          </div><!-- نهاية عنصر المعلومات -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>راسلنا عبر البريد الإلكتروني</h3>
              <a href="mailto://m.alfras@pvcio.com"><p>m.alfras@pvcio.com</p></a>
            </div>
          </div><!-- نهاية عنصر المعلومات -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2066.356267980727!2d50.210176824327746!3d26.29365356833941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1722065959562!5m2!1sen!2ssa" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-lg-7">
        <form action="sub_commit/" method="post">
          <div class="row gy-4">

            <div class="col-md-6">
              <label for="name-field" class="pb-2">اسمك</label>
              <input type="text" name="name" id="name-field" class="form-control" required="">
            </div>

            <div class="col-md-6">
              <label for="email-field" class="pb-2">بريدك الإلكتروني</label>
              <input type="email" class="form-control" name="email" id="email-field" required="">
            </div>

            <div class="col-md-12">
              <label for="subject-field" class="pb-2">الهاتف</label>
              <input type="text" class="form-control" name="phone" id="subject-field" required="">
            </div>
            <div class="col-md-12">
              <label for="subject-field" class="pb-2">الموضوع</label>
              <input type="text" class="form-control" name="subject" id="subject-field" required="">
            </div>

            <div class="col-md-12">
              <label for="message-field" class="pb-2">الرسالة</label>
              <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <!-- <div class="loading">جاري التحميل</div>
              <div class="error-message"></div> -->
              <div class="sent-message"><?php echo $_SESSION["msg_err"]??""?></div>
                <?php
                unset($_SESSION["msg_err"]);
                ?>
              <button type="submit" class="btn btn-primary" name="send">أرسل الرسالة</button>
            </div>

          </div>
        </form>
      </div><!-- نهاية نموذج الاتصال -->

    </div>

  </div>

</section><!-- /قسم الاتصال -->

<?php else: ?>

<section style="margin-top: 6%;min-height: 65vh !important;" id="hero" class="hero section light-background" >
<img style="width:100%;position: absolute; height: 100%;" src="<?php echo _Project . "/Views/Web/upload/25.png"?>" alt="">

  <div class="container">
    <div class="row gy-4">
      
      <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="Views/Web/assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
      <div class="col-lg-4 order-2 order-lg-2 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1 style="background: #00000014;box-shadow: black 2px 2px 38px 16px;">ERPALFRAS</h1>

        <div class="d-flex">
          <a href="#contact" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="lightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span></span></a>
        </div>
      </div>
    </div>
  </div>

</section>

<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-5">

        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div><!-- End Info Item -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-lg-7" >
        <form action="sub_commit/" method="post"  >
          <div class="row gy-4">

            <div class="col-md-6">
              <label for="name-field" class="pb-2">Your Name</label>
              <input type="text" name="name" id="name-field" class="form-control" required="">
            </div>

            <div class="col-md-6">
              <label for="email-field" class="pb-2">Your Email</label>
              <input type="email" class="form-control" name="email" id="email-field" required="">
            </div>

            <div class="col-md-12">
              <label for="subject-field" class="pb-2">Phone</label>
              <input type="text" class="form-control" name="phone" id="subject-field" required="">
            </div>
            <div class="col-md-12">
              <label for="subject-field" class="pb-2">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject-field" required="">
            </div>

            <div class="col-md-12">
              <label for="message-field" class="pb-2">Message</label>
              <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <!-- <div class="loading">Loading</div>
              <div class="error-message"></div> -->
              <div class="sent-message"><?php echo $_SESSION["msg_err"]??""?></div>
                <?php
                unset($_SESSION["msg_err"]);
                ?>
              <button type="submit" class="btn btn-primary" name="send">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

<?php endif; ?>
