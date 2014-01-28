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
                    $x = $('[rel='+$id+'].text-shadow.horizontal').val();
                    $y = $('[rel='+$id+'].text-shadow.vertical').val();
                    $blur = $('[rel='+$id+'].text-shadow.blur').val();
                    $('[name='+$id+']').css({textShadow: $x + "px " + $y + "px " + $blur + "px " + ($shadowColor)});
                };
                function boxShadow(param1){
                    $id = param1;
                    console.log($id);
                    $shadow = new Array();
                    $x = $('[rel='+$id+'].box-shadow.horizontal').val();
                    $y = $('[rel='+$id+'].box-shadow.vertical').val();
                    $blur = $('[rel='+$id+'].box-shadow.blur').val();
                    $spread = $('[rel='+$id+'].box-shadow.spread').val();
//                    $inset = $('[rel='+$id+'].box-shadow.inset').is(':checked');
//                    $inset==true ? $inset= 'inset' : $inset='';
                    $inset='';
                    $('[rel='+$id+'].box-shadow.inset').is(':checked') ? $inset= 'inset' : $inset='';
                    console.log('inset = '+$inset+' x = '+$x+' y = '+$y+' blur = '+$blur+' spread = '+$spread+' '+$shadowColor);
                    $style= $inset+' '+$x+'px '+$y+'px '+$blur+'px '+$spread+'px '+$shadowColor;
                    console.log($style);
                    $('[name='+$id+']').css("box-shadow", $style);
//                    $('name='+$id+']').css("box-shadow",$style);
//                    $('[name='+$id+']').css({box-shadow: $x+"px"+$y+"px "+$blur+"px "+$spread+"px "+$shadowColor+' '+$inset});
                };
                
                $('.picker').click(function(){
                    $id = $(this).attr("rel");
                    $(this).hasClass('shadow') ? $pass = 1 : $pass = 0;
                    $(this).hasClass('text-shadow') ? $passpass = 1 : $passpass = 0;
                });
                $('.picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,fromSetColor){
                        if(!fromSetColor && $pass==1){
                            $('[rel='+$id+'].picker.shadow').val(hex).css('border-color','#'+hex);
                            $shadowColor = '#'+hex;
                            $passpass==1 ? textShadow($id) : boxShadow($id);
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
            });
        </script>
    </head>
    <body>
        <header>
            <div class="content">
                <h1>

                    <a href="index.php">PEAK CSS</a>
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