<?php
use  Controller\Controller\Control;
$data=$ctrl->Get_Data("info_web",array("name","address","address","phone","about"),"");
$_Name=$data["name"][0];
$_address=$data["address"][0];
$_phone=$data["phone"][0];
$_about=$data["about"][0];
define("_Web_Name",$_Name);



function geturl(){
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host
$host = $_SERVER['HTTP_HOST'];

// Get the request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Combine the parts to get the full URL
$currentUrl = $protocol . $host . $requestUri;

return $currentUrl;
}
?>
<!DOCTYPE html>
<?php
$dir="";
if(isset($_GET["ar"])):
  $dir="dir='rtl'";
?>
<html lang="en">
<?php else: ?>
  <html lang="ar">

  <?php endif?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Arsha Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo _Project."/"?>Views/Web/assets/img/erpnext-logo.png" rel="icon">
  <link href="<?php echo _Project."/"?>Views/Web/assets/img/erpnext-logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <?php
  if(isset($_GET["ar"])):
  ?>
    <link href="<?php echo _Project."/"?>Views/Web/assets/vendor/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet">
  <?php else: ?>
    <link href="<?php echo _Project."/"?>Views/Web/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <?php endif?>
  <link href="<?php echo _Project."/"?>Views/Web/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo _Project."/"?>Views/Web/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo _Project."/"?>Views/Web/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo _Project."/"?>Views/Web/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo _Project."/"?>Views/Web/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
 .swiper-slide .img-fluid{
    height:50px;
  }
  .swiper-slide h6{
    text-align:center;
  }

</style>
</head>

<body class="index-page" <?php echo $dir ?>>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
    <?php
    $sh="";
    if(isset($_GET["ar"]))
      $sh="ar";
    ?>
      <a href="<?php  echo Pro."/".$sh?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?php echo _Project."/"?>Views/Web/assets/img/logo.png" alt=""> -->
        <img src="<?php echo _Project."/"?>Views/Web/assets/img/erpnext-logo.png" alt="">

        <h3 class="sitename"> 
          ErpAlfras 
        </h3>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <?php
$data=$ctrl->Sarch_data("menu","Where parent is NULL","  Order By prop ASC ",false,false,"LEFT JOIN page ON page.id=menu.page",",`page`.route");
if(isset($data[0])){
    $data      = $data[0];
}else{
    $data=null;
}
if($data != null){
    foreach ($data as $row) {
        // print_r($row);
        $group=$row["group"];
        $id=$row["id"];
        $url=$row["url"];
        $page=$row["page"];
        $route=$row["route"];
        $post=$row["post"];
        $_url=$page!=null ?_Project."/page/".$route: $url;

        if(isset($_GET["ar"])){
          $_url=str_replace(Pro."/ar",Pro."/ar/",$_url);
          $_url=str_replace(Pro."/",Pro."/ar/",$_url);
          // echo $_url;

        }
        else{
          $_url=str_replace(Pro."/ar",Pro."/",$_url);

        }

        if($group==true){
            ?>
            <li class="dropdown"><a href="<?php echo $_url?>"><span><?php echo isset($_GET["ar"])?$row["name_ar"]:$row["name"]; ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <?php
                $data2=$ctrl->Sarch_data("menu","Where `menu`.`parent` ='$id'"," Order By prop ASC ",false,false," LEFT JOIN `page` ON `page`.id=menu.`page` ",",`page`.route");
                // echo ". LEFT JOIN `page` ON `page`.id=menu.`page`";
                if(isset($data2[0])){
                    $data2      = $data2[0];
                }else{
                    $data2=null;
                }
                if($data2 != null){
                    foreach ($data2 as $row2) {
                        $url=$row2["url"]??null;
                        $page=$row2["route"]??null;
                        $post=$row2["post"]??null;
                        $_url=$page!=null ?_Project."/page/".$page: $url;

                        if(isset($_GET["ar"])){
                          $_url=str_replace(Pro."/ar",Pro."/ar/",$_url);
                          $_url=str_replace(Pro."/",Pro."/ar/",$_url);
                        }
                        else{
                          $_url=str_replace(Pro."/ar/",Pro."/",$_url);
                        }
                        ?>
                        <li><a href="<?php echo $_url?>"><?php echo isset($_GET["ar"])?$row2["name_ar"]:$row2["name"]; ?></a></li>
                        <?php
                    }
                }
                ?>
            </ul>
            </li>
            <?php
        }else{
            ?>
            <li><a href="<?php echo $_url?>" class="active"><?php echo isset($_GET["ar"])?$row["name_ar"]:$row["name"]; ?></a></li>
            <?php
        }
        ?>

        <?php
    }
}
            ?>
          <!-- <li><a href="#hero" class="active">Business Types</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">POS System</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">POS System</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">POS System</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#services">Features</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#team">Partnering with ERPALFRAS</a></li>
          <li><a href="#contact">Contact</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <?php
      $url=geturl();
      if(isset($_GET["ar"])){
        ?>
        <?php
        $url=str_replace(Pro."/ar",Pro."/",$url);


        ?>
        <a class="btn-getstarted" href="<?php echo $url ?>">English</a>

        <?php
      }
      else{
        $url=str_replace(Pro."/ar",Pro."/ar/",$url);
        $url=str_replace(Pro."/",Pro."/ar/",$url);
        ?>
        <a class="btn-getstarted" href="<?php echo $url ?>">عربي</a>

        <?php
      }
      
      ?>
      <a class="btn-getstarted" href="<?php echo _Project ?>/#contact">Get Started</a>

    </div>
  </header>



   