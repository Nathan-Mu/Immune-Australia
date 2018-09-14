<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <title>To immunise my child, I want to know</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <!--    <link rel="stylesheet" href="assets/animatecss/animate.min.css">-->
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="assets/main/main.css" type="text/css">
</head>
<body>
<?php require_once "php_assets/language_indicator.php" ?>
<?php require_once "php_assets/header.php" ?>

<!--top-->
<section class="mbr-section content5 top-cover" id="content5-1a">
    <div class="mbr-overlay mbr-overlay-setting">
    </div>
</section>

<section class="testimonials4 intro_list" id="testimonials4-64">
    <div class="container">
        <!--title: To immunise my child, I want to know-->
        <h2 class="pb-3 mbr-fonts-style align-center display-2">
            <?php echo $l == "cn" ? "为了给我的孩子免疫，我想知道" : "To immunise my child, I want to know" ?>
        </h2>

        <div class="col-md-10 testimonials-container">

            <!--When should I immunise my child?-->
            <div class="testimonials-item">
                <div class="user row">
                    <!--icon-->
                    <div class="col-lg-3 col-md-4">
                        <div class="user_image">
                            <img src="assets/images/schedule.svg" alt="" title="">
                        </div>
                    </div>
                    <!--main text-->
                    <div class="testimonials-caption col-lg-9 col-md-8">
                        <div class="user_text ">
                            <p class="mbr-fonts-style  display-7">
                                <!--title-->
                                <strong>
                                    <?php echo $l == "cn" ? "我应该什么时候免疫我的孩子？" : "When should I immunise my child?" ?>
                                </strong>
                                <br>
                                <br>
                                <!--description-->
                                <?php echo $l == "cn" ? "在澳大利亚，父母应遵循<a href=\"NIP_schedule.php?l=cn\">全国免疫计划（NIP）时间表</a>以免疫他们的孩子。时间表涵盖了从出生开始直到成年的免疫范围和计划日期。" : "In Australia,&nbsp;
                                parents are following <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>&nbsp;
                                to immunise their children. The schedule covers the immunisations range from birth
                                through to adulthood and their planned dates." ?>
                            </p>
                            <p><a href="NIP_schedule.php<?php echo $l == "cn" ? "?l=cn" : "" ?>">
                                    <?php echo $l == "cn" ? "查看完整的时间表" : "View the complete schedule" ?>
                                </a></p>
                            <br>
                            <p><strong><?php echo $l == "cn" ? "检查我孩子的下一个接种日期（0 - 4岁）" : "Check the next vaccinating date of my child (0 - 4 years old)" ?></strong></p>
                            <div class="row">
                                <label class="margin-all col-md-2"><?php echo $l == "cn" ? "生日：" : "Birth date: " ?></label>
                                <input class="margin-all col-md-4" type="text" readonly class="form-control" id="datepicker">
                                <button class="margin-all col-md-2 btn btn-sm btn-outline-info" type="button" id="check_next_vaccine"><?php echo $l == "cn" ? "查看" : "Check" ?></button>
                            </div>
                            <p id="warning" class="error-msg"></p>
                            <p>
                                <?php echo $l == "cn" ? "如果你的孩子已经超过4岁，请确保他们正在遵循" : "If your child is over 4 years old, please make sure they are following the " ?><?php echo $l == "cn" ? "<a href=\"NIP_schedule.php?l=cn#table1-69\">学校免疫计划</a>" : "<a href=\"NIP_schedule.php#table1-69\">school immunisation programs</a>" ?>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--How much do I need to pay?-->
            <div class="testimonials-item">
                <div class="user row">
                    <!--icon-->
                    <div class="col-lg-3 col-md-4">
                        <div class="user_image">
                            <img src="assets/images/pay.svg" alt="" title="">
                        </div>
                    </div>
                    <!--main text-->
                    <div class="testimonials-caption col-lg-9 col-md-8">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <!--title-->
                                <strong><?php echo $l == "cn" ? "我需要付多少钱？" : "How much do I need to pay?" ?></strong>
                                <br>
                                <br>
                                <!--description-->
                                <?php echo $l == "cn" ? "<a href=\"NIP_schedule.php?l=cn\">国家免疫计划时间表</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会收取咨询费。" :
                                    "All vaccines listed in the <a href=\"NIP_schedule.php\">NIP Schedule</a> are free. However, the health provider (such as your doctor) may charge a consultation fee for the visit." ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Where can I immunise my child?-->
            <div class="testimonials-item">
                <div class="user row">

                    <!--icon-->
                    <div class="col-lg-3 col-md-4">
                        <div class="user_image">
                            <img src="assets/images/hospital.svg" alt="" title="">
                        </div>
                    </div>

                    <!--main text-->
                    <div class="testimonials-caption col-lg-9 col-md-8">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <!--title-->
                                <strong><?php echo $l == "cn" ? "我可以在哪里免疫我的孩子？" :
                                        "Where can I immunise my child?" ?></strong>
                                <br>
                                <br>
                                <!--description-->
                                <?php echo $l == "cn" ? "在澳大利亚，人们可通过以下途径获得疫苗：" :
                                    "In Australia, &nbsp;people can get vaccines through:" ?>
                                <br>
                                <?php echo $l == "cn" ? "- 全科医生" : "- general practices" ?>
                                <br>
                                <?php echo $l == "cn" ? "- 地方理事会或社区卫生诊所" : "- local council or community health clinics" ?>
                                <br>
                                <?php echo $l == "cn" ? "- 原著医疗服务" : "- Aboriginal Medical Services" ?>
                                <br>
                                <?php echo $l == "cn" ? "- 基于学校的免疫程序" : "- school based immunisation programs" ?>
                                <br>
                                <?php echo $l == "cn" ? "- 工作场所" : "- workplaces" ?>
                                <br>
                                <br>
                                <a href="https://www.healthdirect.gov.au/australian-health-services" target="_blank">
                                    <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                                </a>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Vaccines may cause ambiguity in cross-culture-->
            <div class="testimonials-item">
                <div class="user row">
                    <!--icon-->
                    <div class="col-lg-3 col-md-4">
                        <div class="user_image">
                            <img src="assets/images/vaccine.svg" alt="" title="">
                        </div>
                    </div>

                    <div class="testimonials-caption col-lg-9 col-md-8">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <strong>
                                    <?php echo $l == "cn" ? "可能会造成跨文化歧义的疫苗" :
                                        "Vaccines may cause ambiguity in cross-culture" ?>
                                </strong>
                            </p>
                            <p><?php echo $l == "cn" ? "在澳大利亚，有一些疫苗在其他国家不常用或以不同方式使用，包括<a href=\"preventable_diseases.php?l=cn&d=HPV\">人乳头瘤病毒（HPV）</a>疫苗和<a href=\"preventable_diseases.php?l=cn&d=flu\"/>流感</a>疫苗。" :
                                    "In Australia, there are some vaccines not common used or used in different ways in other
                                countries, including <a href=\"preventable_diseases.php?d=HPV\">HPV (human papillomavirus)</a>
                                vaccine and the <a href=\"preventable_diseases.php?d=flu\">flu (influenza)</a> vaccine." ?>
                            </p>
                            <br>
                            <p>
                                <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn&d=HPV\">人类乳头状瘤病毒（HPV）</a>是通过性接触传播的常见病毒。不同类型的HPV影响身体的不同部位。 HPV感染可能严重。它会导致癌症，包括宫颈癌，外阴癌，阴道癌，阴茎癌和肛门癌，以及一些头颈部癌症。某些类型也会导致生殖器疣。 HPV疫苗推荐用于12岁至13岁的<strong>女孩和男孩</strong>。" :
                                    "<a href=\"preventable_diseases.php?l=cn&d=HPV\">HPV (Human papillomavirus)</a> is a common virus that is
                                spread through sexual contact. Different types of HPV affect different parts of the
                                body. HPV infection can be serious. It can cause cancers, including cancer of the
                                cervix, vulva, vagina, penis and anus, and some head and neck cancers. Some types can
                                also cause genital warts. HPV vaccine is recommended for both <strong>girls and
                                    boys</strong> aged 12 to 13 years." ?>
                            </p>
                            <p>
                                <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn&d=HPV\">获取有关HPV疫苗的更多信息</a>" :
                                    "<a href=\"preventable_diseases.php?d=HPV\">Get more information about HPV vaccine</a>" ?>
                            </p>
                            <br>
                            <p>
                                <?php echo $l == "cn" ? "与一些国家，尤其是亚洲国家相比，<a href=\"preventable_diseases.php?l=cn&d=flu\">流感</a>疫苗的使用在澳大利亚非常普遍。流感疫苗可以保护您的孩子免受感染，预防严重疾病。流感病毒株不断变化，因此您的孩子每年需要使用一种新疫苗</strong>，以确保您得到保护。" :
                                    "The use of <a href=\"preventable_diseases.php?d=flu\">flu (influenza)</a> vaccine is very common in Australia, compared to some countries,
                                especially Asian countries. The flu vaccines protect your child from getting infected and
                                prevent serious disease. The flu strains constantly change so your child needs a new vaccine
                                <strong>every year</strong> to make sure you stay protected." ?>
                            </p>
                            <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn&d=HPV\">获取有关流感疫苗的更多信息</a>" :
                                "<a href=\"preventable_diseases.php?d=HPV\">Get more information about the flu vaccine</a>" ?>
                        </div>
                    </div>
                </div>
            </div>



            <!--immunisation exemption-->
            <div class="testimonials-item" id="immunisation_exemption">
                <div class="user row">
                    <div class="col-lg-3 col-md-4">
                        <div class="user_image">
                            <img src="assets/images/exemption.svg" alt="" title="">
                        </div>
                    </div>
                    <div class="testimonials-caption col-lg-9 col-md-8">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <strong><?php echo $l == "cn" ? "我怎样才能为我的孩子获得免疫接种医疗豁免？" : "How can I get a immunisation medical exemption for my child?" ?></strong>
                            </p>
                            <p><?php echo $l == "cn" ? "若不接种疫苗，必须有一个医学上有效的理由。" : "There must be a valid medical reason not to get a vaccine." ?></p>
                            <p><?php echo $l == "cn" ? "只有如下原因你才可以获得疫苗注射豁免，如：如果你" : "The only reasons are if you:" ?></p>
                            <ul>
                                <li><?php echo $l == "cn" ? "先前对疫苗出现过过敏反应" : "had anaphylaxis after a previous dose of a vaccine" ?></li>
                                <li><?php echo $l == "cn" ? "对疫苗的任何成分出现过过敏反应" : "had anaphylaxis after a dose of any component of a vaccine" ?></li>
                                <li><?php echo $l == "cn" ? "明显的免疫功能低下 - 仅适用于活疫苗" : "have a significant immunocompromise - for live vaccines only" ?></li>
                                <li><?php echo $l == "cn" ? "具有天然免疫力 - 仅适用于乙型肝炎，麻疹，腮腺炎，风疹和水痘" : "have natural immunity - for hepatitis B, measles, mumps, rubella and chickenpox only" ?></li>
                            </ul>
                            <p><?php echo $l == "cn" ? "并非每个可以接种疫苗的机构都可以出具免疫接种豁免。免疫接种豁免只能通过以下方式获取：" : "Not everyone who can give a vaccine can grant an exemption. These can only be given by a:" ?></p>
                            <ul>
                                <li><?php echo $l == "cn" ? "职业注册的全科医生（GP），或澳大利亚皇家全科医师学院（RACGP）或澳大利亚农村和远程医学学院（ACRRM）的研究员" :
                                        "general practitioner (GP) that is vocationally registered, or a fellow of the Royal Australian College of General Practitioners (RACGP), or Australian College of Rural and Remote Medicine (ACRRM)" ?></li>
                                <li><?php echo $l == "cn" ? "儿科医师" : "paediatrician" ?></li>
                                <li><?php echo $l == "cn" ? "公共卫生医师" : "public health physician" ?></li>
                                <li><?php echo $l == "cn" ? "传染病医生，或" : "infectious disease physician, or" ?></li>
                                <li><?php echo $l == "cn" ? "临床免疫学家" : "clinical immunologist" ?></li>
                            </ul>
                            <p><?php echo $l == "cn" ? "你的全科医生会知道他们是否在职业登记册上。" : "Your general practitioner will know if they are on the vocational register." ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "php_assets/footer_slogan.php" ?>
<?php require_once "php_assets/footer.php" ?>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/jquery-ui/jquery-ui.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/datepicker/datepicker-4years.js"></script>
<script src="assets/functions/generate_dynamic_href.js"></script>
<!--<script src="assets/functions/next_vaccine.js"></script>-->

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>