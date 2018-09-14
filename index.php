<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Home</title>
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
<div>
<!--slogan-->
<section class="bg-1 mbr-fullscreen mbr-parallax-background justify-content-center" id="header2-1">
    <!--overlay-->
    <div class="mbr-overlay mbr-overlay-setting"></div>
    <!--content-->
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-12">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1 hidden">
                    <?php	if ($l == "cn") {
                        echo "免疫让我们远离烦恼";
                    }
                    else {
                        echo "VACCINES SAVE LIVES. <br>FEAR ENDANGERS THEM.";
                    }
                    ?>
                </h1>
            </div>
        </div>
    </div>
    <!--arrow-->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<!--Why is immunisation important? -->
<section class="bg-2 mbr-fullscreen mbr-parallax-background justify-content-md-center" id="header2-2">
    <!--overlay-->
    <div class="mbr-overlay mbr-overlay-setting"></div>
    <!--content-->
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <!--title-->
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2 hidden">
                    <?php if ($l == "cn") {
                        echo "为什么免疫是重要的?";
                    }
                    else {
                        echo "Why is immunisation important?";
                    }?>
                </h1>
                <!--description-->
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "免疫接种是保护您的孩子免受严重疾病的简单而有效的方式。通过免疫你的孩子，
                        你不仅可以保证他们健康的未来，还可以通过减少疾病传播来帮助保护更广泛的社区。";
                    } else {
                        echo "Vaccination is an easy and effective way to safe guard your child from serious diseases. By immunising your children, we not only give them a quality start to a healthy future, but also help to protect the broader community by minimising the spread of diseases. ";
                    }
                    ?>
                    <br>
                </p>
                <br></p>

                <!--link-->
                <div class="mbr-section-btn">
                    <a class="btn-mbr btn-mbr-md btn-mbr-secondary display-4 hidden" href="why_immune.php">
                        <?php echo $l == "cn" ? "去查看" : "TELL ME NOW"; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--arrow-->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<!--How to add overseas immunisation records to the Australia Immunisation Register (AIR)?-->
<section class="bg-3 mbr-fullscreen mbr-parallax-background" id="header2-3">
    <!--overlay-->
    <div class="mbr-overlay mbr-overlay-setting"></div>

    <!--content-->
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <!--title-->
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2 hidden">
                    <?php
                    if ($l == "cn") {
                        echo "如何转移海外记录？";
                    }
                    else {
                        echo "How to transfer overseas records?";
                    }
                    ?>
                </h1>

                <!--description-->
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "
在长日托，幼儿园，家庭日托，临时托儿或学校招收您的孩子需要您的孩子完全免疫，并且由澳大利亚免疫登记处（AIR）提供免疫状态证书。移民也可以转移他们现有的记录。";
                    } else {
                        echo "Enrolling your child in long day care, kindergarten, family day care, occasional care or schools requires your child to be completely immunised and provide an immunisation status certificate by Australia Immunisation Register (AIR). Immigrants can also get their existing records transferred.";
                    }
                    ?>
                    <br>
                </p>
                <br></p>
                <!--link-->
                <div class="mbr-section-btn">
                    <a class="btn-mbr btn-mbr-md btn-mbr-secondary display-4 hidden"
                       href="add_overseas_immunisation_records_to_AIR.php">
                        <?php echo $l == "cn" ? "找出如何" : "FIND OUT HOW"; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--arrow-->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<!--How to immunise my child?-->
<section class="mbr-fullscreen mbr-parallax-background bg-4" id="header2-4">
    <!--overlay-->
    <div class="mbr-overlay mbr-overlay-setting"></div>
    <!--content-->
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <!--title-->
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2 hidden">
                    <?php
                    if ($l == "cn") {
                        echo "如何免疫我的孩子?";
                    }
                    else {
                        echo "How to immunise my child?";
                    }
                    ?>
                </h1>
                <!--description-->

                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "
免疫有助于保护你的孩子免受传染病的侵害。在澳大利亚，全国免疫计划为20岁以下的所有儿童和青年提供免费疫苗，包括居住在澳大利亚的难民和其他人道主义参与者。";
                    } else {
                        echo "Immunisation helps to protect your child from infectious diseases. In Australia, National Immunisation Program provides free vaccines for all children and young people up to the age of 20 years, including refugees and other humanitarian entrants living in Australia.";
                    }
                    ?>
                    <br>
                </p>
                <br></p>
                <!--link-->
                <div class="mbr-section-btn">
                    <a class="btn-mbr btn-mbr-md btn-mbr-secondary display-4 hidden" href="to_immunise.php">
                        <?php echo $l == "cn" ? "去免疫" : "IMMUNISE NOW" ?>
                    </a></div>
            </div>
        </div>
    </div>
    <!--arrow-->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<!--How to get immunisation history statement of my child?-->
<section class="mbr-fullscreen mbr-parallax-background bg-5" id="header2-4">
    <!--overlay-->
    <div class="mbr-overlay mbr-overlay-setting"></div>
    <!--content-->
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <!--title-->
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2 hidden">
                    <?php echo $l == "cn" ? "如何获得孩子的免疫历史记录？" : "How to get your child’s immunisation history?"; ?>
                </h1>
                <!--description-->
                <p class="mbr-text pb-3 mbr-fonts-style display-5 hidden">
                    <?php echo $l == "cn" ?
                        "如果孩子不满14岁，你可以得到你的孩子的陈述。
                        这有助于你跟踪你的孩子14岁以下的疫苗，并证明你的孩子已经有了他们需要获得的托儿或学校服务。"
                        : "You can get your child’s statement if they’re under 14. This helps you to keep 
                        track of the vaccines your child’s had up to 14 years of age and prove your child 
                        has had what they need to access child care or school." ?>
                </p>
                <!--link-->
                <div class="mbr-section-btn">
                    <a class="btn-mbr btn-mbr-md btn-mbr-secondary display-4 hidden" href="immunisation_history.php">
                        <?php echo $l == "cn" ? "去获取" : "GET IT NOW"; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--arrow-->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<!--Vaccine-preventable diseases still prevail-->
<section class="bg-6 mbr-fullscreen mbr-parallax-background" id="header2-4">

    <!--overlay-->
    <div class="mbr-overlay mbr-overlay-setting"></div>
    <!--content-->
    <div class="container align-center">

        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <!--title-->
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2 hidden">
                    <?php if ($l == "cn") {
                        echo "疫苗可预防的疾病仍然存在";
                    }
                    else {
                        echo "Vaccine-preventable diseases still prevail";
                    }?>
                </h1>
                <!--description-->
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <?php
                    if ($l == "cn") {
                        echo "根据最近的一项研究，澳大利亚的人们仍然患有疫苗可预防的疾病。在某些情况下，它导致了致命的后果。在澳大利亚，依然有许多人受到这些疾病的困扰。";
                    } else {
                        echo "According to a recent research, people in Australia are still suffering from vaccine-preventable
                    diseases. In some cases, it has led to fatal outcomes.";
                    }
                    ?>
                    <br>
                </p>
                <br></p>

                <!--link-->
                <div class="mbr-section-btn">
                    <a class="btn-mbr btn-mbr-md btn-mbr-secondary display-4 hidden" href="vaccine_preventable_diseases_situation.php">
                        <?php echo $l == "cn" ? "去了解" : "CHECK NOW";?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--arrow-->
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
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
<script src="assets/theme/js/elements_animation.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>