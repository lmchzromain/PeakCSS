$(document).on('ready', function(){
    function color(){
        $idpicker = $(this).attr('id');
        console.log($idpicker);
        $color = $idpicker.text;
        console.log($color);
//        $('.example').attr('name').css('color:'+
    };
    color();
    $('.picker').on( "click", color);
});