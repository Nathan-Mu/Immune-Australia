$(function() {
    var birthday = $("#birthday").text();
    $.ajax({
        type: 'POST',
        url: 'assets/functions/next_vaccine_ajax.php',
        data: { birthday: birthday },
        dataType: 'json',
        success: function(response) {
            // $("#create-event").removeAttr('disabled');
            // alert('Event created with ID : ' + response.event_id);
            var json = eval(response.resultList);
            var results = "";
            for (var i in json) {
                $("#next_vaccine_table tbody").append('<tr><td>' + json[i].Age + '</td><td>' + json[i].Disease + '</td><td>' + json[i].Mode_Of_Delivery + '</td><td>' + json[i].Vaccine +'</td><td>' + json[i].Comments +'</td></tr>');
            }
            $("#title").removeClass("hidden");
            $("#subscribe").removeClass("hidden");
            $("#next_vaccine_table").removeClass("hidden");
        },
        error: function(response) {
        }
    });
})