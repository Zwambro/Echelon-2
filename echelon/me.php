<?php
$page = "me";
$page_title = "My Account";
$auth_name = 'login';
require 'inc.php';

// do stuff

require 'inc/header.php';
?>
	<fieldset>
		<legend>Edit My Account</legend>
		<form action="actions/edit-me.php" method="post" id="edit-me">
			<fieldset class="none">
				<legend>Account Info</legend>
				
				<label class="uname">Username Name:</label>
					<input type="text" name="uname" value="<?php echo $_SESSION['username']; ?>" disabled="disabled" />		
				<label for="display">Display Name:</label>
					<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" id="display" tabindex="1" />
				<label for="email">Email:</label>
					<input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" id="email" tabindex="2" />
			</fieldset>

			<fieldset class="none">
				<legend>Change your password</legend>
				
				<label for="change-pw">Change your password:</label>
					<input type="checkbox" name="change-pw" id="change-pw" tabindex="3" /><br />
					
				<label for="pass1" class="block">New Password:</label>
					<input type="password" name="pass1" id="pass1" value="" class="disable" disabled="disabled" tabindex="4" />
				<label for="pass2" class="block" style="width: 230px;">New Password Again:</label>
					<input type="password" name="pass2" id="pass2" value="" class="disable" disabled="disabled" tabindex="5" />
			</fieldset>
			
			<br class="clear" />
			
			<!--<fieldset class="none">
				<legend>My Echelon Connect</legend>
				
				
				<?php
					$counter = 1;
					while($counter <= $num_games) :
						
						echo '<label for="">'.$config['game'.$counter]['name'].' @id</label>';
							echo '<input type="text" name="game'.$counter.'" value="" />';
						
						$counter++;
					endwhile;
				?>
			</fieldset>-->
			
			<fieldset class="none" id="prove">
				<legend>Prove Identiy</legend>
					
				<label for="password">Your Current Password:</label>
					<input type="password" name="password" id="password" value="" tabindex="5" />
			</fieldset>
			
			<br class="clear" />
			
			<input id="edit-me-submit" type="submit" value="Edit Me" class="button">
		</form>
	</fieldset>
	
<?php require 'inc/footer.php'; ?>