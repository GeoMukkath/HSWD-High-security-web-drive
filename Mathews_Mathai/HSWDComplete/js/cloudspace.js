$(document).ready(function () {

    $('.right').click(function() {
        $('.left').toggle();
        $('.right').hide();
        $('#members').animate({'right':'-19%'},500);
        $(this).css('z-index','4');
 });

 $('.left').click(function() {
    $('.right').toggle();
    $('.left').hide();
    $('#members').animate({'right':'0%'},500);
    $(this).css('z-index','4');
});



});