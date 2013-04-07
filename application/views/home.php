<?php
require('templates/header.php');
?>
 
<div role="main" id="main">
	<div class="wrapper">
		<div class="page-content">
<!-- entry-content -->
			<div class="entry-content cf">
				<h2 class='heading'>
					Test Your Geographical Knowledge! 
				</h2>
				<img class='left' src='<?= asset_url() ?>/img/hand.png'>
				<p id='invite' class='left'>
					Take a quiz identifying the countries of the world.<br /> 
					Register and keep track of your progress! 
				</p>
<?php
					echo "<a href='" . base_url('quiz') . "' class='link-button blue'>Start a Quiz!</a>";
?>
			</div>
			<img class='center' src='<?= asset_url() ?>/img/world_splash.png' alt='world_splash.png'> 
<!-- 			corner pieces -->
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