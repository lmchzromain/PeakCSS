$(document).ready(function(){
	/*====================================================
				Gestion du formualaires
	====================================================*/
		$(".error").css({
	        display: 'none'
	     });

		$("#button_send").click(function(){			
			/** Champs de saisie Nom **/
	            if($("#name").val() == ""){
		            $(".error").css({display : 'inline'});
		            $("#name").css({border : '2px solid red'});
		            return false;
	            }else if(!$("#name").val().match(/^[a-z]+([ \-']?[a-z]+[ \-']?[a-z]+[ \-']?)[a-z]+$/i)){
	               $(".error").css({display : 'inline'});
	                $("#name").css({border : '2px solid red'});
                    return false;
	            }else{	            	
	                $("#name").css({border : '2px solid white'});
                    return true;
	            }               	
        });               	
        

        $("#button_send").click(function(){			
			/** Champs de saisie Nom **/
	            if($("#mail").val() == ""){
		            $(".error").css({display : 'inline'});
		            $("#mail").css({border : '2px solid red'});
		            return false;
	            }else if(!$("#mail").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/)){
	               $(".error").css({display : 'inline'});
	                $("#mail").css({border : '2px solid red'});
                    return false;
	            }else{	            	
	                $("#mail").css({border : '2px solid white'});
                    return true;
	            }               	
        });

        $("#button_send").click(function(){			
			/** Champs de saisie Nom **/
	            if($("#why").val() == ""){
		            $(".error").css({display : 'inline'});
		            $("#why").css({border : '2px solid red'});
		            return false;
	            }else if(!$("#why").val().match(/^[a-z]+([ \-']?[a-z]+[ \-']?[a-z]+[ \-']?)[a-z]+$/i)){
	               $(".error").css({display : 'inline'});
	                $("#why").css({border : '2px solid red'});
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
		            $(".text_besoin").css({border : '2px solid red'});
		            return false;
	            }else if($(".text_besoin").val().match(/^[^a-z0-9._-]$/i)){
	               	$(".error").css({display : 'inline'});
	                $(".text_besoin").css({border : '2px solid red'});
                    return false;
                }else{	            	
	                $(".text_besoin").css({border : '2px solid white'});
                    return true;
	            }               	
        });

});