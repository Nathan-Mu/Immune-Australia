<!-- Menu (start) -->
<section class="menu cid-qPJxlT7mlL" once="menu" id="menu1-1e">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <!--logo-->
                <span class="navbar-logo">
                    <a href="index.php<?php echo $l == "cn" ? "?l=cn" : "" ?>">
                         <img src="assets/images/logo-122x73.png" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <!--brand name-->
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="index.php<?php echo $l == "cn" ? "?l=cn" : "" ?>">
                        IMMUNE</a>
                </span>
            </div>
        </div>

        <!--nav-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <!--first level: home-->
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php<?php echo $l == "cn" ? "?l=cn" : "" ?>">
                        <?php echo $l == "cn" ? "首页" : "HOME"?>
                    </a>
                </li>

                <!--first level: why immunise-->
                <li class="nav-item dropdown">
                    <!--why immunise-->
                    <a class="nav-link link text-white dropdown-toggle display-4" data-toggle="dropdown-submenu"
                       aria-expanded="false">
                        <?php echo $l == "cn" ? "为何免疫" : "WHY IMMUNISE"?>
                    </a>
                    <!--dropdown: why immunise-->
                    <div class="dropdown-menu">
                        <!--second level: why is vaccination important-->
                        <a class="text-white dropdown-item display-4" href="why_immune.php<?php echo $l == "cn" ? "?l=cn" : "" ?>" id="sub1">
                            <?php echo $l == "cn" ? "为何免疫是重要的" : "Why is immunisation important?"?>

                        </a>
                        <!--second level: Situation of vaccine-preventable disease-->
                        <a class="text-white dropdown-item display-4" href="vaccine_preventable_diseases_situation.php<?php echo $l == "cn" ? "?l=cn" : "" ?>" id="sub2"
                           aria-expanded="false">
                            <?php echo $l == "cn" ? "可预防疾病免疫状况" : "Situation of vaccine-preventable disease"?>

                        </a>
                        <!--second level: Childrens' immunisation situation-->
                        <a class="text-white dropdown-item display-4" id="sub3"
                           href="children_immunisation_situation.php<?php echo $l == "cn" ? "?l=cn" : "" ?>" aria-expanded="false">
                            <?php echo $l == "cn" ? "儿童免疫状况" : "Childrens' immunisation situation"?>
                        </a>
                    </div>
                </li>

                <!--first level: how to immunise-->
                <li class="nav-item dropdown">
                    <!--how to immunise-->
                    <a class="nav-link link text-white dropdown-toggle display-4" data-toggle="dropdown-submenu"
                       aria-expanded="false">
                        <?php echo $l == "cn" ? "如何免疫" : "HOW TO IMMUNISE"?>
                    </a>
                    <!--dropdown: Transfer overseas records-->
                    <div class="dropdown-menu">
                        <!--Transfer overseas records-->
                        <a class="text-white dropdown-item display-4" id="sub4"
                           href="add_overseas_immunisation_records_to_AIR.php<?php echo $l == "cn" ? "?l=cn" : "" ?>"
                           aria-expanded="false">
                            <?php echo $l == "cn" ? "转换海外记录" : "Transfer overseas records"?>
                        </a>
                        <!--second level: Get immunised in Australia-->
                        <div class="dropdown">
                            <!--dropdown: Get immunised in Australia-->
                            <a class="text-white dropdown-item dropdown-toggle display-4" aria-expanded="false" id="sub5"
                               data-toggle="dropdown-submenu">
                                <?php echo $l == "cn" ? "在澳大利亚免疫" : "Get immunised in Australia"?>

                            </a>
                            <div class="dropdown-menu dropdown-submenu">
                                <!--To immunise-->
                                <a class="text-white dropdown-item display-4" href="to_immunise.php<?php echo $l == "cn" ? "?l=cn" : "" ?>" id="sub6"
                                   aria-expanded="false">
                                    <?php echo $l == "cn" ? "去免疫" : "To immunise"?>
                                </a>
                                <!--NIP Schedule-->
                                <a class="text-white dropdown-item display-4" href="NIP_schedule.php<?php echo $l == "cn" ? "?l=cn" : "" ?>" id="sub7"
                                   aria-expanded="false">
                                    <?php echo $l == "cn" ? "NIP时间表" : "NIP Schedule"?>

                                </a>
                                <!--Diseases-->
                                <a class="text-white dropdown-item display-4" href="preventable_diseases.php" id="sub8"
                                   aria-expanded="false">
                                    <?php echo $l == "cn" ? "疾病" : "Diseases"?>
                                </a>
                            </div>
                        </div>
                        <!--Check immunisation history-->
                        <a class="text-white dropdown-item display-4" href="immunisation_history.php<?php echo $l == "cn" ? "?l=cn" : "" ?>" id="sub9"
                           aria-expanded="false">
                            <?php echo $l == "cn" ? "检查免疫记录" : "Check immunisation history"?>

                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="about.php<?php echo $l == "cn" ? "?l=cn" : "" ?>">
                        <?php echo $l == "cn" ? "关于" : "ABOUT"?>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4"
                       data-toggle="dropdown-submenu" aria-expanded="false">ENGLISH/中文</a>
                    <div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4" id="sub10">ENGLISH</a>
                        <a class="text-white dropdown-item display-4" id="sub11">简体中文</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</section>

<!-- Menu (end) -->