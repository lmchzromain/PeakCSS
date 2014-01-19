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
        <script type='text/javascript' src="js/customize.js"></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                $('.picker').click(function(){
                    $id = $(this).attr("id");
                    console.log("picker cliqué :"+$id);
                });
                $('.picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,fromSetColor) {
                        if(!fromSetColor) $('#'+$id+'.picker').val(hex).css('border-color','#'+hex);
                        //console.log(hex);
                        $idpicker = $('#'+$id+'.picker').attr('id');
                        //console.log($idpicker);
                        $('input[name='+$idpicker+']').css('color','#'+hex);
                        
                    }
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