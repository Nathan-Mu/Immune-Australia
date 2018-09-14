<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.7.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="Website Builder Description">
    <title>NIP Schedule</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/main/main.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


</head>
<body>

<?php require_once "php_assets/language_indicator.php" ?>
<?php require_once "php_assets/header.php" ?>
<?php require_once "php_assets/disease_indicator.php" ?>
<div class="bg">
<!--top-->
<section class="mbr-section content5 top-cover" id="content5-1a">
    <div class="mbr-overlay mbr-overlay-setting">
    </div>
</section>

<div class="container d-flex custom-title justify-content-center display-7">
    <div class="col-md-10 col-12 immunisation-history">
        <!--title-->
        <div class="custom-block">
            <h2 class="pb-3 mbr-fonts-style align-center display-2">
                <?php echo $l == "cn" ? "获得免疫历史记录" : "Get immunisation history statement"?>
            </h2>
        </div>

        <!--index-->
        <div class="custom-block">
            <blockquote>
                <ul class="question-list">
                    <li>
                        <?php echo $l == "cn" ? "在此页" : "In this page:"?>
                    </li>
                    <li><a href="immunisation_history.php#step1">
                            <?php echo $l == "cn" ? "第1步：登录" : "Step 1: sign in"?>

                        </a></li>
                    <li><a href="immunisation_history.php#step2">
                            <?php echo $l == "cn" ? "第2步：选择您想要查看声明的人" : "Step 2: select the person you want to view a statement for"?>
                            </a></li>
                    <li><a href="immunisation_history.php#step3">
                            <?php echo $l == "cn" ? "第3步：查看免疫历史陈述" : "Step 3: view the immunisation history statement"?>
                            </a>
                    </li>
                    <li><a href="immunisation_history.php#step4">
                            <?php echo $l == "cn" ? "第4步：请求新的声明或返回到在线帐户" : "Step 4: request new statement or return to online
                            account"?>
                            </a></li>
                    <li><a href="immunisation_history.php#step5">
                            <?php echo $l == "cn" ? "第5步：退出" : "Step 5: sign out"?>
                            </a></li>
                </ul>
            </blockquote>
        </div>

        <!--alert-->
        <div class="alert alert-info custom-block" role="alert">
            <?php echo $l == "cn" ? "注意：14岁及以上的儿童需要创建自己的<a href=\"https://my.gov.au/\"> myGov </a>帐户并链接到Medicare以访问其免疫历史记录声明。" : "Note: Children, 14 years and over will need to create their own <a href=\"https://my.gov.au/\">myGov</a>
            account and link to Medicare to access their Immunisation History statement."?>

        </div>

        <!--Step 1: sign in-->
        <div id="step1" class="biased-anchor custom-block">
            <h3><?php echo $l == "cn" ? "第1步：登录" : "Step 1: sign in"?></h3>
            <p>
                <?php echo $l == "cn" ? "转到myGov并打开您的<strong> Medicare </strong>关联服务。从页面或主菜单中选择<strong>免疫历史记录声明</strong>。" : "Go to myGov and open your <strong>Medicare</strong> linked service. Select <strong>Immunisation history
                    statement</strong> from the page or the main menu."?>
            </p>
            <img src="assets/images/immunisation-history-step1.jpg">
        </div>

        <div id="step2" class="biased-anchor custom-block">
            <h3>
                <?php echo $l == "cn" ? "第2步：选择您想要查看声明的人" : "Step 2: select the person you want to view a statement for"?>

            </h3>
            <?php echo $l == "cn" ? "<p>选择您希望查看其声明的<strong>人的姓名</strong>，然后阅读声明和
                勾选该框以确认您的理解。</p><p>选择<strong>查看声明</strong>继续。</p>" :
                "<p>Select the <strong>person’s name whose statement you wish to view</strong>, 
                then read the Declaration and tick the box to confirm you understand.</p>
                <p>Select <strong>VIEW STATEMENT</strong> to continue.</p>"?>
            <img src="assets/images/immunisation-history-step2.jpg">
        </div>

        <div id="step3" class="biased-anchor custom-block">
            <h3><?php echo $l == "cn" ? "第3步：查看免疫历史陈述" : "Step 3: view the immunisation history statement"?>

            </h3>
            <?php echo $l == "cn" ? "<p>如果您想打印或下载该声明，请选择<strong>免疫历史声明的PDF版本</strong>，
            然后选择<strong>打开</strong>打印或<strong>保存。</strong> </p>" : "<p>The Immunisation history 
            statement will display.</p>
            <p>If you would like to print or download the statement, select <strong>PDF version of the Immunisation
                    History Statement</strong> and select <strong>Open</strong> to print or <strong>Save.</strong></p>
            <img src=\"assets/images/immunisation-history-step3.jpg\">
            <p>Please note: The PDF may look different depending on the browser you’re using.</p>"?>

        </div>

        <div id="step4" class="biased-anchor custom-block">
            <h3>
                <?php echo $l == "cn" ? "第4步：请求新的声明或返回到在线帐户" : "Step 4: request new statement or return to online account"?>
            </h3>
            <?php echo $l == "cn" ? "
<p>查看该声明后，您可以：</p>
            <ul class =“lower-alpha-ul”>
                <li> <strong>请求新语句</strong>以获取其他人的免疫接种记录声明
                    在你的医疗卡上，或者
</li>
                <li> <strong>返回在线帐户</strong>返回您的Medicare在线帐户主页。</li>
            </ul>" : "<p>Once you’ve viewed the statement, you can either:</p>
            <ul class=\"lower-alpha-ul\">
                <li><strong>Request New Statement</strong> to get the Immunisation history statement of another person
                    on your Medicare card, or
                </li>
                <li><strong>RETURN TO ONLINE ACCOUNT</strong> to return to your Medicare online account homepage.</li>
            </ul>"?>

            <img src="assets/images/immunisation-history-step4.jpg">
        </div>

        <div id="step5" class="biased-anchor custom-block">
            <h3><?php echo $l == "cn" ? "第5步：退出" : "Step 5: sign out"?></h3>
            <?php echo $l == "cn" ? "
<p>在您的主页上，您可以完成其他交易。 </p>
            <p>选择<strong>返回<a href=\"https://my.gov.au/\"> myGov </a> </strong>转至您的<a
                        href =“https://my.gov.au/”> myGov </a>帐户。</p>" : "<p>From your homepage you can complete other transactions. </p>
            <p>Select <strong>Return to <a href=\"https://my.gov.au/\">myGov</a></strong> to go to your <a
                        href=\"https://my.gov.au/\">myGov</a> account.</p>"?>

            <img src="assets/images/welcome-medicare-online-step5.jpg">
        </div>

        <div class="alert alert-warning custom-block" role="alert">
            <?php echo $l == "cn" ? "为了您的隐私和安全，请在完成使用<a href =“https://my.gov.au/”> myGov </a>帐户。" : "For your privacy and security, sign out when you’ve finished using your <a
                    href=\"https://my.gov.au/\">myGov</a> account."?>

        </div>
    </div>
</div>
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
<script src="assets/datatables/jquery.data-tables.min.js"></script>
<script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/main/main.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>