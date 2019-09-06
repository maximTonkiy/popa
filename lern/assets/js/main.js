$(function () {
    $("#trailer").change(function () {
       if ($(this).is(':checked'))
           $('.trailer').addClass('active');
       else
           $('.trailer').removeClass('active');
    });
});