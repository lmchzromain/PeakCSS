<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link type="text/css" rel="stylesheet" href="css/colpick.css"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PeakCSS - Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type='text/javascript' src="js/colpick.js"></script>
        <script type='text/javascript' src="js/script.js"></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                $('.picker').click(function(){
                    $id = $(this).attr("rel");
                    console.log("picker cliqué :"+$id);
                });
                $('.picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,fromSetColor) {
                        if(!fromSetColor) $('[rel='+$id+'].picker').val(hex).css('border-color','#'+hex);
                        //console.log(hex);
                        $idpicker = $('[rel='+$id+'].picker').attr('rel');
                        //console.log($idpicker);
                        $('input[name='+$idpicker+']').css('color','#'+hex);
                        
                    }
                });
                $('.size').click(function(){
                    $id = $(this).attr("rel");
                    console.log("size cliqué :"+$id);
                    $val = $(this).val();
                    $('input[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'});
                });
                
                $('.text-shadow').focus(function(){
                    $id = $(this).attr("rel");
                    console.log("shadow cliqué :"+$id);
//                    $val = $(this).val();
                    $tsh = $('.text-shadow.horizontal').val();
                    $tsv = $('.text-shadow.vertical').val();
                    $tsb = $('.text-shadow.blur').val();
                    $tsd = $('.text-shadow.distance').val();
//                    var shadow = {$('.text-shadow.horizontal').val(), $('.text-shadow.vertical').val(), $('.text-shadow.blur').val(), $('.text-shadow.distance').val()};
//                    var styles = {backgroundColor : "#ddd",fontWeight: ""};
                    console.log($tsh, $tsv, $tsb, $tsd);
                    //if($(this).hasClass("horizontal")){
                        //$('input[name='+$id+']').css({'text-shadow':$val+'px', 'height':$val+'px'});
                });
//                .keyup(function(){
//	               $(this).colpickSetColor(this.value);
//                });
            });
        </script>
    </head>
    <body>
        <header>
            <div class="content">
                <h1>
                    <a href="index.php"><img src="./img/logo.png" alt="logo"/>Peak<span>CSS</span></a>
                </h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li> 
                        <li><a href="customize.php">Customize</a></li>
                        <li><a href="">Explore</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>