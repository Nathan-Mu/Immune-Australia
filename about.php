<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <title>About</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<!--header & define language-->
<?php require_once "php_assets/language_indicator.php" ?>
<?php require_once "php_assets/header.php" ?>

<!--top-->
<section class="mbr-section content5 top-cover" id="content5-1a">
    <div class="mbr-overlay mbr-overlay-setting">
    </div>
</section>



<section class="features13 cid-qPUIER70zy" id="features13-5h">
    <div class="container">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
            <?php
            if ($l == "cn") {
                echo "关于我们";
            }
            else {
                echo "About us";
            }
            ?>

        </h2>
        <div class="media-container-row container">
            <div class="card col-12 col-md-6 p-5 m-3 align-center col-lg-4">
                <div class="card-img">
                    <img src="assets/images/jumbotron.jpg">
                </div>
                <h4 class="card-title py-2 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "我们的项目";
                    }
                    else {
                        echo "Our Project";
                    }
                    ?>

                </h4>
                <p class="mbr-text mbr-fonts-style display-7">
                    <?php
                    if ($l == "cn") {
                        echo " 该项目旨在提供一个网络应用程序，使澳大利亚获得群体豁免权。";
                    }
                    else {
                        echo "This project aims to deliver a web application that will take Australia towards herd immunity.";
                    }
                    ?>

                </p>
            </div>
            <div class="card col-12 col-md-6 p-5 m-3 align-center col-lg-4">
                <div class="card-img">
                    <img src="assets/images/jumbotron2.jpg">
                </div>
                <h4 class="card-title py-2 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "我们的价值";
                    }
                    else {
                        echo "Our Value";
                    }
                    ?>

                </h4>
                <p class="mbr-text mbr-fonts-style display-7">
                    <?php
                    if ($l == "cn") {
                        echo "我们的价值观反映了我们的目标，优先事项和我们自己的信念。他们定义了什么意思在K团队一起工作！";
                    }
                    else {
                        echo "Our values reflect our purpose, our priorities and the beliefs by which we conduct ourselves. They
                    define what it means to work together in Team Ka-Ching!!!";
                    }
                    ?>

                </p>
            </div>
            <div class="card col-12 col-md-6 p-5 m-3 align-center col-lg-4">
                <div class="card-img">
                    <img src="assets/images/background5.jpg">
                </div>
                <h4 class="card-title py-2 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "我们的方法";
                    }
                    else {
                        echo "Our Approach";
                    }
                    ?>
                </h4>
                <p class="mbr-text mbr-fonts-style display-7">
                    <?php
                    if ($l == "cn") {
                        echo "
我们的方法培养了我们所有员工的最高专业水平和精神，同时不损害他们的安全和福祉。";
                    }
                    else {
                        echo "Our approach fosters the highest level of professionalism and spirit in all our people while never
                    compromising on their safety and well-being.";
                    }
                    ?>

                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once "php_assets/footer_slogan.php" ?>
<?php require_once "php_assets/footer.php" ?>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>