<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PeakCSS - Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link type="text/css" rel="stylesheet" href="css/colpick.css"/>
        <link type="text/css" rel="stylesheet" href="css/jquery.textshadow.css"/>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type='text/javascript' src="js/colpick.js"></script>
        <script type='text/javascript' src="js/script.js"></script>
        <script type='text/javascript' src="js/modernizr.custom.11247.js"></script>
        <script type='text/javascript' src="js/jquery.textshadow.js"></script>
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
                        $('[name='+$idpicker+']').css('color','#'+hex);
                        
                    }
                });
                $('.size').click(function(){
                    $id = $(this).attr("rel");
                    console.log("size cliqué :"+$id);
                    $val = $(this).val();
                    $('[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'});
                });
                
                $('.text-shadow').keyup(function(){
                    console.log("text-shadow");
                    $id = $(this).attr("rel");
                    console.log("shadow cliqué :"+$id);
//                    $val = $(this).val();
                    $shadow = new Array();
                    $shadow[0] = $('.text-shadow.horizontal').val();
                    $shadow[1] = $('.text-shadow.vertical').val();
                    $shadow[2] = $('.text-shadow.blur').val();
                    $shadow[3] = $('.text-shadow.distance').val();
                    for($i=0; $i>4){
                        if($shadow($i)){
                    console.log($shadow[0], $shadow[1], $shadow[2], $shadow[3]);
                    $('[name='+$id+']').textshadow('#000000 0px 0px 0px 0px');
                    $('[name='+$id+']').textshadowremove();
                    $('[name='+$id+']').textshadow('#000000'+$shadow[0]+'px'+$shadow[1]+'px'+$shadow[2]+'px'+$shadow[3]+'px');
                    
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