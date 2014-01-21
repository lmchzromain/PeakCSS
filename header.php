<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PeakCSS - Create and Custom Your own CSS - Many start framework CSS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link href="css/test_toggle/style.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="css/colpick.css"/>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type='text/javascript' src="js/colpick.js"></script>
        <script type='text/javascript' src="js/script.js"></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                $shadowColor='#000';
                
                function textShadow(param1){
                    $id = param1;
                    $shadow = new Array();
                    $shadow[0] = $('[rel='+$id+'].text-shadow.horizontal').val();
                    $shadow[1] = $('[rel='+$id+'].text-shadow.vertical').val();
                    $shadow[2] = $('[rel='+$id+'].text-shadow.blur').val();
                    for($i=0; $i>3; $i++){
                        if($shadow[$i] == null){
                            $shadow[$i] = 0;
                        }
                    };
                    $('[name='+$id+']').css({textShadow: $shadow[0] + "px " + $shadow[1] + "px " + $shadow[2] + "px " + ($shadowColor)});
                };
                function boxShadow(param1){
                    console.log('box-shadow');
                    $id = param1;
                    $shadow = new Array();
                    $shadow[0] = $('[rel='+$id+'].box-shadow.horizontal').val();
                    $shadow[1] = $('[rel='+$id+'].box-shadow.vertical').val();
                    $shadow[2] = $('[rel='+$id+'].box-shadow.blur').val();
                    $shadow[3] = $('[rel='+$id+'].box-shadow.spread').val();
                    $shadow[4] = $('[rel='+$id+'].box-shadow.inset').is(':checked');
                    $shadow[4]==true ? $shadow[4]= 'inset' : $shadow[4]='';
                    console.log($shadow[4]);
                    console.log($shadow[0] + $shadow[1] + $shadow[2] + $shadow[3] + $shadow[4]);
                    $('[name='+$id+']').css({boxShadow: $shadow[0] + "px " + $shadow[1] + "px " + $shadow[2] + "px " + $shadow[3] + "px " + ($shadowColor) + $shadow[4]});
                };
                
                $('.picker').click(function(){
                    $id = $(this).attr("rel");
                    $(this).hasClass('shadow') ? $pass = 1 : $pass = 0;
                    $(this).hasClass('text.shadow') ? $passpass = 1 : $passpass = 0;
                    console.log($passpass);
                });
                $('.picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,fromSetColor) 
                        if(!fromSetColor && $pass==1){ 
                            $('[rel='+$id+'].picker.shadow').val(hex).css('border-color','#'+hex);
                            $shadowColor = '#'+hex;
                            $passpass==1 ? textShadow($id) : boxShadow($id);
                            console.log('shadow');
                        }else{
                            $('[rel='+$id+'].picker.color').val(hex).css('border-color','#'+hex);
                            $('[name='+$id+']').css('color','#'+hex);
                        }                        
                    }
                });
                $('.size').click(function(){
                    $id = $(this).attr("rel");
                    $type = $('[name='+$id+']').attr("type");
                    $val = $(this).val();
                    $type=='text' ? $('[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'}) : $('[name='+$id+']').css('font-size',$val+'px');
                });
                $('.font').click(function(){
                    $id = $(this).attr("rel");
                    $val = $(this).val();
                    $('[name='+$id+']').css('font-family',$val);
                });
                $('.text-shadow').keyup(function(){
                    $id = $(this).attr("rel");
                    textShadow($id);
                });
                $('.box-shadow').keyup(function(){
                    $id = $(this).attr("rel");
                    boxShadow($id);
                });
                $('.inset').click(function(){
                    $id = $(this).attr("rel");
                    boxShadow($id);
                });
                    console.log("size cliqué :"+$id);
                    $val = $(this).val();
                    $('input[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'});
                });
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