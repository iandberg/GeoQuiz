<?php
require('templates/header.php');
?>
 
<div role="main" id="main">
	<div class="wrapper">
		<div id='quiz' class="page-content center">
<!-- entry-content -->
			<div class="entry-content cf">
				<div class='world_map_wrap' style='width: 500px; height: 500px;'>
					<div class='world_map_div' style='width: 3500px; height: 1775px; left: 0px; top: 100px; '>
						<img id='world_map' src='<?= asset_url() ?>/img/world_map.gif' usemap='#world_map_img_map' style='width: 3500px; height: 1775px;'> 
					</div>
				</div>
				
				<div id='question_area'>
				<h2 id='quiz_heading' class='heading'>The Quiz</h2>
<?php
				if (isset($session['username'])) echo "<div id='welcome'>Welcome <strong>" . $session['username'] . "</strong></div>";
				if ($this->session->flashdata('game_save') == 1) echo "<div id='game_save_message'>Score saved!</div>";
?>		
				<form id='quiz_select_form' method='post' action='#'>
				<label id='quiz_select' for='quiz_select'>Select a continent</label>
					<select id='quiz_select'>
						<option value='none'>No Quiz Selected</option>
						<option value='africa'>Africa</option>
						<option value='europe'>Europe</option>
					</select>
				</form>
				
				
				<form id='start_quiz_form' class='left contactForm' action='none' method='post'>
				<input id='submit' type='submit' value='Start Quiz!' name='submit' />
				</form>
				
				
				<div id='question_box'>
				<div class='clear' id='question'></div>
				<div id='response_message'></div>
				<div class='hidden' id='two_letter_code'></div>
				</div>
				
				<div id='flag_division'><img id='flag_area' class='center'/></div>
				
				<div id='score_stats'>
					<h3 id='question_count'></h3>
					<h3 id='correct_questions'></h3>
				</div>
				<div id='bottom_buttons'>
					<form id='stop_quiz_form' class='contactForm' action='quiz/stop' method='post'>
						<input type='submit' value='Stop Quiz' name='submit' id='submit' />
					</form>
					<form id='start_over_quiz_form' class='contactForm' action='' method='post'>
						<input type='submit' value='Start Over' name='submit' id='submit' />
					</form>
				</div>

				<div id='save_score' style='display: none;'>
					<form class='left contactForm' method='post' action='quiz'>
						<input type='hidden' name='score' />
						<input type='hidden' name='game_name' />
						<input type='hidden' name='game_id' />
						<input type='hidden' name='formtype' value='save_score' />
						<input type='submit' value='Save Score' />
					</form>
				</div>
			</div>
			<div class='flags-ci'></div>
<!-- Image Map -->
<?php
require('templates/image_map.php');
?>
<!-- 	END image map -->
			</div>
<!-- corner pieces -->
<div class="c-1"></div><div class="c-2"></div><div class="c-3"></div><div class="c-4"></div><!-- ENDS entry-content -->
		</div>
<!-- ENDS page content -->
	</div>
</div>

<?php
require('templates/footer.php');
/* End of file */
/* File location: */