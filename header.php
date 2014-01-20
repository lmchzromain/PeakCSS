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
                $shadowColor='#000';
                function textShadow(param1){
                    console.log(param1);
//                    $id = param1.attr("rel");
                    $id = param1;
                    console.log("shadow cliqué :"+$id);
                    $shadow = new Array();
                    $shadow[0] = $('[rel='+$id+'].text-shadow.horizontal').val();
                    $shadow[1] = $('[rel='+$id+'].text-shadow.vertical').val();
                    $shadow[2] = $('[rel='+$id+'].text-shadow.blur').val();
                    for($i=0; $i>3; $i++){
                        if($shadow[$i] == null){
                            $shadow[$i] = 0;
                            console.log($shadow[$i]);
                        }
                    };
                    console.log($shadow[0], $shadow[1], $shadow[2]);
                    $('[name='+$id+']').css({textShadow: $shadow[0] + "px " + $shadow[1] + "px " + $shadow[2] + "px " + ($shadowColor)});
                    $ombre = $('[name='+$id+']').css('textShadow');
                    console.log($ombre);
                };
                $('.picker').click(function(){
                    console.log($(this));
                    $id = $(this).attr("rel");
                    console.log("picker cliqué :"+$id);
                    $(this).hasClass('shadow') ? $pass = 1 : $pass = 0;
                    console.log($pass);
                });
                $('.picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,fromSetColor) {
                        if(!fromSetColor && $pass==1){ 
                            $('[rel='+$id+'].picker.shadow').val(hex).css('border-color','#'+hex);
                            console.log("shadow");
                            $shadowColor = '#'+hex;
                            textShadow($id);
                        }else{
                            console.log("pas shadow");
                            $('[rel='+$id+'].picker.color').val(hex).css('border-color','#'+hex);
                            $('[name='+$id+']').css('color','#'+hex);
                        }                        
                    }
                });
                $('.size').click(function(){
                    $id = $(this).attr("rel");
                    console.log("size cliqué :"+$id);
                    $val = $(this).val();
                    $('[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'});
                });
                
                $('.text-shadow').keyup(function(){
//                    $id = $(this).attr("rel");
//                    console.log("shadow cliqué :"+$id);
//                    $shadow = new Array();
//                    $shadow[0] = $('[rel='+$id+'].text-shadow.horizontal').val();
//                    $shadow[1] = $('[rel='+$id+'].text-shadow.vertical').val();
//                    $shadow[2] = $('[rel='+$id+'].text-shadow.blur').val();
//                    for($i=0; $i>3; $i++){
//                        if($shadow[$i] == null){
//                            $shadow[$i] = 0;
//                            console.log($shadow[$i]);
//                        }
//                    };
//                    console.log($shadow[0], $shadow[1], $shadow[2]);
//                    $('[name='+$id+']').css({textShadow: $shadow[0] + "px " + $shadow[1] + "px " + $shadow[2] + "px " + ($shadowColor)});
//                    $ombre = $('[name='+$id+']').css('textShadow');
//                    console.log($ombre);
                    $id = $(this).attr("rel");
                    textShadow($id);
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