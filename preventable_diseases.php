<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.7.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="Website Builder Description">
    <title>Preventable diseases covered in the NIP schedule</title>
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

<div class="container-fluid custom-padding mbr-text mb-0 d-flex justify-content-center">
    <div class="row col-md-11 col-sm-12">

        <!-- disease names -->
        <div class="col-md-3 col-sm-12 order-1">
            <div class="list-group" id="list-tab" role="tablist">
                <!--label: Choose a disease-->
                <a class="list-group-item list-group-item-secondary">
                    <strong>
                        <?php echo $l == "cn" ? "选择一种疾病：" : "Choose a disease:" ?>
                    </strong>
                </a>
                <!--index: Chickenpox (varicella)-->
                <a class="list-group-item list-group-item-action <?php if ($d == "chickenpox") echo "active" ?>"
                   id="list-chickenpox-list" data-toggle="list"
                   href="#list-chickenpox" role="tab" aria-controls="Chickenpox (varicella)">
                    <?php echo $l == "cn" ? "水痘" : "Chickenpox (varicella)" ?>
                </a>
                <!--index: Diphtheria-->
                <a class="list-group-item list-group-item-action <?php if ($d == "diphtheria") echo "active" ?>"
                   id="list-diphtheria-list" data-toggle="list"
                   href="#list-diphtheria" role="tab" aria-controls="diphtheria">
                    <?php echo $l == "cn" ? "白喉" : "Diphtheria" ?>
                </a>
                <!--index: Flu (influenza)-->
                <a class="list-group-item list-group-item-action <?php if ($d == "flu") echo "active" ?>"
                   id="list-flu-list" data-toggle="list"
                   href="#list-flu" role="tab" aria-controls="flu">
                    <?php echo $l == "cn" ? "流感" : "Flu (influenza)" ?>
                </a>
                <!--index: Hepatitis B-->
                <a class="list-group-item list-group-item-action <?php if ($d == "hepatitis_B") echo "active" ?>"
                   id="list-hepatitis_b-list" data-toggle="list"
                   href="#list-hepatitis_b" role="tab" aria-controls="hepatitis_b">
                    <?php echo $l == "cn" ? "乙型肝炎（乙肝）" : "Hepatitis B" ?>
                </a>
                <!--index: Hib (Haemophilus influenzae type b)-->
                <a class="list-group-item list-group-item-action <?php if ($d == "hib") echo "active" ?>"
                   id="list-hib-list" data-toggle="list"
                   href="#list-hib" role="tab" aria-controls="hib">
                    <?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病" : "Hib (Haemophilus influenzae type b)" ?>
                </a>
                <!--index: HPV (Human papillomavirus)-->
                <a class="list-group-item list-group-item-action <?php if ($d == "hpv") echo "active" ?>"
                   id="list-hpv-list" data-toggle="list"
                   href="#list-hpv" role="tab" aria-controls="hpv">
                    <?php echo $l == "cn" ? "人乳头瘤病毒（HPV）" : "HPV (Human papillomavirus)" ?>
                </a>
                <!--index: Measles-->
                <a class="list-group-item list-group-item-action <?php if ($d == "measles") echo "active" ?>"
                   id="list-measles-list" data-toggle="list"
                   href="#list-measles" role="tab" aria-controls="measles">
                    <?php echo $l == "cn" ? "麻疹" : "Measles" ?>
                </a>
                <!--index: Meningococcal disease-->
                <a class="list-group-item list-group-item-action <?php if ($d == "meningococcal_disease") echo "active" ?>"
                   id="list-meningococcal_disease-list" data-toggle="list"
                   href="#list-meningococcal_disease" role="tab" aria-controls="meningococcal_disease">
                    <?php echo $l == "cn" ? "脑膜炎球菌病" : "Meningococcal disease" ?>
                </a>
                <!--index: Mumps-->
                <a class="list-group-item list-group-item-action <?php if ($d == "mumps") echo "active" ?>"
                   id="list-mumps-list" data-toggle="list"
                   href="#list-mumps" role="tab" aria-controls="mumps">
                    <?php echo $l == "cn" ? "腮腺炎" : "Mumps" ?>
                </a>
                <!--index: Pneumococcal disease-->
                <a class="list-group-item list-group-item-action <?php if ($d == "pneumococcal_disease") echo "active" ?>"
                   id="list-pneumococcal_disease-list" data-toggle="list"
                   href="#list-pneumococcal_disease" role="tab" aria-controls="pneumococcal_disease">
                    <?php echo $l == "cn" ? "肺炎球菌疾病" : "Pneumococcal disease" ?>
                </a>
                <!--index: Polio (poliomyelitis)"-->
                <a class="list-group-item list-group-item-action <?php if ($d == "polio") echo "active" ?>"
                   id="list-polio-list" data-toggle="list"
                   href="#list-polio" role="tab" aria-controls="polio">
                    <?php echo $l == "cn" ? "脊髓灰质炎（小儿麻痹症）" : "Polio (poliomyelitis)" ?>
                </a>
                <!--index: Rotavirus-->
                <a class="list-group-item list-group-item-action <?php if ($d == "rotavirus") echo "active" ?>"
                   id="list-rotavirus-list" data-toggle="list"
                   href="#list-rotavirus" role="tab" aria-controls="rotavirus">
                    <?php echo $l == "cn" ? "轮状病毒" : "Rotavirus" ?>
                </a>
                <!--index: Rubella (German measles)-->
                <a class="list-group-item list-group-item-action <?php if ($d == "rubella") echo "active" ?>"
                   id="list-rubella-list" data-toggle="list"
                   href="#list-rubella" role="tab" aria-controls="rubella">
                    <?php echo $l == "cn" ? "风疹（德国麻疹）" : "Rubella (German measles)" ?>
                </a>
                <!--index: Tetanus-->
                <a class="list-group-item list-group-item-action <?php if ($d == "tetanus") echo "active" ?>"
                   id="list-tetanus-list" data-toggle="list"
                   href="#list-tetanus" role="tab" aria-controls="tetanus">
                    <?php echo $l == "cn" ? "破伤风" : "Tetanus" ?>
                </a>
                <!--index: Whooping cough (pertussis)-->
                <a class="list-group-item list-group-item-action <?php if ($d == "whooping_cough") echo "active" ?>"
                   id="list-whooping_cough-list" data-toggle="list"
                   href="#list-whooping_cough" role="tab" aria-controls="whooping_cough">
                    <?php echo $l == "cn" ? "百日咳" : "Whooping cough (pertussis)" ?>
                </a>
            </div>
        </div>

        <!-- Introduction -->
        <div class="col-md-8 display-7 col-sm-12 order-0 disease-instruction">
            <div class="tab-content" id="nav-tabContent">

                <!-- chickenpox -->
                <div class="tab-pane fade <?php if ($d == "chickenpox") echo "show active" ?>" id="list-chickenpox"
                     role="tabpanel" aria-labelledby="list-home-list">

                    <!--title: chickenpox-->
                    <div class="custom-block">
                        <h1 class="left-alignment">
                            <?php echo $l == "cn" ? "水痘及免疫服务" : "Chickenpox (Varicella) & Immunisation Service" ?>
                        </h1>
                    </div>

                    <!--index: chickenpox-->
                    <div class="custom-block">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li class="index-title">
                                    <?php echo $l == "cn" ? "在此页：" : "In this page:" ?>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_chickenpox">
                                        <?php echo $l == "cn" ? "什么是水痘？" : "What is chickenpox?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_symptoms_of_chickenpox">
                                        <?php echo $l == "cn" ? "水痘有什么症状？" : "What are the symptoms of chickenpox?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#why_get_immunised_against_chickenpox">
                                        <?php echo $l == "cn" ? "为什么免疫水痘？" : "Why get immunised against chickenpox?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#who_is_at_risk_from_chickenpox">
                                        <?php echo $l == "cn" ? "谁有患水痘的危险？" : "Who is at risk from chickenpox?" ?>
                                    </a>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_chickenpox_immunisation">
                                        <?php echo $l == "cn" ? "什么时候建议去接种水痘疫苗？" : "What is the time recommended to get chickenpox immunisation?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_chickenpox_immunisation">
                                        <?php echo $l == "cn" ? "我需要多少钱支付水痘疫苗的费用？" : "How much do I need to pay for chickenpox immunisation?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#where_can_I_get_chickenpox_immunisation">
                                        <?php echo $l == "cn" ? "我可以在哪里接种水痘疫苗？" : "Where can I get chickenpox immunisation?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_chickenpox_immunisation">
                                        <?php echo $l == "cn" ? "水痘免疫有什么可能的副作用？" : "What are the possible side effects of chickenpox immunisation?" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_chickenpox_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果水痘免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of chickenpox immunisation happen?" ?>
                                    </a>
                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is chickenpox?-->
                    <div class="custom-block biased-anchor" id="what_is_chickenpox">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是水痘？" : "What is chickenpox?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "水痘会引起发痒，发炎的皮疹和轻微的发烧。它通常是一种轻微的疾病，在健康的儿童中持续很短的时间，但在成人中可能更严重。" :
                                "Chickenpox (also called varicella) causes an itchy, blistering skin rash and mild fever. It
                            is usually a mild disease that lasts for a short time in healthy children, but it can be
                            more severe in adults." ?></p>
                        <p><?php echo $l == "cn" ? "水痘是一种严重的疾病，因为它会引起疤痕，肺炎，脑损伤甚至死亡。 33,000人中有一人患水痘会发展脑炎（脑部炎症）。" :
                                "Chickenpox is a serious disease because it can cause scarring, pneumonia, brain damage and
                            sometimes death. One in 33,000 people with chickenpox can develop encephalitis (brain
                            inflammation)." ?></p>
                        <p><?php echo $l == "cn" ? "在患有水痘后，病毒会留在你的体内。它可能会在生命的后期导致带状疱疹。" :
                                "After you have had chickenpox, the virus stays in your body. It can come back later in life
                            and cause shingles (also called herpes zoster)." ?></p>
                        <p><?php echo $l == "cn" ? "水痘是由水痘带状疱疹病毒引起的，这种病毒会引起带状疱疹。" : "Chickenpox is caused by the varicella zoster virus, the same virus that causes shingles." ?></p>
                    </div>

                    <!--What are the symptoms of chickenpox?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_chickenpox">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "水痘有什么症状？" : "What are the symptoms of chickenpox?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "主要症状是发痒的红疹，变成水泡，然后爆裂并结壳。水痘也可引起流感样症状，如发烧，头痛和喉咙痛。" :
                                "The main symptom is an itchy red rash that turns into blisters, which then burst and crust
                            over. Chickenpox can also cause flu-like symptoms, such as fever, headache and sore throat." ?></p>
                        <p><?php echo $l == "cn" ? "症状通常在患水痘两周后开始。症状持续10至21天。" : "Symptoms usually start about two weeks after catching chickenpox. The symptoms stay from
                            between 10 to 21 days." ?></p>
                    </div>

                    <!--Why get immunised against chickenpox?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_chickenpox">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么免疫水痘？" : "Why get immunised against chickenpox?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "水痘通常是一种轻微的疾病，在儿童中不会持续很长时间，但可能更严重，特别是在成人中。" : "Chickenpox (also called varicella) is usually a mild disease that doesn’t last long in
                            children, but it can be more severe, particularly in adults." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "接种疫苗是一种安全有效的方法来保护您免受严重的疾病。水痘疫苗还可以保护您在生命后期避免产生带状疱疹。" :
                                "Vaccination is a safe and effective way to protect you from a serious case of the disease.
                            The chickenpox vaccine also protects you from getting shingles later in life." ?>
                        </p>
                        <p>
                            <?php echo $l == "cn" ? "通过接种针对水痘的疫苗，您还可以帮助保护其他人，尤其是过于生病或太年轻而不能接种疫苗的人。在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" :
                                "By getting vaccinated against chickenpox, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?>
                        </p>
                    </div>

                    <!--Who is at risk from chickenpox?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_chickenpox">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患水痘的危险？" : "Who is at risk from chickenpox?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "水痘会影响任何年龄段的人。" : "Chickenpox can affect people at any age." ?></p>
                        <p><?php echo $l == "cn" ? "儿童通常病情轻微，并迅速恢复。" : "Children usually have mild disease and recover quickly." ?></p>
                        <p><?php echo $l == "cn" ? "成年人，新生婴儿和免疫力低下的人通常会因病毒感染更严重的疾病。" :
                                "Adults, newborn babies and people who have a weakened immune system usually have a more
                            severe illness from the virus." ?></p>
                        <p><?php echo $l == "cn" ? "在怀孕期间，水痘对于母亲和婴儿都是严重的。第一次患水痘的孕妇可能患有严重的疾病。婴儿出生时可能患有严重的水痘，或者对他们的皮肤，四肢，眼睛或神经系统造成伤害。" :
                                "During pregnancy, chickenpox can be serious for both the mother and the baby. Pregnant women
                            who get chickenpox for the first time can have severe disease. The baby can be born with
                            severe chickenpox, or have damage to their skin, limbs, eyes or nervous system." ?></p>
                        <p><?php echo $l == "cn" ? "虽然一些接种疫苗的儿童仍然会患水痘，但他们通常会有更轻微的疾病形式和更快的恢复。疫苗几乎总是可以预防严重疾病。" : "Although some vaccinated children will still get chickenpox, they generally will have a much
                            milder form of the disease and more rapid recovery. The vaccine almost always prevents
                            against severe disease." ?></p>
                    </div>

                    <!--What is the time recommended to get chickenpox immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_chickenpox_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候建议去接种水痘疫苗？" : "What is the time recommended to get chickenpox immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>，建议18个月的儿童接种水痘疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            chickenpox immunisation is recommended for 18-month children." ?></p>
                    </div>

                    <!--How much do I need to pay for chickenpox immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_chickenpox_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为水痘免疫支付多少钱？" : "How much do I need to pay for chickenpox immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)</a> 
                            Schedule are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get chickenpox immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_I_get_chickenpox_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "在哪里我可以接种水痘疫苗？" :
                                "Where can I get chickenpox immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of chickenpox immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_chickenpox_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "水痘免疫有什么可能的副作用？" : "What are the possible side effects of chickenpox immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "水痘疫苗的常见副作用包括：" : "Common side effects of chickenpox vaccines include:" ?></p>
                        <ul>
                            <li>
                                <?php echo $l == "cn" ? "针头进入时的疼痛，发红或肿胀" : "pain, redness or swelling where the needle went in" ?>
                            </li>
                            <li>
                                <?php echo $l == "cn" ? "皮疹" : "rash" ?>
                            </li>
                            <li>
                                <?php echo $l == "cn" ? "发烧。" : "fever." ?>
                            </li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of chickenpox immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_chickenpox_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果水痘免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of chickenpox immunisation
                            happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与你的医生谈谈水痘疫苗可能产生的副作用，或者如果你的孩子有可能会引起你的副作用。" : "Talk to your doctor about possible side effects of chickenpox vaccines, or if your
                            child has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- diphtheria -->
                <div class="tab-pane fade <?php if ($d == "diphtheria") echo "show active" ?>" id="list-diphtheria"
                     role="tabpanel" aria-labelledby="list-diphtheria-list">
                    <!--title: diphtheria-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "白喉及免疫服务" : "Diphtheria & Immunisation Service" ?></h1>
                    </div>

                    <!--index: diphtheria-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_diphtheria"><?php echo $l == "cn" ? "什么是白喉？" : "What is diphtheria?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_symptoms_of_diphtheria">
                                        <?php echo $l == "cn" ? "白喉的症状有哪些？" : "What are the symptoms of diphtheria?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#why_get_immunised_against_diphtheria">
                                        <?php echo $l == "cn" ? "为什么要接种白喉疫苗？" : "Why get immunised against diphtheria?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#who_is_at_risk_from_diphtheria">
                                        <?php echo $l == "cn" ? "谁有患白喉的风险？" : "Who is at risk from diphtheria?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_diphtheria_immunisation">
                                        <?php echo $l == "cn" ? "建议什么时间进行白喉疫苗接种？" : "What is the time recommended to get diphtheria immunisation?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_diphtheria_immunisation">
                                        <?php echo $l == "cn" ? "我需要为白喉免疫支付多少钱？" : "How much do I need to pay for diphtheria immunisation?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#where_can_i_get_diphtheria_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以得到白喉疫苗？" : "Where can I get diphtheria immunisation?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_diphtheria_immunisation">
                                        <?php echo $l == "cn" ? "白喉免疫有哪些可能的副作用？" : "What are the possible side effects of diphtheria immunisation?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_diphtheria_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果白喉免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of diphtheria immunisation happen?" ?></a>
                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is diphtheria?-->
                    <div class="custom-block biased-anchor" id="what_is_diphtheria">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是白喉？" : "What is diphtheria?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "白喉是通常感染上呼吸道或有时感染皮肤的感染。 在上呼吸道中，它引起一个非常薄的阻挡层，穿过气管生长并使呼吸困难的膜。" : "Diphtheria is an infection usually of the upper airways or sometimes of the skin. In the
                            upper airways it causes a very thin barrier known as a membrane which grows across the
                            windpipe and makes it hard to breathe." ?></p>
                        <p><?php echo $l == "cn" ? "这可能完全阻塞气管，导致窒息和死亡。 白喉还会损害心脏和神经系统。" : "This can block the windpipe completely, leading to suffocation and death. Diphtheria can
                            also damage the heart and the nervous system." ?></p>
                        <p><?php echo $l == "cn" ? "白喉是由一种称为白喉棒状杆菌（Corynebacterium diphtheriae）的细菌引起的。 细菌会产生导致疾病的毒素。" : "Diphtheria is caused by a type of bacteria called Corynebacterium diphtheriae. The bacteria
                            make a toxin that causes the disease." ?></p>
                    </div>

                    <!--What are the symptoms of diphtheria?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_diphtheria">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "白喉的症状有哪些？" : "What are the symptoms of diphtheria?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "症状通常在感染白喉后约2-5天开始。" : "Symptoms usually start about two to five days after catching diphtheria." ?></p>
                        <p><?php echo $l == "cn" ? "症状可能包括：" : "Symptoms can include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "喉咙痛" : "sore throat" ?></li>
                            <li><?php echo $l == "cn" ? "吞咽问题" : "swallowing problems" ?></li>
                            <li><?php echo $l == "cn" ? "低烧" : "mild fever" ?></li>
                            <li><?php echo $l == "cn" ? "呼吸问题甚至严重的呼吸问题" : "breathing problems, which may be severe" ?></li>
                            <li><?php echo $l == "cn" ? "喉咙后部有灰色或绿色的膜。" : "a grey or green membrane at the back of the throat." ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against diphtheria?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_diphtheria">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种白喉疫苗？" : "Why get immunised against diphtheria?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "白喉是严重的呼吸道感染。 它可以影响任何年龄的人。" : "Diphtheria is a serious infection of the airways. It can affect people of any age." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受白喉的安全有效方法。" : "Vaccination is a safe and effective way to protect you from diphtheria." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种疫苗，您还可以帮助保护其他人，尤其是过于生病或未能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated you can also help protect other people, especially people who are too
                            sick or too young to be vaccinated. The more people who are vaccinated in your community,
                            the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from diphtheria?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_diphtheria">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有风险从白喉？" : "Who is at risk from diphtheria?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "白喉可以影响任何年龄段的人。" : "Diphtheria can affect people at any age." ?></p>
                        <p><?php echo $l == "cn" ? "没有接种过白喉疫苗的人患严重疾病的风险最高。" : "People who have not been immunised against diphtheria have the highest risk of serious
                            disease." ?></p>
                    </div>

                    <!--What is the time recommended to get diphtheria immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_diphtheria_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时间是推荐的白喉疫苗接种时间？" : "What is the time recommended to get diphtheria immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议2个月，4个月，6个月，18个月，4年以及10岁至15岁之间（在学校）的儿童接种白喉疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            Diphtheria immunisation is recommended for children aged two months, four months, six
                            months, 18 months, four years, and between 10 and 15 years (at school)." ?></p>
                    </div>

                    <!--How much do I need to pay for diphtheria immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_diphtheria_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为白喉免疫支付多少钱？" : "How much do I need to pay for diphtheria immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get diphtheria immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_diphtheria_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种白喉疫苗？" : "Where can I get diphtheria immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of diphtheria immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_diphtheria_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "白喉免疫有哪些可能的副作用？" : "What are the possible side effects of diphtheria immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "白喉疫苗的常见副作用包括：" : "Common side effects of diphtheria vaccines include:" ?></p>
                        <p><?php echo $l == "cn" ? "针头进入时疼痛，发红，肿胀或寒冷。" : "pain, redness, swelling or hardness where the needle went in." ?></p>
                    </div>

                    <!--What can I do if the side effects of diphtheria immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_diphtheria_immunisation_happen">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "如果白喉免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of diphtheria immunisation happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与您的医生讨论白喉疫苗的可能副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of diphtheria vaccines, or if your
                            child has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- flu -->
                <div class="tab-pane fade <?php if ($d == "flu") echo "show active" ?>" id="list-flu"
                     role="tabpanel" aria-labelledby="list-flu-list">

                    <!--title: flu-->
                    <div class="biased-anchor custom-block">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "流感及免疫服务" : "Flu (influenza) & Immunisation Service" ?></h1>
                    </div>

                    <!--index: flu-->
                    <div class="biased-anchor custom-block">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_the_flu">
                                        <?php echo $l == "cn" ? "什么是流感？" : "What is the flu?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_flu">
                                        <?php echo $l == "cn" ? "流感的症状是什么？" : "What are the
                                        symptoms of flu?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_flu">
                                        <?php echo $l == "cn" ? "为什么要接种流感疫苗？" : "Why get immunised
                                        against flu?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_flu">
                                        <?php echo $l == "cn" ? "谁有患流感的风险？" : "Who is at risk from
                                        flu?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_flu_immunisation">
                                        <?php echo $l == "cn" ? "什么时候建议去接种流感疫苗？" : "What is the time recommended to get flu immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_flu_immunisation">
                                        <?php echo $l == "cn" ? "我需要为流感疫苗支付多少钱？" : "How
                                        much do I need to pay for flu immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_flu_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种流感疫苗？" : "Where can I get
                                        flu immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_flu_immunisation">
                                        <?php echo $l == "cn" ? "流感免疫的可能副作用是什么？" : "What
                                        are the possible side effects of flu immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_flu_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果流感免疫的副作用发生，我该怎么办？" : "What
                                        can I do if the side effects of flu immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is the flu?-->
                    <div class="custom-block biased-anchor" id="what_is_the_flu">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么是流感？" : "What is the flu?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "流行性感冒通常被称为流感。 这是一种非常有传染性的呼吸道疾病。 大部分流感发生在冬季。" : "Influenza is commonly known as the flu. It is a very contagious infection of your airways.
                            The flu usually causes the most disease during winter." ?></p>
                        <p><?php echo $l == "cn" ? "流感会产生轻度症状，如流鼻涕，头痛，全身酸痛和疲倦。它也可能产生非常严重的症状并导致疾病，包括：" : "The flu can produce mild symptoms such as a runny nose, headache, body aches and tiredness.
                            It can also be very severe and cause disease, including:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "大脑，心脏或其他肌肉的炎症" : "inflammation of the brain, heart, or other muscles" ?></li>
                            <li><?php echo $l == "cn" ? "对肾脏等器官的损害" : "damage to organs such as the kidneys" ?></li>
                            <li><?php echo $l == "cn" ? "死亡。" : "death." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "流感是由流感病毒引起的。有许多不同的流感病毒株，每年都会改变。" : "The flu is caused by the influenza virus. There are lots of different strains of flu virus,
                            and they can change every year." ?></p>
                    </div>

                    <!--What are the symptoms of flu?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_flu">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "流感的症状是什么？" : "What are the symptoms of flu?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "症状通常在感染流感后一到三天左右开始，可持续一周或更长时间。 有些人没有症状或只有轻微的症状，而其他人可能会患重病。" : "Symptoms usually start about one to three days after catching the flu, and can last for a
                            week or more. Some people get no symptoms or only mild symptoms, while others can become
                            seriously ill." ?></p>
                        <p><?php echo $l == "cn" ? "流感的症状包括：" : "Symptoms of the flu include:" ?></p>
                        <ul class="question-list">
                            <li><?php echo $l == "cn" ? "流鼻涕或打喷嚏" : "runny nose or sneezing" ?></li>
                            <li><?php echo $l == "cn" ? "咳嗽或喉咙痛" : "cough or sore throat" ?></li>
                            <li><?php echo $l == "cn" ? "发烧和发冷" : "fever and chills" ?></li>
                            <li><?php echo $l == "cn" ? "头痛" : "headache" ?></li>
                            <li><?php echo $l == "cn" ? "身体疼痛" : "body aches" ?></li>
                            <li><?php echo $l == "cn" ? "呕吐和腹泻（儿童更常见）。" : "vomiting and diarrhoea (more common in children)." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "流感是一种严重的疾病，因为它会导致：" : "The flu is a serious disease because it can lead to:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "支气管炎" : "bronchitis" ?></li>
                            <li><?php echo $l == "cn" ? "格鲁布性喉头炎" : "croup" ?></li>
                            <li><?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "耳部感染" : "ear infections" ?></li>
                            <li><?php echo $l == "cn" ? "心脏和其他器官损伤" : "heart and other organ damage" ?></li>
                            <li><?php echo $l == "cn" ? "脑部炎症和脑损伤" : "brain inflammation and brain damage" ?></li>
                            <li><?php echo $l == "cn" ? "死亡。" : "death." ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against flu?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_flu">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种流感疫苗？" : "Why get immunised against flu?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "流感是一种非常有传染性的呼吸道疾病。 对于婴儿，65岁以上的人群和孕妇来说尤其严重。" : "The flu (also called influenza) is a very contagious infection of the airways. It is
                            especially serious for babies, people over 65 years old and pregnant women." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受流感引起的严重疾病的安全有效方法。" : "Vaccination is a safe and effective way to protect you from serious disease caused by the
                            flu." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种流感疫苗，您还可以帮助保护其他人，尤其是过于生病或太年轻而不能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated against the flu, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from flu?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_flu">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患流感的风险？" : "Who is at risk from flu?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "流感会影响所有年龄段的人。" : "The flu can affect people of all ages." ?></p>
                        <p><?php echo $l == "cn" ? "流感导致住院风险最高的人群是：" : "People at highest risk of being hospitalised with flu are:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "婴儿" : "babies" ?></li>
                            <li><?php echo $l == "cn" ? "超过65岁的人" : "people more than 65 years old" ?></li>
                            <li><?php echo $l == "cn" ? "原著和托雷斯海峡岛民" : "Aboriginal and Torres Strait Islander people" ?></li>
                            <li><?php echo $l == "cn" ? "孕妇（和未出生的婴儿）" : "pregnant women (and the unborn baby)" ?></li>
                            <li><?php echo $l == "cn" ? "有长期医疗问题的人" : "people with long-term medical conditions" ?></li>
                            <li><?php echo $l == "cn" ? "免疫系统减弱的人" : "people who have weakened immune systems" ?></li>
                            <li><?php echo $l == "cn" ? "肥胖的人" : "people who are obese" ?></li>
                            <li><?php echo $l == "cn" ? "吸烟的人" : "people who smoke" ?></li>
                            <li><?php echo $l == "cn" ? "没有接种流感疫苗的人。" : "people who haven’t been vaccinated against the flu." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "可能导致您严重感染流感的长期医疗问题包括：" : "Long-term medical conditions that can lead to you having a serious case of the flu
                            include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "心脏病" : "heart disease" ?></li>
                            <li><?php echo $l == "cn" ? "唐氏综合症" : "Down syndrome" ?></li>
                            <li><?php echo $l == "cn" ? "肺部疾病" : "lung disease" ?></li>
                            <li><?php echo $l == "cn" ? "神经系统疾病（如多发性硬化症）" : "conditions of the nervous system (such as multiple sclerosis)" ?></li>
                            <li><?php echo $l == "cn" ? "肝病" : "liver disease" ?></li>
                            <li><?php echo $l == "cn" ? "肾脏疾病" : "kidney disease" ?></li>
                            <li><?php echo $l == "cn" ? "糖尿病" : "diabetes" ?></li>
                            <li><?php echo $l == "cn" ? "血液疾病" : "blood diseases" ?></li>
                            <li><?php echo $l == "cn" ? "代谢紊乱。" : "metabolic disorders." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "已经接种过流感疫苗的人仍然可以得病，但疫苗接种确实可以降低疾病的风险和严重程度。" : "People who have been immunised against the flu can still get the disease, but vaccination
                            does reduce the risk and the severity of illness." ?>
                        <p>
                    </div>

                    <!--What is the time recommended to get flu immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_flu_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "是什么时候是接种流感疫苗的建议时间？" : "What is the time recommended to get flu immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议6个月及以上的患有医疗风险疾病的儿童进行流感免疫接种。" : "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>, flu
                            immunisation is recommended every year for children who are 6 months and over with medical
                            risk factors." ?></p>
                    </div>

                    <!--How much do I need to pay for flu immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_flu_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为流感免疫支付多少钱？" : "How much do I need to pay for flu immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "流感疫苗对符合条件的人（6个月及以上有医疗风险问题的人）是免费的。 符合条件的人免费获得疫苗，但您的医疗保健提供者（例如您的医生）可能会为此次访问收取咨询费。 您可以在预约时查看。" : "Flu vaccines are free for people who are eligible (6 months and over with medical risk
                            factors). Eligible people get the vaccine for free, but your health care provider (for
                            example, your doctor) may charge a consultation fee for the visit. You can check this when
                            you make your appointment." ?></p>
                    </div>

                    <div class="custom-block biased-anchor" id="where_can_i_get_flu_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我可以在哪里接种流感疫苗？" : "Where can I get the flu immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of flu immunisation?-->
                    <div class="custom-block biased-anchor" id="what_are_the_possible_side_effects_of_flu_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "流感免疫的可能副作用是什么？" : "What are the possible side effects of flu immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "流感疫苗的常见副作用包括：" : "Common side effects of flu vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时疼痛，发红，肿胀或寒颤" : "pain, redness, swelling or hardness where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "发热，疲倦，全身酸痛。" : "fever, tiredness, body aches." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of flu immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_flu_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果流感免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of flu immunisation happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与您的医生谈谈流感疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of flu vaccines, or if your child has
                            possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- hepatitis B -->
                <div class="tab-pane fade <?php if ($d == "hepatitis_B") echo "show active" ?>" id="list-hepatitis_b"
                     role="tabpanel" aria-labelledby="list-hepatitis_b-list">

                    <!--title: hepatitis B-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "乙型肝炎（乙肝）及免疫服务" : "Hepatitis B & Immunisation Service" ?></h1>
                    </div>

                    <!--index: hepatitis B-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_hepatitis_b"><?php echo $l == "cn" ? "什么是乙型肝炎？" : "What is hepatitis B?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_hepatitis_b">
                                        <?php echo $l == "cn" ? "乙型肝炎的症状是什么？" : "What are the symptoms of hepatitis B?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_hepatitis_b">
                                        <?php echo $l == "cn" ? "为什么要接种乙型肝炎疫苗？" : "Why get immunised against hepatitis B?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_hepatitis_b">
                                        <?php echo $l == "cn" ? "谁有患乙型肝炎的风险？" : "Who is at risk from hepatitis B?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_hepatitis_b_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是去接种乙型肝炎疫苗的建议时间？" : "What is the time recommended to get hepatitis B immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_hepatitis_b_immunisation">
                                        <?php echo $l == "cn" ? "我需要为乙型肝炎免疫接种付多少钱？" : "How much do I need to pay for hepatitis B immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_hepatitis_b_immunisation">
                                        <?php echo $l == "cn" ? "我可以在哪里接种乙型肝炎疫苗？" : "Where can I get hepatitis B immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_hepatitis_b_immunisation">
                                        <?php echo $l == "cn" ? "乙型肝炎免疫有哪些可能的副作用？" : "What are the possible side effects of hepatitis B immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hepatitis_b_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果乙型肝炎疫苗的副作用发生，我该怎么办？" : "What can I do if the side effects of hepatitis B immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is hepatitis B?-->
                    <div class="custom-block biased-anchor" id="what_is_hepatitis_b">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是乙型肝炎？" : "What is hepatitis B?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "乙型肝炎是一种严重的疾病，会导致你的肝脏发炎。 它可能导致肝脏疾病，肝癌和死亡。" : "Hepatitis B is a serious disease that causes your liver to become inflamed. It can lead to
                            liver disease, liver cancer and death." ?></p>
                        <p><?php echo $l == "cn" ? "乙型肝炎不同于甲型肝炎或丙型肝炎，它们有不同的病因，症状和治疗方法。" : "Hepatitis B is not the same as hepatitis A or C, which have different causes, symptoms and
                            treatments." ?></p>
                        <p><?php echo $l == "cn" ? "乙型肝炎是由乙型肝炎病毒引起的。" : "Hepatitis B is caused by the hepatitis B virus." ?></p>
                    </div>

                    <!--What are the symptoms of hepatitis B?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hepatitis_b">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "乙型肝炎的症状是什么？" : "What are the symptoms of hepatitis B?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "人们通常在感染乙型肝炎后的60到90天之间开始出现症状，时间可能从45天到180天不等。" : "People generally start to show symptoms between 60 to 90 days after catching hepatitis B.
                            This can range from 45 days to 180 days." ?></p>
                        <p><?php echo $l == "cn" ? "乙型肝炎症状包括：" : "Hepatitis B symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "食欲不振" : "loss of appetite" ?></li>
                            <li><?php echo $l == "cn" ? "疲劳" : "fatigue" ?></li>
                            <li><?php echo $l == "cn" ? "恶心和呕吐" : "nausea and vomiting" ?></li>
                            <li><?php echo $l == "cn" ? "皮疹" : "rashes" ?></li>
                            <li><?php echo $l == "cn" ? "胃部右侧疼痛" : "pain in the right-hand side of the stomach area" ?></li>
                            <li><?php echo $l == "cn" ? "发烧" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "关节疼痛" : "sore joints" ?></li>
                            <li><?php echo $l == "cn" ? "黄疸。" : "jaundice (yellow skin and eyes)." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "大多数人完全康复。 对部分人有长期的影响，可能导致肝病（包括肝硬化），肝癌和死亡。" : "Most people recover completely. Some people have long-lasting effects, which can lead to
                            liver disease (including cirrhosis), liver cancer and death." ?></p>
                        <p><?php echo $l == "cn" ? "在孩童时期感染乙型肝炎的人在生命后期更可能患有严重的肝脏疾病。" : "People who are infected with hepatitis B when they are children are more likely to have
                            serious liver disease later in life." ?></p>
                        <p><?php echo $l == "cn" ? "有些从乙型肝炎康复的人仍然可以携带病毒，这意味着即使他们没有出现任何症状，他们也可以将病毒传播给其他人。" : "Some people who have recovered from hepatitis B can still carry the virus, meaning they can
                            pass the virus to others even though they don’t show any symptoms." ?></p>
                    </div>

                    <!--Why get immunised against hepatitis B?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_hepatitis_b">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种乙肝疫苗？" : "Why get immunised against hepatitis B?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "乙型肝炎是肝脏的病毒感染。 它会导致长期的肝脏损伤和肝癌。" : "Hepatitis B is a viral infection of the liver. It can cause long-term liver damage and liver
                            cancer." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受乙型肝炎的安全有效的方法。" : "Vaccination is a safe and effective way to protect you from hepatitis B." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种乙型肝炎疫苗，你也可以帮助保护其他人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated against hepatitis B, you can also help protect other people. The more
                            people who are vaccinated in your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from hepatitis B?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_hepatitis_b">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患乙型肝炎的风险？" : "Who is at risk from hepatitis B?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "任何未接种疫苗的人都可能患上乙型肝炎。乙型肝炎风险最高的人群为：" : "Anyone who is not vaccinated can get hepatitis B. The people most at risk from hepatitis B
                            are those who:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "有无保护的性行为" : "have unprotected sex" ?></li>
                            <li><?php echo $l == "cn" ? "接触到其他人的血液和其他体液" : "come in contact with other people’s blood and other body fluids" ?></li>
                            <li><?php echo $l == "cn" ? "用共同针头注射药物。" : "inject drugs with shared needles." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "有乙型肝炎的母亲也可以在出生时将病毒传染给宝宝。" : "Mothers who have hepatitis B can also pass the virus to their babies during birth." ?></p>
                    </div>

                    <!--What is the time recommended to get hepatitis B immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_hepatitis_b_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么时候是去接种乙型肝炎疫苗的建议时间？" : "What is the time recommended to get hepatitis B immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议出生后7天内向的婴儿，以及两个月，四个月和六个月的儿童接种乙型肝炎疫苗。" : "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            hepatitis B immunisation is recommended for babies within seven days of being born, and
                            children aged two months, four months and six months" ?></p>
                    </div>

                    <!--How much do I need to pay for hepatitis B immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hepatitis_b_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为乙型肝炎免疫接种付多少钱？" : "How much do I need to pay for hepatitis B immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" : "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?>
                        </p>
                    </div>

                    <!--Where can I get chickenpox immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_hepatitis_b_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我可以在哪里接种水痘疫苗？" : "Where can I get chickenpox immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of hepatitis B immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_hepatitis_b_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "乙型肝炎免疫有哪些可能的副作用？" : "What are the possible side effects of hepatitis B immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "乙型肝炎疫苗的常见副作用包括：" : "Common side effects of hepatitis B vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针进入的疼痛" : "soreness where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "低烧" : "low-grade fever" ?></li>
                            <li><?php echo $l == "cn" ? "身体疼痛。" : "body aches." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of hepatitis B immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hepatitis_b_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果乙肝疫苗的副作用发生，我该怎么办？" : "What can I do if the side effects of hepatitis B immunisation
                            happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与您的医生讨论乙肝疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of hepatitis B vaccines, or if your
                            child has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- Hib -->
                <div class="tab-pane fade <?php if ($d == "Hib") echo "show active" ?>" id="list-hib"
                     role="tabpanel" aria-labelledby="list-hib-list">

                    <!--title: Hib-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病和免疫接种服务" : "Hib (Haemophilus influenzae type b) & Immunisation Service" ?></h1>
                    </div>

                    <!--index: Hib-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_hib">
                                        <?php echo $l == "cn" ? "什么是乙型流感嗜血杆菌疾病？" : "What is Hib?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_hib">
                                        <?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病的症状有哪些？" : "What are the symptoms of Hib?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_hib">
                                        <?php echo $l == "cn" ? "为什么要接种乙型流感嗜血杆菌疾病疫苗？" : "Why get immunised against Hib?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_hib">
                                        <?php echo $l == "cn" ? "谁有患乙型流感嗜血杆菌疾病的风险？" : "Who is at risk from Hib?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_hib_immunisation">
                                        <?php echo $l == "cn" ? "是什么时候是接种乙型流感嗜血杆菌疾病的推荐时间？" : "What is the time recommended to get Hib immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_hib_immunisation">
                                        <?php echo $l == "cn" ? "我要为接种乙型流感嗜血杆菌疾病付多少钱？" : "How much do I need to pay for Hib immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_hib_immunisation">
                                        <?php echo $l == "cn" ? "在哪里我可以接种乙型流感嗜血杆菌疾病疫苗？" : "Where can I get Hib immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_hib_immunisation">
                                        <?php echo $l == "cn" ? "什么是乙型流感嗜血杆菌疾病免疫可能的副作用？" : "What are the possible side effects of Hib immunisation?" ?></a>
                                    <br></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hib_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果乙型流感嗜血杆菌疾病免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of Hib immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is Hib?-->
                    <div class="custom-block biased-anchor" id="what_is_hib">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是乙型流感嗜血杆菌疾病" : "What is Hib?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病是一种可感染气道，皮肤，耳朵或大脑的细菌。" : "Hib (Haemophilus influenzae type B) is a type of bacteria that can infect the airways, skin,
                            ears or brain." ?></p>
                        <p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病感染可能是严重的。 症状包括：" : "Hib infections can be serious. Symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "脑和脊髓周围膜的肿胀（脑膜炎）" : "swelling of the membranes around the brain and spinal cord (meningitis)" ?></li>
                            <li><?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "喉头上方肿胀（会厌炎）" : "swelling above the voice box (epiglottitis)" ?></li>
                            <li><?php echo $l == "cn" ? "关节肿胀和疼痛（化脓性关节炎）" : "swelling and pain in the joints (septic arthritis)" ?></li>
                            <li><?php echo $l == "cn" ? "皮肤感染（蜂窝组织炎）。" : "infection of the skin (cellulitis)." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "严重的乙型流感嗜血杆菌疾病感染会导致耳聋，脑损伤甚至死亡。" : "A severe Hib infection can cause deafness, brain damage and even death." ?></p>
                        <p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病曾经是危及生命的感染的常见原因，特别是在两岁以下的儿童中。 由于乙型流感嗜血杆菌疾病疫苗在1993年被纳入免疫计划，澳大利亚的乙型流感嗜血杆菌疾病感染率下降了95％以上。" : "Hib was once a common cause of life-threatening infections, especially in children under two
                            years old. Since Hib vaccines were included in the immunisation schedule in 1993, Hib
                            infections in Australia have gone down by more than 95 per cent." ?></p>
                        <p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病感染是由一种称为乙型流感嗜血杆菌疾病的细菌引起的。" : "A Hib infection is caused by a type of bacteria called Haemophilus influenzae type b." ?></p>
                        <p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病细菌可以生活在健康人的鼻子和喉咙中，而不会导致疾病。" : "Hib bacteria can live in the nose and throat of healthy people without causing illness." ?></p>
                        <p><?php echo $l == "cn" ? "众所周知，乙型流感嗜血杆菌疾病不是一种流感。流感是由病毒引起的，乙型流感嗜血杆菌疾病是由细菌引起的。" : "Hib is not a type of influenza, or the flu as it is commonly known. The flu is caused by a
                            virus and Hib is caused by bacteria." ?></p>
                    </div>

                    <!--What are the symptoms of Hib?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hib">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病的症状有哪些？" : "What are the symptoms of Hib?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "症状通常在感染Hib后约2至4天开始。 症状可能会变得非常快，并可能需要紧急医疗护理。" : "Symptoms usually start about two to four days after being infected with Hib. Symptoms can get
                            worse very quickly and will possibly need urgent medical attention." ?></p>
                        <p><?php echo $l == "cn" ? "根据感染的类型，乙型流感嗜血杆菌疾病的症状可以包括：" : "Depending on the type of infection, symptoms of Hib can include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "发烧" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "严重头痛" : "severe headache" ?></li>
                            <li><?php echo $l == "cn" ? "脖子僵硬" : "a stiff neck" ?></li>
                            <li><?php echo $l == "cn" ? "癫痫" : "fits or seizures" ?></li>
                            <li><?php echo $l == "cn" ? "严重困倦" : "severe drowsiness" ?></li>
                            <li><?php echo $l == "cn" ? "起床困难" : "difficulty waking up" ?></li>
                            <li><?php echo $l == "cn" ? "丧失意识" : "loss of consciousness" ?></li>
                            <li><?php echo $l == "cn" ? "气短，咳嗽和呼吸困难" : "shortness of breath, cough and breathing problems" ?></li>
                            <li><?php echo $l == "cn" ? "躁动" : "restlessness" ?></li>
                            <li><?php echo $l == "cn" ? "流口水" : "drooling" ?></li>
                            <li><?php echo $l == "cn" ? "关节疼痛，肿胀和关节活动减少" : "joint pain, swelling and reduced movement of joints" ?></li>
                            <li><?php echo $l == "cn" ? "皮肤发红，触痛" : "red, tender skin." ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against Hib?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_hib">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种乙型流感嗜血杆菌疾病疫苗？" : "Why get immunised against Hib?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病是幼儿的严重疾病。 它会影响气道，皮肤，耳朵或大脑。" : "Hib (also called Haemophilus influenzae type b) is a serious disease in young children. It
                            can affect the airways, skin, ears or brain." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受乙型流感嗜血杆菌疾病伤害的安全有效方法。" : "Vaccination is a safe and effective way to protect you from Hib." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种针对乙型流感嗜血杆菌疾病的疫苗，您还可以帮助保护其他人，尤其是过于生病或未能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated against Hib, you can also help protect other people, especially people
                            who are too sick or too young to be vaccinated. The more people who are vaccinated in your
                            community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from Hib?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_hib">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患乙型流感嗜血杆菌疾病的风险？" : "Who is at risk from Hib?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "婴儿和幼儿患严重的乙型流感嗜血杆菌疾病的风险最高。" : "Babies and young children have the highest risk of serious disease from Hib." ?></p>
                        <p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病可以生活在健康人的喉咙中，而不会引起任何症状。 这些人可以将它传递给其他人，包括婴儿和幼儿。" : "Hib can live in the throats of healthy people without causing any symptoms. These people can
                            pass it on to others, including babies and young children." ?></p>
                    </div>

                    <!--What is the time recommended to get Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_hib_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么时候是接种乙型流感嗜血杆菌疾病疫苗的建议时间？" : "What is the time recommended to get Hib immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议2个月，4个月，6个月和12个月的儿童接种乙型流感嗜血杆菌疫苗。" : "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>, Hib
                            immunisation is recommended for children aged two months, four months, six months and 12
                            months" ?></p>
                    </div>

                    <!--How much do I need to pay for Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hib_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我要为接种乙型流感嗜血杆菌疾病付多少钱？" : "How much do I need to pay for Hib immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" : "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_hib_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我可以在哪里接种乙型流感嗜血杆菌疾病疫苗？" : "Where can I get Hib immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of Hib immunisation?-->
                    <div class="custom-block biased-anchor" id="what_are_the_possible_side_effects_of_hib_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是乙型流感嗜血杆菌疾病免疫可能的副作用？" : "What are the possible side effects of Hib immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "乙型流感嗜血杆菌疾病疫苗的常见副作用包括：" : "Common side effects of Hib vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时发红和肿胀" : "redness and swelling where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "发烧。" : "fever." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of Hib immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hib_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果乙型流感嗜血杆菌疾病免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of Hib immunisation happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与你的医生讨论Hib疫苗的可能副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of Hib vaccines, or if your child
                            has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- HPV -->
                <div class="tab-pane fade <?php if ($d == "HPV") echo "show active" ?>" id="list-hpv"
                     role="tabpanel" aria-labelledby="list-hpv-list">

                    <!--title: HPV-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment">
                            <?php echo $l == "cn" ? "人乳头瘤病毒（HPV）及免疫服务" :
                                "HPV (Human papillomavirus) & Immunisation Service" ?>
                        </h1>
                    </div>

                    <!--index: HPV-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_hpv"><?php echo $l == "cn" ? "什么是人类乳头瘤病毒（HPV）？" : "What is HPV?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_hpv">
                                        <?php echo $l == "cn" ? "人类乳头瘤病毒（HPV）疾病有什么症状？" : "What are the symptoms of HPV?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_hpv">
                                        <?php echo $l == "cn" ? "为什么要接种人类乳头瘤病毒（HPV）疫苗？" : "Why get immunised against HPV?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_hpv">
                                        <?php echo $l == "cn" ? "谁有患人类乳头瘤病毒（HPV）的风险？" : "Who is at risk from HPV?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_hpv_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种人类乳头瘤病毒（HPV）疫苗的建议时间？" : "What is the time recommended to get HPV immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_hpv_immunisation">
                                        <?php echo $l == "cn" ? "我要为接种人类乳头瘤病毒（HPV）疫苗付多少钱？" : "How much do I need to pay for HPV immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_hpv_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种人类乳头瘤病毒（HPV）疫苗？" : "Where can I get HPV immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_hpv_immunisation">
                                        <?php echo $l == "cn" ? "人类乳头瘤病毒（HPV）免疫的可能副作用是什么？" : "What are the possible side effects of HPV immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_hpv_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果人类乳头瘤病毒（HPV）免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of HPV immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is HPV?-->
                    <div class="custom-block biased-anchor" id="what_is_hpv">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是人类乳头瘤病毒（HPV）？" : "What is HPV?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "人类乳头瘤病毒（HPV）是通过性接触传播的常见病毒。 不同类型的HPV影响身体的不同部位。" : "Human papillomavirus (HPV) is a common virus that is spread through sexual contact. Different
                            types of HPV affect different parts of the body." ?></p>
                        <p><?php echo $l == "cn" ? "HPV感染可能严重。 它会导致癌症，包括宫颈癌，外阴癌，阴道癌，阴茎癌和肛门癌，以及一些头颈部癌症。 某些类型也会导致生殖器疣。" : "HPV infection can be serious. It can cause cancers, including cancer of the cervix, vulva,
                            vagina, penis and anus, and some head and neck cancers. Some types can also cause genital
                            warts." ?></p>
                        <p><?php echo $l == "cn" ? "两种类型--16和18 - 导致女性宫颈癌高达80％，男性高达90％的HPV相关癌症。 6型和11型导致大约95％的生殖器疣。" : "Two types – 16 and 18 – cause up to 80 per cent of the cervical cancers in women and up to 90
                            per cent of HPV-related cancers in men. Types 6 and 11 cause approximately 95 per cent of
                            genital warts." ?></p>
                    </div>

                    <!--What are the symptoms of HPV?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_hpv">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "人类乳头瘤病毒（HPV）疾病有什么症状？" : "What are the symptoms of HPV?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "大多数感染HPV的人没有任何症状。" : "Most people infected with HPV do not have any symptoms." ?></p>
                        <p><?php echo $l == "cn" ? "某些类型的HPV可引起生殖器疣，这些生殖器疣在生殖器和肛门周围或周围表现为小生长。 疣可能是：" : "Some types of HPV can cause genital warts, which appear as small growths on or around the
                            genitals and anus. The warts may be:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "平坦或凸起的" : "flat or raised" ?></li>
                            <li><?php echo $l == "cn" ? "单个或多个的" : "single or multiple" ?></li>
                            <li><?php echo $l == "cn" ? "集群的。" : "clustered." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "重要的是要知道，并非所有的HPV感染都会导致癌症。" : "It is important to know that not all HPV infections lead to cancer." ?></p>
                        <p><?php echo $l == "cn" ? "如果您感染了导致癌症的一种HPV，该病毒可能会导致细胞发生变化。 这最终可能导致癌症。 通常没有症状，但有些人可能会注意到：" : "If you are infected with a type of HPV that causes cancer, the virus can cause changes to the
                            cells. This can eventually lead to cancer. There are usually no symptoms, but some people
                            may notice:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "性行为后出血" : "bleeding after sex" ?></li>
                            <li><?php echo $l == "cn" ? "性交时疼痛" : "pain during sex" ?></li>
                            <li><?php echo $l == "cn" ? "异常期，阴道流血或流出" : "abnormal period, vaginal bleeding or discharge" ?></li>
                            <li><?php echo $l == "cn" ? "骨盆疼痛" : "pain in the pelvis" ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against HPV?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_hpv">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种人类乳头瘤病毒（HPV）疫苗？" : "Why get immunised against HPV?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "HPV是一种性传播的病毒感染。 它会导致生殖器疣和癌症。" : "HPV is a viral infection that is sexually transmitted. It can cause genital warts and
                            cancer." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受HPV感染的安全有效方法。 HPV疫苗通常被称为“宫颈癌疫苗”。" : "Vaccination is a safe and effective way to protect you from HPV. The HPV vaccine is often
                            called the \"cervical cancer vaccine.\"" ?></p>
                        <p><?php echo $l == "cn" ? "通过接种针对HPV的疫苗，您还可以帮助保护其他人。 在你的社区接种疫苗的人越多，疾病传播的越少。" : "By getting vaccinated against HPV, you can also help protect other people. The more people
                            who are vaccinated in your community, the less the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from HPV?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_hpv">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患人类乳头瘤病毒（HPV）的风险？" : "Who is at risk from HPV?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "任何性活跃的人都有可能感染HPV。" : "Anyone who is sexually active is at risk of getting HPV." ?></p>
                    </div>

                    <!--What is the time recommended to get HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_hpv_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种人类乳头瘤病毒（HPV）疫苗的建议时间？" : "What is the time recommended to get HPV immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议12岁至13岁（在学校）的人接种HPV疫苗。" : "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>, HPV
                            immunisation is recommended for people aged approximately 12 to 13 years (at school)." ?></p>
                    </div>

                    <!--How much do I need to pay for HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_hpv_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我要为接种人类乳头瘤病毒（HPV）疫苗付多少钱？" : "How much do I need to pay for HPV immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                        <P><?php echo $l == "cn" ? "如果您的孩子在接受第一剂HPV疫苗时年满15岁，则您的孩子需要三剂而不是两剂，才能提供最佳保护。 您需要支付这些剂量中的一种，因为NIP只涵盖两种剂量。" :
                                "If your child is over 15 years old when you get your first dose of HPV vaccine, your child will
                            need three doses, not two doses, to provide the best protection. You will need to pay for
                            one of these doses because only two doses are covered under the NIP." ?></P>
                    </div>

                    <!--Where can I get HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_hpv_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种人类乳头瘤病毒（HPV）疫苗？" : "Where can I get HPV immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of HPV immunisation?-->
                    <div class="custom-block biased-anchor" id="what_are_the_possible_side_effects_of_hpv_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "人类乳头瘤病毒（HPV）免疫的可能副作用是什么？" :
                                "What are the possible side effects of HPV immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "HPV疫苗的常见副作用包括：" : "Common side effects of HPV vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时疼痛，发红和肿胀" : "pain, redness and swelling where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "头痛" : "headache" ?></li>
                            <li><?php echo $l == "cn" ? "疲劳" : "tiredness" ?></li>
                            <li><?php echo $l == "cn" ? "身体疼痛" : "body aches" ?></li>
                            <li><?php echo $l == "cn" ? "发烧。" : "fever." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of HPV immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_hpv_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果人类乳头瘤病毒（HPV）免疫的副作用发生，我该怎么办？" :
                                "What can I do if the side effects of HPV immunisation happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与您的医生讨论HPV疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of HPV vaccines, or if your child
                            has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- measles -->
                <div class="tab-pane fade <?php if ($d == "measles") echo "show active" ?>" id="list-measles"
                     role="tabpanel" aria-labelledby="list-measles-list">

                    <!--title: measles-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "麻疹和免疫接种服务" : "Measles & Immunisation Service" ?></h1>
                    </div>

                    <!--index: measles-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_measles">
                                        <?php echo $l == "cn" ? "什么是麻疹？" : "What is measles?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_measles">
                                        <?php echo $l == "cn" ? "麻疹有哪些症状？" : "What are the symptoms of measles?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_measles">
                                        <?php echo $l == "cn" ? "为什么要接种麻疹疫苗？" : "Why get immunised against measles?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_measles">
                                        <?php echo $l == "cn" ? "谁有患麻疹的风险？" : "Who is at risk from measles?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_measles_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种麻疹疫苗的建议时间？" : "What is the time recommended to get measles immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_measles_immunisation">
                                        <?php echo $l == "cn" ? "我需要为麻疹免疫接种付多少钱？" : "How much do I need to pay for measles immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_measles_immunisation">
                                        <?php echo $l == "cn" ? "我可以在哪里接种麻疹疫苗？" : "Where can I get measles immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_measles_immunisation">
                                        <?php echo $l == "cn" ? "麻疹免疫的可能副作用是什么？" : "What are the possible side effects of measles immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_measles_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果麻疹免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of measles immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is measles?-->
                    <div class="custom-block biased-anchor" id="what_is_measles">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是麻疹？" : "What is measles?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "麻疹是一种非常具有传染性的疾病，会导致红疹和发烧。" : "Measles is a very contagious disease that causes a red rash and fever." ?></p>
                        <p><?php echo $l == "cn" ? "麻疹是一种严重的疾病，因为它可能导致：" : "Measles is a serious disease because it can lead to:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "肺炎和其他气道感染" : "pneumonia and other infections of the airways" ?></li>
                            <li><?php echo $l == "cn" ? "脑部肿胀（脑炎），可导致脑部损伤" : "swelling of the brain (encephalitis), which can cause a brain injury" ?></li>
                            <li><?php echo $l == "cn" ? "中耳感染" : "infection of the middle ear" ?></li>
                            <li><?php echo $l == "cn" ? "对孕妇及其宝宝的不良影响" : "adverse effects on pregnant women and their babies" ?></li>
                            <li><?php echo $l == "cn" ? "死亡。" : "death." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "每15人中就有1人得了肺炎，1000人中有1人发生脑肿胀。" : "About one in 15 infected people get pneumonia, and one in 1,000 develops brain swelling." ?></p>
                        <p><?php echo $l == "cn" ? "每10个人发生脑肿胀，两到四个人就会发生脑损伤，一个人会死亡。" : "For every 10 people who develop brain swelling, between two and four people will develop a
                            brain injury and one will die." ?></p>
                        <p><?php echo $l == "cn" ? "麻疹是由麻疹病毒引起的。" : "Measles is caused by the measles virus." ?></p>
                    </div>

                    <!--What are the symptoms of measles?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_measles">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "麻疹有哪些症状？" : "What are the symptoms of measles?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "麻疹症状包括：" : "Measles symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "发烧" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "一般感觉不适" : "generally feeling unwell" ?></li>
                            <li><?php echo $l == "cn" ? "疲劳" : "tiredness" ?></li>
                            <li><?php echo $l == "cn" ? "流鼻涕" : "runny nose" ?></li>
                            <li><?php echo $l == "cn" ? "干咳" : "dry cough" ?></li>
                            <li><?php echo $l == "cn" ? "疮，红眼（结膜炎）" : "sore, red eyes (conjunctivitis)" ?></li>
                            <li><?php echo $l == "cn" ? "红疹。" : "red rash." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在感染病毒后约10至12天开始，持续约14天。 皮疹常常从脸部或发际开始，迅速扩散到身体其他部位。 皮疹不痒，约一周后消失。" :
                                "Symptoms usually start about 10 to 12 days after catching the virus, and last for about 14
                            days. The rash often starts on the face or hairline, and spreads to the rest of the body
                            quickly. The rash is not itchy, and disappears after about one week." ?></p>
                        <p><?php echo $l == "cn" ? "如果麻疹导致更严重的疾病，则会出现其他症状，这取决于身体的哪一部分受到影响。" :
                                "If measles leads to a more serious disease, other symptoms will develop, depending on which
                            part of the body is affected." ?></p>
                    </div>

                    <!--Why get immunised against measles?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_measles">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种麻疹疫苗？" : "Why get immunised against measles?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "麻疹是一种非常具有传染性的病毒感染，可导致皮疹和发烧。 它可能是一种严重的疾病，需要医院治疗并可能导致死亡。" :
                                "Measles is a very contagious viral infection that causes a rash and fever. It can be a
                            serious disease that needs hospital treatment and can cause death." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受麻疹的安全有效方法。" : "Vaccination is a safe and effective way to protect you from measles." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种麻疹疫苗，您还可以帮助保护其他人，特别是过于生病或未能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" :
                                "By getting vaccinated against measles, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from measles?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_measles">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患麻疹的风险？" : "Who is at risk from measles?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "任何没有接种过或没有接种过麻疹的人都有可能患上这种疾病。" : "Anyone who has not been immunised or has not previously had measles is at risk of getting the
                            disease." ?></p>
                        <p><?php echo $l == "cn" ? "麻疹在澳大利亚并不常见，但仍然很重要。 麻疹可以由海外的人带到澳大利亚。" : "Measles is not common in Australia, but it is still important to be immunised. Measles can be
                            brought into Australia by someone who has been overseas." ?></p>
                        <p><?php echo $l == "cn" ? "免疫系统受损的人也处于危险之中。" : "People whose immune system is compromised are also at risk." ?></p>
                    </div>

                    <!--What is the time recommended to get measles immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_measles_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种麻疹疫苗的建议时间？" : "What is the time recommended to get measles immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议12个月和18个月的儿童接种麻疹疫苗。" : "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            measles immunisation is recommended for children aged 12 months and 18 months." ?></p>
                    </div>

                    <!--How much do I need to pay for measles immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_measles_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为麻疹免疫接种付多少钱？" : "How much do I need to pay for measles immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get measles immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_measles_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我可以在哪里接种麻疹疫苗？" : "Where can I get measles immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of measles immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_measles_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "麻疹免疫的可能副作用是什么？" : "What are the possible side effects of measles immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "麻疹疫苗的常见副作用包括：" : "Common side effects of measles vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "轻度皮疹" : "mild rash" ?></li>
                            <li><?php echo $l == "cn" ? "感觉不适" : "feeling unwell" ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of measles immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_measles_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果麻疹免疫的副作用发生，我该怎么办？" :
                                "What can I do if the side effects of measles immunisation happen?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与你的医生讨论麻疹疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of measles vaccines, or if your child
                            has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- meningococcal disease -->
                <div class="tab-pane fade <?php if ($d == "meningococcal_disease") echo "show active" ?>"
                     id="list-meningococcal_disease"
                     role="tabpanel" aria-labelledby="list-meningococcal_disease-list">

                    <!--title: meningococcal disease-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "脑膜炎球菌疾病和免疫接种服务" : "Meningococcal disease & Immunisation Service" ?></h1>
                    </div>

                    <!--index: meningococcal disease-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_meningococcal_disease">
                                        <?php echo $l == "cn" ? "什么是脑膜炎球菌病？" : "What is meningococcal disease?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_meningococcal_disease">
                                        <?php echo $l == "cn" ? "脑膜炎球菌病有哪些症状？" : "What are the symptoms of meningococcal disease?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_meningococcal_disease">
                                        <?php echo $l == "cn" ? "为什么要接种脑膜炎球菌病疫苗？" : "Why get immunised against meningococcal disease?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_meningococcal_disease">
                                        <?php echo $l == "cn" ? "谁有患脑膜炎球菌病的风险？" : "Who is at risk from meningococcal disease?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_meningococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种脑膜炎球菌疫苗的建议时间？" : "What is the time recommended to get meningococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_meningococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "我需要为脑膜炎球菌疾病免疫支付多少费用？" : "How much do I need to pay for meningococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#where_can_i_get_meningococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种脑膜炎球菌疾病疫苗？" : "Where can I get meningococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_meningococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "脑膜炎球菌疾病免疫的可能副作用是什么？" : "What are the possible side effects of meningococcal disease immunisation?" ?></a>
                                </li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_meningococcal_disease_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果脑膜炎球菌疾病免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of meningococcal disease immunisation
                                        happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is meningococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_is_meningococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是脑膜炎球菌病？" : "What is meningococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "脑膜炎球菌病是一种罕见但严重并危及生命的感染。 流行性脑膜炎通常会导致：" : "Meningococcal disease is a rare but serious and life-threatening infection. Meningococcal
                            disease usually causes:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "大脑内膜肿胀（脑膜炎）" : "swelling of the lining of the brain (meningitis)" ?></li>
                            <li><?php echo $l == "cn" ? "血液感染（败血症）。" : "infection of the blood (septicaemia)." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "它也可能导致：" : "It can also cause:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "突发性关节炎。" : "sudden arthritis." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状突然出现，人们可以很快死亡，没有医疗帮助。" : "Symptoms appear suddenly and people can die very quickly without medical help." ?></p>
                        <p><?php echo $l == "cn" ? "脑膜炎球菌疾病的长期影响可以包括：" : "Long-term effects of meningococcal disease can include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "变形的胳膊和腿" : "deformed arms and legs" ?></li>
                            <li><?php echo $l == "cn" ? "失去手臂和腿部" : "loss of arms and legs" ?></li>
                            <li><?php echo $l == "cn" ? "疤痕在皮肤上" : "scars on the skin" ?></li>
                            <li><?php echo $l == "cn" ? "单耳或双耳耳聋" : "deafness in one or both ears" ?></li>
                            <li><?php echo $l == "cn" ? "头痛" : "headaches" ?></li>
                            <li><?php echo $l == "cn" ? "耳鸣" : "ringing in the ears (tinnitus)" ?></li>
                            <li><?php echo $l == "cn" ? "模糊或复视" : "blurred or double vision" ?></li>
                            <li><?php echo $l == "cn" ? "疼痛和关节僵硬" : "aches and stiffness in the joints" ?></li>
                            <li><?php echo $l == "cn" ? "学习困难。" : "learning difficulties." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "脑膜炎球菌疾病是由称为<i>脑膜炎奈瑟球菌</i>的许多不同细菌菌株引起的。 有许多亚型给出不同的英文字母 - 澳大利亚的主要类型是B型，W型和Y型." :
                                "Meningococcal disease is caused by a number of different strains of the bacterium called <i>Neisseria
                                meningitidis</i>. There are a number of subtypes given different letters of the alphabet
                            – the main types seen in Australia are Meningococcus B, W and Y." ?></p>
                    </div>

                    <!--What are the symptoms of meningococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_meningococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "脑膜炎球菌病有哪些症状？" : "What are the symptoms of meningococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "脑膜炎球菌的某些症状可能表明这种疾病的严重病例。 如果出现这些症状，您应该寻求紧急医疗：" :
                                "Some symptoms of meningococcal can suggest a severe case of the disease. If these symptoms
                            appear, you should seek urgent medical treatment:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "红色或紫色针状斑点的皮疹，或较大的瘀伤样区域" : "rash of red or purple pinprick spots, or larger bruise-like areas" ?></li>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "头痛" : "headache" ?></li>
                            <li><?php echo $l == "cn" ? "颈部僵硬" : "neck stiffness" ?></li>
                            <li><?php echo $l == "cn" ? "看明亮的光线时会感到不适" : "discomfort when looking at bright light" ?></li>
                            <li><?php echo $l == "cn" ? "恶心或呕吐" : "nausea or vomiting" ?></li>
                            <li><?php echo $l == "cn" ? "腹泻" : "diarrhoea" ?></li>
                            <li><?php echo $l == "cn" ? "感觉非常恶心。" : "feeling very, very sick." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "其他可能的症状可能包括：" : "Other possible symptoms can include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "食欲不振或拒绝进食" : "loss of appetite or refusing to feed" ?></li>
                            <li><?php echo $l == "cn" ? "烦躁" : "irritability or fretfulness" ?></li>
                            <li><?php echo $l == "cn" ? "混乱" : "confusion" ?></li>
                            <li><?php echo $l == "cn" ? "嗜睡" : "drowsiness" ?></li>
                            <li><?php echo $l == "cn" ? "在年幼的孩子中，极度疲倦或无力" : "in young children, extreme tiredness or floppiness" ?></li>
                            <li><?php echo $l == "cn" ? "疼痛或肌肉酸痛" : "aching or sore muscles" ?></li>
                            <li><?php echo $l == "cn" ? "疼痛或肿胀的关节" : "painful or swollen joints" ?></li>
                            <li><?php echo $l == "cn" ? "走路困难" : "difficulty walking, and maybe collapsing" ?></li>
                            <li><?php echo $l == "cn" ? "咕噜或呻吟" : "grunting or moaning" ?></li>
                            <li><?php echo $l == "cn" ? "谈话困难" : "difficulty talking" ?></li>
                            <li><?php echo $l == "cn" ? "在幼儿身上，抽搐。" : "in young children, having fits or twitching." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "婴儿和幼儿对于年长的儿童和成人可能会有不同的症状。" : "Babies and young children can have different symptoms to older children and adults." ?></p>
                    </div>

                    <div class="custom-block biased-anchor" id="why_get_immunised_against_meningococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种脑膜炎球菌病疫苗？" : "Why get immunised against meningococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "脑膜炎球菌病是一种非常严重的感染，可导致严重的疤痕，四肢丧失，脑损伤和死亡。" : "Meningococcal disease is a very serious infection that can cause severe scarring, loss of
                            limbs, brain damage and death." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受脑膜炎球菌疾病的安全有效方法。" : "Vaccination is a safe and effective way to protect you from meningococcal disease." ?></p>
                        <p><?php echo $l == "cn" ? "有五种主要类型的脑膜炎球菌病，分别称为A型，B型，C型，W型和Y型。疫苗可以预防所有这些类型，但不同的疫苗可以保护不同类型的疫苗。" :
                                "There are five main types of meningococcal disease, called A, B, C, W and Y. Vaccines can
                            protect against all these types, but different vaccines protect against different types." ?></p>
                    </div>

                    <!--Who is at risk from meningococcal disease?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_meningococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患脑膜炎球菌病的风险？" : "Who is at risk from meningococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "任何人都可以得到脑膜炎球菌病，但这种病很少见。 最有可能患上这种疾病的人是：" : "Anyone can get meningococcal disease, but it is rare. The people most at risk of getting the
                            disease are:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "五岁以下的小孩" : "young children under the age of five" ?></li>
                            <li><?php echo $l == "cn" ? "15岁至24岁的青少年和年轻人" : "teenagers and young adults between 15 and 24 years old" ?></li>
                            <li><?php echo $l == "cn" ? "与脑膜炎球菌病患者同住的人" : "people living with patients who have meningococcal disease" ?></li>
                            <li><?php echo $l == "cn" ? "接触香烟烟雾的人" : "people who are exposed to cigarette smoke" ?></li>
                            <li><?php echo $l == "cn" ? "旅客到脑膜炎球菌病高发国家" : "travellers to countries with high rates of meningococcal disease" ?></li>
                            <li><?php echo $l == "cn" ? "由于慢性疾病和某些药物导致免疫系统衰弱的人。" : "people who have a weakened immune system due to both chronic disease and some
                                medications." ?>
                            </li>
                        </ul>
                    </div>

                    <!--What is the time recommended to get meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_meningococcal_disease_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种脑膜炎球菌疫苗的建议时间？" : "What is the time recommended to get meningococcal disease immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议12个月的儿童接种脑膜炎球菌疫苗。" : "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            meningococcal immunisation is recommended for children aged 12 months" ?></p>
                    </div>

                    <!--How much do I need to pay for meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="how_much_do_i_need_to_pay_for_meningococcal_disease_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为脑膜炎球菌疾病免疫支付多少费用？" : "How much do I need to pay for meningococcal disease
                            immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" : "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_meningococcal_disease_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种脑膜炎球菌疾病疫苗？" : "Where can I get meningococcal disease immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of meningococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_meningococcal_disease_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "脑膜炎球菌疾病免疫的可能副作用是什么？" : "What are the possible side effects of meningococcal disease
                            immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "脑膜炎球菌疫苗的常见副作用包括：" : "Common side effects of meningococcal vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时疼痛，发红和肿胀" : "pain, redness and swelling where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "发烧（尤其是脑膜炎球菌B型疫苗）" : "fever (especially for meningococcal B vaccine)" ?></li>
                            <li><?php echo $l == "cn" ? "感到不安或疲倦" : "feeling unsettled or tired" ?></li>
                            <li><?php echo $l == "cn" ? "食欲下降" : "decreased appetite" ?></li>
                            <li><?php echo $l == "cn" ? "头痛。" : "headache." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of meningococcal disease immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_meningococcal_disease_immunisation_happen">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "如果脑膜炎球菌疾病免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of meningococcal disease immunisation happen?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "与您的医生讨论脑膜炎球菌疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of meningococcal disease vaccines, or if your
                            child has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- mumps -->
                <div class="tab-pane fade <?php if ($d == "mumps") echo "show active" ?>" id="list-mumps"
                     role="tabpanel" aria-labelledby="list-mumps-list">

                    <!--title: mumps-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "腮腺炎和免疫接种服务" : "Mumps & Immunisation Service" ?></h1>
                    </div>

                    <!--index: mumps-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_mumps">
                                        <?php echo $l == "cn" ? "什么是腮腺炎？" : "What is mumps?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_mumps">
                                        <?php echo $l == "cn" ? "腮腺炎的症状有哪些？" : "What are the symptoms of mumps?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_mumps">
                                        <?php echo $l == "cn" ? "为什么要接种腮腺炎疫苗？" : "Why get immunised against mumps?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_mumps">
                                        <?php echo $l == "cn" ? "谁有患流行性腮腺炎的风险？" : "Who is at risk from mumps?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_mumps_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是腮腺炎疫苗接种的建议时间？" : "What is the time recommended to get mumps immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_mumps_immunisation">
                                        <?php echo $l == "cn" ? "我需要为腮腺炎免疫接种支付多少费用？" : "How much do I need to pay for mumps immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_mumps_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种腮腺炎疫苗？" : "Where can I get mumps immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_mumps_immunisation">
                                        <?php echo $l == "cn" ? "腮腺炎免疫的可能副作用是什么？" : "What are the possible side effects of mumps immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_mumps_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果腮腺炎免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of mumps immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is mumps?-->
                    <div class="custom-block biased-anchor" id="what_is_mumps">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是腮腺炎？" : "What is mumps?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "腮腺炎是一种高度传染性疾病，会导致发烧和脸部发炎。" : "Mumps is a highly contagious disease that causes fever and inflammation of the face." ?></p>
                        <p><?php echo $l == "cn" ? "腮腺炎是一种严重的疾病，因为它会导致：" : "Mumps is a serious disease because it can lead to: " ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "脑炎" : "inflammation of the brain (encephalitis)" ?></li>
                            <li><?php echo $l == "cn" ? "脑膜炎" : "inflammation of the lining of the brain and spinal cord (meningitis)" ?></li>
                            <li><?php echo $l == "cn" ? "心脏炎症（心肌炎）" : "inflammation of the heart (myocarditis)" ?></li>
                            <li><?php echo $l == "cn" ? "不育（不能生孩子）。" : "infertility (not being able to have children)." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "约200名患有腮腺炎的儿童中有一人会发生脑部炎症，这可能非常严重。 腮腺炎也会损害神经，导致耳聋。" : "About one in 200 children with mumps will develop brain inflammation, which can be very
                            serious. Mumps can also damage nerves, which can lead to deafness." ?></p>
                        <p><?php echo $l == "cn" ? "在孕妇中，腮腺炎在怀孕的前三个月会导致流产。" : "In pregnant women, mumps can cause miscarriage during the first three months of
                            pregnancy." ?></p>
                        <p><?php echo $l == "cn" ? "腮腺炎是由腮腺炎病毒引起的。" : "Mumps is caused by the mumps virus." ?></p>
                    </div>

                    <!--What are the symptoms of mumps?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_mumps">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "腮腺炎的症状是哪些？" : "What are the symptoms of mumps?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "腮腺炎症状包括：" : "Mumps symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "脸部肿胀，尤其是在下颚周围" : "swelling of the face, especially around the lower jaw" ?></li>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "头痛" : "headache" ?></li>
                            <li><?php echo $l == "cn" ? "疲劳" : "fatigue" ?></li>
                            <li><?php echo $l == "cn" ? "疼痛和痛苦" : "aches and pains" ?></li>
                            <li><?php echo $l == "cn" ? "食欲不振，导致体重减轻" : "loss of appetite, leading to weight loss" ?></li>
                            <li><?php echo $l == "cn" ? "咀嚼或吞咽痛苦。" : "painful chewing or swallowing." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "腮腺炎也会导致身体其他部位的肿胀和疼痛，包括：" : "Mumps can cause swelling and pain in other parts of the body as well, including in the:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "乳房" : "breasts" ?></li>
                            <li><?php echo $l == "cn" ? "睾丸" : "testicles" ?></li>
                            <li><?php echo $l == "cn" ? "卵巢" : "ovaries" ?></li>
                            <li><?php echo $l == "cn" ? "围绕大脑的膜（脑膜炎）" : "membranes surrounding the brain (meningitis)" ?></li>
                            <li><?php echo $l == "cn" ? "大脑（脑炎）" : "brain (encephalitis)" ?></li>
                            <li><?php echo $l == "cn" ? "心脏肌肉" : "heart muscle" ?></li>
                            <li><?php echo $l == "cn" ? "胰腺" : "pancreas" ?></li>
                            <li><?php echo $l == "cn" ? "肝" : "liver" ?></li>
                            <li><?php echo $l == "cn" ? "甲状腺" : "thyroid" ?>.</li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在捕捉腮腺炎后约12至25天开始。 人们通常在两周内开始感觉好转，除非他们有严重的这种疾病。" : "Symptoms usually start about 12 to 25 days after catching mumps. People usually start to feel
                            better in two weeks, unless they have a serious case of the disease." ?></p>
                    </div>

                    <!--Why get immunised against mumps?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_mumps">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种腮腺炎疫苗？" : "Why get immunised against mumps?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "腮腺炎是一种导致唾液腺肿胀和高烧的病毒性疾病。 它有时会导致听力下降，流产或脑肿胀。" : "Mumps is a viral disease that causes swollen salivary glands and high fever. It can sometimes
                            cause hearing loss, miscarriage or brain swelling." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受腮腺炎感染的安全有效方法。" : "Vaccination is a safe and effective way to protect you from mumps." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种腮腺炎疫苗，您还可以帮助保护其他人，尤其是过于生病或未能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated against mumps, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from mumps?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_mumps">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患流行性腮腺炎的风险？" : "Who is at risk from mumps?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "腮腺炎可以影响所有年龄段的人。 任何未经免疫的人都有腮腺炎的危险。 澳大利亚腮腺炎并不常见，但确实发生过病例。" :
                                "Mumps can affect people of all ages. Anyone who has not been immunised is at risk of catching
                            mumps. Mumps is not common in Australia, but cases do occur." ?></p>
                        <p><?php echo $l == "cn" ? "腮腺炎疫苗阻止了大多数人，但并非所有人都患上了由该疾病引起的腮腺炎和并发症。 有些接受两剂腮腺炎疫苗的人仍然可能患上腮腺炎，特别是如果他们与患有此病的人长期密切接触。 如果接种疫苗的人得到腮腺炎，他们可能比没有接种疫苗的人病情更轻。" :
                                "The mumps vaccine prevents most, but not all people getting mumps and complications caused by
                            the disease. Some people who receive two doses of the mumps vaccine can still get mumps,
                            especially if they have prolonged, close contact with someone who has the disease. If a
                            vaccinated person does get mumps, they will likely have less severe illness than a person
                            who has not been vaccinated." ?></p>
                    </div>

                    <!--What is the time recommended to get mumps immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_mumps_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是腮腺炎疫苗接种的建议时间？" : "What is the time recommended to get mumps immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议12个月和18个月的儿童接种腮腺炎疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>, mumps
                            immunisation is recommended for children aged 12 months and 18 months." ?></p>
                    </div>

                    <!--How much do I need to pay for mumps immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_mumps_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为腮腺炎免疫接种支付多少费用？" :
                                "How much do I need to pay for mumps immunisation?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?>
                        </p>
                    </div>

                    <!--Where can I get mumps immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_mumps_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种腮腺炎疫苗？" : "Where can I get mumps immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of mumps immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_mumps_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "腮腺炎免疫的可能副作用是什么？" : "What are the possible side effects of mumps immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "腮腺炎疫苗的常见副作用包括：" : "Common side effects of mumps vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "轻度皮疹" : "mild rash" ?></li>
                            <li><?php echo $l == "cn" ? "感觉不适。" : "feeling unwell." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of mumps immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_mumps_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果腮腺炎免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of mumps immunisation happen?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "与你的医生谈谈腮腺炎疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of mumps vaccines, or if your child
                            has possible side effects that concern you." ?></p>
                    </div>
                </div>

                <!-- pneumococcal disease -->
                <div class="tab-pane fade <?php if ($d == "pneumococcal_disease") echo "show active" ?>"
                     id="list-pneumococcal_disease"
                     role="tabpanel" aria-labelledby="list-pneumococcal_disease-list">

                    <!--title: pneumococcal disease-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "肺炎球菌疾病和免疫服务" : "Pneumococcal disease & Immunisation Service" ?></h1>
                    </div>

                    <!--index: pneumococcal disease-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_pneumococcal_disease">
                                        <?php echo $l == "cn" ? "什么是肺炎球菌病？" : "What is pneumococcal disease?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_pneumococcal_disease">
                                        <?php echo $l == "cn" ? "肺炎球菌疾病有哪些症状？" : "What are the symptoms of pneumococcal disease?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_pneumococcal_disease">
                                        <?php echo $l == "cn" ? "为什么接种肺炎球菌疾病疫苗？" : "Why get immunised against pneumococcal disease?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_pneumococcal_disease">
                                        <?php echo $l == "cn" ? "谁有患肺炎球菌疾病的风险？" : "Who is at risk from pneumococcal disease?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_pneumococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种肺炎球菌疾病及疫苗的建议时间？" : "What is the time recommended to get pneumococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_pneumococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "我需要为肺炎球菌疾病免疫支付多少费用？" : "How much do I need to pay for pneumococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#where_can_i_get_pneumococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种肺炎球菌疾病疫苗？" : "Where can I get pneumococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_pneumococcal_disease_immunisation">
                                        <?php echo $l == "cn" ? "肺炎球菌疾病免疫的可能副作用是什么？" : "What are the possible side effects of pneumococcal disease immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_pneumococcal_disease_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果肺炎球菌疾病免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of pneumococcal disease immunisation happen?" ?></a>
                                </li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_is_pneumococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是肺炎球菌病？" : "What is pneumococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "肺炎球菌疾病是由称为肺炎链球菌的细菌引起的，有时称为肺炎球菌。 细菌可以引起许多不同类型的非常严重的疾病，这可能会影响肺部，耳朵，鼻窦和大脑。 肺炎球菌疾病是严重的，因为它可能导致：" :
                                "Pneumococcal disease is caused by bacteria known as Streptococcus pneumoniae, sometimes known
                            as pneumococcus. The bacteria can cause a number of different types of very serious
                            disease, which can affect the lungs, ears, sinuses and brain. Pneumococcal disease is
                            serious because it can lead to:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "脑部肿胀和感染（脑膜炎）" : "swelling and infection of the brain (meningitis)" ?></li>
                            <li><?php echo $l == "cn" ? "血液感染（败血症）" : "infection of the blood (septicaemia)" ?></li>
                            <li><?php echo $l == "cn" ? "昏迷" : "coma" ?></li>
                            <li><?php echo $l == "cn" ? "死亡。" : "death." ?></li>
                        </ul>
                    </div>

                    <!--What are the symptoms of pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_pneumococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "肺炎球菌疾病有哪些症状？" : "What are the symptoms of pneumococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "肺炎球菌疾病的症状取决于哪一部分人体感染：" : "Symptoms of pneumococcal disease vary depending on which body part is infected:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "中耳：耳朵酸痛，听力下降，发烧" : "middle ear: sore ear(s), hearing loss, fever" ?></li>
                            <li><?php echo $l == "cn" ? "鼻窦：面部疼痛，鼻塞，头痛和黄绿色粘液" : "sinuses: sore face, blocked nose, headaches and a yellow–green mucus" ?></li>
                            <li><?php echo $l == "cn" ? "大脑和脊髓膜：高热，头痛，恶心，呕吐，颈部僵硬和昏迷" : "membranes of the brain and spinal cord: high fever, headache, nausea, vomiting, stiff
                                neck and coma" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "肺部：发烧，咳嗽，胸痛和呼吸困难" : "lungs: fever, cough, chest pain and problems breathing" ?></li>
                            <li><?php echo $l == "cn" ? "血流：发烧，肌肉疼痛和头痛" : "bloodstream: fever, muscle aches and pains, and headaches" ?></li>
                            <li><?php echo $l == "cn" ? "关节：受累关节的疼痛，肿胀和僵硬" : "joints: pain, swelling and stiffness in the affected joint" ?></li>
                            <li><?php echo $l == "cn" ? "骨骼：发烧，骨骼疼痛和僵硬。" : "bones: fever, pain in the bone and stiffness." ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_pneumococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么接种肺炎球菌疾病疫苗？" : "Why get immunised against pneumococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "肺炎球菌疾病是一种细菌感染。 这对年幼的孩子和老年人来说尤其严重。 它会导致肺炎，血流感染和脑膜炎（大脑周围膜的炎症）。" :
                                "Pneumococcal disease is a bacterial infection. It is especially serious for young children
                            and older people. It can cause pneumonia, bloodstream infection and meningitis (inflammation
                            of the membranes around the brain)." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受肺炎球菌疾病的安全有效方法。" : "Vaccination is a safe and effective way to protect you from pneumococcal disease." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种针对肺炎球菌疾病的疫苗，您还可以帮助保护其他人，特别是年龄太小而不能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated against pneumococcal disease, you can also help protect other people,
                            especially people who are too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from pneumococcal disease?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_pneumococcal_disease">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患肺炎球菌疾病的风险？" : "Who is at risk from pneumococcal disease?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "最有可能患肺炎球菌病的人是：" : "The people most at risk of getting pneumococcal disease are:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "小孩子" : "young children" ?></li>
                            <li><?php echo $l == "cn" ? "65岁以上的人" : "people over 65 years old" ?></li>
                            <li><?php echo $l == "cn" ? "原著和托雷斯海峡岛民" : "Aboriginal and Torres Strait Islander people" ?></li>
                            <li><?php echo $l == "cn" ? "免疫系统减弱的人" : "people who have weakened immune systems" ?></li>
                            <li><?php echo $l == "cn" ? "那些曾经去除过脾脏或不能正常工作的人" : "people who have had their spleen removed or when it does not work properly" ?></li>
                            <li><?php echo $l == "cn" ? "患有糖尿病，肺部疾病，肾脏疾病，心脏病，肝脏疾病或癌症等慢性疾病的人群" : "people with chronic diseases such as diabetes, lung disease, kidney disease, heart
                                disease, liver disease or cancer" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "早产儿" : "premature babies" ?></li>
                            <li><?php echo $l == "cn" ? "有唐氏症的人" : "people who have Down syndrome" ?></li>
                            <li><?php echo $l == "cn" ? "吸烟的人" : "people who smoke" ?></li>
                            <li><?php echo $l == "cn" ? "喝有害量酒精的人" : "people who drink harmful amounts of alcohol" ?></li>
                            <li><?php echo $l == "cn" ? "有特定手术的人员，包括人工耳蜗植入物和颅内分流术" : "people who have had specific operation including cochlear implants and intracranial
                                shunts" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "有流体从大脑和脊髓周围渗漏的病人" : "people who have a condition where the fluid leaks out from around their brain and spinal
                                cord" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "之前患过肺炎球菌病的人。" : "people who have had pneumococcal disease before." ?></li>
                        </ul>
                    </div>

                    <!--What is the time recommended to get pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种肺炎球菌疾病及疫苗的建议时间？" : "What is the time recommended to get pneumococcal disease immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议所有2个月，4个月和6个月的儿童接种肺炎球菌疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            pneumococcal immunisation is recommended for all children aged two months, four months and
                            six months." ?></p>
                    </div>

                    <!--How much do I need to pay for pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="how_much_do_i_need_to_pay_for_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为肺炎球菌疾病免疫支付多少费用？" : "How much do I need to pay for pneumococcal disease immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种肺炎球菌疾病疫苗？" : "Where can I get pneumococcal disease immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of pneumococcal disease immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_pneumococcal_disease_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "肺炎球菌疾病免疫的可能副作用是什么？" :
                                "What are the possible side effects of pneumococcal disease immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "肺炎球菌疫苗的常见副作用包括：" : "Common side effects of pneumococcal vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时疼痛，发红和肿胀" : "pain, redness and swelling where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "感到烦躁" : "feeling irritable" ?></li>
                            <li><?php echo $l == "cn" ? "感觉昏昏欲睡" : "feeling drowsy" ?></li>
                            <li><?php echo $l == "cn" ? "食欲下降" : "reduced appetite" ?></li>
                            <li><?php echo $l == "cn" ? "身体疼痛。" : "body aches." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of pneumococcal disease immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_pneumococcal_disease_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果肺炎球菌疾病免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of pneumococcal disease
                            immunisation happen?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与医生讨论肺炎球菌疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of pneumococcal disease vaccines, or if
                            your child has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- polio -->
                <div class="tab-pane fade <?php if ($d == "polio") echo "show active" ?>" id="list-polio"
                     role="tabpanel" aria-labelledby="list-polio-list">

                    <!--title: polio-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "脊髓灰质炎（脊髓灰质炎）及免疫服务" :
                                "Polio (Poliomyelitis) & Immunisation Service" ?></h1>
                    </div>

                    <!--index: polio-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_polio">
                                        <?php echo $l == "cn" ? "什么是脊髓灰质炎？" : "What is polio?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_polio">
                                        <?php echo $l == "cn" ? "脊髓灰质炎有哪些症状？" : "What are the symptoms of polio?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_polio">
                                        <?php echo $l == "cn" ? "为什么接种脊髓灰质炎疫苗？" : "Why get immunised against polio?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_polio">
                                        <?php echo $l == "cn" ? "谁有患脊髓灰质炎的风险？" : "Who is at risk from polio?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_polio_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种脊髓灰质炎及疫苗的建议时间？" : "What is the time recommended to get polio immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_polio_immunisation">
                                        <?php echo $l == "cn" ? "我需要为脊髓灰质炎免疫支付多少费用？" : "How much do I need to pay for polio immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_polio_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种脊髓灰质炎疫苗？" : "Where can I get polio immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_polio_immunisation">
                                        <?php echo $l == "cn" ? "脊髓灰质炎免疫的可能副作用是什么？" : "What are the possible side effects of polio immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_polio_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果脊髓灰质炎免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of polio immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is polio?-->
                    <div class="custom-block biased-anchor" id="what_is_polio">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是脊髓灰质炎？" : "What is polio?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "脊髓灰质炎又称小儿麻痹症。 这是一种严重的病毒性疾病，可导致长期的残疾，瘫痪和死亡。" : "Polio is short for poliomyelitis. It is a serious viral disease that can lead to long-term
                            disability, paralysis and death." ?></p>
                        <p><?php echo $l == "cn" ? "全球根除脊髓灰质炎行动是一项消除世界各国脊髓灰质炎的国际计划。 自2000年以来，澳大利亚已正式无脊髓灰质炎。全球仅有少数几个国家出现小儿麻痹症。" :
                                "The Global Polio Eradication Initiative is an international plan to eliminate polio from
                            every country in the world. Australia has been officially polio-free since 2000. Polio is
                            present in only a few countries in the world." ?></p>
                        <p><?php echo $l == "cn" ? "脊髓灰质炎是由脊髓灰质炎病毒引起的。" : "Polio is caused by the poliovirus." ?></p>
                    </div>

                    <!--What are the symptoms of polio?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_polio">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "脊髓灰质炎有哪些症状？" : "What are the symptoms of polio?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "大多数接触脊髓灰质炎的人没有任何症状。 如果症状确实发生，它们包括：" : "Most people who come into contact with polio do not have any symptoms. If symptoms do occur,
                            they include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "头痛" : "headache" ?></li>
                            <li><?php echo $l == "cn" ? "恶心和呕吐" : "nausea and vomiting" ?></li>
                            <li><?php echo $l == "cn" ? "疲劳" : "fatigue" ?></li>
                            <li><?php echo $l == "cn" ? "背部和颈部僵硬" : "stiffness in the back and neck" ?></li>
                            <li><?php echo $l == "cn" ? "肌肉疼痛，往往严重" : "muscle pain, often severe" ?></li>
                            <li><?php echo $l == "cn" ? "麻痹。" : "paralysis." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在发现脊髓灰质炎后约三至三十五天。 大多数人完全康复，但一些人发展终身残疾。 对一些肌肉的损害可能意味着你不能正确地呼吸或吞咽了。 神经损伤可能会导致其他长期影响，包括：" :
                                "Symptoms usually start about three to 35 days after catching polio. Most people make a
                            complete recovery, but some people develop life-long disability. Damage to some muscles can
                            mean you can’t breathe or swallow properly anymore. Damage to nerves may cause other
                            long-term effects, including:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "失去力量" : "losing strength" ?></li>
                            <li><?php echo $l == "cn" ? "耗尽能源" : "running out of energy" ?></li>
                            <li><?php echo $l == "cn" ? "呼吸，吞咽或说话困难" : "breathing, swallowing or speaking difficulties" ?></li>
                            <li><?php echo $l == "cn" ? "肌肉和关节疼痛。" : "pain in muscles and joints." ?></li>
                        </ul>
                    </div>

                    <!--Why get immunised against polio?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_polio">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么接种脊髓灰质炎疫苗？" : "Why get immunised against polio?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "脊髓灰质炎（又称小儿麻痹症）是一种病毒感染，可引起麻痹而死亡。" : "Polio (also called poliomyelitis) is a viral infection that can cause paralysis and
                            death." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受小儿麻痹症的安全有效方法。" : "Vaccination is a safe and effective way to protect you from polio." ?></p>
                        <p><?php echo $l == "cn" ? "全球根除脊髓灰质炎行动是一项消除世界各国脊髓灰质炎的国际计划。 自2000年以来，澳大利亚已经正式无脊髓灰质炎，仅有少数国家仍有小儿麻痹症。" :
                                "The Global Polio Eradication Initiative is an international plan to eliminate polio from
                            every country in the world. Australia has been officially polio-free since 2000, and only a
                            few countries in the world still have polio." ?></p>
                        <p><?php echo $l == "cn" ? "脊髓灰质炎免疫仍然非常重要。 这是因为脊髓灰质炎可以通过旅行到有脊髓灰质炎的国家的人进入澳大利亚。 如果澳大利亚人没有接种疫苗，疾病可能会再次蔓延。" :
                                "Polio immunisation is still very important. This is because polio can be brought into
                            Australia by people who travel to countries that have polio. If Australians are not
                            immunised, the disease could start spreading again." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种脊髓灰质炎疫苗，还可以帮助保护其他人，特别是无法接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" :
                                "By getting vaccinated against polio, you can also help protect other people, especially
                            people who are unable to be vaccinated. The more people who are vaccinated in your
                            community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from polio?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_polio">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患脊髓灰质炎的风险？" : "Who is at risk from polio?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "任何未接种过脊髓灰质炎疫苗的人都有可能感染该疾病，特别是如果他们前往一个仍然患有脊髓灰质炎的国家。 这些人可能会将病毒带回澳大利亚，并可能将其传播给未经免疫的人。 这就是为什么澳大利亚维持高免疫水平对抗脊髓灰质炎非常重要。" :
                                "Anyone who is not immunised against polio is at risk from contracting the disease,
                            particularly if they travel to a country where people still have polio. These people could
                            bring the virus back to Australia and potentially spread it to people who are not immunised.
                            This is why it is important that Australia maintains high immunisation levels against
                            polio." ?></p>
                    </div>

                    <!--What is the time recommended to get polio immunisation?-->
                    <div class="custom-block biased-anchor" id="what_is_the_time_recommended_to_get_polio_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时间建议获得脊髓灰质炎免疫接种？" : "What is the time recommended to get polio immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议2个月，4个月，6个月和4岁的儿童接种脊髓灰质炎疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>, Polio
                            immunisation is recommended for children aged two months, four months, six months and four
                            years." ?></p>
                    </div>

                    <!--How much do I need to pay for polio immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_polio_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为脊髓灰质炎免疫支付多少费用？" : "How much do I need to pay for polio immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get polio immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_polio_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种脊髓灰质炎疫苗？" : "Where can I get polio immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of polio immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_polio_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "脊髓灰质炎免疫的可能副作用是什么？" : "What are the possible side effects of polio immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "脊髓灰质炎疫苗常见的副作用包括：" : "Common side effects of polio vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "针头进入时疼痛，发红和硬度" : "pain, redness and hardness where the needle went in" ?></li>
                            <li><?php echo $l == "cn" ? "发烧，哭闹，儿童食欲下降。" : "fever, crying and decreased appetite in children." ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of polio immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_polio_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果脊髓灰质炎免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of polio immunisation happen?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与你的医生讨论脊髓灰质炎疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of polio vaccines, or if your child
                            has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- rotavirus -->
                <div class="tab-pane fade <?php if ($d == "rotavirus") echo "show active" ?>" id="list-rotavirus"
                     role="tabpanel" aria-labelledby="list-rotavirus-list">

                    <!--title: rotavirus-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "轮状病毒及免疫服务" : "Rotavirus & Immunisation Service" ?></h1>
                    </div>

                    <!--index: rotavirus-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_rotavirus">
                                        <?php echo $l == "cn" ? "什么是轮状病毒？" : "What is rotavirus?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_rotavirus">
                                        <?php echo $l == "cn" ? "轮状病毒有哪些症状？" : "What are the symptoms of rotavirus?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_rotavirus">
                                        <?php echo $l == "cn" ? "为什么接种轮状病毒疫苗？" : "Why get immunised against rotavirus?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_rotavirus">
                                        <?php echo $l == "cn" ? "谁有患轮状病毒的风险？" : "Who is at risk from rotavirus?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_rotavirus_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种轮状病毒及疫苗的建议时间？" : "What is the time recommended to get rotavirus immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_rotavirus_immunisation">
                                        <?php echo $l == "cn" ? "我需要为轮状病毒免疫支付多少费用？" : "" ?>How much do I need to pay for rotavirus immunisation?</a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_rotavirus_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种轮状病毒疫苗？" : "Where can I get rotavirus immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_rotavirus_immunisation">
                                        <?php echo $l == "cn" ? "轮状病毒免疫的可能副作用是什么？" : "What are the possible side effects of rotavirus immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_rotavirus_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果轮状病毒免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of rotavirus immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is rotavirus?-->
                    <div class="custom-block biased-anchor" id="what_is_rotavirus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是轮状病毒？" : "What is rotavirus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "轮状病毒是一种非常具有传染性的病毒，可导致严重的腹泻和呕吐。" :
                                "Rotavirus is a very contagious virus that can cause severe diarrhoea and vomiting." ?></p>
                        <p><?php echo $l == "cn" ? "轮状病毒病是严重的，因为它会导致脱水，休克和有时死亡。 在澳大利亚引进轮状病毒疫苗之前：" :
                                "Rotavirus disease is serious because it can lead to dehydration, shock and sometimes death.
                            Before the rotavirus vaccine was introduced in Australia:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "每年约有1万名五岁以下的儿童因轮状病毒而去医院" :
                                    "around 10,000 children under five years old went to hospital because of rotavirus every
                                year" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "每年有115,000名五岁以下儿童因轮状病毒而看医生" :
                                    "around 115,000 children under five years old saw their doctor because of rotavirus every
                                year" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "每年至少有一名儿童因轮状病毒死亡。" :
                                    "at least one child died because of rotavirus every year." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "自引进疫苗以来，由于轮状病毒而去医院的儿童数量下降了70％以上。" :
                                "Since the vaccine was introduced, the number of children who go to hospital because of
                            rotavirus has dropped by more than 70 per cent." ?></p>
                        <p><?php echo $l == "cn" ? "轮状病毒病是由几种轮状病毒病毒引起的。" :
                                "Rotavirus disease is caused by several strains of the rotavirus virus." ?></p>
                    </div>

                    <!--What are the symptoms of rotavirus?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_rotavirus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "轮状病毒有哪些症状？" : "What are the symptoms of rotavirus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "轮状病毒症状包括：" : "Rotavirus symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "呕吐" : "vomiting" ?></li>
                            <li><?php echo $l == "cn" ? "腹泻，通常突然开始" : "diarrhoea, which usually starts suddenly" ?></li>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "口干，不撒尿，哭泣时很少或没有眼泪。 这些都是脱水的迹象，或者你的身体没有足够的水" :
                                    "dry mouth, not weeing much, or few or no tears when crying. These are signs of
                                dehydration, or not having enough water in your body" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "睡意。" : "drowsiness." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状可以是轻微的，只持续几天，或者它们可以是严重的并危及生命。 如果您有严重的该病，您可能需要去医院。" :
                                "Symptoms can be mild and last only a couple of days, or they can be severe and
                            life-threatening. You may need to go to hospital if you have a severe case of the
                            disease." ?></p>
                        <p><?php echo $l == "cn" ? "需要医疗救治的严重病例征兆包括：" :
                                "Signs of a severe case of the disease that need medical attention include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "沉没的眼睛" : "sunken eyes" ?></li>
                            <li><?php echo $l == "cn" ? "婴儿头部凹陷的软点（囟门）" : "" ?></li>
                            <li><?php echo $l == "cn" ? "不喝酒，但仍有呕吐和腹泻" : "not drinking but still having vomiting and diarrhoea" ?></li>
                            <li><?php echo $l == "cn" ? "大量腹泻，每天八到十次水痘，一天两到三次大便，或腹泻超过10天" :
                                    "a lot of diarrhoea, eight to ten watery poos a day, two or three large poos a day, or
                                diarrhoea for more than 10 days" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "呕吐超过一天" : "vomiting for more than one day" ?></li>
                            <li><?php echo $l == "cn" ? "手脚冰冷" : "cold hands and feet" ?></li>
                            <li><?php echo $l == "cn" ? "深黄色的尿" : "dark yellow urine" ?></li>
                            <li><?php echo $l == "cn" ? "比正常反应慢" : "being slower to react than normal" ?></li>
                            <li><?php echo $l == "cn" ? "血便或粘液" : "blood or mucus in the poo" ?></li>
                            <li><?php echo $l == "cn" ? "严重的胃痛。" : "severe stomach pain." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在发现轮状病毒后一到三天左右开始。 大多数人在三到七天后恢复。" :
                                "Symptoms usually start about one to three days after catching rotavirus. Most people recover
                            after three to seven days." ?></p>
                    </div>

                    <!--Why get immunised against rotavirus?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_rotavirus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么接种轮状病毒疫苗？" : "Why get immunised against rotavirus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "轮状病毒是一种非常具有传染性的疾病，可导致严重的危及生命的腹泻。" :
                                "Rotavirus is a very contagious disease that can cause severe and life-threatening
                            diarrhoea." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受轮状病毒感染的安全有效方法。" : "Vaccination is a safe and effective way to protect you from rotavirus." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种轮状病毒疫苗，您还可以帮助保护其他人，特别是无法接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" :
                                "By getting vaccinated against rotavirus, you can also help protect other people, especially
                            people who are unable to be vaccinated. The more people who are vaccinated in your
                            community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from rotavirus?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_rotavirus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患轮状病毒的风险？" : "Who is at risk from rotavirus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "轮状病毒可以影响任何年龄段的人，但婴儿和幼儿最有可能患上严重的该病。 成年人也可以得到轮状病毒，特别是如果他们的免疫系统功能减弱。" :
                                "Rotavirus can affect people at any age, but babies and young children are most at risk of a
                            serious case of the disease. Adults can also get rotavirus, especially if they have a
                            weakened immune system." ?></p>
                    </div>

                    <!--What is the time recommended to get rotavirus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_rotavirus_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种轮状病毒及疫苗的建议时间？" : "What is the time recommended to get rotavirus immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议适两个月和四个月的儿童接种轮状病毒疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            Rotavirus immunisation is recommended for children aged two months and four months." ?></p>
                    </div>

                    <!--How much do I need to pay for rotavirus immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_rotavirus_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为轮状病毒免疫支付多少费用？" : "How much do I need to pay for rotavirus immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get rotavirus immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_rotavirus_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种轮状病毒疫苗？" : "Where can I get rotavirus immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of rotavirus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_rotavirus_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "轮状病毒免疫的可能副作用是什么？" : "What are the possible side effects of rotavirus immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "轮状病毒疫苗通常不会有任何副作用。" : "Rotavirus vaccines do not usually have any side effects." ?></p>
                        <p><?php echo $l == "cn" ? "轮状病毒疫苗非常罕见的副作用称为肠套叠。 这是当部分肠道像望远镜一样滑入肠道的另一部分时。 这可能会阻塞肠道。 如果发生肠套叠，通常在获得轮状病毒疫苗后一至七天内。 你的医生会告诉你哪些症状需要注意，以便治疗。 由于与免疫无关的其他原因，肠套叠也可能发生。" :
                                "A very rare side effect of rotavirus vaccine is called intussusception. This is when part of
                            the bowel slides into another part of the bowel like a telescope. This can block the bowel.
                            If intussusception happens, it is usually between one and seven days after getting a
                            rotavirus vaccine. Your doctor will tell you what symptoms to look out for so it can be
                            treated. Intussusception can also happen for other reasons that are not related to
                            immunisation." ?></p>
                    </div>

                    <!--What can I do if the side effects of rotavirus immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_rotavirus_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果轮状病毒免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of rotavirus immunisation" ?>
                            happen?</h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与你的医生谈论轮状病毒疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of rotavirus vaccines, or if your
                            child has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- rubella -->
                <div class="tab-pane fade <?php if ($d == "rubella") echo "show active" ?>" id="list-rubella"
                     role="tabpanel" aria-labelledby="list-rubella-list">

                    <!--title: rubella-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "风疹（德国麻疹）及免疫服务" : "Rubella (German Measles) & Immunisation Service" ?></h1>
                    </div>

                    <!--index: rubella-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_rubella">
                                        <?php echo $l == "cn" ? "什么是风疹？" : "What is rubella?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_rubella">
                                        <?php echo $l == "cn" ? "风疹有哪些症状？" : "What are the symptoms of rubella?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_rubella">
                                        <?php echo $l == "cn" ? "为什么接种风疹疫苗？" : "Why get immunised against rubella?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_rubella">
                                        <?php echo $l == "cn" ? "谁有患风疹的风险？" : "Who is at risk from rubella?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_rubella_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种风疹及疫苗的建议时间？" : "What is the time recommended to get rubella immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_rubella_immunisation">
                                        <?php echo $l == "cn" ? "我需要为风疹免疫支付多少费用？" : "How much do I need to pay for rubella immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_rubella_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种风疹疫苗？" : "Where can I get rubella immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_rubella_immunisation">
                                        <?php echo $l == "cn" ? "风疹免疫的可能副作用是什么？" : "What are the possible side effects of rubella immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_rubella_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果风疹免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of rubella immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is rubella?-->
                    <div class="custom-block biased-anchor" id="what_is_rubella">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是风疹？" : "What is rubella?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "风疹是一种传染性病毒性疾病，通常是轻微的，引起发烧，皮疹和淋巴腺肿胀。 但是，如果孕妇在妊娠前10周内感染，这种疾病会对宝宝造成终生难题。" :
                                "Rubella is a contagious viral illness that is generally mild, causing a fever, rash and
                            swollen lymph glands. However, if contracted by pregnant women during the first 10 weeks of
                            pregnancy, the disease can cause life-long problems for their babies." ?></p>
                        <p><?php echo $l == "cn" ? "如果孕妇在妊娠早期获得风疹，婴儿可以生下：" : "If a pregnant woman gets rubella early in her pregnancy, the baby can be born with:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "失聪" : "deafness" ?></li>
                            <li><?php echo $l == "cn" ? "失明" : "blindness" ?></li>
                            <li><?php echo $l == "cn" ? "心脏问题" : "heart problems" ?></li>
                            <li><?php echo $l == "cn" ? "脑损伤" : "brain damage" ?></li>
                            <li><?php echo $l == "cn" ? "成长问题" : "growth problems" ?></li>
                            <li><?php echo $l == "cn" ? "在他们的大脑，肝脏或肺部肿胀。" : "swelling in their brain, liver or lungs." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "母亲在怀孕前10周内得到风疹的每10个婴儿中就有9个会出现一个或多个这些问题。" :
                                "About nine in every 10 babies whose mothers get rubella in the first 10 weeks of pregnancy
                            will have one or more of these problems." ?></p>
                        <p><?php echo $l == "cn" ? "风疹有时被称为德国麻疹，但与麻疹不同。" :
                                "Rubella is sometimes called German measles, but it is not the same disease as measles." ?></p>
                        <p><?php echo $l == "cn" ? "风疹是由风疹病毒引起的。" : "Rubella is caused by the rubella virus." ?></p>
                    </div>

                    <!--What are the symptoms of rubella?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_rubella">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "风疹有哪些症状？" : "What are the symptoms of rubella?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "风疹症状包括：" : "Rubella symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "皮疹" : "rash" ?></li>
                            <li><?php echo $l == "cn" ? "肿胀的淋巴腺" : "swollen lymph glands" ?></li>
                            <li><?php echo $l == "cn" ? "关节疼痛" : "joint pain" ?></li>
                            <li><?php echo $l == "cn" ? "低烧" : "mild fever" ?></li>
                            <li><?php echo $l == "cn" ? "头痛" : "headache" ?></li>
                            <li><?php echo $l == "cn" ? "流鼻涕" : "runny nose" ?></li>
                            <li><?php echo $l == "cn" ? "红眼。" : "sore red eyes." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在接触风疹后14至21天开始，但大约有一半的人没有任何症状。 大多数有症状的人在大约三天内恢复。" :
                                "Symptoms usually start 14 to 21 days after catching rubella, but about half the people who
                            catch it don’t have any symptoms. Most people who have symptoms recover in about three
                            days." ?></p>
                    </div>

                    <!--Why get immunised against rubella?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_rubella">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么接种风疹疫苗？" : "Why get immunised against rubella?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "风疹（也称为德国麻疹）是引起发烧和皮疹的病毒感染。 对孕妇来说这是一种非常严重的疾病，因为它会对未出生的婴儿造成严重伤害。" :
                                "Rubella (also called German measles) is a viral infection that causes fever and a rash. It is
                            a very serious disease for pregnant women because it can cause severe harm to unborn
                            babies." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受风疹感染的安全有效方法。" :
                                "Vaccination is a safe and effective way to protect you from rubella." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种针对风疹的疫苗，您还可以帮助保护其他人，尤其是过于生病或太年轻而不能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" :
                                "By getting vaccinated against rubella, you can also help protect other people, especially
                            people who are too sick or too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from rubella?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_rubella">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患风疹的风险？" : "Who is at risk from rubella?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚和其他拥有广泛免疫计划的国家，风疹是罕见的。 病例和疫情仍然存在，因此继续接种儿童疫苗以防止感染传播给孕妇非常重要。 任何未接种过风疹疫苗的人都有可能患上风疹，特别是：" :
                                "Rubella is rare in Australia and other countries with widespread immunisation programs. Cases
                            and outbreaks still occur, so it is important to continue vaccinating children to prevent
                            the spread of infection to pregnant women. Anyone who hasn’t been vaccinated against rubella
                            is at risk of getting the disease, in particular:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "到风疹疫苗接种计划不广泛的地区（和来自其他地区的旅客）的旅客" :
                                    "travellers to (and visitors from) areas where rubella vaccination programs are not
                                widespread" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "育儿工作者" : "childcare workers" ?></li>
                            <li><?php echo $l == "cn" ? "在医疗机构，如医院，的工作人员" : "people who work in healthcare settings such as hospitals" ?></li>
                            <li><?php echo $l == "cn" ? "母亲不能抵抗风疹的未出生的婴儿。" : "unborn babies whose mothers are not immune to rubella." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "由于病毒如何影响未出生的婴儿，孕妇的疾病是最令人担忧的。" :
                                "Disease in pregnant women is the most concerning because of how the virus affects unborn
                            babies." ?></p>
                        <p><?php echo $l == "cn" ? "风疹可以影响任何年龄段的人。" : "Rubella can affect people at any age." ?></p>
                    </div>

                    <!--What is the time recommended to get rubella immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_rubella_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种风疹及疫苗的建议时间？" : "What is the time recommended to get rubella immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议12个月和18个月的儿童接种风疹疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            rubella immunisation is recommended for children aged 12 months and 18 months" ?></p>
                    </div>

                    <!--How much do I need to pay for rubella immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_rubella_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为风疹免疫支付多少费用？" : "How much do I need to pay for rubella immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get rubella immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_rubella_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种风疹疫苗？" : "Where can I get rubella immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of rubella immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_rubella_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "风疹免疫的可能副作用是什么？" : "What are the possible side effects of rubella immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "风疹疫苗的常见副作用包括：" : "Common side effects of rubella vaccines include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "发热" : "fever" ?></li>
                            <li><?php echo $l == "cn" ? "轻度皮疹" : "mild rash" ?></li>
                            <li><?php echo $l == "cn" ? "感觉不适" : "feeling unwell" ?></li>
                        </ul>
                    </div>

                    <!--What can I do if the side effects of rubella immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_rubella_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果风疹免疫的副作用发生，我该怎么办？" :
                                "What can I do if the side effects of rubella immunisation
                            happen?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与你的医生讨论风疹疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of rubella vaccines, or if your child
                            has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- tetanus -->
                <div class="tab-pane fade <?php if ($d == "tetanus") echo "show active" ?>" id="list-tetanus"
                     role="tabpanel" aria-labelledby="list-tetanus-list">

                    <!--title: tetanus-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "破伤风及免疫服务" : "Tetanus & Immunisation Service" ?></h1>
                    </div>

                    <!--index: tetanus-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_tetanus">
                                        <?php echo $l == "cn" ? "什么是破伤风？" : "What is tetanus?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_tetanus">
                                        <?php echo $l == "cn" ? "破伤风有哪些症状？" : "What are the symptoms of tetanus?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_tetanus">
                                        <?php echo $l == "cn" ? "为什么接种破伤风疫苗？" : "Why get immunised against tetanus?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_tetanus">
                                        <?php echo $l == "cn" ? "谁有患破伤风的风险？" : "Who is at risk from tetanus?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_tetanus_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种破伤风及疫苗的建议时间？" : "What is the time recommended to get tetanus immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_tetanus_immunisation">
                                        <?php echo $l == "cn" ? "我需要为破伤风免疫支付多少费用？" : "How much do I need to pay for tetanus immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_tetanus_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种破伤风疫苗？" : "Where can I get tetanus immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_tetanus_immunisation">
                                        <?php echo $l == "cn" ? "破伤风免疫的可能副作用是什么？" : "What are the possible side effects of tetanus immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_tetanus_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果破伤风免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of tetanus immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is tetanus?-->
                    <div class="custom-block biased-anchor" id="what_is_tetanus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是破伤风？" : "What is tetanus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "破伤风是一种危及生命的疾病，会导致严重的肌肉痉挛，特别是在颈部和下巴（称为锁骨）。 大约每10人中就有一人死于此病。 婴儿和老年人死于破伤风的风险最高。" :
                                "Tetanus is a life-threatening disease that causes severe muscle spasms, especially in the
                            neck and jaw (called lockjaw). Around one in 10 people who get the disease will die from it.
                            Babies and older people have the highest risk of dying from tetanus." ?></p>
                        <p><?php echo $l == "cn" ? "破伤风可导致：" : "Tetanus can lead to:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "窒息或无法呼吸" : "suffocation or being unable to breathe" ?></li>
                            <li><?php echo $l == "cn" ? "肺炎" : "pneumonia" ?></li>
                            <li><?php echo $l == "cn" ? "非常高的血压" : "very high blood pressure" ?></li>
                            <li><?php echo $l == "cn" ? "非常低的血压" : "very low blood pressure" ?></li>
                            <li><?php echo $l == "cn" ? "心脏病。" : "heart attack." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "破伤风是由一种称为破伤风梭菌（Clostridium tetani）的细菌引起的。 细菌在你的身体中产生毒素，导致疾病。" :
                                "Tetanus is caused by a type of bacteria called Clostridium tetani. The bacteria make a toxin
                            in your body that causes the disease." ?></p>
                    </div>

                    <!--What are the symptoms of tetanus?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_tetanus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "破伤风有哪些症状？" : "What are the symptoms of tetanus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "破伤风症状包括：" : "Tetanus symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "肌肉痉挛，特别是在脸和脖子" : "muscle spasms, especially in the face and neck" ?></li>
                            <li><?php echo $l == "cn" ? "痛苦的适合，可以持续几分钟" : "painful fits that can last for minutes" ?></li>
                            <li><?php echo $l == "cn" ? "无法打开你的嘴" : "not being able to open your mouth (lockjaw)" ?></li>
                            <li><?php echo $l == "cn" ? "吞咽问题" : "swallowing problems" ?></li>
                            <li><?php echo $l == "cn" ? "呼吸问题" : "breathing problems" ?></li>
                            <li><?php echo $l == "cn" ? "心脏问题" : "heart problems" ?></li>
                            <li><?php echo $l == "cn" ? "发热。" : "fever." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在发生破伤风后三至二十一天之间开始。" :
                                "Symptoms usually start between three and 21 days after catching tetanus." ?></p>
                    </div>

                    <!--Why get immunised against tetanus?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_tetanus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么要接种破伤风疫苗？" :
                                "Why get immunised against tetanus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "破伤风是一种严重的疾病，会导致严重的肌肉痉挛，特别是在颈部和下巴。" :
                                "Tetanus is a serious disease that causes severe muscle spasms, especially in the neck and jaw
                            – this is called lockjaw." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受破伤风的安全有效方法。" :
                                "Vaccination is a safe and effective way to protect you from tetanus." ?></p>
                    </div>

                    <!--Who is at risk from tetanus?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_tetanus">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患破伤风的风险？" : "Who is at risk from tetanus?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "破伤风可以影响任何年龄的人。 破伤风在澳大利亚是罕见的，因为大多数人都被免疫。 疾病高风险人群包括：" :
                                "Tetanus can affect people of any age. Tetanus is rare in Australia because most people are
                            immunised. People at high risk of disease include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "尚未免疫破伤风的人" : "people who have not been immunised against tetanus" ?></li>
                            <li><?php echo $l == "cn" ? "过去10年没有加强免疫的人。" : "people who have not had a booster immunisation in the past 10 years." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "大多数破伤风死亡发生在70岁以上的人群中。" : "Most deaths from tetanus occur in people aged over 70 years." ?></p>
                    </div>

                    <!--What is the time recommended to get tetanus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_tetanus_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种破伤风及疫苗的建议时间？" : "What is the time recommended to get tetanus immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，建议2个月，4个月，6个月，18个月，4年以及10岁至15岁（在学校）的儿童接种破伤风疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            tetanus immunisation is recommended for children aged two months, four months, six months,
                            18 months, four years, and between 10 and 15 years (at school)." ?></p>
                    </div>

                    <!--How much do I need to pay for tetanus immunisation?-->
                    <div class="custom-block biased-anchor" id="how_much_do_i_need_to_pay_for_tetanus_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为破伤风免疫支付多少费用？" : "How much do I need to pay for tetanus immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit." ?></p>
                    </div>

                    <!--Where can I get tetanus immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_tetanus_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种破伤风疫苗？" : "Where can I get tetanus immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of tetanus immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_tetanus_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "破伤风免疫的可能副作用是什么？" : "What are the possible side effects of tetanus immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "破伤风疫苗的常见副作用包括：" : "Common side effects of tetanus vaccines include:" ?></p>
                        <ul><li><?php echo $l == "cn" ? "针头进入时发红，肿胀或硬度。" : "redness, swelling or hardness where the needle went in." ?></li></ul>
                    </div>

                    <!--What can I do if the side effects of tetanus immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_tetanus_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果破伤风免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of tetanus immunisation
                            happen?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与你的医生谈谈破伤风疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" :
                                "Talk to your doctor about possible side effects of tetanus vaccines, or if your child
                            has possible side effects that concern you." ?>
                        </p>
                    </div>
                </div>

                <!-- whooping cough -->
                <div class="tab-pane fade <?php if ($d == "whooping_cough") echo "show active" ?>"
                     id="list-whooping_cough"
                     role="tabpanel" aria-labelledby="list-whooping_cough-list">

                    <!--title: whooping cough-->
                    <div class="custom-block biased-anchor">
                        <h1 class="left-alignment"><?php echo $l == "cn" ? "百日咳及免疫服务" : "Whooping Cough (pertussis) & Immunisation Service" ?></h1>
                    </div>

                    <!--index: whooping cough-->
                    <div class="custom-block biased-anchor">
                        <blockquote class="blockquote">
                            <ul class="question-list">
                                <li><?php echo $l == "cn" ? "在此页：" : "In this page:" ?></li>
                                <li><a href="preventable_diseases.php#what_is_whooping_cough">
                                        <?php echo $l == "cn" ? "什么是百日咳？" : "What is whooping cough?" ?></a></li>
                                <li><a href="preventable_diseases.php#what_are_the_symptoms_of_whooping_cough">
                                        <?php echo $l == "cn" ? "百日咳有哪些症状？" : "What are the symptoms of whooping cough?" ?></a></li>
                                <li><a href="preventable_diseases.php#why_get_immunised_against_whooping_cough">
                                        <?php echo $l == "cn" ? "为什么接种百日咳疫苗？" : "Why get immunised against whooping cough?" ?></a></li>
                                <li><a href="preventable_diseases.php#who_is_at_risk_from_whooping_cough">
                                        <?php echo $l == "cn" ? "谁有患百日咳的风险？" : "Who is at risk from whooping cough?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_is_the_time_recommended_to_get_whooping_cough_immunisation">
                                        <?php echo $l == "cn" ? "什么时候是接种百日咳及疫苗的建议时间？" : "What is the time recommended to get whooping cough immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#how_much_do_i_need_to_pay_for_whooping_cough_immunisation">
                                        <?php echo $l == "cn" ? "我需要为百日咳免疫支付多少费用？" : "How much do I need to pay for whooping cough immunisation?" ?></a></li>
                                <li><a href="preventable_diseases.php#where_can_i_get_whooping_cough_immunisation">
                                        <?php echo $l == "cn" ? "我在哪里可以接种百日咳疫苗？" : "Where can I get whooping cough immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_are_the_possible_side_effects_of_whooping_cough_immunisation">
                                        <?php echo $l == "cn" ? "百日咳免疫的可能副作用是什么？" : "What are the possible side effects of whooping cough immunisation?" ?></a></li>
                                <li>
                                    <a href="preventable_diseases.php#what_can_i_do_if_the_side_effects_of_whooping_cough_immunisation_happen">
                                        <?php echo $l == "cn" ? "如果百日咳免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of whooping cough immunisation happen?" ?></a></li>
                            </ul>
                        </blockquote>
                    </div>

                    <!--What is whooping cough?-->
                    <div class="custom-block biased-anchor" id="what_is_whooping_cough">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "什么是百日咳？" : "What is whooping cough?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "百日咳也叫百日咳。 它是肺部和呼吸道的感染。 它会导致一个人剧烈地咳嗽和失控。 这可能使人难以呼吸。" :
                                "Whooping cough is also called pertussis. It is an infection of the lungs and airways. It
                            causes a person to cough violently and uncontrollably. This can make it hard for the person
                            to breathe." ?></p>
                        <p><?php echo $l == "cn" ? "百日咳是一种严重的疾病，因为它会导致肺炎，脑损伤甚至死亡。" :
                                "Whooping cough is a serious disease because it can lead to pneumonia, brain damage and
                            sometimes death." ?></p>
                        <p><?php echo $l == "cn" ? "百日咳是由一种称为<i>百日咳博德特氏菌</i>的细菌引起的。" :
                                "Whooping cough is caused by a type of bacteria called <i>Bordetella pertussis</i>." ?></p>
                    </div>

                    <!--What are the symptoms of whooping cough?-->
                    <div class="custom-block biased-anchor" id="what_are_the_symptoms_of_whooping_cough">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "百日咳有哪些症状？" : "What are the symptoms of whooping cough?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "百日咳的症状包括：" : "Whooping cough symptoms include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "阻塞或流鼻涕" : "blocked or runny nose" ?></li>
                            <li><?php echo $l == "cn" ? "打喷嚏" : "sneezing" ?></li>
                            <li><?php echo $l == "cn" ? "温度升高" : "raised temperature" ?></li>
                            <li><?php echo $l == "cn" ? "不受控制的咳嗽发作听起来像是“呐喊”，或随之而来的是“百日咳”的噪音" :
                                    "uncontrolled bouts of coughing that sounds like a \"whoop\" or are followed by a
                                \"whooping\" noise" ?>
                            </li>
                            <li><?php echo $l == "cn" ? "咳嗽后呕吐。" : "vomiting after coughing." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "症状通常在接受百日咳后7-10天开始，伴有感冒，堵塞或流鼻涕，咳嗽和轻微发热。" :
                                "Symptoms usually start about seven to 10 days after catching whooping cough, with a cold,
                            blocked or runny nose, coughing and a mild fever." ?></p>
                        <p><?php echo $l == "cn" ? "咳嗽恶化并且经常在夜间发生。 它可能会阻止你睡觉。 咳嗽发作可能非常暴力，有些人在咳嗽后会呕吐或晕倒。 百日咳的人会咳嗽得很厉害，会打破他们的肋骨。" :
                                "The cough gets worse and often happens at night. It might stop you from sleeping. Coughing
                            attacks can be very violent, and some people vomit or faint after coughing. Some people with
                            whooping cough can cough so hard they break their ribs." ?></p>
                        <p><?php echo $l == "cn" ? "温和的咳嗽可持续数月。" : "A milder cough can last for several months." ?></p>
                        <p><?php echo $l == "cn" ? "婴儿可能没有严重的咳嗽，也可能不会咳嗽。 婴儿的症状可能包括呼吸暂停，变蓝或喂养困难。" :
                                "Babies might not have a bad cough, or might not cough at all. Symptoms in babies can include
                            pauses in breathing, turning blue or having trouble feeding." ?></p>
                        <p><?php echo $l == "cn" ? "有些人在咳嗽时会发出明显的“百日咳”声，但这并不是每个人都会发生的。 青少年和成年人往往没有“呐喊”。" : "Some people develop a distinctive \"whooping\" sound when they cough, but this does not happen
                            to everyone. Adolescents and adults often do not have a \"whoop\"." ?></p>
                    </div>

                    <!--Why get immunised against whooping cough?-->
                    <div class="custom-block biased-anchor" id="why_get_immunised_against_whooping_cough">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "为什么接种百日咳疫苗？" : "Why get immunised against whooping cough?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "百日咳（又称百日咳）是一种严重的呼吸道疾病。 它会导致肺炎，脑损伤甚至死亡。 这对婴儿尤其严重，但可以影响任何年龄段的人。" : "Whooping cough (also called pertussis) is a serious disease of the airways. It can lead to
                            pneumonia, brain damage and sometimes death. It is especially serious for babies, but can
                            affect people at any age." ?></p>
                        <p><?php echo $l == "cn" ? "接种疫苗是保护您免受百日咳引起的严重疾病的安全有效方法。" : "Vaccination is a safe and effective way to protect you from serious disease caused by
                            whooping cough." ?></p>
                        <p><?php echo $l == "cn" ? "通过接种针对百日咳的疫苗，还可以帮助保护其他人，特别是年龄过小而不能接种疫苗的人。 在您的社区接种疫苗的人越多，疾病传播的可能性就越小。" : "By getting vaccinated against whooping cough, you can also help protect other people,
                            especially people who are too young to be vaccinated. The more people who are vaccinated in
                            your community, the less likely the disease will spread." ?></p>
                    </div>

                    <!--Who is at risk from whooping cough?-->
                    <div class="custom-block biased-anchor" id="who_is_at_risk_from_whooping_cough">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "谁有患百日咳的风险？" : "Who is at risk from whooping cough?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "百日咳会影响任何年龄段的人，但那些有高度致病风险的人包括：" : "Whooping cough can affect people at any age, but those at high risk of catching the disease
                            include:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "未满6个月的婴儿尚未年龄足以完全接种疫苗" : "babies less than six months old who are not yet old enough to be fully vaccinated" ?></li>
                            <li><?php echo $l == "cn" ? "与百日咳患者同住的人" : "people living in the same household as someone with whooping cough" ?></li>
                            <li><?php echo $l == "cn" ? "在过去的10年里没有接受过百日咳的人。" : "people who have not had a whooping cough booster in the last 10 years." ?></li>
                        </ul>
                        <p><?php echo $l == "cn" ? "婴儿患严重疾病的风险最高。 他们更可能需要去医院或因百日咳而死亡。 每200名六个月以下婴儿中，有百分之一的百日咳会因肺炎或脑损伤而死亡。" :
                                "Babies have the highest risk of serious disease. They are more likely to need to go to
                            hospital or die from whooping cough. About one in every 200 babies under six months old who
                            get whooping cough dies from pneumonia or brain damage." ?></p>
                        <p><?php echo $l == "cn" ? "年龄较大的儿童和成人可能会患上较轻微的该病。" : "Older children and adults may get a milder case of the disease." ?></p>
                    </div>

                    <!--What is the time recommended to get whooping cough immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_is_the_time_recommended_to_get_whooping_cough_immunisation">
                        <h3 class="left-alignment">
                            <?php echo $l == "cn" ? "什么时候是接种百日咳及疫苗的建议时间？" : "What is the time recommended to get whooping cough immunisation?" ?>
                        </h3>
                        <br><p><?php echo $l == "cn" ? "根据<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）时间表</a>，推荐2个月，4个月，6个月，18个月，4年以及10至15岁之间（在学校）的儿童接种百日咳疫苗。" :
                                "Due to the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP) Schedule</a>,
                            whooping cough immunisation is recommended for children aged two months, four months, six
                            months, 18 months, four years, and between 10 and 15 years (at school)." ?></p>
                    </div>

                    <!--How much do I need to pay for whooping cough immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="how_much_do_i_need_to_pay_for_whooping_cough_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我需要为百日咳免疫支付多少费用？" : "How much do I need to pay for whooping cough immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在<a href=\"NIP_schedule.php?l=cn\">国家免疫计划（NIP）</a>中列出的所有疫苗都是免费的。但是，健康服务提供者（例如您的医生）可能会为此次访问收取咨询费。" :
                                "All vaccines listed in the <a href=\"NIP_schedule.php\">National Immunisation Program (NIP)
                                Schedule</a> are free. However, the health provider (such as your doctor) may charge a
                            consultation fee for the visit.</p>" ?>
                    </div>

                    <!--Where can I get whooping cough immunisation?-->
                    <div class="custom-block biased-anchor" id="where_can_i_get_whooping_cough_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "我在哪里可以接种百日咳疫苗？" : "Where can I get whooping cough immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "在澳大利亚，人们可以通过以下途径接种疫苗：" :
                                "In Australia, people can get vaccines through:" ?></p>
                        <ul>
                            <li><?php echo $l == "cn" ? "全科医生" : "general practices" ?></li>
                            <li><?php echo $l == "cn" ? "地方理事会或社区卫生诊所" : "local council or community health clinics" ?></li>
                            <li><?php echo $l == "cn" ? "原著医疗服务" : "Aboriginal Medical Services" ?></li>
                            <li><?php echo $l == "cn" ? "学校为基础的免疫程序" : "school based immunisation programs" ?></li>
                            <li><?php echo $l == "cn" ? "工作场所" : "workplaces" ?></li>
                        </ul>
                        <p>
                            <a href="https://www.healthdirect.gov.au/australian-health-services">
                                <?php echo $l == "cn" ? "通过国家卫生服务目录（NHSD）查找卫生服务提供者" : "Find a health service provider by National Health Services Directory (NHSD)" ?>
                            </a>
                        </p>
                    </div>

                    <!--What are the possible side effects of whooping cough immunisation?-->
                    <div class="custom-block biased-anchor"
                         id="what_are_the_possible_side_effects_of_whooping_cough_immunisation">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "百日咳免疫的可能副作用是什么？" : "What are the possible side effects of whooping cough
                            immunisation?" ?></h3>
                        <br><p><?php echo $l == "cn" ? "所有药物和疫苗都可能有副作用。有时他们很严重，大多数时候不是。" : "All medicines and vaccines can have side effects. Sometimes they are serious, most of the
                            time they’re not." ?></p>
                        <p><?php echo $l == "cn" ? "对于大多数人来说，疫苗产生严重副作用的机会要远远低于发生这种疾病时造成严重伤害的机会。" : "For most people, the chance of having a serious side effect from a vaccine is much lower
                            than the chance of serious harm if you caught the disease." ?></p>
                        <p><?php echo $l == "cn" ? "百日咳疫苗的常见副作用包括：" : "Common side effects of whooping cough vaccines include:" ?></p>
                        <ul><li><?php echo $l == "cn" ? "针头进入时疼痛，发红，肿胀或硬度。" : "pain, redness, swelling or hardness where the needle went in." ?></li></ul>
                    </div>

                    <!--What can I do if the side effects of whooping cough immunisation happen?-->
                    <div class="custom-block biased-anchor"
                         id="what_can_i_do_if_the_side_effects_of_whooping_cough_immunisation_happen">
                        <h3 class="left-alignment"><?php echo $l == "cn" ? "如果百日咳免疫的副作用发生，我该怎么办？" : "What can I do if the side effects of whooping cough immunisation
                            happen?" ?></h3>
                        <br><p>
                            <?php echo $l == "cn" ? "与您的医生讨论百日咳疫苗可能产生的副作用，或者如果您的孩子出现是您担心的副作用。" : "Talk to your doctor about possible side effects of whooping cough vaccines, or if
                            your child has possible side effects that concern you." ?>
                        </p>
                    </div>
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