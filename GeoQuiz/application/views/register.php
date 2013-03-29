<?php
require('templates/header.php');
?>
 
<div role="main" id="main">
	<div class="wrapper">
		<div id='register' class="page-content center">

				<div class='right'>Already registered? <a href='login'>Log in</a></div>		

				<h2 class="heading">Register</h2>
<?php
					if (isset($success_message)) echo "<div class='infobox-success'>" . $success_message . "</div>";
					if (isset($error_message)) echo "<div class='infobox-error'>" . $error_message . "</div>";

				echo "<form class='contactForm' action='" . base_url('register') . "' method='post'>";
?>
					<fieldset>
<?php			
						echo form_error('username', "<div class='infobox-error'>", '</div>');
?>							
						<p>
							<label for="username" >Username</label>
							<input name="username"  id="username" type="text"  title="Enter your Username" />
						</p>
<?php			
						echo form_error('email', "<div class='infobox-error'>", '</div>');
?>						
						<p>
							<label for="email" >Email</label>
							<input name="email"  id="email" type="text"  title="Enter email address" />
						</p>
<?php			
						echo form_error('password', "<div class='infobox-error'>", '</div>');
?>						
						<p>
							<label for="password">Password</label>
							<input name="password"  id="password" type="password"  title="Enter Password" />
						</p>
<?php			
						echo form_error('passconf', "<div class='infobox-error'>", '</div>');
?>						
						<p>
							<label for="passconf">Password Confirm</label>
							<input  name="passconf"  id="passconf" type="password"  title="Please confirm password" />
						</p>
<?php
// 						if (isset($this->session->userdata['game_id']))
// 						{
// 						echo "<input type='' value='" . $this->session->userdata['game_id'] . "' name='game_id' />";
// 						echo "<input type='' value='" . $this->session->userdata['score'] . "' name='score' />";
// 						}
?>						

						<p><input type="submit" value="Send" name="submit" id="submit" /></p>
						
					</fieldset>		
				</form>
<?php
				if (isset($this->session->userdata['score']))
					echo "<div>Score ready to be saved!<a href='register/cancel' class='link-button'>Cancel</a></div>";
?>

<!--corner pieces -->
			<div class="c-1">
			</div>
			<div class="c-2">
			</div>
			<div class="c-3">
			</div>
			<div class="c-4">
			</div>
<!-- ENDS entry-content -->
		</div>
<!-- ENDS page content -->
	</div>
</div>

<?php
require('templates/footer.php');
/* End of file */
/* File location: */