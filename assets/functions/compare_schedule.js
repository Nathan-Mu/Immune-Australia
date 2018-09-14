$("#button").click(function() {
    $("#button").attr("disabled", "disabled");
    var date = $("#datepicker").val();
    var iso = $("#compare_options").val();
     if (date == "") {
         $("#warning").text("Please choose your child's birth date.");
         $("#warning").removeClass("hidden");
         $("#button").attr("disabled", false);
     } else {
         $("#warning").text("");
         $("#warning").addClass("hidden");
         $("#button").attr("disabled", false);
         window.open("vaccine_comparison.php?date=" + date + "&iso=" + iso , "_blank", "width=600,height=600",false);
     }
});