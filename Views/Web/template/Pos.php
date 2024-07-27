<?php
if(isset($_GET["ar"])):

?>
<main style="margin-top:5%;" class="main">
    <!-- عنوان الصفحة -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">الرئيسية</a></li>
                    <li class="current">نظام نقاط البيع</li>
                </ol>
            </nav>
            <h1>نظام نقاط البيع</h1>
        </div>
    </div><!-- نهاية عنوان الصفحة -->

    <!-- قسم تفاصيل الخدمة -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        <a href="#" class="active">نظام نقاط البيع</a>
                    </div>
                    <h4>نقاط البيع</h4>
                    <p>يتوافق نظام نقاط البيع من ERPALFras مع أي جهاز، وهو سهل الاستخدام، مرن للغاية ومتكامل بالكامل مع المخزون لإدارة التجزئة في الوقت الفعلي. كما يعمل عبر الإنترنت.</p>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo _Project . "/Views/Web/upload/pages/1.jpeg"?>" alt="" class="img-fluid services-img">
                    <h3>بيع أسرع باستخدام برنامج ERP للتجزئة البسيط والفعال</h3>
                    <p>
                        قياس، إدارة، وبيع المزيد من خلال حل سحابي شامل يساعدك على تبسيط إدارة التجزئة، تتبع المخزون، إدارة العملاء، وزيادة ربحية الأعمال.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span> بيع أسرع باستخدام برنامج ERP للتجزئة البسيط والفعال.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span> تخصيصات سريعة.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span> اكتساب العملاء والحصول على ولائهم.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span> إعادة تعبئة المخزون تلقائيًا.</span></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
</main>

<?php else: ?>

<main style="margin-top:5%;" class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">POS System</li>
            </ol>
            </nav>
            <h1>POS System</h1>
        </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
                <a href="#" class="active">POS System</a>

            </div>

            <h4>POS</h4>
            <p> Compatible with any device, ERPALFras' POS software is easy to use, highly flexible and fully integrated with inventory for real-time retail management. It even works online.
                .</p>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src= "<?php echo _Project . "/Views/Web/upload/pages/1.jpeg"?>" alt="" class="img-fluid services-img">
            <h3> Sell ​​faster with simple yet effective retail ERP software            </h3>
            <p>
                Measure, manage, and sell more with a comprehensive cloud solution to help you simplify retail management, track inventory, manage customers, and increase business profitability
                .
            </p>
            <ul>
                <li><i class="bi bi-check-circle"></i> <span> Sell ​​faster with simple yet effective retail ERP software
                .</span></li>
                <li><i class="bi bi-check-circle"></i> <span>  Quick customizations

                .</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Acquire customers and gain their loyalty
                </span></li>
                <li><i class="bi bi-check-circle"></i> <span> Automatic stock replenishment
                </span></li>
            </ul>

            </div>

            </div>
        </div>
    </section>
</main>

<?php endif; ?>