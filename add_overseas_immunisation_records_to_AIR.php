<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Transfer overseas immunisation records</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/functions/check_immunisation_book.css" type="text/css">
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="assets/functions/pop_up_window.css" type="text/css">
    <link rel="stylesheet" href="assets/main/main.css">

</head>
<body>

<?php require_once "php_assets/language_indicator.php" ?>
<?php require_once "php_assets/header.php" ?>

<!--top-->
<section class="mbr-section content5 top-cover" id="content5-1a">
    <div class="mbr-overlay mbr-overlay-setting">
    </div>
</section>

<!--steps for transfering overseas records-->
<section class="timeline1 cid-qPLN3cfYam" id="timeline1-2c">
    <div class="container align-center">
        <!--heading: Transfer overseas immunisation records-->
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
            <?php echo $l == "cn" ? "转移海外免疫记录" : "Transfer overseas immunisation records"; ?>
        </h2>

        <!--subheading: You just need to follow 3 simple steps-->
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">
            <?php echo $l == "cn" ? "你只需要跟随步骤" : "You just need to follow 3 simple steps"; ?>
        </h3>

        <!--steps-->
        <div class="container timelines-container" mbri-timelines="">

            <!--step1: Prepare the document-->
            <div class="row timeline-element reverse separline">
                <!--step tag-->
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "第一步：准备文件";
                            } else {
                                echo "Step 1. Prepare the document";
                            }
                            ?>

                        </p>
                    </div>
                </div>
                <!--<span class="iconBackground"></span>-->
                <!--description-->
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "<strong>查找您孩子以前的免疫记录</strong>";
                            } else {
                                echo "<strong>Find your child's previous immunisation records</strong>";
                            }
                            ?>
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            <?php
                            if ($l == "cn") {
                                echo "首先，你要准备你孩子的海外免疫记录。";
                            } else {
                                echo "You need to have your child's overseas immunisation record documents.";
                            }
                            ?>

                            <br>
                            <br>
                            <a href="add_overseas_immunisation_records_to_AIR.php#testimonials4-2h">
                                <?php
                                if ($l == "cn") {
                                    echo "我在哪里可以找到我孩子的海外免疫记录？";
                                } else {
                                    echo "Where can I find my child's overseas immunisation records?";
                                }
                                ?>
                            </a>
                            <br>
                            </a>
                            <br>
                        </p>
                    </div>
                </div>
            </div>

            <!--step2: Translate the document-->
            <div class="row timeline-element  separline">
                <!--step tag-->
                <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "第二步：翻译文件";
                            } else {
                                echo "Step 2. Translate the document";
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <!--<span class="iconBackground"></span>-->
                <!--description-->
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "<strong>你可能需要翻译文件</strong>";
                            } else {
                                echo "<strong>You might also need to translate the document</strong>";
                            }
                            ?>

                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            <?php
                            if ($l == "cn") {
                                echo "如果文件不是英文的，你需要把它翻译成英文。免费翻译服务可以帮助你";
                            } else {
                                echo "If the document is not in English you will be required to get it translate into English. Department of social service provides free translation services.";
                            }
                            ?>

                            <br>
                            <br>
                            <a href="add_overseas_immunisation_records_to_AIR.php#what_is_the_free_translation">
                                <?php
                                if ($l == "cn") {
                                    echo "什么是免费翻译服务？";
                                } else {
                                    echo "What is the Free Translation Service?";
                                }
                                ?>

                            </a>
                            <br>
                        </p>
                    </div>
                </div>
            </div>

            <!--step3: Update the Australian Immunisation Register (AIR)-->
            <div class="row timeline-element reverse separline">
                <!--step tag-->
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "第三步：更新澳大利亚人免疫注册（AIR）";
                            } else {
                                echo "Step 3. Update the Australian Immunisation Register (AIR)";
                            }
                            ?>
                            <br>
                        </p>
                    </div>
                </div>
                <!--<span class="iconBackground"></span>-->
                <!--description-->
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "<strong>向全科医生或地方议会展示您的记录</strong>";
                            } else {
                                echo "<strong>Show your records to your general practitioner or local councils</strong>";
                            }
                            ?>
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            <?php
                            if ($l == "cn") {
                                echo "同时，您可以要求他们更新澳大利亚免疫注册表（AIR）。<br><br>他们将会帮助你：<br>
                                    - 检查您的疫苗是否符合卫生部网站上的全国免疫计划（NIP）时间表<br>如果你错过了任何疫苗，该如何赶上
                                    <br>- 更新AIR<br>
                            <br>";
                            } else {
                                echo "They will help you to update the records to Australia Immunisation Register. <br><br>They
                            will also help you to:
                            <br>
                            - check if the vaccines you've had matches the National Immunisation Program (NIP) Schedule on the Department of Health website
                            <br>- tell you how to catch up if you're missing any vaccine
                            <br>
                            <br>";
                            }
                            ?>

                            <a href="add_overseas_immunisation_records_to_AIR.php#what_is_the_air">
                                <?php
                                if ($l == "cn") {
                                    echo "什么是澳大利亚免疫登记册？";
                                } else {
                                    echo "What is Australian Immunisation Register? ";
                                }
                                ?>

                            </a>
                            <br>
                            <a href="add_overseas_immunisation_records_to_AIR.php#what_is_the_nip_schedule">
                                <?php
                                if ($l == "cn") {
                                    echo "什么是全国免疫计划时间表？";
                                } else {
                                    echo "What is National Immunisation Program Schedule? ";
                                }
                                ?>

                            </a>
                            <br/>
                            <a href="add_overseas_immunisation_records_to_AIR.php#check_vaccines">
                                <?php
                                if ($l == "cn") {
                                    echo "你的孩子可能服用或需要哪种疫苗？";
                                } else {
                                    echo "Which vaccines your child might have taken or need?";
                                }
                                ?>
                            </a>

                        </p>
                    </div>
                </div>
            </div>

            <!--complete-->
            <div class="row timeline-element ">
                <!--complete tag-->
                <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            <?php
                            if ($l == "cn") {
                                echo "完成";
                            } else {
                                echo "Complete";
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <!--<span class="iconBackground"></span>-->
                <!--description-->
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            <strong>
                                <?php
                                if ($l == "cn") {
                                    echo "您将成功将以前的免疫记录添加到AIR";
                                } else {
                                    echo "You will have successfully transferred the overseas immunisation records to the AIR";
                                }
                                ?>
                            </strong>
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            <?php
                            if ($l == "cn") {
                                echo "AIR更新后，疫苗将在您的免疫史记录声明中。";
                            } else {
                                echo "After the AIR is updated, you will be able to find your child's overseas record in their <a href=\"immunisation_history.php\">Immunisation History Statement.</a>";
                            }
                            ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FAQ-->
<section class="testimonials4 cid-qPM78jjJnt" id="testimonials4-2h">
    <div class="container">
        <!--title-->
        <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2">FAQ</h2>

        <div class="col-md-10 testimonials-container">
            <!--Where can I find my child's overseas immunisation records?-->
            <div class="testimonials-item">
                <div class="user row">
                    <div class="testimonials-caption">
                        <div class="user_text ">
                            <p class="mbr-fonts-style display-7">
                                <strong>
                                    <?php
                                    if ($l == "cn") {
                                        echo "我在哪里可以找到我孩子的海外免疫记录？";
                                    } else {
                                        echo "Where can I find my child's overseas immunisation records?";
                                    }
                                    ?>
                                </strong>
                                <br>
                                <br>
                                <?php
                                if ($l == "cn") {
                                    echo "它因国而异。在大多数国家，这些记录可以在免疫书中找到。与此同时，一些国家也使用在线服务，如澳大利亚的澳大利亚免疫登记表追踪免疫接种史。您可以在下面查看来自中国，德国，印度，马来西亚，新西兰，菲律宾，南非，英国和越南等移民的顶级母国的免疫书样本。";
                                } else {
                                    echo "It varies from country to country. In most countries, these records can be found in an immunisation book. Meanwhile, some countries also use online services, like the Australian Immunisation Register in Australia for tracking immunisation history. Below you can check some sample of immunisation books from the top parent countries for immigrants including China, Germany, India, Malaysia, New Zealand, Philippines, South Africa, UK and Vietnam.";
                                }
                                ?>
                            </p>

                            <!--label: Please choose your country:-->
                            <p><?php echo $l == "cn" ? "请选择你的国家：" : "Please choose your country:" ?></p>
                            <!--dropdown, button & result-->
                            <div class="row">
                                <!--options-->
                                <select id="immunisation_records_options"
                                        class="custom-select col-12 col-md-4 margin-all">
                                    <option value="CHN"><?php echo $l == "cn" ? "中国" : "China" ?></option>
                                    <option value="DEU"><?php echo $l == "cn" ? "德国" : "Germany" ?></option>
                                    <option value="IND"><?php echo $l == "cn" ? "印度" : "India" ?></option>
                                    <option value="MYS"><?php echo $l == "cn" ? "马来西亚" : "Malaysia" ?></option>
                                    <option value="NZL"><?php echo $l == "cn" ? "新西兰" : "New Zealand" ?></option>
                                    <option value="PHL"><?php echo $l == "cn" ? "菲律宾" : "Philippines" ?></option>
                                    <option value="ZAF"><?php echo $l == "cn" ? "南非" : "South Africa" ?></option>
                                    <option value="GBR"><?php echo $l == "cn" ? "英国" : "UK" ?></option>
                                    <option value="VNM"><?php echo $l == "cn" ? "越南" : "Vietnam" ?></option>
                                </select>

                                <!--check button-->
                                <button onclick="show()" class="btn btn-outline-info btn-sm col-12 col-md-2 margin-all">
                                    <?php echo $l == "cn" ? "检查" : "Check" ?>
                                </button>
                                <br/>

                                <!--image-->
                                <a id="immunisation_books" href="">
                                    <img class="immunisation_books" id="immunisation_book" src=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--anchor-->
                    <div id="what_is_the_free_translation"></div>
                </div>
            </div>

            <!--What is the free translation service?-->
            <div class="testimonials-item">
                <div class="user row">
                    <div class="testimonials-caption">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <?php
                                if ($l == "cn") {
                                    echo "<strong>什么是免费翻译服务？</strong><br><br>
                                    免费翻译服务提供给永久在澳大利亚定居的人们，以支持参与就业，教育和社区参与。<br><br>
                                    永久居民和部分临时签证或临时签证持有者在符合条件的签证授予日期的前两年内，
                                    最多可以有10份符合条件的文件翻译成英文。<br><br>
                                    移民翻译代表社会服务部提供免费翻译服务。<br><br>
                                    免费翻译服务的应用程序在免费翻译服务网站上进行。该网站易于使用，并提供英文，阿拉伯文，波斯文和简体中文。
                                    <br><br>
                                    所有翻译均由翻译员和口译员国家认证机构（NAATI）认证的翻译人员完成。<br><br>
                                    有关免费翻译服务的信息，包括资格，可以在
                                    <a href=\"https://translating.dss.gov.au/zh/cn/about-this-service/\" target=\"_blank\">此网站</a>上找到。";
                                } else {
                                    echo "<strong>What is the free translation service?</strong><br>
                                <br>
                                The Free Translating Service is provided for people settling permanently in Australia,
                                to support participation in employment, education and community engagement.
                                <br>
                                <br>
                                Permanent residents and select temporary or provisional visa holders are able to have up
                                to ten eligible documents translated, into English, within the first two years of their
                                eligible visa grant date.
                                <br>
                                <br>
                                The Migration Translators delivers the Free Translating Service on behalf of the
                                Department of Social Services.
                                <br>
                                <br>
                                Applications for the Free Translating Service are made on the Free Translating
                                Service website. The website is easy to use and is available in English, Arabic,
                                Farsi and Simplified Chinese.
                                <br>
                                <br>
                                Where available, all translations are completed by translators credentialed by
                                the National Accreditation Authority for Translators and Interpreters (NAATI).
                                <br>
                                <br>
                                Information about the Free Translating Service, including eligibility, is available on the <a href=\"https://translating.dss.gov.au/en/about-this-service/\" target=\"_blank\">website</a>.";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!--anchor-->
                <div id="what_is_the_air"></div>
            </div>

            <!--What is the Australian Immunisation Register?-->
            <div class="testimonials-item">
                <div class="user row">
                    <div class="testimonials-caption">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <?php
                                if ($l == "cn") {
                                    echo "<strong>什么是澳大利亚免疫登记册？</strong>";
                                } else {
                                    echo "<strong>What is the Australian Immunisation Register?</strong>";
                                }
                                ?>
                                <br>
                                <br>
                                <?php
                                if ($l == "cn") {
                                    echo "澳大利亚免疫登记簿是一个在线国家登记册，记录自1996年1月1日以来给予儿童的疫苗和自2016年9月30日以来的成年人。它记录了免费国家免疫计划下提供的疫苗以及为私人支付的疫苗的信息。";
                                } else {
                                    echo "The Australian Immunisation Register is an online national register that records vaccines given to children since 1 January 1996 and adults since 30 September 2016. It records information about vaccines given under the free National Immunisation Program and for the ones paid for privately.";
                                }
                                ?>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!--anchor-->
                <div id="what_is_the_nip_schedule"></div>
            </div>

            <!--What is the National Immunisation Program Schedule?-->
            <div class="testimonials-item">
                <div class="user row">
                    <div class="testimonials-caption">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <?php
                                if ($l == "cn") {
                                    echo "<strong>什么是全国免疫计划时间表？</strong><br><br>全国免疫计划（NIP）时间表是在整个生命中的特定时间进行的一系列免疫接种。免疫范围从出生到成年。 NIP时间表中列出的所有疫苗都是免费的。为了获得最好的保护，请确保您每次都准时接种疫苗。";
                                } else {
                                    echo "<strong>What is the National Immunisation Program Schedule?</strong><br><br>The National Immunisation Program Schedule is a series of vaccines given at specific times throughout your life. The vaccines range from birth through to adulthood. All vaccines listed in the National Immunisation Program Schedule are free. To get the best possible protection, make sure you have your immunisations on time, every time.";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!--anchor-->
                <div id="check_vaccines"></div>
            </div>

            <!--Which vaccines your child might have taken or need?-->
            <div class="testimonials-item">
                <div class="user row">
                    <div class="testimonials-caption">
                        <div class="user_text">
                            <p class="mbr-fonts-style  display-7">
                                <?php
                                if ($l == "cn") {
                                    echo "<strong>你的孩子可能服用或需要哪种疫苗？</strong><br><br>
                                    这将因国而异。目前，我们的服务适用于包括中国，德国，印度，意大利，马来西亚，新西兰，菲律宾，南非，英国和越南在内的前十个移民来源国。选择你的国家并按支票，我们会告诉你结果。";
                                } else {
                                    echo "<strong>Which vaccines your child might have taken or need?</strong><br>
                                <br>
                                This would change from country to country. Currently, our service is available for top ten source countries for immigrants including China, Germany, India, Italy, Malaysia, New Zealand, Philippines, South Africa, UK and Vietnam. Choose your home country and press check, we will show you the result.";
                                }
                                ?>
                            </p>
                            <div class="container">
                                <div class="row">
                                    <!--label: country-->
                                    <label for="compare_options" class="col-lg-2 col-md-4 margin-all">
                                        <?php
                                        if ($l == "cn") {
                                            echo "国家:";
                                        } else {
                                            echo "Country:";
                                        }
                                        ?></label>
                                    <!--dropdown-->
                                    <select id="compare_options" class="custom-select col-lg-3 col-md-7 margin-all">
                                        <option value="CHN"><?php echo $l == "cn" ? "中国" : "China" ?></option>
                                        <option value="DEU"><?php echo $l == "cn" ? "德国" : "Germany" ?></option>
                                        <option value="IND"><?php echo $l == "cn" ? "印度" : "India" ?></option>
                                        <option value="ITA"><?php echo $l == "cn" ? "意大利" : "Italy" ?></option>
                                        <option value="MYS"><?php echo $l == "cn" ? "马来西亚" : "Malaysia" ?></option>
                                        <option value="NZL"><?php echo $l == "cn" ? "新西兰" : "New Zealand" ?></option>
                                        <option value="PHL"><?php echo $l == "cn" ? "菲律宾" : "Philippines" ?></option>
                                        <option value="ZAF"><?php echo $l == "cn" ? "南非" : "South Africa" ?></option>
                                        <option value="GBR"><?php echo $l == "cn" ? "英国" : "UK" ?></option>
                                        <option value="VNM"><?php echo $l == "cn" ? "越南" : "Vietnam" ?></option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="datepicker" class="col-lg-2 col-md-4 margin-all">
                                        <?php
                                        if ($l == "cn") {
                                            echo "生日：";
                                        } else {
                                            echo "Birthday:";
                                        }
                                        ?></label>
                                    <input type="text" class="form-control-sm col-lg-3 col-md-7 margin-all" readonly
                                           id="datepicker">
                                    <button id="button"
                                            class="btn btn-outline-info btn-sm col-lg-2 col-md-2 col-11 margin-all"><?php
                                        if ($l == "cn") {
                                            echo "检查";
                                        } else {
                                            echo "Check";
                                        }
                                        ?></button>
                                </div>
                                <br>
                                <!--warning info-->
                                <p id="warning" style="color:red"></p>
                            </div>
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
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/functions/check_immunisation_book.js"></script>
<script src="assets/datepicker/datepicker.js"></script>
<script src="assets/functions/compare_schedule.js"></script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>