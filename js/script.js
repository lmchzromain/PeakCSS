$(document).ready(function(){

	/*====================================================
                Gestion des toggles
    ====================================================*/
       	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
       	
	       	$('.accordionButton').click(function() {
	           	$('.accordionButton').removeClass('on');
	           	$('.accordionContent').slideUp('normal');
	           	if($(this).next().is(':hidden') == true) {
	               	$(this).addClass('on');
	               	$(this).next().slideDown('normal');
	            }        
	        });                
	                
	        //ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER 
	        $('.accordionButton').mouseover(function() {
	            $(this).addClass('over');
	        }).mouseout(function() {
	            $(this).removeClass('over');                                        
	        });
	                
	        $('.accordionContent').hide();
    	

    /*====================================================
                Gestion des display toggles
    ====================================================*/
    	$('#toggle_text').css({display : 'none'});
    	$('#toggle_button').css({display : 'none'});
    	$('#toggle_input').css({display : 'none'});
    	$('#toggle_block').css({display : 'none'});
    	$('#toggle_table').css({display : 'none'});

    	 	/** Selection de la partie **/
            $('input:checkbox[name=text]').click(function(){
            	if( $('input:checkbox[name=text]').is(':checked')){
               		$('#toggle_text').css({display: 'block'});
               	}else{
               		$('#toggle_text').css({display : 'none'});
               	}
            });

            /** Selection de la partie **/
            $('input:checkbox[name=button]').click(function(){
            	if( $('input:checkbox[name=button]').is(':checked')){
               		$('#toggle_button').css({display: 'block'});
               	}else{
               		$('#toggle_button').css({display : 'none'});
               	}
            });

            /** Selection de la partie **/
            $('input:checkbox[name=input]').click(function(){
            	if( $('input:checkbox[name=input]').is(':checked')){
               		$('#toggle_input').css({display: 'block'});
               	}else{
               		$('#toggle_input').css({display : 'none'});
               	}
            });

            /** Selection de la partie **/
            $('input:checkbox[name=block]').click(function(){
            	if( $('input:checkbox[name=block]').is(':checked')){
               		$('#toggle_block').css({display: 'block'});
               	}else{
               		$('#toggle_block').css({display : 'none'});
               	}
            });

            /** Selection de la partie **/
            $('input:checkbox[name=table]').click(function(){
            	if( $('input:checkbox[name=table]').is(':checked')){
               		$('#toggle_table').css({display: 'block'});
               	}else{
               		$('#toggle_table').css({display : 'none'});
               	}
            });

           

	/*====================================================
				Gestion du formualaires
	====================================================*/
		
		/* Fonction de changement CSS */
		display_error = function(field){
			$(field).css({
				border : '2px solid rgb(255, 203, 96)',
				'background-image' : 'url(\'./img/attention_form.png\')',
				'background-repeat' : 'no-repeat',
				'background-position' : '95%',
				'background-size' : '20px'
			});
		}
		
		/** On cache le message d'erreur **/
		$(".error").css({
	        display: 'none'
		});


		$("#button_send").click(function(){	
			/** Champs de saisie Nom **/
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
			/** Champs de saisie Mail **/
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
			/** Champs de saisie Why to contact us ? **/
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
			/** Champs de saisie Nom **/
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
});