$( function() {

    $( "#datepicker" ).datepicker(
        {
            dateFormat: 'yy-mm-dd',
            maxDate:0,
            changeMonth:true,
            changeYear:true,
            minDate: '-18Y + 1d',
            yearRange: "-18:+0"
        });
} );


function todayInPreviousYear(n) {
    var dt = new Date();
    dt.setFullYear( dt.getFullYear() - n );
}