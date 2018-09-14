<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your child's immunisation schedule</title>
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/main/main.css">
    <link rel="stylesheet" href="assets/functions/pop_up_window.css">
</head>
<body>
<div class="new-window">
    <div>
        <div  class="container d-flex justify-content-center">
            <label class="hidden mbr-section-title display-4" id="title">
                <?php echo $l == "cn" ? "您孩子的免疫时间表" : "Your child's immunisation schedule" ?>
            </label>
        </div>
        <div  class="container d-flex justify-content-center padding-all">
            <button type="button" class="btn btn-outline-primary btn-sm hidden" id="subscribe" data-toggle="modal"
                    data-target="#exampleModalCenter">
                <?php echo $l == "cn" ? "将活动订阅到您的谷歌日历" : "Subscribe the events to your Google Calendar" ?>
            </button>
        </div>
        <table id="next_vaccine_table"
               class="hidden table-bordered table-responsive table table-striped table-responsive">
            <thead>
            <tr>
                <td style="width: 15%"><?php echo $l == "cn" ? "日期" : "Date" ?></td>
                <td style="width: 35%"><?php echo $l == "cn" ? "疾病免疫的疾病" : "Disease immunised against" ?></td>
                <td style="width: 8%"><?php echo $l == "cn" ? "方式" : "Approach" ?></td>
                <td style="width: 8%"><?php echo $l == "cn" ? "疫苗" : "Vaccine" ?></td>
                <td><?php echo $l == "cn" ? "备注" : "Comments" ?></td>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!--modal: ask for child's name-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--title-->
                    <h5 class="modal-title" id="exampleModalLongTitle">Immune</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--form-->
                    <div class="container">
                        <label><?php echo $l == "cn" ? "您孩子的名字（或昵称）：" : "Your child's name (or nickname):" ?></label>
                        <input class="input-group" id="fis-child-name">
                        <p class="hidden error-msg" id="fis-error-msg"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--buttons-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <?php echo $l == "cn" ? "取消" : "Cancel" ?>
                    </button>
                    <button type="button" class="btn btn-primary" id="fis-confirm">
                        <?php echo $l == "cn" ? "确认" : "Confirm" ?>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- parameters -->
    <div>
        <p class="hidden" id="birthday"><?php echo $_GET['birthday'] ?></p>
        <?php
        session_start();
        require_once('./google-calendar/google-calendar-api.php');
        $host = $_SERVER['HTTP_HOST'];
        $_SESSION['host'] = $host;
        if (preg_match("/([a-zA-Z.])+ml/", $host)) {
            require_once "./google-calendar/settings_ml.php";
        } else if (preg_match("/([a-zA-Z.])+ga/", $host)) {
            require_once "./google-calendar/setting_ga.php";
        } else {
            require_once "./google-calendar/setting_local.php";
        }
        $login_url = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/calendar') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=offline&approval_prompt=auto';
        ?>
        <p class="hidden" id="url"><?php echo $login_url ?></p>
    </div>
</div>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/functions/next_vaccine_pop_up.js"></script>
<script src="assets/main/main.js"></script>
</body>
</html>