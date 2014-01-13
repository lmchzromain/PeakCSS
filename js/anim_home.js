$(document).on('ready', function(){
    $('#bt_howuse').click(function(){
        $('html, body').animate({
            scrollTop:$('#HowUse').offset().top-40
        }, 450, 'swing');
        return false;
    });
});