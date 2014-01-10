
			<?php REQUIRE 'header.php'; ?>

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

			<?php require 'footer.php'; ?>
