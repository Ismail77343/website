<?php 
if(isset($_GET["ar"])):

?>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1>ERPALFRAS</h1>
        <p>
          <ol>
            <li>وفر ما يصل إلى 40% على ERP وCRM وHRM</li>
            <li>انشر أعمالك عبر الإنترنت مع عدد غير محدود من المستخدمين</li>
            <li>تقديم برنامج مؤسسي جديد للشركات الصغيرة والمتوسطة</li>
          </ol>
        </p>
        <div class="d-flex">
          <a href="#contact" class="btn-get-started">ابداء معنا</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>شاهد الفيديو</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?php echo _Project?>/Views/Web/assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- Clients Section -->
<section id="clients" class="clients section light-background">

  <div class="container" data-aos="zoom-in">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 5,
              "spaceBetween": 120
            },
            "1200": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/Distribution.png" class="img-fluid" alt=""><h6>ادارة المشاريع</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/E-Commerce.png" class="img-fluid" alt=""><h6>تجارة الكترونية</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/Education.png" class="img-fluid" alt=""><h6>تعليم</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/HealthCare.png" class="img-fluid" alt=""><h6>الرعاىة الصحية</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/Hotels.png" class="img-fluid" alt=""><h6>الفنادق</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/manufacturing-png.png" class="img-fluid" alt=""><h6>تصنيع</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/retIL.webp" class="img-fluid" alt=""><h6>تجارة التجزئة</h6></div>
        <div class="swiper-slide"><img src="Views/Web/assets/img/clients/Services.png" class="img-fluid" alt=""><h6>الخدمات</h6></div>
      </div>
    </div>

  </div>

</section><!-- /Clients Section -->

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>عننا</h2>
    <h3>إنشاء تطبيقات مؤسسية رائعة
      </h3>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>
          <h1>ماهو نظام ERPAlfras?</h1>

          ERPAlfras هو نظام مفتوح المصدر قائم على الويب يستهدف الشركات الصغيرة والمتوسطة الحجم. فهو يساعد الشركات في المحاسبة وإدارة الموارد البشرية والمبيعات والشراء والمخزون وإدارة علاقات العملاء والإدارة وإدارة المشاريع والمهام والتصنيع وحتى موقع الويب. تم بناء ERPAlfras باستخدام Python وFrappe وMySQL.
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>أفضل نظام تخطيط موارد المؤسسات مفتوح المصدر بنسبة 100% في العالم.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>12000+ عضوًا في المجتمع.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>تغطية عالية للميزات</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>منصة ويب حديثة وقابلة للتطوير</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>يخدم مجالات وصناعات متعددة</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>مدعوم بواسطة Frappe Framework</span></li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p><h1>المجالات</h1>
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>تصنيع.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>تجارة التجزئة</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>الخدمات</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>الرعابة الصحية</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>ادارة المشاريع</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>التعليم</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>الفنادق</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>التجارة الالكترونية</span></li>
        </ul>
        <a href="#" class="read-more"><span>اقراء المزيد</span><i class="bi bi-arrow-right"></i></a>
      </div>

    </div>

  </div>

</section><!-- /About Section -->

<!-- Why Us Section -->
<section id="why-us" class="section why-us light-background" data-builder="section">

  <div class="container-fluid">

    <div class="row gy-4">

      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
          <h3><span> </span><strong>كيفية المشاركة?</strong></h3>
          <p>
          سيقدم خبرائنا جميع أنواع الأفكار والمبادرات لتقديم أفضل الحلول لتوقعاتك
          </p>
        </div>

        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-item faq-active">

            <h3><span>01</span> يتصل؟</h3>
            <div class="faq-content">
              <p>قم بالاتصال ومشاركة متطلباتك مع الشروط.

                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>مكالمة الاستكشاف.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>توليد المتطلباتn</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>الاتفاقية واتفاقية عدم الإفصاح</span></li>
                </ul>
              </p>
                
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span>02</span> التطبيق</h3>
            <div class="faq-content">
              <p>قم بالاتصال ومشاركة متطلباتك مع الشروط .<br>
                
              تنفيذ الوحدات النمطية<br>
              نقل البيانات واختبارها<br>
              تدريب العملاء<br>
                
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span>03</span> تخصيص</h3>
            <div class="faq-content">
              <p>قم بالاتصال ومشاركة متطلباتك مع الشروط<br>
                
              تنفيذ الوحدات النمطية<br>
              التكاملات والهجرات<br>
              الاختبار والتدريب والإطلاق<br></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3><span>04</span> المحافظة</h3>
            <div class="faq-content">
              <p>قم بالاتصال ومشاركة متطلباتك مع الشروط<br>
                
              مقاولات الصيانة<br>
              إصلاح الأخطاء<br>
              التدريب والدعم<br></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->

        </div>

      </div>

      <div class="col-lg-5 order-1 order-lg-2 why-us-img">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
      </div>
    </div>

  </div>

</section><!-- /Why Us Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">

      <div class="col-lg-6 d-flex align-items-center">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/skills.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 pt-4 pt-lg-0 content">

        <h3>قطاعات الأعمال مع ERPAlfras </h3>
        <p class="fst-italic">
        تحكم في إنتاجك.
        </p>

        <div class="skills-content skills-animation">

          <div class="progress">
            <span class="skill"><span>  إدارة الفروع المختلفة                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>قائمة المواد                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>  متغيرات العنصر                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>  العقود الداخلية والخارجية               </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

        </div>

      </div>
    </div>

  </div>

</section><!-- /Skills Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>الخدمات</h2>
    <p>في مهمة لمساعدة الشركات على الحصول على تكنولوجيا فعالة وبأسعار معقولة!</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="" class="stretched-link">استشارات تطبيقات المؤسسات              </a></h4>
          <p>تقدم Enterprise Applications Consulting مجموعة شاملة من الخدمات لـ ERPALFRAS، والمصممة لمساعدة الشركات على تبسيط عملياتها وتحقيق كفاءة أكبر</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="" class="stretched-link">ERP, CRM, HRM
          التنفيذ والصيانة</a></h4>
          <p>ERPALFRAS هو حل متعدد الاستخدامات يقدم خدمات واسعة النطاق في مجالات تخطيط موارد المؤسسات وإدارة علاقات العملاء وإدارة الموارد البشرية، وهو مصمم خصيصًا لمساعدة الشركات على تحسين عملياتها وتعزيز الكفاءة الشاملة</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="" class="stretched-link">تطوير تطبيقات الويب والهواتف المحمولة المخصصة              </a></h4>
          <p>تقدم خدمات قوية في تطوير تطبيقات الويب والجوال المخصصة، مما يسمح للشركات بإنشاء تطبيقات مخصصة تتكامل بسلاسة مع أنظمة تخطيط موارد المؤسسات الخاصة بها</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-broadcast icon"></i></div>
          <h4><a href="" class="stretched-link">تطوير منتجات المؤسسات              </a></h4>
          <p>تتميز شركة ERPALFRAS بدعم تطوير منتجات المؤسسات، حيث تقدم مجموعة من الخدمات المصممة لمساعدة الشركات في إنشاء منتجاتها وإدارتها وتحسينها طوال دورة حياتها بالكامل</p>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-broadcast icon"></i></div>
          <h4><a href="" class="stretched-link">تقنيات ويب 3</a></h4>
          <p>تقدم ERPALFRAS خدمات شاملة في مجال تقنيات Web3، مما يتيح للشركات الاستفادة من قوة الأنظمة اللامركزية والبلوكشين</p>
        </div>
      </div>
      <!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

  <img src="<?php echo _Project ?>/Views/Web/assets/img/cta-bg.jpg" alt="">

  <div class="container">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-9 text-center text-xl-start">
        <h3>شرح قطاعات الأعمال باستخدام ERPAlfras </h3>
        <p><strong>بيع الخدمات بكفاءة باستخدام أفضل برامج تخطيط موارد المؤسسات (ERP) لصناعة الخدمات
        </strong>. قم بإدارة أعمالك الخدمية بشكل أفضل مع ERPALFras. تعرف على العملاء، وقم بإعداد خطط الاشتراك لخدماتك، وبناء علاقات مع العملاء المنتظمين باستخدام برنامج الدفع، وإدارة وفواتير مشاريع متعددة، وإعداد جداول الصيانة والزيارات وغير ذلك الكثير.
        .</p>
      </div>
      <div class="col-xl-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">نداء إلى العمل</a>
      </div>
    </div>

  </div>

</section><!-- /Call To Action Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>المقارنة مع المنافسين</h2>
    <p>المقارنة مع المنافسين</p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>المقارنة</th>
          <th>Frappe (Fileian)</th>
          <th>SAP</th>
          <th>Oracle</th>
          <th>Microsoft</th>
          <th>برمجيات SaaS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>تكلفة الترخيص</td>
          <td>مجاني</td>
          <td>مدفوع</td>
          <td>مدفوع</td>
          <td>مدفوع</td>
          <td>مدفوع</td>
        </tr>
        <tr>
          <td>حدود المستخدمين</td>
          <td>غير محدود</td>
          <td>محدود</td>
          <td>محدود</td>
          <td>محدود</td>
          <td>محدود</td>
        </tr>
        <tr>
          <td>نوع استضافة السحابة</td>
          <td>سحابة خاصة / عامة</td>
          <td>سحابة خاصة / عامة</td>
          <td>سحابة خاصة / عامة</td>
          <td>سحابة عامة</td>
          <td>سحابة عامة</td>
        </tr>
        <tr>
          <td>تكلفة استضافة السحابة</td>
          <td>تبدأ من &lt; 10K</td>
          <td>تبدأ من &gt; 50K</td>
          <td>تبدأ من &gt; 50K</td>
          <td>تبدأ من &gt; 50K</td>
          <td>مشمولة</td>
        </tr>
        <tr>
          <td>مدة التنفيذ</td>
          <td>6 إلى 12 أسبوع</td>
          <td>12 إلى 24 أسبوع</td>
          <td>12 إلى 24 أسبوع</td>
          <td>6 إلى 12 أسبوع</td>
          <td>غير قابل للتطبيق</td>
        </tr>
        <tr>
          <td>تكلفة التنفيذ</td>
          <td>منخفضة</td>
          <td>مرتفعة</td>
          <td>مرتفعة</td>
          <td>متوسطة</td>
          <td>مرتفعة</td>
        </tr>
        <tr>
          <td>نوع التخصيص</td>
          <td>كامل (رمز منخفض أو بدون رمز)</td>
          <td>جزئي</td>
          <td>جزئي</td>
          <td>محدود</td>
          <td>غير قابل للتطبيق</td>
        </tr>
        <tr>
          <td>وقت التخصيص</td>
          <td>منخفض</td>
          <td>مرتفع جدًا</td>
          <td>مرتفع جدًا</td>
          <td>مرتفع</td>
          <td>غير قابل للتطبيق</td>
        </tr>
        <tr>
          <td>تكلفة التخصيص</td>
          <td>منخفضة</td>
          <td>مرتفعة جدًا</td>
          <td>مرتفعة جدًا</td>
          <td>متوسطة</td>
          <td>غير قابل للتطبيق</td>
        </tr>
        <tr>
          <td>تكلفة الانتقال</td>
          <td>منخفضة</td>
          <td>مرتفعة جدًا</td>
          <td>مرتفعة جدًا</td>
          <td>متوسطة</td>
          <td>مرتفعة</td>
        </tr>
        <tr>
          <td>تكلفة التكامل</td>
          <td>منخفضة</td>
          <td>مرتفعة</td>
          <td>مرتفعة</td>
          <td>متوسطة</td>
          <td>مرتفعة جدًا</td>
        </tr>
        <tr>
          <td>الأمان</td>
          <td>نعم</td>
          <td>نعم</td>
          <td>نعم</td>
          <td>نعم</td>
          <td>لا</td>
        </tr>
        <tr>
          <td>تكلفة الصيانة</td>
          <td>منخفضة</td>
          <td>مرتفعة جدًا</td>
          <td>مرتفعة</td>
          <td>مرتفعة</td>
          <td>مرتفعة</td>
        </tr>
      </tbody>
    </table>

  </div><!-- End Section Title -->

  <div class="container">
  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">الكل</li>
      <li data-filter=".filter-app">تطبيق</li>
    </ul><!-- نهاية فلاتر المحفظة -->

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة15.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 1</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة15.png" title="تطبيق 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة16.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 2</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة16.png" title="تطبيق 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة17.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 3</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة17.png" title="تطبيق 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة18.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 4</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة18.png" title="تطبيق 4" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة19.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 5</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة19.png" title="تطبيق 5" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة20.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 6</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة20.png" title="تطبيق 6" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة21.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>تطبيق 7</h4>
          <p>Lorem ipsum, dolor sit</p>
          <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة21.png" title="تطبيق 7" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="المزيد من التفاصيل" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- نهاية عنصر المحفظة -->

    </div><!-- نهاية حاوية المحفظة -->

    </div>

  </div>

</section><!-- /Portfolio Section -->

<!-- قسم الفريق -->
<section id="team" class="team section">

  <!-- عنوان القسم -->
  <div class="container section-title" data-aos="fade-up">
    <h2>قطاع الخدمات</h2>
    <p>أدِر عملك الخدمي بشكل أفضل مع ERPALFras. تعرف على العملاء، قم بإعداد خطط الاشتراك لخدماتك، قم ببناء علاقات مع العملاء الدائمين باستخدام برامج الدفع، أدِر واحتسب الفواتير لمشاريع متعددة، قم بإعداد جداول الصيانة، الزيارات والمزيد.</p>
  </div><!-- نهاية عنوان القسم -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/clain11.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>إدارة عملائك</h4>
            <span>إدارة عملائك</span>
            <p>قم بتعيين مديري حسابات مخصصين، ومعرفات الضرائب، وفئات الضرائب لحساب الضرائب تلقائيًا. استخدم عملات مختلفة لعملائك في الخارج، وستحسب أسعار الصرف تلقائيًا. قم بتخزين جهات اتصال متعددة، ورسائل البريد الإلكتروني، وأرقام الهواتف الخاصة بالعميل. حدد حد ائتمان العميل لمنع المزيد من المبيعات للعملاء ذوي العلامة التجارية الكبيرة. قم بإعداد برنامج لبناء العلاقات مع عملائك.</p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- نهاية عضو الفريق -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/claint12.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>حملات الترويج</h4>
            <span>حملات الترويج</span>
            <p>قد يكون اكتساب العملاء صعبًا، خاصة عندما تكون قد بدأت للتو. باستخدام ميزات الحملة في ERPALFras، يمكنك إرسال رسائل بريد إلكتروني إلى عدة عملاء وإدارة كل رسالة على حدة.</p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- نهاية عضو الفريق -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member d-flex align-items-start">
          <div class="pic"></div>
          <div class="member-info">
            <h4>الاشتراكات</h4>
            <span>الاشتراكات</span>
            <p>قم بإعداد خطط اشتراك مختلفة وتعيينها للعملاء. اختر فترة تجريبية لاشتراكاتك. يمكن إضافة الضرائب والخصومات إلى اشتراكاتك، تمامًا مثل أي عنصر آخر. يمكن تكرار الاشتراكات بفواصل زمنية مختلفة، يوميًا، شهريًا، أو مرة كل بضع سنوات. بعد انتهاء الفترة التجريبية، ستُولد الفواتير تلقائيًا.</p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- نهاية عضو الفريق -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/proj_mang.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>إدارة المشاريع</h4>
            <span>إدارة المشاريع</span>
            <p>أدِر المشاريع الداخلية والخارجية بكفاءة. أرسل الفواتير لعملائك عن الموظفين الذين أرسلتهم إلى مواقعهم باستخدام ميزة الجداول الزمنية. قم بإنشاء وتتبع المهام للحفاظ على نشاط موظفيك خلال المشاريع الهامة. تساعدك مخططات جانت ولوحات كانبان على تتبع المهام وتصورها للحصول على عرض شامل سريع وسهل لتقدمك.</p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- نهاية عضو الفريق -->

    </div>

  </div>

</section><!-- /قسم الفريق -->


<!-- قسم التسعير -->
<section id="pricing" class="pricing section light-background d-none">

  <!-- عنوان القسم -->
  <div class="container section-title" data-aos="fade-up">
    <h2>التسعير</h2>
    <p>احتياجاته ومزاياه الهروب منه بالتأكيد من أسباب الاتصال به</p>
  </div><!-- نهاية عنوان القسم -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>الخطة المجانية</h3>
          <h4><sup>$</sup>0<span> / شهر</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>كيف يتغذى بشكل جيد</span></li>
            <li><i class="bi bi-check"></i> <span>ليستغرق وقتًا طويلاً للتعلم</span></li>
            <li><i class="bi bi-check"></i> <span>لا شيء في القطر لتسهل</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>كتلة كتلة فائقة</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>كتلة فائقة لا تريد التعلق</span></li>
          </ul>
          <a href="#" class="buy-btn">اشترِ الآن</a>
        </div>
      </div><!-- نهاية عنصر التسعير -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-item featured">
          <h3>خطة الأعمال</h3>
          <h4><sup>$</sup>29<span> / شهر</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>كيف يتغذى بشكل جيد</span></li>
            <li><i class="bi bi-check"></i> <span>ليستغرق وقتًا طويلاً للتعلم</span></li>
            <li><i class="bi bi-check"></i> <span>لا شيء في القطر لتسهل</span></li>
            <li><i class="bi bi-check"></i> <span>كتلة كتلة فائقة</span></li>
            <li><i class="bi bi-check"></i> <span>كتلة فائقة لا تريد التعلق</span></li>
          </ul>
          <a href="#" class="buy-btn">اشترِ الآن</a>
        </div>
      </div><!-- نهاية عنصر التسعير -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-item">
          <h3>خطة المطور</h3>
          <h4><sup>$</sup>49<span> / شهر</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>كيف يتغذى بشكل جيد</span></li>
            <li><i class="bi bi-check"></i> <span>ليستغرق وقتًا طويلاً للتعلم</span></li>
            <li><i class="bi bi-check"></i> <span>لا شيء في القطر لتسهل</span></li>
            <li><i class="bi bi-check"></i> <span>كتلة كتلة فائقة</span></li>
            <li><i class="bi bi-check"></i> <span>كتلة فائقة لا تريد التعلق</span></li>
          </ul>
          <a href="#" class="buy-btn">اشترِ الآن</a>
        </div>
      </div><!-- نهاية عنصر التسعير -->

    </div>

  </div>

</section><!-- /قسم التسعير -->

<!-- قسم الشهادات -->
<section id="testimonials" class="testimonials section d-none">

  <!-- عنوان القسم -->
  <div class="container section-title" data-aos="fade-up">
    <h2>الشهادات</h2>
    <p>احتياجاته ومزاياه الهروب منه بالتأكيد من أسباب الاتصال به</p>
  </div><!-- نهاية عنوان القسم -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo _Project ?>/Views/Web/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>المدير التنفيذي والمؤسس</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>بروين إياكوليس بروس كونسكات سيم كيور ديني سسيم دونيك بورتتيتورا إنتوم سوسيبيتس رونكوس. أكوسانتوم كوام، ألتريسيز إجيت إد، أليكام إجيت نيب إت. ميسين أليكام، ريسوس أت سيمبر.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- نهاية عنصر الشهادة -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo _Project ?>/Views/Web/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>مصممة</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>تصدير تيمبور إلوم تامن ماليس ماليس إيرام كويا إيرور إيس لابور كويم سيلوم كويد سيلوم إيرام ماليس كوروم فيليت فور إيرام فيليت سانت أليكا نوستر فويغات إيرور أميت ليغام أنيم كولبا.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- نهاية عنصر الشهادة -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo _Project ?>/Views/Web/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>صاحب المتجر</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>إنيم نيسي كويم إكسبورت دويس لابور سيلوم كويم ماجنا إنيم سينت كوروم نولا كويم فينيام دويس مينيم تيمبور لابور كويم إيرام دويس نوستر أوت أميت إيرام فور كويم سينت مينيم.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- نهاية عنصر الشهادة -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo _Project ?>/Views/Web/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>مستقل</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>فويغات إنيم إيرام كويا سيلوم دولور دولور أميت نولا كولبا مولتوس إكسبورت مينيم فويغات مينيم فيليت مينيم دولور إنيم دويس فينيام إيبسوم أنيم ماجنا سانت أليت فور كويم دولور لابور إلوم فينيام.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- نهاية عنصر الشهادة -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo _Project ?>/Views/Web/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>رائد أعمال</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>كويز كوروم أليكا سينت كويم ليغام فور سانت إيرام إيرور أليكا فينيام تيمبور نوستر فينيام إنيم كولبا لابور دويس سانت كولبا نولا إلوم سيلوم فويغات ليغام إيس فينيام كولبا فور نيسي سيلوم كويد.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- نهاية عنصر الشهادة -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /قسم الشهادات -->


<!-- قسم الأسئلة الشائعة 2 -->
<section id="faq-2" class="faq-2 section light-background d-none">

  <!-- عنوان القسم -->
  <div class="container section-title" data-aos="fade-up">
    <h2>الأسئلة الشائعة</h2>
    <p>مشاكل مؤلمة ومزعجة. احتياجاته تتحقق من خلال الهروب من شيء ما. اجلس وكن محترفًا. أي شخص لديه رغبة. ومنع الآخرون من عرقلة الأوامر. لأنك تشعر بالراحة في هذه الوظائف المؤلمة.</p>
  </div><!-- نهاية عنوان القسم -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>هل لا يتفق مع طبيعة العمل في وقت لاحق على الفور؟</h3>
            <div class="faq-content">
              <p>التكاليف الدقيقة هي الأساس. الوقت الذي يتطلبه الإجراء هو الأساس الأساسي. أوقات ردود الفعل وإجراءات التنفيذ المتقدمة. تأكد من تطبيق الوقت المناسب.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- نهاية عنصر الأسئلة الشائعة-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>هل لديك إجراءات شاملة وفوائد شاملة؟</h3>
            <div class="faq-content">
              <p>إجراءات مهمة تشمل تسهيلات شاملة وطرق جديدة. التسهيلات التي تقدمها الشروط والأحكام ومراحل المراقبة. تشمل أيضًا تعليمات خاصة بإجراءات أخرى. عناصر تحكم شاملة ومزايا جديدة.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- نهاية عنصر الأسئلة الشائعة-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>هل هناك أية مشاكل تتعلق بالإجراءات المعقدة؟</h3>
            <div class="faq-content">
              <p>تأثيرات معينة قد تؤثر على الإجراءات. مشاكل تقنية تتطلب إعادة تفكير في أساليب التنفيذ. عدم التوافق مع الحالات الخاصة والمتغيرات الجديدة.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- نهاية عنصر الأسئلة الشائعة-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>كيف يمكن التعامل مع المشاكل الفورية؟</h3>
            <div class="faq-content">
              <p>الطرق الفورية تتطلب تقييمًا عاجلاً. اتخاذ إجراءات سريعة وإجراءات تصحيحية للمشاكل. استجابة سريعة وتحديثات منتظمة.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- نهاية عنصر الأسئلة الشائعة-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>ما هي الأساليب الأكثر فعالية في التحليل والتقييم؟</h3>
            <div class="faq-content">
              <p>التحليل الفعال يتطلب أساليب دقيقة. تقييم دقيق للتقارير والتجارب السابقة. استخدام أدوات تحليل فعالة لتحسين الأداء.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- نهاية عنصر الأسئلة الشائعة-->

        </div>

      </div>

    </div>

  </div>

</section><!-- /قسم الأسئلة الشائعة 2 -->


<!-- قسم الاتصال -->
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

</main>
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 11;">
  <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
      <div class="toast-header">
          <strong class="me-auto">إشعار</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="إغلاق"></button>
      </div>
      <div class="toast-body">
      <?php echo $_SESSION["msg_err"]??""?>
      </div>
  </div>
  <script>
      if($_SESSION["msg_err"]){
          document.addEventListener('DOMContentLoaded', function () {
              var myToast = new bootstrap.Toast(document.getElementById('myToast'));
              myToast.show();
          });
      }
  </script>

    </div>






<?php else: ?>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1>ERPALFRAS</h1>
        <p>
          <ol>
            <li>Save upto 40% on ERP, CRM, HRM</li>
            <li>Get your business Online with Unlimited Users</li>
            <li>Introducing New Enterprise Software for  Small, Medium Businesses</li>
          </ol>
        </p>
        <div class="d-flex">
          <a href="#contact" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- Clients Section -->
<section id="clients" class="clients section light-background">

  <div class="container" data-aos="zoom-in">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 5,
              "spaceBetween": 120
            },
            "1200": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/Distribution.png" class="img-fluid" alt=""><h6>Project Mangment </h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/E-Commerce.png" class="img-fluid" alt=""><h6>E-Commerce</h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/Education.png" class="img-fluid" alt=""><h6>Education</h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/HealthCare.png" class="img-fluid" alt=""><h6>HealthCare</h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/Hotels.png" class="img-fluid" alt=""><h6>Hotels</h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/manufacturing-png.png" class="img-fluid" alt=""><h6>manufacturing</h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/retIL.webp" class="img-fluid" alt=""><h6>Retil</h6></div>
        <div class="swiper-slide"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/Services.png" class="img-fluid" alt=""><h6>Services</h6></div>
      </div>
    </div>

  </div>

</section><!-- /Clients Section -->

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us</h2>
    <h3>Building awesome enterprise applications
      </h3>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>
          <h1>What is ERPAlfras?</h1>

          ERPAlfras is an open source web-based system aimed at small and medium sized businesses.
          It assists companies with accounting, human resource management, sales, purchase, inventory, CRM, administration, project and task management, manufacturing, and even website. ERPAlfras is built using Python, Frappe, and MySQL.
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>World’s top 100% open-source ERP.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>12,000+ community members.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>High feature coverage</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Modern and scalable web platform</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Serves multiple domains and industries</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Powered by Frappe Framework</span></li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p><h1>Domains</h1>
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Manufacturing.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Retail</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Services</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>HealthCare</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Project Mangment </span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Education</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Hotels</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>E-Commerce</span></li>
        </ul>
        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>

    </div>

  </div>

</section><!-- /About Section -->

<!-- Why Us Section -->
<section id="why-us" class="section why-us light-background" data-builder="section">

  <div class="container-fluid">

    <div class="row gy-4">

      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
          <h3><span> </span><strong>How to engage?</strong></h3>
          <p>
            Our experts will come up with all kinds of ideas and initiatives for delivering the best solutions of your expectations
          </p>
        </div>

        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-item faq-active">

            <h3><span>01</span> Connect?</h3>
            <div class="faq-content">
              <p>Connect & share your Requirement with Terms.

                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>Discovery Call.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Requirement Generation</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Agreement & NDA</span></li>
                </ul>
              </p>
                
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span>02</span> Implement</h3>
            <div class="faq-content">
              <p>Connect & share your Requirement with Terms .<br>
                
                  Implement Modules<br>
                  Data Migration & Testing<br>
                  Client Training<br>
                
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span>03</span> Customize</h3>
            <div class="faq-content">
              <p>Connect & share your Requirement with Terms<br>
                
                Requirement Generation<br>
                Integrations, Migrations<br>
                Testing, Training, Launch<br></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3><span>04</span> Maintain</h3>
            <div class="faq-content">
              <p>Connect & share your Requirement with Terms<br>
                
                Maintenance Contracting<br>
                Bugs fixing<br>
                Training & Support<br></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->

        </div>

      </div>

      <div class="col-lg-5 order-1 order-lg-2 why-us-img">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
      </div>
    </div>

  </div>

</section><!-- /Why Us Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">

      <div class="col-lg-6 d-flex align-items-center">
        <img src="<?php echo _Project ?>/Views/Web/assets/img/skills.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 pt-4 pt-lg-0 content">

        <h3>Business Sectors with ERPAlfras </h3>
        <p class="fst-italic">
          Control your production.
        </p>

        <div class="skills-content skills-animation">

          <div class="progress">
            <span class="skill"><span>  Managing different branches                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>Bill of Materials (BOM)                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>  Item variables                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>  Internal and external contracts                </span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

        </div>

      </div>
    </div>

  </div>

</section><!-- /Skills Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>On a Mission to help Enterprises get Efficient & Affordable Technology!</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="" class="stretched-link">Enterprise Applications Consulting              </a></h4>
          <p>Enterprise Applications Consulting offers a comprehensive range of services for ERPALFRAS, designed to help businesses streamline their operations and achieve greater efficiency</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="" class="stretched-link">ERP, CRM, HRM
            Implementations & Maintenance</a></h4>
          <p>ERPALFRAS is a versatile solution that offers extensive services in the domains of ERP, CRM, and HRM, tailored to help businesses optimize their operations and enhance overall efficiency</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="" class="stretched-link">Custom Web & Mobile App Development              </a></h4>
          <p>provides robust services in custom web and mobile app development, allowing businesses to create tailored applications that integrate seamlessly with their ERP systems</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-broadcast icon"></i></div>
          <h4><a href="" class="stretched-link">Enterprise Product Development              </a></h4>
          <p>ERPALFRAS Excels in supporting enterprise product development, offering a suite of services designed to assist businesses in creating, managing, and optimizing their products throughout the entire lifecycle</p>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-broadcast icon"></i></div>
          <h4><a href="" class="stretched-link">Web3 Technologies</a></h4>
          <p>ERPALFRAS offers comprehensive services in the realm of Web3 technologies, enabling businesses to harness the power of decentralized systems and blockchain</p>
        </div>
      </div>
      <!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

  <img src="<?php echo _Project ?>/Views/Web/assets/img/cta-bg.jpg" alt="">

  <div class="container">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-9 text-center text-xl-start">
        <h3>Explaining the Business Sectors with ERPAlfras </h3>
        <p><strong>Sell ​​services efficiently using the best ERP software for the service industry
        </strong>. Manage your service business better with ERPALFras. Get to know customers, set up subscription plans for your services, build connections with regular customers using payment software, manage and bill multiple projects, set up maintenance schedules, visits and much more.
        .</p>
      </div>
      <div class="col-xl-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">Call To Action</a>
      </div>
    </div>

  </div>

</section><!-- /Call To Action Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Comparison with Competitors</h2>
    <p>Comparison with Competitors</p>
    <table class="table table-hover">
      <thead>
          <tr>
              <th>Comparison</th>
              <th>Frappe (Fileian)</th>
              <th>SAP</th>
              <th>Oracle</th>
              <th>Microsoft</th>
              <th>SaaS Software</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Licensing Cost</td>
              <td>Free</td>
              <td>Paid</td>
              <td>Paid</td>
              <td>Paid</td>
              <td>Paid</td>
          </tr>
          <tr>
              <td>Users Limit</td>
              <td>Unlimited</td>
              <td>Limited</td>
              <td>Limited</td>
              <td>Limited</td>
              <td>Limited</td>
          </tr>
          <tr>
              <td>Cloud Hosting Type</td>
              <td>Private / Public Cloud</td>
              <td>Private / Public Cloud</td>
              <td>Private / Public Cloud</td>
              <td>Public Cloud</td>
              <td>Public Cloud</td>
          </tr>
          <tr>
              <td>Cloud Hosting Cost</td>
              <td>Starting &lt; 10K</td>
              <td>Starting &gt; 50K</td>
              <td>Starting &gt; 50K</td>
              <td>Starting &gt; 50K</td>
              <td>Included</td>
          </tr>
          <tr>
              <td>Implementation Time</td>
              <td>6 to 12 Weeks</td>
              <td>12 to 24 Weeks</td>
              <td>12 to 24 Weeks</td>
              <td>6 to 12 Weeks</td>
              <td>No Applicable</td>
          </tr>
          <tr>
              <td>Implementation Cost</td>
              <td>Low</td>
              <td>High</td>
              <td>High</td>
              <td>Medium</td>
              <td>High</td>
          </tr>
          <tr>
              <td>Customisation Type</td>
              <td>Full (Low Code No Code)</td>
              <td>Partial</td>
              <td>Partial</td>
              <td>Limited</td>
              <td>Not Applicable</td>
          </tr>
          <tr>
              <td>Customisation Time</td>
              <td>Low</td>
              <td>Very High</td>
              <td>Very High</td>
              <td>High</td>
              <td>Not Applicable</td>
          </tr>
          <tr>
              <td>Customisation Cost</td>
              <td>Low</td>
              <td>Very High</td>
              <td>Very High</td>
              <td>Medium</td>
              <td>Not Applicable</td>
          </tr>
          <tr>
              <td>Migration Cost</td>
              <td>Low</td>
              <td>Very High</td>
              <td>Very High</td>
              <td>Medium</td>
              <td>High</td>
          </tr>
          <tr>
              <td>Integrations Cost</td>
              <td>Low</td>
              <td>High</td>
              <td>High</td>
              <td>Medium</td>
              <td>Very High</td>
          </tr>
          <tr>
              <td>Security</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>No</td>
          </tr>
          <tr>
              <td>Maintenance Cost</td>
              <td>Low</td>
              <td>Very High</td>
              <td>High</td>
              <td>High</td>
              <td>High</td>
          </tr>
      </tbody>
  </table>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>

      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة15.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة15.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->


        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة16.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة16.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->



        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة17.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة17.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة18.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة18.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img//forms/صورة19.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img//forms/صورة19.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة20.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة20.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة21.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="<?php echo _Project ?>/Views/Web/assets/img/forms/صورة21.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <!-- End Portfolio Item -->



      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section><!-- /Portfolio Section -->

<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services sector        </h2>
    <p>Manage your service business better with ERPALFras. Get to know customers, set up subscription plans for your services, build connections with regular customers using payment software, manage and bill multiple projects, set up maintenance schedules, visits and much more.
    </p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/clain11.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4> Manage your clients                </h4>
            <span> Manage your clients </span>
            <p>Assign dedicated account managers, tax IDs, and tax categories to calculate taxes automatically. Use different currencies for your clients abroad, and the exchange rates will be calculated automatically . Store multiple contacts, emails, and phone numbers against the client. Set a customer credit limit to prevent further sales to customers with a large brand. Set up a program to build connections with your customers</p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="<?php echo _Project ?>/Views/Web/assets/img/clients/claint12.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4> Promotion campaigns                </h4>
            <span> Promotion campaigns                </span>
            <p>Acquiring customers can be difficult, especially when you're just starting out. Using ERPALFras' campaign features, you can send emails to multiple clients and manage each message separately                </p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member d-flex align-items-start">
          <div class="pic"></div>
          <div class="member-info">
            <h4>Subscriptions</h4>
            <span>Subscriptions</span>
            <p>Set up different subscription plans and assign them to customers. Select a trial period for your subscriptions. Taxes and discounts can also be added to your subscriptions, just like any other regular item. Subscriptions can be repeated at varying intervals, daily, monthly, or once every few years. After the trial period ends, invoices will be generated automatically
            </p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="Views/Web/assets/img/clients/proj_mang.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4> Projects management                </h4>
            <span> Projects management                </span>
            <p> Manage internal and external projects efficiently. Send invoices to your clients for the employees you have sent to their sites using the timesheets feature. Create and track tasks to keep your employees on their toes during important projects. Gantt charts and Kanban boards help you track and visualize tasks for a quick and easy comprehensive view of your progress
            </p>
            <div class="social d-none">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Team Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section light-background d-none">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>Free Plan</h3>
          <h4><sup>$</sup>0<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <a href="#" class="buy-btn">Buy Now</a>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-item featured">
          <h3>Business Plan</h3>
          <h4><sup>$</sup>29<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <a href="#" class="buy-btn">Buy Now</a>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-item">
          <h3>Developer Plan</h3>
          <h4><sup>$</sup>49<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <a href="#" class="buy-btn">Buy Now</a>
        </div>
      </div><!-- End Pricing Item -->

    </div>

  </div>

</section><!-- /Pricing Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section d-none">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="Views/Web/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="Views/Web/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="Views/Web/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="Views/Web/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="Views/Web/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Faq 2 Section -->
<section id="faq-2" class="faq-2 section light-background d-none">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
            <div class="faq-content">
              <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
            <div class="faq-content">
              <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
            <div class="faq-content">
              <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div>

    </div>

  </div>

</section><!-- /Faq 2 Section -->

<!-- Contact Section -->
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
              <p>Kingdom of Saudi Arabia - Al Khobar - North Khobar - King Faisal Street - Intersection 16</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <a href="https://api.whatsapp.com/send?phone=966546808583"><p>+966 546808583</p></a>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <a href="mailto://m.alfras@pvcio.com"><p>m.alfras@pvcio.com</p></a>
            </div>
          </div><!-- End Info Item -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2066.356267980727!2d50.210176824327746!3d26.29365356833941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1722065959562!5m2!1sen!2ssa" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

</main>
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 11;">
        <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
            <div class="toast-header">
                <strong class="me-auto">إشعار</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            <?php echo $_SESSION["msg_err"]??""?>
            </div>
        </div>
    </div>
    <script>
        if($_SESSION["msg_err"]){
            document.addEventListener('DOMContentLoaded', function () {
            var myToast = new bootstrap.Toast(document.getElementById('myToast'));
            myToast.show();
        });
        }
       
    </script>

<?php endif; ?>