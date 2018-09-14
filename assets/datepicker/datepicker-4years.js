$( function() {

    $( "#datepicker" ).datepicker(
        {
            dateFormat: 'yy-mm-dd',
            maxDate:0,
            changeMonth:true,
            changeYear:true,
            minDate: '-4Y',
            yearRange: "-18:+0"
        });
} );


function todayInPreviousYear(n) {
    var dt = new Date();
    dt.setFullYear( dt.getFullYear() - n );
}