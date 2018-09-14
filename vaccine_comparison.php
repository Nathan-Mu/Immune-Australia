<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compare Schedules</title>
    <link rel="shortcut icon" href="assets/images/logo-122x73.png" type="image/x-icon">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/functions/pop_up_window.css">
</head>
<body>
<div class="new-window">
    <?php
    if (isset($_GET["date"])) {
        echo "<div class=\"container text-center\">
        <h2 class=\"new-window-heading display-5\">";
        echo $l == "cn" ? "可能已经注射的疫苗" : "Vaccines might have already taken";
        echo "</h2></div>";
        require "assets/functions/compareTableGenerator.php";
        $connection = new compareTableGenerator();
        $html = $connection->getSimilarity($_GET['date'], $_GET['iso']);
        if (strlen($html) == 0) {
            echo "<div class=\"alert alert-danger text-center\" role=\"alert\">";
            echo $l == "cn" ? "抱歉，没有与澳大利亚免疫时间表匹配的疫苗" : "Sorry, there are no vaccines matching the Australian immunisation schedule";
            echo "</div>";
        } else {
            echo "<table class='table table-striped'><thead><tr><th>Age</th><th>Vaccine description</th><th>Date</th></tr></thead><tbody>";
            echo $html;
            echo "</tbody></table>";
        }
    }
    ?>

    <?php

    if (isset($_GET["date"])) {
        echo "<div class=\"container text-center\"><h2 class=\"new-window-heading display-5\">";
        echo $l == "cn" ? "本应接种的疫苗" : "Vaccines should have taken";
        echo "</h2></div>";
        $html = $connection->getDifferences($_GET['date'], $_GET['iso']);
        if (strlen($html) == 0) {
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">";
            echo $l == "cn" ? "恭喜，您孩子的疫苗接种记录已经符合澳大利亚免疫计划" : "Congratulations, your child's vaccination records has already matched the Australian immunisation schedule";
            echo "</div>";

        } else {
            echo "<table class='table table-striped'><thead><tr><th>Age</th><th>Vaccine description</th><th>Date</th></tr></thead><tbody>";
            echo $html;
            echo "</tbody></table>";
        }
    }
    ?>
</div>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
</body>
</html>