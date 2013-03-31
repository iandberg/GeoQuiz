<?php
require('templates/header.php');
?>
 
<div role='main' id='main'>
	<div id='scores' class='wrapper'>
		<div class='page-content'>
<!-- entry-content -->
			<div class='entry-content'>
				<h2 class='heading'>Top Ten Scores</h2>

<?php
	echo $scores;

?>				
			</div>
<!-- 			corner pieces -->
			<div class='c-1'>
			</div>
			<div class='c-2'>
			</div>
			<div class='c-3'>
			</div>
			<div class='c-4'>
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