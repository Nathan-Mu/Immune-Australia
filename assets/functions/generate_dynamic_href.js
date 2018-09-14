$("#check_next_vaccine").on('click', function(e) {
    $("#check_next_vaccine").attr("disabled", "disabled");
    var birthday = $("#datepicker").val();
    if (birthday.trim() === "") {
        $("#warning").text("The birthday cannot be empty");
        $("#warning").removeClass("hidden");
        $("#check_next_vaccine").attr("disabled", false);
    } else {
        //window.location.href="future_immunisation_schedule.php?birthday=" + birthday;
        $("#warning").text();
        $("#warning").addClass("hidden");
        $("#check_next_vaccine").attr("disabled", false);
        window.open("future_immunisation_schedule.php?birthday=" + birthday, "_blank", "width=1000,height=600",false);
    }
})