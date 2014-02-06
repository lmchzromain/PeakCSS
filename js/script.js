$(document).ready(function(){   
    $('.accordionButton').click(function(){
        $('.accordionButton').removeClass('on');
        $('.accordionContent').slideUp('normal');
        if($(this).next().is(':hidden') == true){
            $(this).addClass('on');
            $(this).next().slideDown('normal');
        }        
    });                

    $('.accordionButton').mouseover(function() {
        $(this).addClass('over');
    }).mouseout(function() {
        $(this).removeClass('over');                                        
    });    
    $('.accordionContent').hide();
 
    $('input:checkbox').click(function(){
        var name_input = this.name;
        if( $('input:checkbox[name='+name_input+']').is(':checked')){
            $('.custom_'+name_input).css({display: 'block'});
        }else{
            $('.custom_'+name_input).css({display : 'none'});
            $('.custom_'+name_input).next("div").css({display : 'none'});
        }
    });

    setInterval(function(){
        $('#stylecss').val('');
        $(".example").each(function( index ) {
            if($(this).attr('style') != undefined){
                var test = $(this).attr('style');
                test = test.replace(/;/g, ';\n');
                $('#stylecss').val($('#stylecss').val()+'.'+$(this).attr('name')+'{\n '+test+'}\n\n');
            };
        });
    },500); 

    display_error = function(field){
        $(field).css({
            border : '2px solid rgb(255, 203, 96)',
            'background-image' : 'url(\'./img/attention_form.png\')',
            'background-repeat' : 'no-repeat',
            'background-position' : '95%',
            'background-size' : '20px'
        });
    }

    $(".error").css({
        display: 'none'
    });
       
    $("#button_send").click(function(){	
        if($("#name").val() == ""){
            $(".error").css({display : 'inline'});		
            display_error($('#name'));		            
            return false;
        }else if(!$("#name").val().match(/^[a-z]+([ \-']?[a-z]+[ \-']?[a-z]+[ \-']?)[a-z]+$/i)){
            $(".error").css({display : 'inline'});		
            display_error($('#name'));	              	
            return false;
        }else{	            	
            $("#name").css({border : '2px solid white'});
            return true;
        }               	
    });               	
    
    $("#button_send").click(function(){			
        if($("#mail").val() == ""){
            $(".error").css({display : 'inline'});
            display_error($('#mail'));
            return false;
        }else if(!$("#mail").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/)){
            $(".error").css({display : 'inline'});
            display_error($('#mail'));
            return false;
        }else{	            	
            $("#mail").css({border : '2px solid white'});
            return true;
        }               	
    });
    
    $("#button_send").click(function(){			
        if($("#why").val() == ""){
            $(".error").css({display : 'inline'});
            display_error($('#why'));
            return false;
        }else if(!$("#why").val().match(/^[a-z]+([ \-']?[a-z]+[ \-']?[a-z]+[ \-']?)[a-z]+$/i)){
            $(".error").css({display : 'inline'});
            display_error($('#why'));
            return false;
        }else{	            	
            $("#why").css({border : '2px solid white'});
            return true;
        }               	
    });  
    
    $("#button_send").click(function(){			
        if($(".text_besoin").val() == ""){
            $(".error").css({display : 'inline'});
            display_error($('.text_besoin'));
            return false;
        }else if($(".text_besoin").val().match(/^[^a-z0-9._-]$/i)){
            $(".error").css({display : 'inline'});
            display_error($('.text_besoin'));
            return false;
        }else{	            	
            $(".text_besoin").css({border : '2px solid white'});
            return true;
        }               	
    });
    $shadowColor='#000';
                
    function textShadow(param1){
        $id = param1;
        $x = $('[rel='+$id+'].text-shadow.horizontal').val();
        $y = $('[rel='+$id+'].text-shadow.vertical').val();
        $blur = $('[rel='+$id+'].text-shadow.blur').val();
        $('[name='+$id+']').css({textShadow: $x + "px " + $y + "px " + $blur + "px " + ($shadowColor)});
        console.log('text-shadow');
    };
    function boxShadow(param1){
        $id = param1;
        $x = $('[rel='+$id+'].box-shadow.horizontal').val();
        $y = $('[rel='+$id+'].box-shadow.vertical').val();
        $blur = $('[rel='+$id+'].box-shadow.blur').val();
        $spread = $('[rel='+$id+'].box-shadow.spread').val();
        $inset='';
        $('[rel='+$id+'].box-shadow.inset').is(':checked') ? $inset= 'inset' : $inset='';
        $style= $inset+' '+$x+'px '+$y+'px '+$blur+'px '+$spread+'px '+$shadowColor;
        $('[name='+$id+']').css("box-shadow", $style);
    };
                
    $('body').on('click','.picker',function(){
        $id = $(this).attr("rel");
        $(this).hasClass('shadow') ? $shadow = 1 : $shadow = 0;
        $(this).hasClass('text-shadow') ? $textShadow = 1 : $textShadow = 0;
        $(this).hasClass('backgroundColor') ? $backgroundColor = 1 : $backgroundColor = 0;
        console.log('shadow = '+$shadow);
        console.log('text-shadow = '+$textShadow);
        console.log('backgroundColor = '+$backgroundColor);
                
        $('.picker').colpick({
            layout:'hex',
            submit:0,
            colorScheme:'dark',
            onChange:function(hsb,hex,rgb,fromSetColor){
                if(!fromSetColor){
                    if($shadow==1){
                        console.log("a la classe shadow");
                        $('[rel='+$id+'].picker.shadow').val(hex).css('border-color','#'+hex);
                        $shadowColor = '#'+hex;
                        $textShadow==1 ? textShadow($id) : boxShadow($id);
                    }else if($backgroundColor==1){
                        console.log("a la classe backgroundColor");
                        $('[rel='+$id+'].picker.backgroundColor').val(hex).css('border-color','#'+hex);
                        $('[name='+$id+']').css('background','#'+hex);
                    }else{
                        console.log("a la classe color");
                        $('[rel='+$id+'].picker.color').val(hex).css('border-color','#'+hex);
                        $('[name='+$id+']').css('color','#'+hex);
                    }
                }
            }
        });
    });
    
    $('body').on('click','.size',function(){
        $id = $(this).attr("rel");
        $type = $('[name='+$id+']').attr("type");
        $val = $(this).val();
        $type=='text' ? $('[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'}) : $('[name='+$id+']').css('font-size',$val+'px');
    });

    $('body').on('click','.font',function(){
        $id = $(this).attr("rel");
        $val = $(this).val();
        $('[name='+$id+']').css('font-family',$val);
    });
                
    $('body').on('keyup','.text-shadow',function(){
        $id = $(this).attr("rel");
        textShadow($id);
    });
    $('body').on('keyup','.box-shadow',function(){
        $id = $(this).attr("rel");
        boxShadow($id);
    });
    $('body').on('click','.inset',function(){
        $id = $(this).attr("rel");
        boxShadow($id);
    });
    $('body').on('click','input[type=checkbox].backgroundColor',function(){
        console.log("CHECKBOX BACKGROUND");
        $id = $(this).attr("rel");
        if($(this).is(':checked')){
            $('[rel='+$id+'].backgroundColor.picker').prop('disabled',false).css('background','#FFF');
            $('[name='+$id+']').css('background', $('[rel='+$id+'].picker.backgroundColor').css('border-color'));
        }else{
            $('[rel='+$id+'].backgroundColor.picker').prop('disabled',true).css('background','');
            $('[name='+$id+']').css('background','');
        }
    });
    $('.add').click(function(){
        $ref = $(this).attr("name");
        $refL = $ref.length;
        $parent = $(this).parent();
        //console.log($parent);
        $child = $parent.children().children().children().last();
        //console.log($child);
        $name = $child.children().children().attr("name");
        //console.log($name);
        $n = $name.substring($refL);
        //console.log($n);
        $n++;
        if($ref=='text'){
            $string = '<tr><td><p contenteditable="true" class="example" name="text'+$n+'">Example</p></td><td><select class="font" rel="text'+$n+'"><option>Arial</option><option>Helvetica</option><option>Cambria</option><option>Times New Roman</option></select></td><td><select class="size" rel="text'+$n+'"<?php for($i=10; $i<41; $i++){echo "<option value='".$i."'>.$i. px</option>";$i++;}?></select></td><td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="text'+$n+'"></input></td><td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="text-shadow horizontal shadow radius-right" value="0" rel="text'+$n+'"/><span class="before-input radius-left shadow">Vertical</span><input type="text" class="text-shadow vertical shadow radius-right" value="0" rel="text'+$n+'"/><br><span class="before-input radius-left shadow">Blur</span><input type="text" class="text-shadow blur shadow radius-right" value="0" rel="text'+$n+'"/><span class="before-input radius-left shadow">#</span><input type="text" class="text-shadow shadow picker radius-right" width="40" rel="text'+$n+'"></input></td><td><input type="checkbox" class="backgroundColor radius-right" rel="text'+$n+'"/><span class="before-input radius-left">#</span><input type="text" class="backgroundColor picker radius-right" rel="text'+$n+'" disabled></input></td></tr>}';
            $parent.children().children().append($string);
        }else if($ref=='button'){
            $string = '<tr><td><input type="button" class="" value="Example" name="button'+$n+'"></td><td><select class="font" rel="button'+$n+'"><option>Arial</option><option>Helvetica</option><option>Cambria</option><option>Times New Roman</option></select></td><td><select class="size" rel="button'+$n+'"><?php for($i=10; $i<41; $i++){echo <option value="\'.$i.\'">\'.$i.\' px</option>;$i++;}?></select></td><td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="button'+$n+'"></input></td><td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="box-shadow horizontal shadow radius-right" value="0" rel="button'+$n+'"/><span class="before-input radius-left shadow">Vertical</span><input type="text" class="box-shadow vertical shadow radius-right" value="0" rel="button'+$n+'"/><span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="button'+$n+'"/><br><span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="button'+$n+'"/><span class="before-input radius-all shadow inset"><input type="checkbox" class="box-shadow inset shadow radius-right" rel="button'+$n+'"/> Inset</span><span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="button'+$n+'"></input></td><td><input type="checkbox" class="backgroundColor radius-right" rel="button'+$n+'"/><span class="before-input radius-left">#</span><input type="text" class="backgroundColor picker radius-right" rel="button'+$n+'" disabled></input></td></tr>';
            $parent.children().children().append($string);
        }else if($ref=='input'){
            $string= '<tr><td><input type="text" class="" value="Example" name="input'+$n+'"></td><td><select class="font" rel="input'+$n+'"><option>Arial</option><option>Helvetica</option><option>Cambria</option><option>Times New Roman</option></select></td><td><select class="size" rel="input'+$n+'"><?php for($i=10; $i<41; $i++){echo <option value="\'.$i.\'">\'.$i.\' px</option>;$i++;}?></select></td><td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="input'+$n+'"></input></td><td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="box-shadow horizontal shadow radius-right" value="0" rel="input'+$n+'"/><span class="before-input radius-left shadow">Vertical</span><input type="text" class="box-shadow vertical shadow radius-right" value="0" rel="input'+$n+'"/><span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="input'+$n+'"/><br><span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="input'+$n+'"/><span class="before-input radius-all shadow inset"><input type="checkbox" class="box-shadow inset shadow" rel="input'+$n+'"/> Inset</span><span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="input'+$n+'"></input></td><td><input type="checkbox" class="backgroundColor radius-right" rel="input'+$n+'"/><span class="before-input radius-left">#</span><input type="text" class="backgroundColor picker radius-right" rel="input'+$n+'" disabled></input></td></tr>';
            $parent.children().children().append($string);
        }
    });
});