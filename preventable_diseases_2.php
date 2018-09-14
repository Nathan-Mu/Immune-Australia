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

<section class="mbr-section content5 p-d-header-img" id="content5-67">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
    </div>
</section>

<div class="container-fluid custom-padding">
    <div class="row col-md-12 col-sm-12">

        <!-- disease names -->
        <div class="col-md-3 col-sm-12 order-1">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action <?php if ($d == "chickenpox") echo "active" ?>"
                   id="list-chickenpox-list" data-toggle="list"
                   href="#list-chickenpox" role="tab" aria-controls="Chickenpox (varicella)">
                    <?php echo $l == "cn" ? "水痘" : "Chickenpox (varicella)" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "diphtheria") echo "active" ?>"
                   id="list-diphtheria-list" data-toggle="list"
                   href="#list-diphtheria" role="tab" aria-controls="diphtheria">
                    <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "flu") echo "active" ?>"
                   id="list-flu-list" data-toggle="list"
                   href="#list-flu" role="tab" aria-controls="flu">
                    <?php echo $l == "cn" ? "感冒（流感）" : "Flu (influenza)" ?>
                </a>
                <!--<a class="list-group-item list-group-item-action <?php /*if ($d == "hepatitis_A") echo "active" */ ?>"
                   id="list-hepatitis_a-list" data-toggle="list"
                   href="#list-hepatitis_a" role="tab" aria-controls="hepatitis_a">
                    Hepatitis A
                </a>-->
                <a class="list-group-item list-group-item-action <?php if ($d == "hepatitis_B") echo "active" ?>"
                   id="list-hepatitis_b-list" data-toggle="list"
                   href="#list-hepatitis_b" role="tab" aria-controls="hepatitis_b">
                    <?php echo $l == "cn" ? "乙型肝炎" : " Hepatitis B" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "hib") echo "active" ?>"
                   id="list-hib-list" data-toggle="list"
                   href="#list-hib" role="tab" aria-controls="hib">
                    <?php echo $l == "cn" ? "b型流感嗜血杆菌（b型流感嗜血杆菌)" : "Hib (Haemophilus influenzae type b)" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "hpv") echo "active" ?>"
                   id="list-hpv-list" data-toggle="list"
                   href="#list-hpv" role="tab" aria-controls="hpv">
                    <?php echo $l == "cn" ? "人类乳头瘤病毒(HPV)" : "HPV (Human papillomavirus)" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "measles") echo "active" ?>"
                   id="list-measles-list" data-toggle="list"
                   href="#list-measles" role="tab" aria-controls="measles">
                    <?php echo $l == "cn" ? "麻疹" : "Measles" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "meningococcal_disease") echo "active" ?>"
                   id="list-meningococcal_disease-list" data-toggle="list"
                   href="#list-meningococcal_disease" role="tab" aria-controls="meningococcal_disease">
                    <?php echo $l == "cn" ? "脑膜炎球菌病" : "Meningococcal disease" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "mumps") echo "active" ?>"
                   id="list-mumps-list" data-toggle="list"
                   href="#list-mumps" role="tab" aria-controls="mumps">
                    <?php echo $l == "cn" ? "流行性腮腺炎" : "Mumps" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "pneumococcal_disease") echo "active" ?>"
                   id="list-pneumococcal_disease-list" data-toggle="list"
                   href="#list-pneumococcal_disease" role="tab" aria-controls="pneumococcal_disease">
                    <?php echo $l == "cn" ? "肺炎球菌病" : "pneumococcal disease" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "polio") echo "active" ?>"
                   id="list-polio-list" data-toggle="list"
                   href="#list-polio" role="tab" aria-controls="polio">
                    <?php echo $l == "cn" ? "小儿麻痹症" : "Poliomyelitis" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "rotavirus") echo "active" ?>"
                   id="list-rotavirus-list" data-toggle="list"
                   href="#list-rotavirus" role="tab" aria-controls="rotavirus">
                    <?php echo $l == "cn" ? "轮状病毒" : "Rotavirus" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "rubella") echo "active" ?>"
                   id="list-rubella-list" data-toggle="list"
                   href="#list-rubella" role="tab" aria-controls="rubella">
                    <?php echo $l == "cn" ? "风疹(德国麻疹)" : "Rubella (German measles)" ?>
                </a>
                <!--<a class="list-group-item list-group-item-action <?php /*if ($d == "shingles") echo "active" */ ?>"
                   id="list-shingles-list" data-toggle="list"
                   href="#list-shingles" role="tab" aria-controls="shingles">
                    Shingles (herpes zoster)
                </a>-->
                <a class="list-group-item list-group-item-action <?php if ($d == "tetanus") echo "active" ?>"
                   id="list-tetanus-list" data-toggle="list"
                   href="#list-tetanus" role="tab" aria-controls="tetanus">
                    <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                </a>
                <a class="list-group-item list-group-item-action <?php if ($d == "whooping_cough") echo "active" ?>"
                   id="list-whooping_cough-list" data-toggle="list"
                   href="#list-whooping_cough" role="tab" aria-controls="whooping_cough">
                    <?php echo $l == "cn" ? "百日咳（百日咳）" : " Whooping cough (pertussis)" ?>
                </a>
            </div>
        </div>

        <!-- Introduction -->
        <div class="col-md-9 display-7 col-sm-12 order-0 disease-instruction">
            <div class="tab-content" id="nav-tabContent">

                <!-- chickenpox -->
                <div class="tab-pane fade <?php if ($d == "chickenpox") echo "show active" ?>" id="list-chickenpox"
                     role="tabpanel" aria-labelledby="list-home-list">

                    <!--title: chickenpox-->
                    <div class="custom-block">
                        <h1 class="left-alignment">Chickenpox (Varicella) & Immunisation Service</h1>
                    </div>

                    <!--index: chickenpox-->
                    <div class="custom-block">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li class="index-title">In this page:</li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#what_is_chickenpox\">水痘是什么？</a>" : "<a href=\"preventable_diseases.php#what_is_chickenpox\">What is chickenpox?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#what_are_the_symptoms_of_chickenpox\">水痘的症状是什么？</a>" : "<a href=\"preventable_diseases.php#what_are_the_symptoms_of_chickenpox\">What are the symptoms of chickenpox?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#why_get_immunised_against_chickenpox\">为什么要接种水痘疫苗？</a>" : "<a href=\"preventable_diseases.php#why_get_immunised_against_chickenpox\">Why get immunised against chickenpox?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#who_is_at_risk_from_chickenpox\">谁有患水痘的危险？</a>" : "<a href=\"preventable_diseases.php#who_is_at_risk_from_chickenpox\">Who is at risk from chickenpox?</a>" ?>

                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#what_is_the_time_recommended_to_get_chickenpox_immunisation\">建议水痘免疫接种的时间？</a>" : "<a href=\"preventable_diseases.php#what_is_the_time_recommended_to_get_chickenpox_immunisation\"> What is the time recommended to get chickenpox immunisation?</a>" ?>


                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#how_much_do_i_need_to_pay_for_chickenpox_immunisation\">我需要为接种水痘疫苗支付的费用？</a>" : "<a href=\"preventable_diseases.php#how_much_do_i_need_to_pay_for_chickenpox_immunisation\"> How much do I need to pay for chickenpox immunisation?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#where_can_I_get_chickenpox_immunisation\">我在哪里可以接种水痘疫苗？</a>" : "<a href=\"preventable_diseases.php#where_can_I_get_chickenpox_immunisation\">Where can I get chickenpox immunisation?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#what_are_the_possible_side_effects_of_chickenpox_immunisation\">水痘免疫可能的副作用是什么？</a>" : "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_chickenpox_immunisation\"> What are the possible side effects of chickenpox immunisation?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#what_can_i_do_if_the_side_effects_of_chickenpox_immunisation_happen\">如果水痘免疫的副作用发生我该怎么办？</a>" : "<a href=\"preventable_diseases.php#what_can_i_do_if_the_side_effects_of_chickenpox_immunisation_happen\"> What can I do if the side effects of chickenpox immunisation happen?</a>" ?>

                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is chickenpox?-->
                    <div class="custom-block biased-anchor" id="what_is_chickenpox">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "水痘是什么？" : "What is chickenpox?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "水痘（也称为水痘）会引起发痒，发炎的皮疹和轻微的发烧。它通常是一种轻微的疾病，在健康的儿童中持续很短的时间，但在成人中可能更严重。" : "Chickenpox (also called varicella) causes an itchy, blistering skin rash and mild fever. It
                            is usually a mild disease that lasts for a short time in healthy children, but it can be
                            more severe in adults." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "水痘是一种严重的疾病，因为它会引起疤痕，肺炎，有时会导致死亡。 33,000人中有一人患水痘可发展脑炎（脑部炎症）。" : "Chickenpox is a serious disease because it can cause scarring, pneumonia, brain damage and
                            sometimes death. One in 33,000 people with chickenpox can develop encephalitis (brain
                            inflammation)." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "在患有水痘后，病毒会留在你的体内。 它可以在生命的  后期回来并导致带状疱疹（也称为带状疱疹）。" : "After you have had         chickenpox, the virus stays in your body. It can come back later in life and cause shingles (also called herpes zoster)." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "水痘是由水痘带状疱疹病毒引起的，这种病毒引起带状疱疹。" : "After you have had chickenpox, the virus stays in your body. It can come back later in life
                            and cause shingles (also called herpes zoster)." ?>
                        </p>
                    </div>

                    <!--What are the symptoms of chickenpox?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_chickenpox">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "水痘的症状是什么?" : "What are the symptoms of chickenpox?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "其主要症状是瘙痒和红疹,变成水泡,然后破裂,地壳。水痘也会引起类似流感的症状,如发热、头痛和喉咙痛。" : "The main symptom is an itchy red rash that turns into blisters, which then burst and crust
                            over. Chickenpox can also cause flu-like symptoms, such as fever, headache and sore
                            throat." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "症状通常在患水痘两周后开始。 症状持续10至21天。" : "Symptoms usually start about two weeks after catching chickenpox. The symptoms stay from
                            between 10 to 21 days." ?></p>
                    </div>

                    <!--Why get immunised against chickenpox?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_chickenpox">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "为什么要接种水痘疫苗?" : "Why get immunised against chickenpox?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "水痘(也称为水痘)通常是一个温和的疾病,儿童不会持续很长时间,但它可以变得更严重,特别是成年人。" : "Chickenpox (also called varicella) is usually a mild disease that doesn’t last long in
                            children, but it can be more severe, particularly in adults." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "接种疫苗是一种安全有效的方法来保护您免受严重的疾病。 水痘疫苗还可以保护您在生命后期避免产生带状疱疹。" : " Vaccination is a safe and effective way to protect you from a serious case of the disease.
                            The chickenpox vaccine also protects you from getting shingles later in life." ?>

                        </p>
                        <p>
                            <?php echo $l == "cn" ? "通过接种针对水痘的疫苗，你还可以帮助保护其他人，尤其是过于生病或太年轻而不能接种疫苗的人。 在你的社区接种疫苗的人越多，疾病传播的可能性就越小。" : " By getting vaccinated against chickenpox, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?>


                        </p>
                    </div>

                    <!--Who is at risk from chickenpox?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_chickenpox">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "谁有患水痘的危险？" : "Who is at risk from chickenpox?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "水痘会影响任何年龄段的人。" : "Chickenpox can affect people at any age." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "儿童通常有轻微的疾病，并迅速恢复。" : "Children usually have mild disease and recover quickly." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "成年人，新生婴儿和免疫力低下的人通常会因病毒感染更严重的疾病。" : "Adults, newborn babies and people who have a weakened immune system usually have a more
                            severe illness from the virus." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "在怀孕期间，水痘对于母亲和婴儿都是严重的。 第一次患水痘的孕妇可能患有严重的疾病。 婴儿出生时可能患有严重的水痘，或者对他们的皮肤，四肢，眼睛或神经系统造成伤害。" : "During pregnancy, chickenpox can be serious for both the mother and the baby. Pregnant women
                            who get chickenpox for the first time can have severe disease. The baby can be born with
                            severe
                            chickenpox, or have damage to their skin, limbs, eyes or nervous system." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "虽然一些接种疫苗的儿童仍然会患水痘，但他们通常会有更轻微的疾病形式和更快的恢复。 疫苗几乎总是可以预防严重疾病。" : "Although some vaccinated children will still get chickenpox, they generally will have a much
                            milder form of the disease and more rapid recovery. The vaccine almost always prevents
                            against severe disease." ?>
                        </p>
                    </div>

                    <!--What is the time recommended to get chickenpox immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_chickenpox_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候建议去接种水痘疫苗？" : "What is the time recommended to get chickenpox immunisation?" ?>

                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "根据" : "Due to the" ?>
                            <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#NIP_schedul\">全国免疫计划（NIP）时间表</a>" : "<a href=\"preventable_diseases.php#NIP_schedul\">National Immunisation Program (NIP) Schedule</a>" ?>
                            <?php echo $l == "cn" ? "，建议18个月的儿童接种水痘疫苗。" : ",
                            chickenpox immunisation is recommended for 18-month children." ?>
                        </p>
                    </div>
                    <!--<p>Due to the <a href="NIP_schedule.php?l=cn">National Immunisation Program (NIP) Schedule</a>,-->

                    <!--How much do I need to pay for chickenpox immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_chickenpox_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "我需要为接种水痘疫苗支付的费用？" : "How much do I need to pay for chickenpox immunisation?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "所有列在" : "All vaccines listed in the" ?>
                            <?php echo $l == "cn" ? "<a href=\"NIP_schedule.php\">全国免疫计划（NIP）时间表</a>" : "<a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>" ?>
                            <?php echo $l == "cn" ? "，上的疫苗都是免费的。 但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" : ",
                            are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?>
                        </p>
                    </div>

                    <!--Where can I get chickenpox immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_I_get_chickenpox_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "我可以在哪里接种水痘疫苗？" : "Where can I get chickenpox immunisation?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "在澳大利亚，" : "In Australia，" ?> &nbsp;<?php echo $l == "cn" ? "人们可以通过以下途径获得疫苗：" : "people can get vaccines through:" ?>
                        </p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "地方委员会或社区卫生诊所" : "local council or community health clinics" ?>

                            </li>
                            <li>
                                <?php echo $l == "cn" ? "原住民医疗服务" : "Aboriginal Medical Services" ?>
                            </li>
                            <li>
                                <?php echo $l == "cn" ? "学校为基础的免疫项目" : "school based immunisation programs" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "工作场所" : "workplaces" ?>
                            </li>
                        </ul>
                        <p>

                            <?php echo $l == "cn" ? "<a href=\"https://www.healthdirect.gov.au/australian-health-services\">通过国家卫生服务目录（NHSD）查找卫生服务提供者</a>" : "<a href=\"https://www.healthdirect.gov.au/australian-health-services\"> Find a health service provider by National Health Services Directory (NHSD)" ?>

                        </p>
                    </div>

                    <!--What are the possible side effects of chickenpox immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_chickenpox_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "水痘免疫有什么可能的副作用？" : "What are the possible side effects of chickenpox immunisation？" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。 有时会很严重，大多数时候没有影响。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "水痘疫苗的常见副作用包括：" : "Common side effects of chickenpox vaccines include:" ?>
                        </p>
                        <ul>
                            <li>
                                <?php echo $l == "cn" ? "针头进入时会出现疼痛，发红或肿胀" : "pain, redness or swelling where the needle went in" ?>

                            </li>
                            <li>
                                <?php echo $l == "cn" ? "皮疹" : "rash" ?>


                            </li>
                            <li>
                                <?php echo $l == "cn" ? "发热。" : "fever." ?>

                            </li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of chickenpox immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_chickenpox_immunisation_happen">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "如果水痘免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of chickenpox immunisation
                            happen?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "与你的医生谈谈水痘疫苗可能产生的副作用，或者如果你的孩子有可能会引起你的副作用。" : "Talk to your doctor about possible side effects of chickenpox vaccines, or if your
                            child has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- diphtheria -->
                <div class="tab-pane fade <?php if ($d == "diphtheria") echo "show active" ?>" id="list-diphtheria"
                     role="tabpanel" aria-labelledby="list-diphtheria-list">
                    <!--title: diphtheria-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">
                            <?php echo $l == "cn" ? "白喉&免疫服务" : "Diphtheria & Immunisation Service" ?>
                        </h1>
                    </div>

                    <!--index: diphtheria-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>
                                    <?php echo $l == "cn" ? "在此页面中：" : "In this page:" ?>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#what_is_diphtheria\">白喉是什么？</a>" : "<a href=\"preventable_diseases.php#what_is_diphtheria\"> What is diphtheria?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#what_are_the_symptoms_of_diphtheria\">白喉的症状有哪些？</a>" : "<a href=\"preventable_diseases.php#what_are_the_symptoms_of_diphtheria\">  What are the symptoms of diphtheria?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#why_get_immunised_against_diphtheria\">为什么要接种白喉疫苗？</a>" : "<a href=\"preventable_diseases.php#why_get_immunised_against_diphtheria\">  Why get immunised against diphtheria?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#who_is_at_risk_from_diphtheria\">谁有患白喉的危险？</a>" : "<a href=\"preventable_diseases.php#who_is_at_risk_from_diphtheria\"> Who is at risk from diphtheria?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#what_is_the_time_recommended_to_get_diphtheria_immunisation\">建议什么时间接种白喉疫苗？</a>" : "<a href=\"preventable_diseases.php#what_is_the_time_recommended_to_get_diphtheria_immunisation\">  What is the time recommended to get diphtheria immunisation?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#how_much_do_i_need_to_pay_for_diphtheria_immunisation\">我需要为白喉免疫支付多少费用？</a>" : "<a href=\"preventable_diseases.php#how_much_do_i_need_to_pay_for_diphtheria_immunisation\">  How much do I need to pay for diphtheria immunisation?</a>" ?>


                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#where_can_i_get_diphtheria_immunisation\">我在哪里可以接种白喉疫苗？</a>" : "<a href=\"preventable_diseases.php#where_can_i_get_diphtheria_immunisation\">   Where can I get diphtheria immunisation?</a>" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#what_are_the_possible_side_effects_of_diphtheria_immunisation\">白喉免疫有哪些可能的副作用？</a>" : "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_diphtheria_immunisation\">   What are the possible side effects of diphtheria immunisation?</a>" ?>


                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php?l=cn#preventable_diseases.php#what_can_i_do_if_the_side_effects_of_diphtheria_immunisation_happen\">如果白喉免疫的副作用发生，我该怎么办？</a>" : "<a href=\"preventable_diseases.php#what_can_i_do_if_the_side_effects_of_diphtheria_immunisation_happen\">   What can I do if the side effects of diphtheria immunisation happen?</a>" ?>


                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is diphtheria?-->
                    <div class="custom-block biased-anchor" id="what_is_diphtheria">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么是白喉？" : "What is diphtheria?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "白喉是通常感染上呼吸道或有时感染皮肤的感染。 在上呼吸道中，它引起一个非常薄的阻挡层，称为穿过气管生长并使呼吸困难的膜。" : "Diphtheria is an infection usually of the upper airways or sometimes of the skin. In the
                            upper airways it causes a very thin barrier known as a membrane which grows across the
                            windpipe and makes it hard to breathe." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "这可能完全阻塞气管，导致窒息和死亡。 白喉还会损害心脏和神经系统。" : "This can block the windpipe completely, leading to suffocation and death. Diphtheria can
                            also damage the heart and the nervous system." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "白喉是由一种称为白喉棒状杆菌（Corynebacterium diphtheriae）的细菌引起的。 细菌会产生导致疾病的毒素。" : "Diphtheria is caused by a type of bacteria called Corynebacterium diphtheriae. The bacteria
                            make a toxin that causes the disease." ?>
                        </p>
                    </div>

                    <!--What are the symptoms of diphtheria?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_diphtheria">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "白喉的症状是什么?" : "What are the symptoms of diphtheria?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "症状通常在接触白喉后约2-5天开始。" : "Symptoms usually start about two to five days after catching diphtheria." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "症状可能包括：" : "Symptoms can include:" ?>
                        </p>
                        <ul>
                            <li>
                                <?php echo $l == "cn" ? "喉咙痛" : "sore throa" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "吞咽问题" : "swallowing problems" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "低烧" : "mild fever" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "呼吸问题，这可能是严重的" : "breathing problems, which may be severe" ?>
                            </li>
                            <li>
                                <?php echo $l == "cn" ? "喉咙后部有灰色或绿色的膜。" : "a grey or green membrane at the back of the throat." ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against diphtheria?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_diphtheria">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "为什么要接种白喉疫苗？" : "Why get immunised against diphtheria?" ?></h3>
                        <p><?php echo $l == "cn" ? "白喉是严重的呼吸道感染。 它可以影响任何年龄的人。" : "Diphtheria is a serious infection of the airways. It can affect people of any age." ?>
                        </p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受白喉的安全有效方法。" : "Vaccination is a safe and effective way to protect you from diphtheria." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "通过接种疫苗，您还可以帮助保护其他人，尤其是过于生病或未能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated you can also help protect other people, especially people who are too
                            sick or too young to be vaccinated. The more people who are vaccinated in your community,
                            the less likely the disease will spread." ?>
                        </p>
                    </div>

                    <!--Who is at risk from diphtheria?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_diphtheria">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "谁有患白喉的风险？" : "Who is at risk from diphtheria?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "白喉可以影响任何年龄段的人。" : "Diphtheria can affect people at any age." ?></p>
                        <p>
                            <?php echo $l == "cn" ? "没有接种过白喉疫苗的人患严重疾病的风险最高。" : "People who have not been immunised against diphtheria have the highest risk of serious
                            disease." ?></p>
                    </div>

                    <!--What is the time recommended to get diphtheria immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_diphtheria_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "建议什么时间进行白喉疫苗接种？" : "What is the time recommended to get diphtheria immunisation?" ?>

                        </h3>
                        <p><?php echo $l == "cn" ? "根据" : "Due to the" ?>
                            <?php echo $l == "cn" ? "<a href=\"NIP_schedule.php\">全国免疫计划（NIP）时间表</a>" : "<a href=\"NIP_schedule.php\"> National Immunisation Program (NIP) Schedule" ?>
                            <?php echo $l == "cn" ? "，推荐为2个月，4个月，6个月，18个月，4年以及10至15岁（在学校）的儿童进行白喉疫苗接种。" : ",
                            Diphtheria immunisation is recommended for children aged two months, four months, six
                            months, 18 months, four years, and between 10 and 15 years (at school)." ?>
                        </p>
                    </div>

                    <!--How much do I need to pay for diphtheria immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_diphtheria_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "我需要为白喉免疫支付多少费用？" : "How much do I need to pay for diphtheria immunisation?" ?></h3>
                        <p><?php echo $l == "cn" ? "所有列在" : ">All vaccines listed in the " ?>All vaccines listed in the <?php echo $l == "cn" ? "<a href=\"NIP_schedule.php\">全国免疫计划（NIP）时间表</a>" : "<a href=\"NIP_schedule.php\"> National Immunisation Program (NIP) Schedule" ?><?php echo $l == "cn" ? "都是免费的。 但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" : "are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?>
                        </p>
                    </div>

                    <!--Where can I get diphtheria immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_diphtheria_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "我可以在哪里得到水痘疫苗？" : "Where can I get chickenpox immunisation?" ?></h3>
                        <p><?php echo $l == "cn" ? "在澳大利亚，人们可通过以下途径获得疫苗：" : "Where can I get chickenpox immunisation?" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "地方委员会或社区卫生诊所" : "local council or community health clinics" ?>

                            </li>
                            <li>
                                <?php echo $l == "cn" ? "原住民医疗服务" : "Aboriginal Medical Services" ?>
                            </li>
                            <li>
                                <?php echo $l == "cn" ? "学校为基础的免疫项目" : "school based immunisation programs" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "工作场所" : "workplaces" ?>
                            </li>
                        </ul>
                        <p>

                            <?php echo $l == "cn" ? "<a href=\"https://www.healthdirect.gov.au/australian-health-services\">通过国家卫生服务目录（NHSD）查找卫生服务提供者</a>" : "<a href=\"https://www.healthdirect.gov.au/australian-health-services\"> Find a health service provider by National Health Services Directory (NHSD)" ?>



                        </p>
                    </div>

                    <!--What are the possible side effects of diphtheria immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_diphtheria_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "白喉免疫有哪些可能的副作用？" : "What are the possible side effects of diphtheria immunisation?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。 有时很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?>
                        </p>
                        <p><?php echo $l == "cn" ? "白喉疫苗的常见副作用包括：" : "Common side effects of diphtheria vaccines include:" ?><p/>
                        <p><?php echo $l == "cn" ? "针头进入时疼痛，发红，肿胀或硬度。" : "pain, redness, swelling or hardness where the needle went in." ?>pain, redness, swelling or hardness where the needle went in.</p>
                    </div>

                    <!--What can I do if the side effects of diphtheria immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_diphtheria_immunisation_happen">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "如果白喉免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of diphtheria immunisation happen?" ?>
                        </h3>
                        <p>
                            <?php echo $l == "cn" ? "与您的医生讨论白喉疫苗的可能副作用，或者如果您的孩子有可能会引起您的副作用。" : "Talk to your doctor about possible side effects of diphtheria vaccines, or if your
                            child has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- flu -->
                <div class="tab-pane fade <?php if ($d == "flu") echo "show active" ?>" id="list-flu"
                     role="tabpanel" aria-labelledby="list-flu-list">

                    <!--title: flu-->
                    <div class="biased-anchor custom-block">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "流感（流感）和免疫服务" : "Flu (influenza) & Immunisation Service" ?></h1>
                    </div>

                    <!--index: flu-->
                    <div class="biased-anchor custom-block">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页面中：" : "In this page:" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_is_the_flu\">流感是什么？</a>" : "<a href=\"preventable_diseases.php#what_is_the_flu\"> What is the flu?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_are_the_symptoms_of_flu\">什么是流感的症状？</a>" : "<a href=\"preventable_diseases.php#what_are_the_symptoms_of_flu\"> What are the
                                        symptoms of flu?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#why_get_immunised_against_flu\">为什么要接种流感疫苗？</a>" : "<a href=\"preventable_diseases.php#why_get_immunised_against_flu\"> Why get immunised
                                        against flu?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#who_is_at_risk_from_flu\">流感有什么风险？</a>" : "<a href=\"preventable_diseases.php#who_is_at_risk_from_flu\"> Who is at risk from
                                        flu?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_is_the_time_recommended_to_get_flu_immunisation\">什么时候建议进行流感疫苗接种？</a>" : "<a href=\"preventable_diseases.php#what_is_the_time_recommended_to_get_flu_immunisation\">  What is the time recommended to get flu immunisation?" ?>

                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#how_much_do_i_need_to_pay_for_flu_immunisation\">我需要为流感疫苗支付多少钱？</a>" : "<a href=\"preventable_diseases.php#how_much_do_i_need_to_pay_for_flu_immunisation\">  How
                                        much do I need to pay for flu immunisation?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_flu_immunisation\">我可以在哪里接种流感疫苗？</a>" : "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_flu_immunisation\"> What
                                        are the possible side effects of flu immunisation?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_flu_immunisation\">流感免疫的可能副作用是什么？</a>" : "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_flu_immunisation\"> What
                                        are the possible side effects of flu immunisation?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_can_i_do_if_the_side_effects_of_flu_immunisation_happen\">如果流感免疫的副作用发生，我该怎么办？</a>" : "<a href=\"preventable_diseases.php#what_can_i_do_if_the_side_effects_of_flu_immunisation_happen\"> What
                                        can I do if the side effects of flu immunisation happen?" ?>
                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is the flu?-->
                    <div class="custom-block biased-anchor" id="what_is_the_flu">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "流感是什么？" : "What is the flu?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "流感通常被称为流感。 这是一种非常传染性的感染你的呼吸道。 流感通常在冬季造成大部分疾病。" : "Influenza is commonly known as the flu. It is a very contagious infection of your airways.
                            The flu usually causes the most disease during winter." ?></p>
                        <p>
                            <?php echo $l == "cn" ? "流感可以产生轻微的症状，如流鼻涕，头痛，身体它也可能会非常严重并导致疾病，包括：" : "The flu can produce mild symptoms such as a runny nose, headache, body aches and tiredness.
                            It can also be very severe and cause disease, including:" ?></p>
                        <ul>
                            <li>
                                <?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "大脑，心脏或其他肌肉的炎症" : "inflammation of the brain, heart, or other muscles" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "对肾脏等器官的损害" : "damage to organs such as the kidneys" ?></li>
                            <li><?php echo $l == "cn" ? "死亡。" : "death." ?></li>
                        </ul>
                        <p>
                            <?php echo $l == "cn" ? "流感是由流感病毒引起的。 有许多不同的流感病毒株，每年都可以改变。" : "The flu is caused by the influenza virus. There are lots of different strains of flu virus,
                            and they can change every year." ?></p>
                    </div>

                    <!--What are the symptoms of flu?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_flu">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "流感的症状是什么？" : "What are the symptoms of flu?." ?></h3>
                        <p><?php echo $l == "cn" ? "症状通常在感染流感后一到三天左右开始，可持续一周或更长时间。 有些人没有症状或只有轻微的症状，而其他人可能会患重病。" : "Symptoms usually start about one to three days after catching the flu, and can last for a
                            week or more. Some people get no symptoms or only mild symptoms, while others can become
                            seriously ill." ?>
                        </p>
                        <p><?php echo $l == "cn" ? "流感的症状包括：" : "Symptoms of the flu include:" ?></p>
                        <ul class="question-list">
                            <li><?php echo $l == "cn" ? "流鼻涕或打喷嚏" : "runny nose or sneezing" ?></li>
                            <li><?php echo $l == "cn" ? "咳嗽或喉咙痛": "cough or sore throat"?></li>
                            <li><?php echo $l == "cn" ? "发热和发冷": "fever and chills"?></li>
                            <li><?php echo $l == "cn" ? "头痛": "headache"?></li>
                            <li><?php echo $l == "cn" ? "身体痛": "body aches"?></li>
                            <li><?php echo $l == "cn" ? "呕吐和腹泻（儿童更常见）。": "vomiting and diarrhoea (more common in children)."?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "流感是一种严重的疾病，因为它会导致：": "The flu is a serious disease because it can lead to:"?></p>
                        <ul>
                            <li>
                                <?php echo $l == "cn" ? "支气管炎": "bronchitis"?></li>
                            <li>
                                <?php echo $l == "cn" ? "臀部": "croup"?></li>
                            <li>
                                <?php echo $l == "cn" ? "肺炎": "pneumonia"?></li>
                            <li>
                                <?php echo $l == "cn" ? "耳部感染": "ear infections"?></li>
                            <li>
                                <?php echo $l == "cn" ? "心脏和其他器官损伤": "heart and other organ damage"?></li>
                            <li>
                                <?php echo $l == "cn" ? "脑部炎症和脑损伤": "brain inflammation and brain damage"?></li>
                            <li>
                                <?php echo $l == "cn" ? "死亡。": "death."?></li>
                        </ul>

                    </div>

                    <!--Why get immunised against flu?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_flu">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "为什么要接种流感疫苗？": "Why get immunised against flu?"?></h3>
                        <p>
                            <?php echo $l == "cn" ? "流感（也称为流感）是一种非常传染性的呼吸道感染。 对于婴儿，65岁以上的人群和孕妇来说尤其严重。": "The flu (also called influenza) is a very contagious infection of the airways. It is
                            especially serious for babies, people over 65 years old and pregnant women."?></p>
                        <p>
                            <?php echo $l == "cn" ? "接种疫苗是保护你免受流感引起的严重疾病的安全有效方法。": "Vaccination is a safe and effective way to protect you from serious disease caused by the
                            flu."?></p>
                        <p>
                            <?php echo $l == "cn" ? "通过接种流感疫苗，你还可以帮助保护其他人，尤其是过于生病或太年轻而不能接种疫苗的人。 在你的社区接种疫苗的人越多，疾病传播的可能性就越小。": "Vaccination is a safe and effective way to protect you from serious disease caused by the
                            flu."?></p>
                    </div>

                    <!--Who is at risk from flu?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_flu">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "谁患有流感风险？": "Who is at risk from flu?"?></h3>
                        <p><?php echo $l == "cn" ? "流感会影响所有年龄段的人。": "The flu can affect people of all ages?>The flu can affect people of all ages."?></p>
                        <p><?php echo $l == "cn" ? "流感住院风险最高的人群是：": "People at highest risk of being hospitalised with flu are:"?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "婴儿": "babies"?></li>
                            <li><?php echo $l == "cn" ? "超过65岁的": "people more than 65 years old"?></li>
                            <li><?php echo $l == "cn" ? "土着和托雷斯海峡岛民": "Aboriginal and Torres Strait Islander people"?></li>
                            <li><?php echo $l == "cn" ? "孕妇（和未出生的婴儿）": "pregnant women (and the unborn baby)"?></li>
                            <li><?php echo $l == "cn" ? "有长期医疗条件的人": "people with long-term medical conditions"?></li>
                            <li><?php echo $l == "cn" ? "免疫系统减弱的人": "people who have weakened immune systems"?></li>
                            <li><?php echo $l == "cn" ? "肥胖的人": "people who are obese"?></li>
                            <li><?php echo $l == "cn" ? "吸烟的人": "people who smoke"?></li>
                            <li><?php echo $l == "cn" ? "没有接种流感疫苗的人。": "people who haven’t been vaccinated against the flu."?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "可能导致严重感染流感的长期医疗条件包括：": "Long-term medical conditions that can lead to you having a serious case of the flu
                            include:"?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "心脏病": "heart disease"?></li>
                            <li><?php echo $l == "cn" ? "唐氏综合症": "Down syndrome"?></li>
                            <li><?php echo $l == "cn" ? "肺部疾病": "lung disease"?></li>
                            <li><?php echo $l == "cn" ? "神经系统疾病（如多发性硬化症）": "conditions of the nervous system (such as multiple sclerosis)"?></li>
                            <li><?php echo $l == "cn" ? "肝病": "liver disease"?></li>
                            <li><?php echo $l == "cn" ? "肾脏疾病": "kidney disease"?></li>
                            <li><?php echo $l == "cn" ? "糖尿病": "diabetes"?></li>
                            <li><?php echo $l == "cn" ? "血液疾病": "blood diseases"?></li>
                            <li><?php echo $l == "cn" ? "代谢紊乱。": "metabolic disorders."?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "已经接种过流感疫苗的人仍然可以得病，但疫苗接种确实可以降低疾病的风险和严重程度。": "People who have been immunised against the flu can still get the disease, but vaccination
                            does reduce the risk and the severity of illness."?>
                        </p>
                    </div>

                    <!--What is the time recommended to get flu immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_flu_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候建议进行流感疫苗接种？": " What is the time recommended to get flu immunisation?"?>
                        </h3>
                        <p><?php echo $l == "cn" ? "根据" : "Due to the" ?>
                            <?php echo $l == "cn" ? "<a href=\"NIP_schedule.php\">全国免疫计划（NIP）时间表</a>" : "<a href=\"NIP_schedule.php\"> National Immunisation Program (NIP) Schedule" ?>
                            <?php echo $l == "cn" ? "，，对于6个月以上有医疗风险因素的儿童，建议每年进行流感疫苗接种。" : ", flu
                            immunisation is recommended every year for children who are 6 months and over with medical
                            risk factors." ?>

                        </p>
                    </div>

                    <!--How much do I need to pay for flu immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_flu_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "我需要为流感疫苗支付多少钱？": " How much do I need to pay for flu immunisation?"?></h3>
                        <p>
                            <?php echo $l == "cn" ? "流感疫苗对符合条件的人员（6个月及以上有医疗风险因素）是免费的。 符合条件的人免费获得疫苗，但您的医疗保健提供者（例如您的医生）可能会为此次访问收取咨询费。 您可以在预约时查看。": " Flu vaccines are free for people who are eligible (6 months and over with medical risk
                            factors). Eligible people get the vaccine for free, but your health care provider (for
                            example, your doctor) may charge a consultation fee for the visit. You can check this when
                            you make your appointment."?></p>
                    </div>

                    <div class="custom-block biased-anchor" id="where_can_i_get_flu_immunisation">
                        <h3 class="left-alignment"> <?php echo $l == "cn" ? "我可以在哪里接种水痘疫苗？": " Where can I get chickenpox immunisation?"?></h3>
                        <p>
                            <?php echo $l == "cn" ? "在澳大利亚，人们可通过以下途径获得疫苗：": " In Australia, people can get vaccines through:"?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "地方委员会或社区卫生诊所" : "local council or community health clinics" ?>

                            </li>
                            <li>
                                <?php echo $l == "cn" ? "原住民医疗服务" : "Aboriginal Medical Services" ?>
                            </li>
                            <li>
                                <?php echo $l == "cn" ? "学校为基础的免疫项目" : "school based immunisation programs" ?></li>
                            <li>
                                <?php echo $l == "cn" ? "工作场所" : "workplaces" ?>
                            </li>
                        </ul>
                        <p>

                            <?php echo $l == "cn" ? "<a href=\"https://www.healthdirect.gov.au/australian-health-services\">通过国家卫生服务目录（NHSD）查找卫生服务提供者</a>" : "<a href=\"https://www.healthdirect.gov.au/australian-health-services\"> Find a health service provider by National Health Services Directory (NHSD）" ?>


                        </p>


                    </div>

                    <!--What are the possible side effects of flu immunisation?-->
                    <div class="custom-block biased-anchor" id="what_are_the_possible_side_effects_of_flu_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "流感免疫的可能副作用是什么？" : "What are the possible side effects of flu immunisation?" ?></h3>
                        <p>
                            <?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。 有时很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the time they’re not." ?></p>
                        <p>
                            <?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "流感疫苗的常见副作用包括：" : "Common side effects of flu vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时疼痛，发红，肿胀或硬度" : "pain, redness, swelling or hardness where the needle went in"?>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of flu immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_flu_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果流感免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of flu immunisation happen?"?></h3>
                        <p>
                            <?php echo $l == "cn" ? "与您的医生谈谈流感疫苗可能产生的副作用，或者如果您的孩子有可能出现与您有关的副作用。" : "Talk to your doctor about possible side effects of flu vaccines, or if your child has
                            possible side effects that concern you."?></p>
                    </div>
                </div>

                <!-- hepatitis A: not used-->
                <div>

                    <!--<div class="tab-pane fade <?php /*if ($d == "hepatitis_A") echo "show active" */ ?>" id="list-hepatitis_a"
                     role="tabpanel" aria-labelledby="list-hepatitis_a-list">-->

                    <!--title: hep a-->
                    <!--<div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Hepatitis A & Immunisation Service</h1>
                    </div>-->

                    <!--index: hep a-->
                    <!--<div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_hepatitis_a">What is hepatitis A?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_hepatitis_a">
                                        What are the symptoms of hepatitis A?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_hepatitis_a">
                                        Why get immunised against hepatitis A?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_hepatitis_a">
                                        Who is at risk from hepatitis A?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_hepatitis_a_immunisation">
                                        What is the time recommended to get hepatitis A immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_hepatitis_a_immunisation">
                                        How much do I need to pay for hepatitis A immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_hepatitis_a_immunisation">
                                        Where can I get hepatitis A immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_hepatitis_a_immunisation">
                                        What are the possible side effects of hepatitis A immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hepatitis_a_immunisation_happen">
                                        What can I do if the side effects of hepatitis A immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>-->

                    <!--What is hepatitis A?-->
                    <!--<div class="custom-block biased-anchor" id="what_is_hepatitis_a">
                        <h3 class="left-alignment">What is hepatitis A?</h3>
                        <p>Hepatitis A is a disease caused by the hepatitis A virus.</p>
                        <p>Hepatitis A affects your liver. It usually causes mild illness, but can sometimes cause
                            severe illness including liver failure. Adults are more likely to have severe symptoms than
                            children.</p>
                        <p>Unlike hepatitis B and hepatitis C, hepatitis A does not lead to chronic liver disease.</p>
                        <p>Hepatitis A, B and C are all different diseases, so they have different symptoms and
                            different treatments. The hepatitis A vaccine does not protect you from hepatitis B or
                            hepatitis C.</p>
                    </div>-->

                    <!--What are the symptoms of hepatitis A?-->
                    <!--<div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hepatitis_a">
                        <h3 class="left-alignment">What are the symptoms of hepatitis A?</h3>
                        <p>Some people who have hepatitis A have few or no symptoms, especially children under the age
                            of five.</p>
                        <p>In adolescents and adults, hepatitis A symptoms can include:</p>
                        <ul>
                            <li>fever</li>
                            <li>nausea</li>
                            <li>pain in the stomach area</li>
                            <li>dark urine</li>
                            <li>jaundice (yellow skin and eyes).</li>
                        </ul>
                        <p>Symptoms usually start about four weeks after catching hepatitis A, but this can be as early
                            as two weeks.</p>
                        <p>Symptoms can last for several weeks. Most people with hepatitis A fully recover.</p>
                    </div>-->

                    <!--Why get immunised against hepatitis A?-->
                    <!--<div class="custom-block biased-anchor" id="why_get_immunised_against_hepatitis_a">
                        <h3 class="left-alignment">Why get immunised against hepatitis A?</h3>
                        <p>Hepatitis A is a virus that can cause serious damage to your liver.</p>
                        <p>Vaccination is a safe and effective way to protect you from hepatitis A.</p>
                        <p>By getting vaccinated against hepatitis A, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread.</p>
                    </div>-->

                    <!--Who is at risk from hepatitis A?-->
                    <!--<div class="custom-block biased-anchor" id="who_is_at_risk_from_hepatitis_a">
                        <h3 class="left-alignment">Who is at risk from hepatitis A?</h3>
                        <p>Outbreaks of hepatitis A can sometimes occur:</p>
                        <ul>
                            <li>at childcare centres</li>
                            <li>in people who have eaten contaminated food</li>
                            <li>in people who inject drugs</li>
                            <li>in men who have sex with men.</li>
                        </ul>
                        <p>The risk of infection is higher in Aboriginal and Torres Strait Islander children. It is also more common in developing countries that have less access to clean water or sanitation.</p>
                        <p>People who already have liver disease are at greater risk of serious illness from hepatitis A.</p>
                    </div>-->

                    <!--What is the time recommended to get hepatitis A immunisation?-->
                    <!--<div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_hepatitis_a_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get hepatitis A immunisation?
                        </h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hepatitis_a_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for hepatitis A immunisation?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="where_can_i_get_hepatitis_a_immunisation">
                        <h3 class="left-alignment">Where can I get hepatitis A immunisation?</h3>
                        <p>
                            In Australia, people can get vaccines through:
                            <br>
                            - general practices
                            <br>
                            - local council or community health clinics
                            <br>
                            - Aboriginal Medical Services
                            <br>
                            - school based immunisation programs
                            <br>
                            - workplaces
                            <br>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)
                            </a>
                        </p>
                    </div>
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_hepatitis_a_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of hepatitis A immunisation?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hepatitis_a_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of hepatitis A immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of chickenpox vaccines, or if you or your
                            child
                            have possible side effects that concern you.
                        </p>
                    </div>-->
                    <!-- </div>-->
                </div>

                <!-- hepatitis B -->
                <div class="tab-pane fade <?php if ($d == "hepatitis_B") echo "show active" ?>" id="list-hepatitis_b"
                     role="tabpanel" aria-labelledby="list-hepatitis_b-list">

                    <!--title: hepatitis B-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "乙型肝炎和免疫服务" : "Hepatitis B & Immunisation Service" ?></h1>
                    </div>

                    <!--index: hepatitis B-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页面中：" : "In this page:" ?></li>
                                <li><?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_is_hepatitis_b\">什么是乙肝？" : "<a href=\"preventable_diseases.php#what_is_hepatitis_b\"> What is hepatitis B?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_are_the_symptoms_of_hepatitis_b\">乙型肝炎的症状是什么？" : "<a href=\"preventable_diseases.php#what_are_the_symptoms_of_hepatitis_b\"> What are the symptoms of hepatitis B?" ?></li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#why_get_immunised_against_hepatitis_b\">为什么要接种乙肝疫苗？" : "<a href=\"preventable_diseases.php#why_get_immunised_against_hepatitis_b\"> Why get immunised against hepatitis B?" ?></li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#who_is_at_risk_from_hepatitis_b\">谁患乙肝风险？" : "<a href=\"preventable_diseases.php#who_is_at_risk_from_hepatitis_b\">  Who is at risk from hepatitis B?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_is_the_time_recommended_to_get_hepatitis_b_immunisation\">什么时候建议去接种乙肝疫苗？" : "<a href=\"preventable_diseases.php#what_is_the_time_recommended_to_get_hepatitis_b_immunisation\">  What is the time recommended to get hepatitis B immunisation?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#how_much_do_i_need_to_pay_for_hepatitis_b_immunisation\">我需要为乙肝免疫接种付多少钱？" : "<a href=\"preventable_diseases.php#how_much_do_i_need_to_pay_for_hepatitis_b_immunisation\">  How much do I need to pay for hepatitis B immunisation?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#where_can_i_get_hepatitis_b_immunisation\">我可以在哪里接种乙肝疫苗？" : "<a href=\"preventable_diseases.php#where_can_i_get_hepatitis_b_immunisation\">   Where can I get hepatitis B immunisation?" ?></li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_hepatitis_b_immunisation\">乙肝免疫有哪些可能的副作用？" : "<a href=\"preventable_diseases.php#what_are_the_possible_side_effects_of_hepatitis_b_immunisation\"> What are the possible side effects of hepatitis B immunisation?" ?>
                                </li>
                                <li>
                                    <?php echo $l == "cn" ? "<a href=\"preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hepatitis_b_immunisation_happen\">如果乙肝疫苗的副作用发生，我该怎么办？" : "<a href=\"preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hepatitis_b_immunisation_happen\">What can I do if the side effects of hepatitis B immunisation happen?" ?>

                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is hepatitis B?-->
                    <div class="custom-block biased-anchor" id="what_is_hepatitis_b">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是乙肝？" : "What is hepatitis B?" ?>
                        </h3>
                        <p>Hepatitis B is a serious disease that causes your liver to become inflamed. It can lead to
                            liver disease, liver cancer and death.</p>
                        <p>Hepatitis B is not the same as hepatitis A or C, which have different causes, symptoms and
                            treatments.</p>
                        <p>Hepatitis B is caused by the hepatitis B virus</p>
                    </div>

                    <!--What are the symptoms of hepatitis B?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hepatitis_b">
                        <h3 class="left-alignment">What are the symptoms of hepatitis B?</h3>
                        <p>People generally start to show symptoms between 60 to 90 days after catching hepatitis B.
                            This can range from 45 days to 180 days.</p>
                        <p>Hepatitis B symptoms include:</p>
                        <ul>
                            <li>loss of appetite</li>
                            <li>fatigue</li>
                            <li>nausea and vomiting</li>
                            <li>rashes</li>
                            <li>pain in the right-hand side of the stomach area</li>
                            <li>fever</li>
                            <li>sore joints</li>
                            <li>jaundice (yellow skin and eyes).</li>
                        </ul>
                        <p>Most people recover completely. Some people have long-lasting effects, which can lead to
                            liver disease (including cirrhosis), liver cancer and death.</p>
                        <p>People who are infected with hepatitis B when they are children are more likely to have
                            serious liver disease later in life.</p>
                        <p>Some people who have recovered from hepatitis B can still carry the virus, meaning they can
                            pass the virus to others even though they don’t show any symptoms.</p>
                    </div>

                    <!--Why get immunised against hepatitis B?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_hepatitis_b">
                        <h3 class="left-alignment">Why get immunised against hepatitis B?</h3>
                        <p>Hepatitis B is a viral infection of the liver. It can cause long-term liver damage and liver
                            cancer.</p>
                        <p>Vaccination is a safe and effective way to protect you from hepatitis B.</p>
                        <p>By getting vaccinated against hepatitis B, you can also help protect other people. The more
                            people who are vaccinated in your community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from hepatitis B?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_hepatitis_b">
                        <h3 class="left-alignment">Who is at risk from hepatitis B?</h3>
                        <p>Anyone who is not vaccinated can get hepatitis B. The people most at risk from hepatitis B
                            are those who:</p>
                        <ul>
                            <li>have unprotected sex</li>
                            <li>come in contact with other people’s blood and other body fluids</li>
                            <li>inject drugs with shared needles.</li>
                        </ul>
                        <p>Mothers who have hepatitis B can also pass the virus to their babies during birth.</p>
                    </div>

                    <!--What is the time recommended to get hepatitis B immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_hepatitis_b_immunisation">
                        <h3 class="left-alignment">What is the time recommended to get hepatitis B immunisation?</h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            hepatitis B immunisation is recommended for babies within seven days of being born, and
                            children aged two months, four months and six months</p>
                    </div>

                    <!--How much do I need to pay for hepatitis B immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hepatitis_b_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for hepatitis B immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.
                        </p>
                    </div>

                    <!--Where can I get chickenpox immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_hepatitis_b_immunisation">
                        <h3 class="left-alignment">Where can I get chickenpox immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of hepatitis B immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_hepatitis_b_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of hepatitis B immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>Generally, the chance of having a serious side effect from a vaccine is much lower than the
                            chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of hepatitis B vaccines include:</p>
                        <ul>
                            <li>soreness where the needle went in</li>
                            <li>low-grade fever</li>
                            <li>body aches.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of hepatitis B immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hepatitis_b_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of hepatitis B immunisation
                            happen?</h3>
                        <p>Talk to your doctor about possible side effects of hepatitis B vaccines, or if your
                            child has possible side effects that concern you.</p>
                    </div>
                </div>

                <!-- Hib -->
                <div class="tab-pane fade <?php if ($d == "Hib") echo "show active" ?>" id="list-hib"
                     role="tabpanel" aria-labelledby="list-hib-list">

                    <!--title: Hib-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Hib (Haemophilus influenzae type b) & Immunisation Service</h1>
                    </div>

                    <!--index: Hib-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_hib">What is Hib?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_hib">What are the
                                        symptoms of
                                        Hib?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_hib">Why get immunised
                                        against
                                        Hib?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_hib">Who is at risk from
                                        Hib?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_hib_immunisation">What
                                        is the time recommended to get Hib immunisation?</a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_hib_immunisation">How
                                        much
                                        do I need to pay for Hib immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_hib_immunisation">Where can I get
                                        Hib
                                        immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_hib_immunisation">What
                                        are the possible side effects of Hib immunisation?</a>
                                    <br></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hib_immunisation_happen">What
                                        can I do if the side effects of Hib immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is Hib?-->
                    <div class="custom-block biased-anchor" id="what_is_hib">
                        <h3 class="left-alignment">What is Hib?</h3>
                        <p>Hib (Haemophilus influenzae type B) is a type of bacteria that can infect the airways, skin,
                            ears or brain.</p>
                        <p>Hib infections can be serious. Symptoms include:</p>
                        <ul>
                            <li>swelling of the membranes around the brain and spinal cord (meningitis)</li>
                            <li>pneumonia</li>
                            <li>swelling above the voice box (epiglottitis)</li>
                            <li>swelling and pain in the joints (septic arthritis)</li>
                            <li>infection of the skin (cellulitis).</li>
                        </ul>
                        <p>A severe Hib infection can cause deafness, brain damage and even death.</p>
                        <p>Hib was once a common cause of life-threatening infections, especially in children under two
                            years old. Since Hib vaccines were included in the immunisation schedule in 1993, Hib
                            infections in Australia have gone down by more than 95 per cent.</p>
                        <p>A Hib infection is caused by a type of bacteria called Haemophilus influenzae type b.</p>
                        <p>Hib bacteria can live in the nose and throat of healthy people without causing illness.</p>
                        <p>Hib is not a type of influenza, or the flu as it is commonly known. The flu is caused by a
                            virus and Hib is caused by bacteria.</p>
                    </div>

                    <!--What are the symptoms of Hib?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hib">
                        <h3 class="left-alignment">What are the symptoms of Hib?</h3>
                        <p>Symptoms usually start about two to four days after being infected with Hib. Symptoms can get
                            worse very quickly and will possibly need urgent medical attention.</p>
                        <p>Depending on the type of infection, symptoms of Hib can include:</p>
                        <ul>
                            <li>fever</li>
                            <li>severe headache</li>
                            <li>a stiff neck</li>
                            <li>fits or seizures</li>
                            <li>severe drowsiness</li>
                            <li>difficulty waking up</li>
                            <li>loss of consciousness</li>
                            <li>shortness of breath, cough and breathing problems</li>
                            <li>restlessness</li>
                            <li>drooling</li>
                            <li>joint pain, swelling and reduced movement of joints</li>
                            <li>red, tender skin.</li>
                        </ul>
                    </div>

                    <!--Why get immunised against Hib?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_hib">
                        <h3 class="left-alignment">Why get immunised against Hib?</h3>
                        <p>Hib (also called Haemophilus influenzae type b) is a serious disease in young children. It
                            can affect the airways, skin, ears or brain.</p>
                        <p>Vaccination is a safe and effective way to protect you from Hib.</p>
                        <p>By getting vaccinated against Hib, you can also help protect other people, especially people
                            who are too sick or too young to be vaccinated. The more people who are vaccinated in your
                            community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from Hib?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_hib">
                        <h3 class="left-alignment">Who is at risk from Hib?</h3>
                        <p>Babies and young children have the highest risk of serious disease from Hib.</p>
                        <p>Hib can live in the throats of healthy people without causing any symptoms. These people can
                            pass it on to others, including babies and young children.</p>
                    </div>

                    <!--What is the time recommended to get Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_hib_immunisation">
                        <h3 class="left-alignment">What is the time recommended to get Hib immunisation?</h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>, Hib
                            immunisation is recommended for children aged two months, four months, six months and 12
                            months</p>
                    </div>

                    <!--How much do I need to pay for Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hib_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for Hib immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_hib_immunisation">
                        <h3 class="left-alignment">Where can I get Hib immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="what_are_the_possible_side_effects_of_hib_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of Hib immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, but most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of Hib vaccines include:</p>
                        <ul>
                            <li>redness and swelling where the needle went in</li>
                            <li>fever.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of Hib immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hib_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of Hib immunisation happen?</h3>
                        <p>Talk to your doctor about possible side effects of HPV vaccines, or if your child
                            has possible side effects that concern you.</p>
                    </div>
                </div>

                <!-- HPV -->
                <div class="tab-pane fade <?php if ($d == "HPV") echo "show active" ?>" id="list-hpv"
                     role="tabpanel" aria-labelledby="list-hpv-list">

                    <!--title: HPV-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">HPV (Human papillomavirus) & Immunisation Service</h1>
                    </div>

                    <!--index: HPV-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_hpv">What is HPV?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_hpv">What are the
                                        symptoms of HPV?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_hpv">Why get immunised
                                        against HPV?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_hpv">Who is at risk from
                                        HPV?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_hpv_immunisation">What
                                        is the time recommended to get HPV immunisation?</a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_hpv_immunisation">How
                                        much do I need to pay for HPV immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_hpv_immunisation">Where can I get
                                        HPV immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_hpv_immunisation">What
                                        are the possible side effects of HPV immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hpv_immunisation_happen">What
                                        can I do if the side effects of HPV immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is HPV?-->
                    <div class="custom-block biased-anchor" id="what_is_hpv">
                        <h3 class="left-alignment">What is HPV?</h3>
                        <p>Human papillomavirus (HPV) is a common virus that is spread through sexual contact. Different
                            types of HPV affect different parts of the body.</p>
                        <p>HPV infection can be serious. It can cause cancers, including cancer of the cervix, vulva,
                            vagina, penis and anus, and some head and neck cancers. Some types can also cause genital
                            warts.</p>
                        <p>Two types – 16 and 18 – cause up to 80 per cent of the cervical cancers in women and up to 90
                            per cent of HPV-related cancers in men. Types 6 and 11 cause approximately 95 per cent of
                            genital warts.</p>
                    </div>

                    <!--What are the symptoms of HPV?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hpv">
                        <h3 class="left-alignment">What are the symptoms of HPV?</h3>
                        <p>Most people infected with HPV do not have any symptoms.</p>
                        <p>Some types of HPV can cause genital warts, which appear as small growths on or around the
                            genitals and anus. The warts may be:</p>
                        <ul>
                            <li>flat or raised</li>
                            <li>single or multiple</li>
                            <li>clustered.</li>
                        </ul>
                        <p>It is important to know that not all HPV infections lead to cancer.</p>
                        <p>If you are infected with a type of HPV that causes cancer, the virus can cause changes to the
                            cells. This can eventually lead to cancer. There are usually no symptoms, but some people
                            may notice:</p>
                        <ul>
                            <li>bleeding after sex</li>
                            <li>pain during sex</li>
                            <li>abnormal period, vaginal bleeding or discharge</li>
                            <li>pain in the pelvis</li>
                        </ul>
                    </div>

                    <!--Why get immunised against HPV?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_hpv">
                        <h3 class="left-alignment">Why get immunised against HPV?</h3>
                        <p>HPV is a viral infection that is sexually transmitted. It can cause genital warts and
                            cancer.</p>
                        <p>Vaccination is a safe and effective way to protect you from HPV. The HPV vaccine is often
                            called the ‘cervical cancer vaccine’.</p>
                        <p>By getting vaccinated against HPV, you can also help protect other people. The more people
                            who are vaccinated in your community, the less the disease will spread.</p>
                    </div>

                    <!--Who is at risk from HPV?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_hpv">
                        <h3 class="left-alignment">Who is at risk from HPV?</h3>
                        <p>Anyone who is sexually active is at risk of getting HPV.</p>
                    </div>

                    <!--What is the time recommended to get HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_hpv_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get HPV immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>, HPV
                            immunisation is recommended for people aged approximately 12 to 13 years (at school)</p>
                    </div>

                    <!--How much do I need to pay for HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hpv_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for HPV immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                        <P>If you child is over 15 years old when you get your first dose of HPV vaccine, you child will
                            need three doses, not two doses, to provide the best protection. You will need to pay for
                            one of these doses because only two doses are covered under the NIP.</P>
                    </div>

                    <!--Where can I get HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_hpv_immunisation">
                        <h3 class="left-alignment">Where can I get HPV immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="what_are_the_possible_side_effects_of_hpv_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of HPV immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of HPV vaccines include:</p>
                        <ul>
                            <li>pain, redness and swelling where the needle went in</li>
                            <li>headache</li>
                            <li>tiredness</li>
                            <li>body aches</li>
                            <li>fever.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of HPV immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hpv_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of HPV immunisation happen?</h3>
                        <p>Talk to your doctor about possible side effects of HPV vaccines, or if your child
                            has possible side effects that concern you.</p>
                    </div>
                </div>

                <!-- measles -->
                <div class="tab-pane fade <?php if ($d == "measles") echo "show active" ?>" id="list-measles"
                     role="tabpanel" aria-labelledby="list-measles-list">

                    <!--title: measles-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Measles & Immunisation Service</h1>
                    </div>

                    <!--index: measles-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_measles">What is measles?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_measles">What are the
                                        symptoms of measles?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_measles">Why get
                                        immunised against measles?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_measles">Who is at risk from
                                        measles?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_measles_immunisation">What
                                        is the time recommended to get measles immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_measles_immunisation">How
                                        much do I need to pay for measles immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_measles_immunisation">Where can I
                                        get measles immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_measles_immunisation">What
                                        are the possible side effects of measles immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_measles_immunisation_happen">What
                                        can I do if the side effects of measles immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is measles?-->
                    <div class="custom-block biased-anchor" id="what_is_measles">
                        <h3 class="left-alignment">What is measles?</h3>
                        <p>Measles is a very contagious disease that causes a red rash and fever.</p>
                        <p>Measles is a serious disease because it can lead to:</p>
                        <ul>
                            <li>pneumonia and other infections of the airways</li>
                            <li>swelling of the brain (encephalitis), which can cause a brain injury</li>
                            <li>infection of the middle ear</li>
                            <li>adverse effects on pregnant women and their babies</li>
                            <li>death.</li>
                        </ul>
                        <p>About one in 15 infected people get pneumonia, and one in 1,000 develops brain swelling.</p>
                        <p>For every 10 people who develop brain swelling, between two and four people will develop a
                            brain injury and one will die.</p>
                        <p>Measles is caused by the measles virus.</p>
                    </div>

                    <!--What are the symptoms of measles?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_measles">
                        <h3 class="left-alignment">What are the symptoms of measles?</h3>
                        <p>Measles symptoms include:</p>
                        <ul>
                            <li>fever</li>
                            <li>generally feeling unwell</li>
                            <li>tiredness</li>
                            <li>runny nose</li>
                            <li>dry cough</li>
                            <li>sore, red eyes (conjunctivitis)</li>
                            <li>red rash.</li>
                        </ul>
                        <p>Symptoms usually start about 10 to 12 days after catching the virus, and last for about 14
                            days. The rash often starts on the face or hairline, and spreads to the rest of the body
                            quickly. The rash is not itchy, and disappears after about one week.</p>
                        <p>If measles leads to a more serious disease, other symptoms will develop, depending on which
                            part of the body is affected.</p>
                    </div>

                    <!--Why get immunised against measles?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_measles">
                        <h3 class="left-alignment">Why get immunised against measles?</h3>
                        <p>Measles is a very contagious viral infection that causes a rash and fever. It can be a
                            serious disease that needs hospital treatment and can cause death.</p>
                        <p>Vaccination is a safe and effective way to protect you from measles.</p>
                        <p>By getting vaccinated against measles, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from measles?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_measles">
                        <h3 class="left-alignment">Who is at risk from measles?</h3>
                        <p>Anyone who has not been immunised or has not previously had measles is at risk of getting the
                            disease.</p>
                        <p>Measles is not common in Australia, but it is still important to be immunised. Measles can be
                            brought into Australia by someone who has been overseas.</p>
                        <p>People whose immune system is compromised are also at risk.</p>
                    </div>

                    <!--What is the time recommended to get measles immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_measles_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get measles immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            measles immunisation is recommended for children aged 12 months and 18 months.</p>
                    </div>

                    <!--How much do I need to pay for measles immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_measles_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for measles immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get measles immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_measles_immunisation">
                        <h3 class="left-alignment">Where can I get measles immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of measles immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_measles_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of measles immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of measles vaccines include:</p>
                        <ul>
                            <li>fever</li>
                            <li>mild rash</li>
                            <li>feeling unwell</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of measles immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_measles_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of measles immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of measles vaccines, or if your child
                            has possible side effects that concern you.
                        </p>
                    </div>
                </div>

                <!-- meningococcal disease -->
                <div class="tab-pane fade <?php if ($d == "meningococcal_disease") echo "show active" ?>"
                     id="list-meningococcal_disease"
                     role="tabpanel" aria-labelledby="list-meningococcal_disease-list">

                    <!--title: meningococcal disease-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Meningococcal disease & Immunisation Service</h1>
                    </div>

                    <!--index: meningococcal disease-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_meningococcal_disease">
                                        What is meningococcal disease?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_meningococcal_disease">
                                        What are the symptoms of meningococcal disease?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_meningococcal_disease">
                                        Why get immunised against meningococcal disease?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_meningococcal_disease">
                                        Who is at risk from meningococcal disease?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_meningococcal_disease_immunisation">
                                        What is the time recommended to get meningococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_meningococcal_disease_immunisation">
                                        How much do I need to pay for meningococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#where_can_i_get_meningococcal_disease_immunisation">
                                        Where can I get meningococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_meningococcal_disease_immunisation">
                                        What are the possible side effects of meningococcal disease immunisation?</a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_meningococcal_disease_immunisation_happen">
                                        What can I do if the side effects of meningococcal disease immunisation
                                        happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is meningococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_is_meningococcal_disease">
                        <h3 class="left-alignment">What is meningococcal disease?</h3>
                        <p>Meningococcal disease is a rare but serious and life-threatening infection. Meningococcal
                            disease usually causes:</p>
                        <ul>
                            <li>swelling of the lining of the brain (meningitis)</li>
                            <li>infection of the blood (septicaemia).</li>
                        </ul>
                        <p>It can also cause:</p>
                        <ul>
                            <li>pneumonia</li>
                            <li>sudden arthritis.</li>
                        </ul>
                        <p>Symptoms appear suddenly and people can die very quickly without medical help.</p>
                        <p>Long-term effects of meningococcal disease can include:</p>
                        <ul>
                            <li>deformed arms and legs</li>
                            <li>loss of arms and legs</li>
                            <li>scars on the skin</li>
                            <li>deafness in one or both ears</li>
                            <li>headaches</li>
                            <li>ringing in the ears (tinnitus)</li>
                            <li>blurred or double vision</li>
                            <li>aches and stiffness in the joints</li>
                            <li>learning difficulties.</li>
                        </ul>
                        <p>Meningococcal disease is caused by a number of different strains of the bacterium called <i>Neisseria
                                meningitidis</i>. There are a number of subtypes given different letters of the alphabet
                            – the main types seen in Australia are Meningococcus B, W and Y.</p>
                    </div>

                    <!--What are the symptoms of meningococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_meningococcal_disease">
                        <h3 class="left-alignment">What are the symptoms of meningococcal disease?</h3>
                        <p>Some symptoms of meningococcal can suggest a severe case of the disease. If these symptoms
                            appear, you should seek urgent medical treatment:</p>
                        <ul>
                            <li>rash of red or purple pinprick spots, or larger bruise-like areas</li>
                            <li>fever</li>
                            <li>headache</li>
                            <li>neck stiffness</li>
                            <li>discomfort when looking at bright light</li>
                            <li>nausea or vomiting</li>
                            <li>diarrhoea</li>
                            <li>feeling very, very sick.</li>
                        </ul>
                        <p>Other possible symptoms can include:</p>
                        <ul>
                            <li>loss of appetite or refusing to feed</li>
                            <li>irritability or fretfulness</li>
                            <li>confusion</li>
                            <li>drowsiness</li>
                            <li>in young children, extreme tiredness or floppiness</li>
                            <li>aching or sore muscles</li>
                            <li>painful or swollen joints</li>
                            <li>difficulty walking, and maybe collapsing</li>
                            <li>grunting or moaning</li>
                            <li>difficulty talking</li>
                            <li>in young children, having fits or twitching.</li>
                        </ul>
                        <p>Babies and young children can have different symptoms to older children and adults.</p>
                    </div>

                    <div class="custom-block biased-anchor" id="why_get_immunised_against_meningococcal_disease">
                        <h3 class="left-alignment">Why get immunised against meningococcal disease?</h3>
                        <p>Meningococcal disease is a very serious infection that can cause severe scarring, loss of
                            limbs, brain damage and death.</p>
                        <p>Vaccination is a safe and effective way to protect you from meningococcal disease.</p>
                        <p>There are five main types of meningococcal disease, called A, B, C, W and Y. Vaccines can
                            protect against all these types, but different vaccines protect against different types.</p>
                    </div>

                    <!--Who is at risk from meningococcal disease?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_meningococcal_disease">
                        <h3 class="left-alignment">Who is at risk from meningococcal disease?</h3>
                        <p>Anyone can get meningococcal disease, but it is rare. The people most at risk of getting the
                            disease are:</p>
                        <ul>
                            <li>young children under the age of five</li>
                            <li>teenagers and young adults between 15 and 24 years old</li>
                            <li>people living with patients who have meningococcal disease</li>
                            <li>people who are exposed to cigarette smoke</li>
                            <li>travellers to countries with high rates of meningococcal disease</li>
                            <li>people who have a weakened immune system due to both chronic disease and some
                                medications.
                            </li>
                        </ul>
                    </div>

                    <!--What is the time recommended to get meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_meningococcal_disease_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get meningococcal disease immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            meningococcal immunisation is recommended for children aged 12 months</p>
                    </div>

                    <!--How much do I need to pay for meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="how_much_do_i_need_to_pay_for_meningococcal_disease_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for meningococcal disease
                            immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_meningococcal_disease_immunisation">
                        <h3 class="left-alignment">Where can I get meningococcal disease immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_meningococcal_disease_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of meningococcal disease
                            immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Most of the time they are not serious.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of meningococcal vaccines include:</p>
                        <ul>
                            <li>pain, redness and swelling where the needle went in</li>
                            <li>fever (especially for meningococcal B vaccine)</li>
                            <li>feeling unsettled or tired</li>
                            <li>decreased appetite</li>
                            <li>headache.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of meningococcal disease immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_meningococcal_disease_immunisation_happen">
                        <h3 class="left-alignment">
                            What can I do if the side effects of meningococcal disease immunisation happen?
                        </h3>
                        <p>Talk to your doctor about possible side effects of meningococcal disease vaccines, or if your
                            child
                            has possible side effects that concern you.</p>
                    </div>
                </div>

                <!-- mumps -->
                <div class="tab-pane fade <?php if ($d == "mumps") echo "show active" ?>" id="list-mumps"
                     role="tabpanel" aria-labelledby="list-mumps-list">

                    <!--title: mumps-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Mumps & Immunisation Service</h1>
                    </div>

                    <!--index: mumps-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_mumps">What is mumps?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_mumps">What are the
                                        symptoms of
                                        mumps?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_mumps">Why get immunised
                                        against
                                        mumps?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_mumps">Who is at risk from
                                        mumps?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_mumps_immunisation">What
                                        is the time recommended to get mumps immunisation?</a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_mumps_immunisation">How
                                        much
                                        do I need to pay for mumps immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_mumps_immunisation">Where can I
                                        get mumps
                                        immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_mumps_immunisation">What
                                        are the possible side effects of mumps immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_mumps_immunisation_happen">What
                                        can I do if the side effects of mumps immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is mumps?-->
                    <div class="custom-block biased-anchor" id="what_is_mumps">
                        <h3 class="left-alignment">What is mumps?</h3>
                        <p>Mumps is a highly contagious disease that causes fever and inflammation of the face.</p>
                        <p>Mumps is a serious disease because it can lead to: </p>
                        <ul>
                            <li>inflammation of the brain (encephalitis)</li>
                            <li>inflammation of the lining of the brain and spinal cord (meningitis)</li>
                            <li>inflammation of the heart (myocarditis)</li>
                            <li>infertility (not being able to have children).</li>
                        </ul>
                        <p>About one in 200 children with mumps will develop brain inflammation, which can be very
                            serious. Mumps can also damage nerves, which can lead to deafness.</p>
                        <p>In pregnant women, mumps can cause miscarriage during the first three months of
                            pregnancy.</p>
                        <p>Mumps is caused by the mumps virus.</p>
                    </div>

                    <!--What are the symptoms of mumps?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_mumps">
                        <h3 class="left-alignment">What are the symptoms of mumps?</h3>
                        <p>Mumps symptoms include:</p>
                        <ul>
                            <li>swelling of the face, especially around the lower jaw</li>
                            <li>fever</li>
                            <li>headache</li>
                            <li>fatigue</li>
                            <li>aches and pains</li>
                            <li>loss of appetite, leading to weight loss</li>
                            <li>painful chewing or swallowing.</li>
                        </ul>
                        <p>Mumps can cause swelling and pain in other parts of the body as well, including in the:</p>
                        <ul>
                            <li>breasts</li>
                            <li>testicles</li>
                            <li>ovaries</li>
                            <li>membranes surrounding the brain (meningitis)</li>
                            <li>brain (encephalitis)</li>
                            <li>heart muscle</li>
                            <li>pancreas</li>
                            <li>liver</li>
                            <li>thyroid.</li>
                        </ul>
                        <p>Symptoms usually start about 12 to 25 days after catching mumps. People usually start to feel
                            better in two weeks, unless they have a serious case of the disease.</p>
                    </div>

                    <!--Why get immunised against mumps?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_mumps">
                        <h3 class="left-alignment">Why get immunised against mumps?</h3>
                        <p>Mumps is a viral disease that causes swollen salivary glands and high fever. It can sometimes
                            cause hearing loss, miscarriage or brain swelling.</p>
                        <p>Vaccination is a safe and effective way to protect you from mumps.</p>
                        <p>By getting vaccinated against mumps, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from mumps?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_mumps">
                        <h3 class="left-alignment">Who is at risk from mumps?</h3>
                        <p>Mumps can affect people of all ages. Anyone who has not been immunised is at risk of catching
                            mumps. Mumps is not common in Australia, but cases do occur.</p>
                        <p>The mumps vaccine prevents most, but not all people getting mumps and complications caused by
                            the disease. Some people who receive two doses of the mumps vaccine can still get mumps,
                            especially if they have prolonged, close contact with someone who has the disease. If a
                            vaccinated person does get mumps, they will likely have less severe illness than a person
                            who has not been vaccinated.</p>
                    </div>

                    <!--What is the time recommended to get mumps immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_mumps_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get mumps immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>, mumps
                            immunisation is recommended for children aged 12 months and 18 months.</p>
                    </div>

                    <!--How much do I need to pay for mumps immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_mumps_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for mumps immunisation?</h3>
                        <p>
                            All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.
                        </p>
                    </div>

                    <!--Where can I get mumps immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_mumps_immunisation">
                        <h3 class="left-alignment">Where can I get mumps immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of mumps immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_mumps_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of mumps immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of mumps vaccines include:</p>
                        <ul>
                            <li>fever</li>
                            <li>mild rash</li>
                            <li>feeling unwell.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of mumps immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_mumps_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of mumps immunisation happen?</h3>
                        <p>Talk to your doctor about possible side effects of mumps vaccines, or if your child
                            has possible side effects that concern you.</p>
                    </div>
                </div>

                <!-- pneumococcal disease -->
                <div class="tab-pane fade <?php if ($d == "pneumococcal_disease") echo "show active" ?>"
                     id="list-pneumococcal_disease"
                     role="tabpanel" aria-labelledby="list-pneumococcal_disease-list">

                    <!--title: pneumococcal disease-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Pneumococcal disease & Immunisation Service</h1>
                    </div>

                    <!--index: pneumococcal disease-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_pneumococcal_disease">What is pneumococcal
                                        disease?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_pneumococcal_disease">What
                                        are
                                        the symptoms of pneumococcal disease?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_pneumococcal_disease">Why
                                        get
                                        immunised against pneumococcal disease?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_pneumococcal_disease">Who is
                                        at risk
                                        from pneumococcal disease?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_pneumococcal_disease_immunisation">What
                                        is the time recommended to get pneumococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_pneumococcal_disease_immunisation">How
                                        much do I need to pay for pneumococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#where_can_i_get_pneumococcal_disease_immunisation">Where
                                        can I get pneumococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_pneumococcal_disease_immunisation">What
                                        are the possible side effects of pneumococcal disease immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_pneumococcal_disease_immunisation_happen">What
                                        can I do if the side effects of pneumococcal disease immunisation happen?</a>
                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_is_pneumococcal_disease">
                        <h3 class="left-alignment">What is pneumococcal disease?</h3>
                        <p>Pneumococcal disease is caused by bacteria known as Streptococcus pneumoniae, sometimes known
                            as pneumococcus.. The bacteria can cause a number of different types of very serious
                            disease, which can affect the lungs, ears, sinuses and brain. Pneumococcal disease is
                            serious because it can lead to:</p>
                        <ul>
                            <li>pneumonia</li>
                            <li>swelling and infection of the brain (meningitis)</li>
                            <li>infection of the blood (septicaemia)</li>
                            <li>coma</li>
                            <li>death.</li>
                        </ul>
                    </div>

                    <!--What are the symptoms of pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_pneumococcal_disease">
                        <h3 class="left-alignment">What are the symptoms of pneumococcal disease?</h3>
                        <p>Symptoms of pneumococcal disease vary depending on which body part is infected:</p>
                        <ul>
                            <li>middle ear: sore ear(s), hearing loss, fever</li>
                            <li>sinuses: sore face, blocked nose, headaches and a yellow–green mucus</li>
                            <li>membranes of the brain and spinal cord: high fever, headache, nausea, vomiting, stiff
                                neck and coma
                            </li>
                            <li>lungs: fever, cough, chest pain and problems breathing</li>
                            <li>bloodstream: fever, muscle aches and pains, and headaches</li>
                            <li>joints: pain, swelling and stiffness in the affected joint</li>
                            <li>bones: fever, pain in the bone and stiffness.</li>
                        </ul>
                    </div>

                    <!--Why get immunised against pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_pneumococcal_disease">
                        <h3 class="left-alignment">Why get immunised against pneumococcal disease?</h3>
                        <p>Pneumococcal disease is a bacterial infection. It is especially serious for young children
                            and older people. It can cause pneumonia, bloodstream infection and meningitis (inflammation
                            of the membranes around the brain).</p>
                        <p>Vaccination is a safe and effective way to protect you from pneumococcal disease.</p>
                        <p>By getting vaccinated against pneumococcal disease, you can also help protect other people,
                            especially people who are too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_pneumococcal_disease">
                        <h3 class="left-alignment">Who is at risk from pneumococcal disease?</h3>
                        <p>The people most at risk of getting pneumococcal disease are:</p>
                        <ul>
                            <li>young children</li>
                            <li>people over 65 years old</li>
                            <li>Aboriginal and Torres Strait Islander people</li>
                            <li>people who have weakened immune systems</li>
                            <li>people who have had their spleen removed or when it does not work properly</li>
                            <li>people with chronic diseases such as diabetes, lung disease, kidney disease, heart
                                disease, liver disease or cancer
                            </li>
                            <li>premature babies</li>
                            <li>people who have Down syndrome</li>
                            <li>people who smoke</li>
                            <li>people who drink harmful amounts of alcohol</li>
                            <li>people who have had specific operation including cochlear implants and intracranial
                                shunts
                            </li>
                            <li>people who have a condition where the fluid leaks out from around their brain and spinal
                                cord
                            </li>
                            <li>people who have had pneumococcal disease before.</li>
                        </ul>
                    </div>

                    <!--What is the time recommended to get pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get pneumococcal disease immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            pneumococcal immunisation is recommended for all children aged two months, four months and
                            six months.</p>
                    </div>

                    <!--How much do I need to pay for pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="how_much_do_i_need_to_pay_for_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for pneumococcal disease immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment">Where can I get pneumococcal disease immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of pneumococcal disease
                            immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of pneumococcal vaccines include:</p>
                        <ul>
                            <li>pain, redness and swelling where the needle went in</li>
                            <li>fever</li>
                            <li>feeling irritable</li>
                            <li>feeling drowsy</li>
                            <li>reduced appetite</li>
                            <li>body aches.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of pneumococcal disease immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_pneumococcal_disease_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of pneumococcal disease
                            immunisation happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of pneumococcal disease vaccines, or if
                            your child has possible side effects that concern you.
                        </p>
                    </div>
                </div>

                <!-- polio -->
                <div class="tab-pane fade <?php if ($d == "polio") echo "show active" ?>" id="list-polio"
                     role="tabpanel" aria-labelledby="list-polio-list">

                    <!--title: polio-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Polio (Poliomyelitis) & Immunisation Service</h1>
                    </div>

                    <!--index: polio-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_polio">What is polio?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_polio">What are the
                                        symptoms of
                                        polio?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_polio">Why get immunised
                                        against
                                        polio?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_polio">Who is at risk from
                                        polio?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_polio_immunisation">What
                                        is the time recommended to get polio immunisation?</a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_polio_immunisation">How
                                        much
                                        do I need to pay for polio immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_polio_immunisation">Where can I
                                        get polio
                                        immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_polio_immunisation">What
                                        are the possible side effects of polio immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_polio_immunisation_happen">What
                                        can I do if the side effects of polio immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is polio?-->
                    <div class="custom-block biased-anchor" id="what_is_polio">
                        <h3 class="left-alignment">What is polio?</h3>
                        <p>Polio is short for poliomyelitis. It is a serious viral disease that can lead to long-term
                            disability, paralysis and death.</p>
                        <p>The Global Polio Eradication Initiative is an international plan to eliminate polio from
                            every country in the world. Australia has been officially polio-free since 2000. Polio is
                            present in only a few countries in the world.</p>
                        <p>Polio is caused by the poliovirus.</p>
                    </div>

                    <!--What are the symptoms of polio?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_polio">
                        <h3 class="left-alignment">What are the symptoms of polio?</h3>
                        <p>Most people who come into contact with polio do not have any symptoms. If symptoms do occur,
                            they include:</p>
                        <ul>
                            <li>headache</li>
                            <li>nausea and vomiting</li>
                            <li>fatigue</li>
                            <li>stiffness in the back and neck</li>
                            <li>muscle pain, often severe</li>
                            <li>paralysis.</li>
                        </ul>
                        <p>Symptoms usually start about three to 35 days after catching polio. Most people make a
                            complete recovery, but some people develop life-long disability. Damage to some muscles can
                            mean you can’t breathe or swallow properly anymore. Damage to nerves may cause other
                            long-term effects, including:</p>
                        <ul>
                            <li>losing strength</li>
                            <li>running out of energy</li>
                            <li>breathing, swallowing or speaking difficulties</li>
                            <li>pain in muscles and joints.</li>
                        </ul>
                    </div>

                    <!--Why get immunised against polio?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_polio">
                        <h3 class="left-alignment">Why get immunised against polio?</h3>
                        <p>Polio (also called poliomyelitis) is a viral infection that can cause paralysis and
                            death.</p>
                        <p>Vaccination is a safe and effective way to protect you from polio.</p>
                        <p>The Global Polio Eradication Initiative is an international plan to eliminate polio from
                            every country in the world. Australia has been officially polio-free since 2000, and only a
                            few countries in the world still have polio.</p>
                        <p>Polio immunisation is still very important. This is because polio can be brought into
                            Australia by people who travel to countries that have polio. If Australians are not
                            immunised, the disease could start spreading again.</p>
                        <p>By getting vaccinated against polio, you can also help protect other people, especially
                            people who are unable to be vaccinated. The more people who are vaccinated in your
                            community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from polio?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_polio">
                        <h3 class="left-alignment">Who is at risk from polio?</h3>
                        <p>Anyone who is not immunised against polio is at risk from contracting the disease,
                            particularly if they travel to a country where people still have polio. These people could
                            bring the virus back to Australia and potentially spread it to people who are not immunised.
                            This is why it is important that Australia maintains high immunisation levels against
                            polio.</p>
                    </div>

                    <!--What is the time recommended to get polio immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_polio_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get polio immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>, Polio
                            immunisation is recommended for children aged two months, four months, six months and four
                            years.</p>
                    </div>

                    <!--How much do I need to pay for polio immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_polio_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for polio immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get polio immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_polio_immunisation">
                        <h3 class="left-alignment">Where can I get polio immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of polio immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_polio_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of polio immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of polio vaccines include:</p>
                        <ul>
                            <li>pain, redness and hardness where the needle went in</li>
                            <li>fever, crying and decreased appetite in children.</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of polio immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_polio_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of polio immunisation happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of polio vaccines, or if your child
                            has possible side effects that concern you.
                        </p>
                    </div>
                </div>

                <!-- rotavirus -->
                <div class="tab-pane fade <?php if ($d == "rotavirus") echo "show active" ?>" id="list-rotavirus"
                     role="tabpanel" aria-labelledby="list-rotavirus-list">

                    <!--title: rotavirus-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Rotavirus & Immunisation Service</h1>
                    </div>

                    <!--index: rotavirus-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_rotavirus">What is rotavirus?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_rotavirus">What are the
                                        symptoms
                                        of rotavirus?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_rotavirus">Why get
                                        immunised
                                        against rotavirus?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_rotavirus">Who is at risk from
                                        rotavirus?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_rotavirus_immunisation">What
                                        is the time recommended to get rotavirus immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_rotavirus_immunisation">How
                                        much do I need to pay for rotavirus immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_rotavirus_immunisation">Where can
                                        I get
                                        rotavirus immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_rotavirus_immunisation">What
                                        are the possible side effects of rotavirus immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_rotavirus_immunisation_happen">What
                                        can I do if the side effects of rotavirus immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is rotavirus?-->
                    <div class="custom-block biased-anchor" id="what_is_rotavirus">
                        <h3 class="left-alignment">What is rotavirus?</h3>
                        <p>Rotavirus is a very contagious virus that can cause severe diarrhoea and vomiting.</p>
                        <p>Rotavirus disease is serious because it can lead to dehydration, shock and sometimes death.
                            Before the rotavirus vaccine was introduced in Australia:</p>
                        <ul>
                            <li>around 10,000 children under five years old went to hospital because of rotavirus every
                                year
                            </li>
                            <li>around 115,000 children under five years old saw their doctor because of rotavirus every
                                year
                            </li>
                            <li>at least one child died because of rotavirus every year.</li>
                        </ul>
                        <p>Since the vaccine was introduced, the number of children who go to hospital because of
                            rotavirus has dropped by more than 70 per cent.</p>
                        <p>Rotavirus disease is caused by several strains of the rotavirus virus.</p>
                    </div>

                    <!--What are the symptoms of rotavirus?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_rotavirus">
                        <h3 class="left-alignment">What are the symptoms of rotavirus?</h3>
                        <p>Rotavirus symptoms include:</p>
                        <ul>
                            <li>vomiting</li>
                            <li>diarrhoea, which usually starts suddenly</li>
                            <li>fever</li>
                            <li>dry mouth, not weeing much, or few or no tears when crying. These are signs of
                                dehydration, or not having enough water in your body
                            </li>
                            <li>drowsiness.</li>
                        </ul>
                        <p>Symptoms can be mild and last only a couple of days, or they can be severe and
                            life-threatening. You may need to go to hospital if you have a severe case of the
                            disease.</p>
                        <p>Signs of a severe case of the disease that need medical attention include:</p>
                        <ul>
                            <li>sunken eyes</li>
                            <li>a sunken soft spot (fontanelle) on a baby’s head</li>
                            <li>not drinking but still having vomiting and diarrhoea</li>
                            <li>a lot of diarrhoea, eight to ten watery poos a day, two or three large poos a day, or
                                diarrhoea for more than 10 days
                            </li>
                            <li>vomiting for more than one day</li>
                            <li>cold hands and feet</li>
                            <li>dark yellow urine</li>
                            <li>being slower to react than normal</li>
                            <li>blood or mucus in the poo</li>
                            <li>severe stomach pain.</li>
                        </ul>
                        <p>Symptoms usually start about one to three days after catching rotavirus. Most people recover
                            after three to seven days.</p>
                    </div>

                    <!--Why get immunised against rotavirus?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_rotavirus">
                        <h3 class="left-alignment">Why get immunised against rotavirus?</h3>
                        <p>Rotavirus is a very contagious disease that can cause severe and life-threatening
                            diarrhoea.</p>
                        <p>Vaccination is a safe and effective way to protect you from rotavirus.</p>
                        <p>By getting vaccinated against rotavirus, you can also help protect other people, especially
                            people who are unable to be vaccinated. The more people who are vaccinated in your
                            community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from rotavirus?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_rotavirus">
                        <h3 class="left-alignment">Who is at risk from rotavirus?</h3>
                        <p>Rotavirus can affect people at any age, but babies and young children are most at risk of a
                            serious case of the disease. Adults can also get rotavirus, especially if they have a
                            weakened immune system.</p>
                    </div>

                    <!--What is the time recommended to get rotavirus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_rotavirus_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get rotavirus immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            Rotavirus immunisation is recommended for children aged two months and four months if they
                            get the brand Rotarix</p>
                    </div>

                    <!--How much do I need to pay for rotavirus immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_rotavirus_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for rotavirus immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get rotavirus immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_rotavirus_immunisation">
                        <h3 class="left-alignment">Where can I get rotavirus immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                    </div>

                    <!--What are the possible side effects of rotavirus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_rotavirus_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of rotavirus immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Rotavirus vaccines do not usually have any side effects.</p>
                        <p>A very rare side effect of rotavirus vaccine is called intussusception. This is when part of
                            the bowel slides into another part of the bowel like a telescope. This can block the bowel.
                            If intussusception happens, it is usually between one and seven days after getting a
                            rotavirus vaccine. Your doctor will tell you what symptoms to look out for so it can be
                            treated. Intussusception can also happen for other reasons that are not related to
                            immunisation.</p>
                    </div>

                    <!--What can I do if the side effects of rotavirus immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_rotavirus_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of rotavirus immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of rotavirus vaccines, or if your
                            child has possible side effects that concern you.
                        </p>
                    </div>
                </div>

                <!-- rubella -->
                <div class="tab-pane fade <?php if ($d == "rubella") echo "show active" ?>" id="list-rubella"
                     role="tabpanel" aria-labelledby="list-rubella-list">

                    <!--title: rubella-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Rubella (German Measles) & Immunisation Service</h1>
                    </div>

                    <!--index: rubella-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_rubella">What is rubella?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_rubella">What are the
                                        symptoms of
                                        rubella?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_rubella">Why get
                                        immunised
                                        against rubella?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_rubella">Who is at risk from
                                        rubella?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_rubella_immunisation">What
                                        is the time recommended to get rubella immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_rubella_immunisation">How
                                        much do I need to pay for rubella immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_rubella_immunisation">Where can I
                                        get
                                        rubella immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_rubella_immunisation">What
                                        are the possible side effects of rubella immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_rubella_immunisation_happen">What
                                        can I do if the side effects of rubella immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is rubella?-->
                    <div class="custom-block biased-anchor" id="what_is_rubella">
                        <h3 class="left-alignment">What is rubella?</h3>
                        <p>Rubella is a contagious viral illness that is generally mild, causing a fever, rash and
                            swollen lymph glands. However, if contracted by pregnant women during the first 10 weeks of
                            pregnancy, the disease can cause life-long problems for their babies.</p>
                        <p>If a pregnant woman gets rubella early in her pregnancy, the baby can be born with:</p>
                        <ul>
                            <li>deafness</li>
                            <li>blindness</li>
                            <li>heart problems</li>
                            <li>brain damage</li>
                            <li>growth problems</li>
                            <li>swelling in their brain, liver or lungs.</li>
                        </ul>
                        <p>About nine in every 10 babies whose mothers get rubella in the first 10 weeks of pregnancy
                            will have one or more of these problems.</p>
                        <p>Rubella is sometimes called German measles, but it is not the same disease as measles.</p>
                        <p>Rubella is caused by the rubella virus.</p>
                    </div>

                    <!--What are the symptoms of rubella?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_rubella">
                        <h3 class="left-alignment">What are the symptoms of rubella?</h3>
                        <p>Rubella symptoms include:</p>
                        <ul>
                            <li>rash</li>
                            <li>swollen lymph glands</li>
                            <li>joint pain</li>
                            <li>mild fever</li>
                            <li>headache</li>
                            <li>runny nose</li>
                            <li>sore red eyes.</li>
                        </ul>
                        <p>Symptoms usually start 14 to 21 days after catching rubella, but about half the people who
                            catch it don’t have any symptoms. Most people who have symptoms recover in about three
                            days.</p>
                    </div>

                    <!--Why get immunised against rubella?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_rubella">
                        <h3 class="left-alignment">Why get immunised against rubella?</h3>
                        <p>Rubella (also called German measles) is a viral infection that causes fever and a rash. It is
                            a very serious disease for pregnant women because it can cause severe harm to unborn
                            babies.</p>
                        <p>Vaccination is a safe and effective way to protect you from rubella.</p>
                        <p>By getting vaccinated against rubella, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from rubella?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_rubella">
                        <h3 class="left-alignment">Who is at risk from rubella?</h3>
                        <p>Rubella is rare in Australia and other countries with widespread immunisation programs. Cases
                            and outbreaks still occur, so it is important to continue vaccinating children to prevent
                            the spread of infection to pregnant women. Anyone who hasn’t been vaccinated against rubella
                            is at risk of getting the disease, in particular:</p>
                        <ul>
                            <li>travellers to (and visitors from) areas where rubella vaccination programs are not
                                widespread
                            </li>
                            <li>childcare workers</li>
                            <li>people who work in healthcare settings such as hospitals</li>
                            <li>unborn babies whose mothers are not immune to rubella.</li>
                        </ul>
                        <p>Disease in pregnant women is the most concerning because of how the virus affects unborn
                            babies.</p>
                        <p>Rubella can affect people at any age.</p>
                    </div>

                    <!--What is the time recommended to get rubella immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_rubella_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get rubella immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            rubella immunisation is recommended for children aged 12 months and 18 months</p>
                    </div>

                    <!--How much do I need to pay for rubella immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_rubella_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for rubella immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get rubella immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_rubella_immunisation">
                        <h3 class="left-alignment">Where can I get rubella immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of rubella immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_rubella_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of rubella immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of rubella vaccines include:</p>
                        <ul>
                            <li>fever</li>
                            <li>mild rash</li>
                            <li>feeling unwell</li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of rubella immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_rubella_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of rubella immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of rubella vaccines, or if your child
                            has possible side effects that concern you.
                        </p>
                    </div>
                </div>

                <!-- shingles -->
                <!--<div class="tab-pane fade <?php /*if ($d == "shingles") echo "show active" */ ?>" id="list-shingles"
                     role="tabpanel" aria-labelledby="list-shingles-list">
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Diphtheria & Immunisation Service</h1>
                    </div>
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            In this page:
                            <br>
                            <a href="preventable_diseases.php#what_is_shingles">What is shingles?</a>
                            <br>
                            <a href="preventable_diseases.php#what_are_the_symptoms_of_shingles">What are the symptoms
                                of shingles?</a>
                            <br>
                            <a href="preventable_diseases.php#why_get_immunised_against_shingles">Why get immunised
                                against shingles?</a>
                            <br>
                            <a href="preventable_diseases.php#who_is_at_risk_from_shingles">Who is at risk from
                                shingles?</a>
                            <br>
                            <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_shingles_immunisation">What
                                is the time recommended to get shingles immunisation?</a>
                            <br>
                            <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_shingles_immunisation">How
                                much do I need to pay for shingles immunisation?</a>
                            <br>
                            <a href="preventable_diseases.php#where_can_i_get_shingles_immunisation">Where can I get
                                shingles immunisation?</a>
                            <br>
                            <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_shingles_immunisation">What
                                are the possible side effects of shingles immunisation?</a>
                            <br>
                            <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_shingles_immunisation_happen">What
                                can I do if the side effects of shingles immunisation happen?</a>
                        </blockquote>
                    </div>
                    <div class="custom-block biased-anchor" id="what_is_shingles">
                        <h3 class="left-alignment">What is shingles?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_shingles">
                        <h3 class="left-alignment">What are the symptoms of shingles?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_shingles">
                        <h3 class="left-alignment">Why get immunised against shingles?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_shingles">
                        <h3 class="left-alignment">Who is at risk from shingles?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_shingles_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get shingles immunisation?
                        </h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_shingles_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for shingles immunisation?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor" id="where_can_i_get_shingles_immunisation">
                        <h3 class="left-alignment">Where can I get shingles immunisation?</h3>
                        <p>
                            In Australia, people can get vaccines through:
                            <br>
                            - general practices
                            <br>
                            - local council or community health clinics
                            <br>
                            - Aboriginal Medical Services
                            <br>
                            - school based immunisation programs
                            <br>
                            - workplaces
                            <br>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)
                            </a>
                        </p>
                    </div>
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_shingles_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of shingles immunisation?</h3>
                        <p>

                        </p>
                    </div>
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_shingles_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of shingles immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of shingles vaccines, or if you or your
                            child
                            have possible side effects that concern you.
                        </p>
                    </div>
                </div>-->

                <!-- tetanus -->
                <div class="tab-pane fade <?php if ($d == "tetanus") echo "show active" ?>" id="list-tetanus"
                     role="tabpanel" aria-labelledby="list-tetanus-list">

                    <!--title: tetanus-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Tetanus & Immunisation Service</h1>
                    </div>

                    <!--index: tetanus-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_tetanus">What is tetanus?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_tetanus">What are the
                                        symptoms of
                                        tetanus?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_tetanus">Why get
                                        immunised
                                        against tetanus?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_tetanus">Who is at risk from
                                        tetanus?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_tetanus_immunisation">What
                                        is the time recommended to get tetanus immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_tetanus_immunisation">How
                                        much do I need to pay for tetanus immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_tetanus_immunisation">Where can I
                                        get
                                        tetanus immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_tetanus_immunisation">What
                                        are the possible side effects of tetanus immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_tetanus_immunisation_happen">What
                                        can I do if the side effects of tetanus immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is tetanus?-->
                    <div class="custom-block biased-anchor" id="what_is_tetanus">
                        <h3 class="left-alignment">What is tetanus?</h3>
                        <p>Tetanus is a life-threatening disease that causes severe muscle spasms, especially in the
                            neck and jaw (called lockjaw). Around one in 10 people who get the disease will die from it.
                            Babies and older people have the highest risk of dying from tetanus.</p>
                        <p>Tetanus can lead to:</p>
                        <ul>
                            <li>suffocation or being unable to breathe</li>
                            <li>pneumonia</li>
                            <li>very high blood pressure</li>
                            <li>very low blood pressure</li>
                            <li>heart attack.</li>
                        </ul>
                        <p>Tetanus is caused by a type of bacteria called Clostridium tetani. The bacteria make a toxin
                            in your body that causes the disease.</p>
                    </div>

                    <!--What are the symptoms of tetanus?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_tetanus">
                        <h3 class="left-alignment">What are the symptoms of tetanus?</h3>
                        <p>Tetanus symptoms include:</p>
                        <ul>
                            <li>muscle spasms, especially in the face and neck</li>
                            <li>painful fits that can last for minutes</li>
                            <li>not being able to open your mouth (lockjaw)</li>
                            <li>swallowing problems</li>
                            <li>breathing problems</li>
                            <li>heart problems</li>
                            <li>fever.</li>
                        </ul>
                        <p>Symptoms usually start between three and 21 days after catching tetanus.</p>
                    </div>

                    <!--Why get immunised against tetanus?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_tetanus">
                        <h3 class="left-alignment">Why get immunised against tetanus?</h3>
                        <p>Tetanus is a serious disease that causes severe muscle spasms, especially in the neck and jaw
                            – this is called lockjaw.</p>
                        <p>Vaccination is a safe and effective way to protect you from tetanus.</p>
                    </div>

                    <!--Who is at risk from tetanus?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_tetanus">
                        <h3 class="left-alignment">Who is at risk from tetanus?</h3>
                        <p>Tetanus can affect people of any age. Tetanus is rare in Australia because most people are
                            immunised. People at high risk of disease include:</p>
                        <ul>
                            <li>people who have not been immunised against tetanus</li>
                            <li>people who have not had a booster immunisation in the past 10 years.</li>
                        </ul>
                        <p>Most deaths from tetanus occur in people aged over 70 years.</p>
                    </div>

                    <!--What is the time recommended to get tetanus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_tetanus_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get tetanus immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            tetanus immunisation is recommended for children aged two months, four months, six months,
                            18 months, four years, and between 10 and 15 years (at school)</p>
                    </div>

                    <!--How much do I need to pay for tetanus immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_tetanus_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for tetanus immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get tetanus immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_tetanus_immunisation">
                        <h3 class="left-alignment">Where can I get tetanus immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of tetanus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_tetanus_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of tetanus immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than
                            the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of tetanus vaccines include:</p>
                        <ul><li>redness, swelling or hardness where the needle went in.</li></ul>
                    </div>

                    <!--What can I do if the side effects of tetanus immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_tetanus_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of tetanus immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of tetanus vaccines, or if your child
                            has possible side effects that concern you.
                        </p>
                    </div>
                </div>

                <!-- whooping cough -->
                <div class="tab-pane fade <?php if ($d == "whooping_cough") echo "show active" ?>"
                     id="list-whooping_cough"
                     role="tabpanel" aria-labelledby="list-whooping_cough-list">

                    <!--title: whooping cough-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">Whooping Cough (pertussis) & Immunisation Service</h1>
                    </div>

                    <!--index: whooping cough-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li>In this page:</li>
                                <li><a href="preventable_diseases.php#what_is_whooping_cough">What is whooping
                                        cough?</a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_whooping_cough">What are
                                        the
                                        symptoms of whooping cough?</a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_whooping_cough">Why get
                                        immunised against whooping cough?</a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_whooping_cough">Who is at risk
                                        from
                                        whooping cough?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_whooping_cough_immunisation">What
                                        is the time recommended to get whooping cough immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_whooping_cough_immunisation">How
                                        much do I need to pay for whooping cough immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_whooping_cough_immunisation">Where
                                        can I
                                        get whooping cough immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_whooping_cough_immunisation">What
                                        are the possible side effects of whooping cough immunisation?</a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_whooping_cough_immunisation_happen">What
                                        can I do if the side effects of whooping cough immunisation happen?</a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is whooping cough?-->
                    <div class="custom-block biased-anchor" id="what_is_whooping_cough">
                        <h3 class="left-alignment">What is whooping cough?</h3>
                        <p>Whooping cough is also called pertussis. It is an infection of the lungs and airways. It
                            causes a person to cough violently and uncontrollably. This can make it hard for the person
                            to breathe.</p>
                        <p>Whooping cough is a serious disease because it can lead to pneumonia, brain damage and
                            sometimes death.</p>
                        <p>Whooping cough is caused by a type of bacteria called <i>Bordetella pertussis</i>.</p>
                    </div>

                    <!--What are the symptoms of whooping cough?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_whooping_cough">
                        <h3 class="left-alignment">What are the symptoms of whooping cough?</h3>
                        <p>Whooping cough symptoms include:</p>
                        <ul>
                            <li>blocked or runny nose</li>
                            <li>sneezing</li>
                            <li>raised temperature</li>
                            <li>uncontrolled bouts of coughing that sounds like a ‘whoop’ or are followed by a
                                ‘whooping’ noise
                            </li>
                            <li>vomiting after coughing.</li>
                        </ul>
                        <p>Symptoms usually start about seven to 10 days after catching whooping cough, with a cold,
                            blocked or runny nose, coughing and a mild fever.</p>
                        <p>The cough gets worse and often happens at night. It might stop you from sleeping. Coughing
                            attacks can be very violent, and some people vomit or faint after coughing. Some people with
                            whooping cough can cough so hard they break their ribs.</p>
                        <p>A milder cough can last for several months.</p>
                        <p>Babies might not have a bad cough, or might not cough at all. Symptoms in babies can include
                            pauses in breathing, turning blue or having trouble feeding.</p>
                        <p>Some people develop a distinctive ‘whooping’ sound when they cough, but this does not happen
                            to everyone. Adolescents and adults often do not have a ‘whoop’.</p>
                    </div>

                    <!--Why get immunised against whooping cough?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_whooping_cough">
                        <h3 class="left-alignment">Why get immunised against whooping cough?</h3>
                        <p>Whooping cough (also called pertussis) is a serious disease of the airways. It can lead to
                            pneumonia, brain damage and sometimes death. It is especially serious for babies, but can
                            affect people at any age.</p>
                        <p>Vaccination is a safe and effective way to protect you from serious disease caused by
                            whooping cough.</p>
                        <p>By getting vaccinated against whooping cough, you can also help protect other people,
                            especially people who are too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread.</p>
                    </div>

                    <!--Who is at risk from whooping cough?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_whooping_cough">
                        <h3 class="left-alignment">Who is at risk from whooping cough?</h3>
                        <p>Whooping cough can affect people at any age, but those at high risk of catching the disease
                            include:</p>
                        <ul>
                            <li>babies less than six months old who are not yet old enough to be fully vaccinated</li>
                            <li>people living in the same household as someone with whooping cough</li>
                            <li>people who have not had a whooping cough booster in the last 10 years.</li>
                        </ul>
                        <p>Babies have the highest risk of serious disease. They are more likely to need to go to
                            hospital or die from whooping cough. About one in every 200 babies under six months old who
                            get whooping cough dies from pneumonia or brain damage.</p>
                        <p>Older children and adults may get a milder case of the disease.</p>
                    </div>

                    <!--What is the time recommended to get whooping cough immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_whooping_cough_immunisation">
                        <h3 class="left-alignment">
                            What is the time recommended to get whooping cough immunisation?
                        </h3>
                        <p>Due to the <a href="NIP_schedule.php">National Immunisation Program (NIP) Schedule</a>,
                            whooping cough immunisation is recommended for children aged two months, four months, six
                            months, 18 months, four years, and between 10 and 15 years (at school).</p>
                    </div>

                    <!--How much do I need to pay for whooping cough immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="how_much_do_i_need_to_pay_for_whooping_cough_immunisation">
                        <h3 class="left-alignment">How much do I need to pay for whooping cough immunisation?</h3>
                        <p>All vaccines listed in the <a href="NIP_schedule.php">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>
                    </div>

                    <!--Where can I get whooping cough immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_whooping_cough_immunisation">
                        <h3 class="left-alignment">Where can I get whooping cough immunisation?</h3>
                        <p>In Australia, people can get vaccines through:</p>
                        <ul>
                            <li>general practices</li>
                            <li>local council or community health clinics</li>
                            <li>Aboriginal Medical Services</li>
                            <li>school based immunisation programs</li>
                            <li>workplaces</li>
                        </ul>
                        <p><a href="https://www.healthdirect.gov.au/australian-health-services">
                                Find a health service provider by National Health Services Directory (NHSD)</a></p>
                    </div>

                    <!--What are the possible side effects of whooping cough immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_whooping_cough_immunisation">
                        <h3 class="left-alignment">What are the possible side effects of whooping cough
                            immunisation?</h3>
                        <p>All medicines and vaccines can have side effects. Sometimes they are serious, most of the time they’re not.</p>
                        <p>For most people, the chance of having a serious side effect from a vaccine is much lower than the chance of serious harm if you caught the disease.</p>
                        <p>Common side effects of whooping cough vaccines include:</p>
                        <ul><li>pain, redness, swelling or hardness where the needle went in.</li></ul>
                    </div>

                    <!--What can I do if the side effects of whooping cough immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_whooping_cough_immunisation_happen">
                        <h3 class="left-alignment">What can I do if the side effects of whooping cough immunisation
                            happen?</h3>
                        <p>
                            Talk to your doctor about possible side effects of whooping cough vaccines, or if
                            your child has possible side effects that concern you.
                        </p>
                    </div>
                </div>
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