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
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
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

<section class="mbr-section content4 cid-qQLrxaTKxI" id="content4-68">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-12">
                <!--title-->
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    <?php echo $l == "cn" ? "全国免疫计划时间表（童年和青少年）" : "National Immunisation Program Schedule (Childhood &amp; Adolescent)" ?>
                </h2>
                <!--description-->
                <p class="mbr-text mb-0 align-left  mbr-fonts-style display-5 bg-white padding-all">
                    <?php echo $l == "cn" ? "国家免疫计划（NIP）时间表是建议接种疫苗的时间表澳大利亚的儿童和成人
                    从出生到成年。下面的NIP时间表显示你应该得到什么疫苗和什么时候。它分为三部分：" : "The National Immunisation Program (NIP) Schedule is a schedule for vaccinations recommended for
                    children and adults in Australia ranging from birth through to adulthood. The NIP Schedule below
                    shows which vaccines you should get and when. And it has been divided into three parts:" ?>
                    <br>
                    <a href="NIP_schedule.php#table1-66"><?php echo $l == "cn" ? "儿童时间表（出生至4岁）" : "Childhood Schedule (birth to 4 years)" ?></a>
                    <br>
                    <a href="NIP_schedule.php#table1-69"><?php echo $l == "cn" ? "青少年时间表（10 - 15年，学校计划）" : "Adolescent Schedule (10-15 years, school programs)" ?></a>
                    <br>
                    <a href="NIP_schedule.php#flu"><?php echo $l == "cn" ? "流感疫苗" : "Flu (influenza) vaccines" ?></a>
                </p>
            </div>
        </div>
    </div>
</section>

<!--Childhood Schedule (birth to 4 years)-->
<section class="section-table cid-qQL4DLt97j" id="table1-66">
    <div class="container container-table">
        <!--title-->
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            <?php echo $l == "cn" ? "儿童时间表（出生至4岁）" : "Childhood Schedule (birth to 4 years)" ?>
        </h2>

        <!--table-->
        <div class="table table-bordered table-striped table-responsive">
            <div class="container scroll">
                <table class="table left-alignment" cellspacing="0">
                    <thead class="">
                    <!--thead-->
                    <tr class="table-heads">
                        <th class="head-item mbr-fonts-style display-7" style="width: 15%;">
                            <?php echo $l == "cn" ? "年龄" : "Age" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7" style="width: 25%;">
                            <?php echo $l == "cn" ? "疫苗免疫的疾病" : "Disease immunised against" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7" style="width: 10%;">
                            <?php echo $l == "cn" ? "方式" : "Approach" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7" style="width: 15%;">
                            <?php echo $l == "cn" ? "疫苗" : "Vaccine" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7" style="width: 35%;">
                            <?php echo $l == "cn" ? "备注" : "Comments" ?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--1st: birth - Hepatitis B (hepB)-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "出生" : "Birth" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=hepatitis_B">
                                <?php echo $l == "cn" ? "乙型肝炎（乙肝）" : "Hepatitis B (hepB)" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "H-B-Vax<sup>®</sup> II Paediatric或者Engerix B - Paediatric" : "H-B-Vax<sup>®</sup> II Paediatric or Engerix B - Paediatric" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "向所有刚出生的婴儿提供（通常在医院提供）。" : "Given to all infants as soon as practicable
                                after birth (usually offered in hospital)." ?>
                            <br>
                            <?php echo $l == "cn" ? "出生24小时内注射最佳，并且必须在出生内7天注射。" : "The greatest benefit is if given within 24
                                hours, and must be given within 7 days." ?>
                        </td>
                    </tr>

                    <!--2nd: 2 months - Diphtheria, Tetanus, Whooping cough (pertussis) & etc.-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "2个月" : "2 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7 left-alignment">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=diphtheria">
                                        <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=tetanus">
                                        <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=hepatitis_B">
                                        <?php echo $l == "cn" ? "乙型肝炎（乙肝）" : "Hepatitis B (hepB)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=polio">
                                        <?php echo $l == "cn" ? "脊髓灰质炎" : "Polio" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=Hib">
                                        <?php echo $l == "cn" ? "b型流感嗜血杆菌" : "Hib (haemophilus influenzae type b)" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Infanrix<sup>®</sup> hexa
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--3rd: 2 months - Pneumococcal-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "2个月" : "2 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=Pneumococcal_disease">
                                <?php echo $l == "cn" ? "肺炎球菌" : "Pneumococcal" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Prevenar 13<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--4th: 2 months - Rotavirus-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "2个月" : "2 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=rotavirus">
                                <?php echo $l == "cn" ? "轮状病毒" : "Rotavirus" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "口服滴剂" : "Oral drops" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Rotarix<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "6至14周龄的轮状病毒的口服滴剂疫苗" : "Oral dose of rotavirus vaccine 6-14 weeks of age" ?>
                        </td>
                    </tr>

                    <!--5th: 4 months - Diphtheria, Tetanus, Whooping cough (pertussis) & etc.-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "4个月" : "4 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=diphtheria">
                                        <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=tetanus">
                                        <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=hepatitis_B">
                                        <?php echo $l == "cn" ? "乙型肝炎（乙肝）" : "Hepatitis B (hepB)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=polio">
                                        <?php echo $l == "cn" ? "脊髓灰质炎" : "Polio" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=Hib">
                                        <?php echo $l == "cn" ? "b型流感嗜血杆菌" : "Hib (haemophilus influenzae type b)" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Infanrix<sup>®</sup> hexa
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--6th: 4 months - Pneumococcal-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "4个月" : "4 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=pneumococcal_disease">
                                <?php echo $l == "cn" ? "肺炎球菌" : "Pneumococcal" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Prevenar 13<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--7th: 4 months - Rotavirus-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "4个月" : "4 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=rotavirus">
                                <?php echo $l == "cn" ? "轮状病毒" : "Rotavirus" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "口服滴剂" : "Oral drops" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Rotarix<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "10至24周龄的轮状病毒的口服滴剂疫苗" : "Oral dose of rotavirus vaccine 10-24 weeks of age" ?>
                        </td>
                    </tr>

                    <!--8th: 6 months - Diphtheria, Tetanus, Whooping cough (pertussis) & etc.-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "6个月" : "6 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=diphtheria">
                                        <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=tetanus">
                                        <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=hepatitis_B">
                                        <?php echo $l == "cn" ? "乙型肝炎（乙肝）" : "Hepatitis B (hepB)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=polio">
                                        <?php echo $l == "cn" ? "脊髓灰质炎" : "Polio" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=Hib">
                                        <?php echo $l == "cn" ? "b型流感嗜血杆菌" : "Hib (haemophilus influenzae type b)" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Infanrix<sup>®</sup> hexa
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--9th: 6 months - Pneumococcal-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "6个月" : "6 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=pneumococcal_disease">
                                <?php echo $l == "cn" ? "肺炎球菌" : "Pneumococcal" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Prevenar 13<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--10th: 12 months - Measles, Mumps & Rubella-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "12个月" : "12 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=measles">
                                        <?php echo $l == "cn" ? "麻疹" : "Measles" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=mumps">
                                        <?php echo $l == "cn" ? "腮腺炎" : "Mumps" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=rubella">
                                        <?php echo $l == "cn" ? "风疹" : "Rubella" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "M-M-R<sup>®</sup> II或者Priorix<sup>®</sup>" : "M-M-R<sup>®</sup> II or Priorix<sup>®</sup>" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--11st: 12 months - Hib (haemophilus influenzae type b) & meningococcal C-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "" : "12 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=Hib">
                                        <?php echo $l == "cn" ? "b型流感嗜血杆菌" : "Hib (haemophilus influenzae type b)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=meningococcal_disease">
                                        <?php echo $l == "cn" ? "脑膜炎球菌" : "meningococcal C" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Menitorix<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--12nd: 12 months - Pneumococcal-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "12个月" : "12 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=pneumococcal_disease">
                                <?php echo $l == "cn" ? "肺炎球菌" : "Pneumococcal" ?>
                            </a>
                            *
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Prevenar 13<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <em><?php echo $l == "cn" ? "仅针对处于医疗风险中的儿童" : "Medically at-risk children only" ?></em>
                        </td>
                    </tr>
                    
                    <!--13rd: 18 months - Measles，Mumps, Rubella & etc.-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "18个月" : "18 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=measles">
                                        <?php echo $l == "cn" ? "麻疹" : "Measles" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=mumps">
                                        <?php echo $l == "cn" ? "腮腺炎" : "Mumps" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=rubella">
                                        <?php echo $l == "cn" ? "风疹" : "Rubella" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php">
                                        <?php echo $l == "cn" ? "水痘" : "Chickenpox (varicella)" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "Priorix-Tetra<sup>®</sup>或者ProQuad<sup>®</sup>" : "Priorix-Tetra<sup>®</sup> or ProQuad<sup>®</sup>" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--14th: 18 months - Diphtheria, Tetanus & Whooping cough (pertussis)-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "18个月" : "18 months" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=diphtheria">
                                        <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=tetanus">
                                        <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "Infanrix<sup>®</sup>或者Tripacel<sup>®</sup>" : "Infanrix<sup>®</sup> or Tripacel<sup>®</sup>" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--15th: 4 years - Diphtheria, Tetanus, Whooping cough (pertussis) & etc.-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "4周岁" : "4 years" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=diphtheria">
                                        <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=tetanus">
                                        <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=polio">
                                        <?php echo $l == "cn" ? "脊髓灰质炎" : "Polio" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "Infanrix<sup>®</sup> IPV或者Quadracel<sup>®</sup>" : "Infanrix<sup>®</sup> IPV or Quadracel<sup>®</sup>" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "无" : "None" ?>
                        </td>
                    </tr>

                    <!--16th: 4 years - Pneumococcal-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "4周岁" : "4 years" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=pneumococcal_disease">
                                <?php echo $l == "cn" ? "肺炎球菌" : "Pneumococcal" ?>
                            </a>*
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            Pneumovax 23<sup>®</sup>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <em><?php echo $l == "cn" ? "仅针对处于医疗风险中的儿童" : "Medically at-risk children only" ?></em>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--Adolescent Schedule (10-15 years, school programs)-->
<section class="section-table cid-qQL4DLt97j paddingBottom" id="table1-69">
    <div class="container container-table">
        <!--title-->
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            <?php echo $l == "cn" ? "" : "Adolescent Schedule (10-15 years, school programs)" ?>
        </h2>

        <!--table-->
        <div class="table table-bordered table-striped table-responsive">
            <div class="container scroll">
                <table class="table" cellspacing="0">
                    <thead>
                    <!--thead-->
                    <tr class="table-heads ">
                        <th class="head-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "疫苗免疫的疾病" : "Disease immunised against" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "方式" : "Approach" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "疫苗" : "Vaccine" ?>
                        </th>
                        <th class="head-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "备注" : "Comments" ?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <!--1st: Human papillomavirus (HPV)-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="preventable_diseases.php?d=HPV">
                                <?php echo $l == "cn" ? "人乳头瘤病毒（HPV）" : "Human papillomavirus (HPV)" ?>
                            </a>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?></td>
                        <td class="body-item mbr-fonts-style display-7">Gardasil<sup>®</sup>9</td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "通常需要2或3剂" : "Normally 2 or 3 doses" ?><br>
                            <?php echo $l == "cn" ? "取决于不同的州或领地" : "Depends on different state or territory" ?><br>
                            <?php echo $l == "cn" ? "欲了解更多信息，请咨询您的全科医生（GP）。" : "For more information, please ask your general practitioner (GP)." ?>
                        </td>
                    </tr>

                    <!--2nd: Diphtheria, Tetanus & Whooping cough (pertussis)-->
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                            <ul>
                                <li>
                                    <a href="preventable_diseases.php?d=diphtheria">
                                        <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=tetanus">
                                        <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php?d=whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "注射" : "Injection" ?>
                        </td>
                        <td class="body-item mbr-fonts-style display-7">Boostrix<sup>®</sup></td>
                        <td class="body-item mbr-fonts-style display-7">
                            <?php echo $l == "cn" ? "取决于不同的州或领地" : "Depends on different state or territory" ?><br>
                            <?php echo $l == "cn" ? "欲了解更多信息，请咨询您的全科医生（GP）。" : "For more information, please ask your general practitioner (GP)" ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="container table-info-container">
            </div>
        </div>
    </div>

    <br><br>


    <div class="container  biased-anchor" id="flu">
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            <?php echo $l == "cn" ? "流感疫苗" : "Flu (influenza) vaccines" ?>
        </h2>
        <div class="padding-all bg-white">
            <p><?php echo $l == "cn" ? "如果您的孩子属于以下类别，他/她有资格免费获得每年的<a href =\"preventable_diseases.php?l=cn&d=flu\">流感</a>疫苗注射。</p>" :
                    "If your child belongs to the categories below, he/she is eligible to receive a free 
                    <a href=\"preventable_diseases.php?d=flu\">flu (influenza)</a> shot each year.</p>" ?>
            <ul>
                <li><?php echo $l == "cn" ? "6个月及以上并处于医疗风险中" : "6 months and over with medical risk factors" ?></li>
            </ul>
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
<!--<script src="assets/datatables/jquery.data-tables.min.js"></script>-->
<!--<script src="assets/datatables/data-tables.bootstrap4.min.js"></script>-->
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>