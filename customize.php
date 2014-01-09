<!DOCTYPE>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

			<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
			<script type='text/javascript'>
				// On attend que la page soit chargée 
				$(document).ready(function(){
				   // On cache la zone de texte
				   $('#toggle').hide();
				   // toggle() lorsque le lien avec l'ID #toggler est cliqué
				   $('a#toggler').click(function()
				  {
				      $('#toggle').toggle(400);
				      return false;
				   });
				});
				
			</script>
		</head>

		<body>
			<?php include 'menu.php'; ?>

			<div id="choice_box">
				<div class="choice">
					<form>
						<input type="checkbox" name="text" value="Text"> Text </input>
						<input type="checkbox" name="button" value="Button"> Button </input>
						<input type="checkbox" name="input" value="Input"> Input </input>
						<input type="checkbox" name="block" value="Block"> Block </input>
						<input type="checkbox" name="table" value="Table"> Table </input>
					</form>
				</div>
			</div>

			<div id="toggle_choice">

				<div id="toggle_text">
					<a href="#" id="toggler"> <img class="fleche" src="img/fleche_bas.png" alt="fleche" width="15px"> Texte </a>
				</div>	
				<div id="toggle" style="display:none;">
					Toggle element 
				</div>

				<div id="toggle_text">
					<a href="#" id="toggler"> <img class="fleche" src="img/fleche_bas.png" alt="fleche" width="15px"> Button </a>
				</div>	
				<div id="toggle" style="display:none;">
					Toggle element 
				</div>
			</div>
		</body>
	</html>