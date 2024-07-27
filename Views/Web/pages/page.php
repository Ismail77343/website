
<main style="margin-top:5%;" class="main">


<?php
// extract();
$route=$_GET["route"];
$data=$ctrl->Sarch_data("page","Where route = '$route'"," ",false,false);


if(isset($data[0])){
    $data      = $data[0];
}else{
    $data=null;
}
if($data != null){
    foreach ($data as $row) {
        

        // print_r($row);
        $id=$row["id"];
        $name=$row["name"]??"";
        $img=$row["img"]??null;
        $subject=$row["subject"]??null;
        $content=$row["content"]??null;
        // if (!empty($img)) {
        //     $imagePath = _Project . "/Views/Web/upload/pages/" . $id . "." . $img;
        //     $content2 = str_replace($imagePath, "{{Uimg}}", $content);
        // }

        // $content2 = str_replace($subject, "{{title}}", $content);

        ?>

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current"><?php echo $name?></li>
            </ol>
            </nav>
            <h1><?php echo $name?></h1>
        </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

        <div class="container">
        <?php echo  $content;?>
            <!-- <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="services-list d-none">
                <a href="#" class="active">Web Design</a>
                <a href="#">Software Development</a>
                <a href="#">Product Management</a>
                <a href="#">Graphic Design</a>
                <a href="#">Marketing</a>
                </div>

                <h4><?php echo $subject?></h4>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <img src="Views/Web/upload/pages/<?php echo $id.".$img"?>" alt="" class="img-fluid services-img">
                <h3><?php echo $subject?></h3>
                <p>
                </p>
                <ul>
                </p>
            </div>

            </div> -->

        </div>

        </section><!-- /Service Details Section -->



        <?php
    }
}
?>

</main>