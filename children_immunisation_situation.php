<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Children Immunisation Situation</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/main/main.css">


</head>
<body>
<?php
require_once("assets/functions/percentageGenerator.php");
$p = new percentageGenerator();
$result = $p->runQuery();
?>
<?php require_once "php_assets/language_indicator.php" ?>
<?php require_once "php_assets/header.php" ?>

<section class="engine"><a href="https://mobirise.ws">Mobirise</a></section>

<!--top-->
<section class="mbr-section content5 top-cover" id="content5-1a">
    <div class="mbr-overlay mbr-overlay-setting">
    </div>
</section>

<!-- How Many Children are Fully Immunised? -->
<section class="progress-bars3 cid-qPRxDjpDYL" id="progress-bars3-4t">
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            <?php
            if ($l == "cn") {
                echo "有多少孩子是完全免疫的";
            } else {
                echo "How many children are fully immunised?";
            }
            ?>

        </h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            <?php echo $l == "cn" ? "在2016-17年度，在澳大利亚大约有百分之七的孩子没有完全免疫" :
                "In 2016-17, about 7% of children in Australia are still not fully immunised"?>
        </h3>
        <div class="media-container-row pt-4 mt-4 bg-white">
            <div class="card p-3 align-center">
                <div class="wrap">
                    <?php
                    echo "<div class=\"pie_progress progress1\" role=\"progressbar\" data-goal=\"" . $result[0] . "\">
                            <p class=\"pie_progress__number mbr-fonts-style display-5\"></p>
                        </div>"
                    ?>

                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        <?php
                        if ($l == "cn") {
                            echo "1岁的孩子";
                        } else {
                            echo "1-year-children";
                        }
                        ?>

                    </h4>
                </div>
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <?php
                    echo "<div class=\"pie_progress progress2\" role=\"progressbar\" data-goal=\"" . $result[1] . "\">
                            <p class=\"pie_progress__number mbr-fonts-style display-5\"></p>
                        </div>"
                    ?>

                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        <?php
                        if ($l == "cn") {
                            echo "2岁的孩子";
                        } else {
                            echo "2-year-children";
                        }
                        ?>

                    </h4>
                </div>
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <?php
                    echo "<div class=\"pie_progress progress3\" role=\"progressbar\" data-goal=\"" . $result[2] . "\">
                            <p class=\"pie_progress__number mbr-fonts-style display-5\"></p>
                        </div>";
                    ?>

                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        <?php
                        if ($l == "cn") {
                            echo "5岁的孩子";
                        } else {
                            echo "5-year-children&nbsp;";
                        }
                        ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <p class="mbr-fonts-style display-6 mbr-text mb-0 padding-all">
                <?php
                if ($l == "cn") {
                    echo "如果一个社区有足够的人免疫传染病，社区内的疾病就会减少，这使得疾病更难传播。
                    免疫接种可以保护接种疫苗的人员，也可以帮助整个社区。它有助于保护那些年龄太小而不能
                    接种疫苗的人以及那些因医疗原因而无法接种疫苗的人。这被称为社区（畜群）免疫力。
                    <br><br>2017年的澳大利亚儿童健康调查显示，2000名父母中有近7％的儿童未完全接种疫苗。
                    尽管这个数字似乎并不大，但该研究还显示，5％没有完全免疫，三名父母中有一人担心接种疫苗，
                    十分之一的父母认为疫苗可能会给子女带来某些其他健康问题。像这样的问题并不能帮助畜群免疫运动，
                    对于像麻疹这样的疾病，要求至少有90％至95％的人口需要接种疫苗，以便从社区进行照射。";
                } else {
                    echo "If enough people in a community are immunised against an infectious disease, 
                there is less of the disease in the community, which makes it harder for the disease 
                to spread. Immunisation protects both people who are vaccinated and also helps the 
                entire community. It helps protect those who are too young to be vaccinated and those 
                who can't be vaccinated for medical reasons. This is known as community (herd) immunity. 
                <br><br>Australian Child Health Poll in 2017 of 2,000 parents found that almost 7% of 
                children in Australia were not fully vaccinated. Although the number does not seem that 
                big, the study also showed that 5% were not completely immunized, one of three parents 
                held concerns about vaccination and one in ten parents believed that vaccines may cause 
                certain other health problems with their children. Issues like these are not helping the 
                herd immunity movement  and for a disease like measles it is required that at least 90 
                to 95% of the population needs to be immunised against it for it to be irradiated from a 
                community.";
                }
                ?>

            </p>
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
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>