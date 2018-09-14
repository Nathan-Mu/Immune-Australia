<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.7.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Situtation of Vaccine-Preventable Diseases</title>
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
    <link rel="stylesheet" href="assets/main/main.css">


</head>
<body>
<?php
require_once("assets/functions/counterNumberGenerator.php");
$counter = new counterNumberGenerator();
$n = $counter->runQuery();
?>

<?php require_once "php_assets/language_indicator.php" ?>
<?php require_once "php_assets/header.php" ?>

<!--top-->
<section class="mbr-section content5 top-cover" id="content5-1a">
    <div class="mbr-overlay mbr-overlay-setting">
    </div>
</section>

<div class="bg">
    <!-- counter -->
    <section class="counters1 counters cid-qPUAiGdZwu" id="counters1-5e">
        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                <?php
                if ($l == "cn") {
                    echo "疫苗可预防疾病现状";
                } else {
                    echo "Situation of Vaccine-Preventable Diseases";
                }
                ?>

            </h2>
            <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
                <?php
                if ($l == "cn") {
                    echo "在2016 - 17年度，仍然有很多人受到疫苗可预防疾病的困扰";
                } else {
                    echo "In 2016-17, a lot of people were still suffering from vaccine-preventable diseases";
                }
                ?>

            </h3>
            <div class="container pt-4 mt-2">
                <div class="row bg-white">
                    <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                        <div class="panel-item p-3">
                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    <!--                                20968-->
                                    <?php
                                    if (isset($n[0])) {
                                        $s = $n[0];
                                        echo $n[0];
                                    }
                                    ?>
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                <span style="font-weight: normal;">
                                    <?php
                                    if ($l == "cn") {
                                        echo "人确诊为疫苗可预防疾病";
                                    } else {
                                        echo "persons diagnosed by vaccine-preventable dieases";
                                    }
                                    ?>

                                </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                        <div class="panel-item p-3">
                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    <!--                                20037-->
                                    <?php
                                    if (isset($n[1])) {
                                        echo $n[1];
                                    }
                                    ?>
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                <span style="font-weight: normal;">
                                    <?php
                                    if ($l == "cn") {
                                        echo "人确诊为百日咳";
                                    } else {
                                        echo "persons diagnosed by whooping cough";
                                    }
                                    ?>

                                </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                        <div class="panel-item p-3">

                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    <!--                                195-->
                                    <?php
                                    if (isset($n[2])) {
                                        echo $n[2];
                                    }
                                    ?>
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7"><span
                                            style="font-weight: normal;">
                                    <?php
                                    if ($l == "cn") {
                                        echo "人死于疫苗可预防疾病";
                                    } else {
                                        echo "persons dead caused by vaccine-preventable diseases";
                                    }
                                    ?>

                                </span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                        <div class="panel-item p-3">
                            <div class="card-texts">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    <!--                                97-->
                                    <?php
                                    if (isset($n[3])) {
                                        echo (int)$n[3];
                                    }
                                    ?>
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                <span style="font-weight: normal;">
                                    <?php
                                    if ($l == "cn") {
                                        echo "人死于乙型肝炎";
                                    } else {
                                        echo "persons dead caused by Hepatitis B";
                                    }
                                    ?>
                                </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section content6 cid-qPUGYBqXIq" id="content6-5f">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="media-container-row  bg-white">
                        <div class="media-content padding-all">
                            <div class="mbr-section-text">
                                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                                    <?php
                                    if ($l == "cn") {
                                        echo "澳大利亚的居民拥有格外好的医疗设施，但澳大利亚依然盛行疫苗可预防的疾病，许多人仍然患有疫苗可预防的疾病。仅在2016-17年，就有超过20,000人被诊断患有疫苗可预防的疾病，其中大多数是百日咳或百日咳患者。不幸的是，近200人死于这些疾病，其中97人是乙型肝炎患者，73人是肺结核患者。";
                                    } else {
                                        echo "Australia has exceptionally good medical facilities for its residents yet vaccine-preventable diseases still prevail in Australia and many people are still suffering from vaccine-preventable diseases. In 2016-17 alone, more than 20,000 people were diagnosed with vaccine-preventable diseases, out of which most of them were pertussis or whooping cough patients. Unfortunately, almost 200 people died due to these diseases, of which 97 were hepatitis B patients, and 73 were tuberculosis patients.";
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once "php_assets/footer_slogan.php" ?>
<?php require_once "php_assets/footer.php" ?>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>