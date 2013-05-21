	<script>

		
		window.onload = function(){
			
			var quiz = {
				
				game_name: 0,
				game_id: 0,
				map_resize: 0,
				map_top: 0,
				map_left: 0,
				quiz_data: 0,
				num_questions: 0,
				correct_answers: 0,
			};

			var world_map$ = $('#world_map');
			var map_wrap$ = $('.world_map_div');
			var ani_time = 500;
			var move_unit = 100;
			var move_ease = 'easeOutQuart';
			var zoom_ease = 'easeOutQuart';
			var zoom_unit = 600;
			var zoom_time = 200;
			
// 			initialize map zoom out

			world_map$.mapster({
				staticState: false,
				mapKey: 'country',
				fillColor: '000000',
				areas: [{
					key: "za_mask",
					isMask: true
				},{
					key: "za",
					includeKeys: "za_mask"
				},{
					key: "gm_inner_mask",
					isMask: true
				},{
					key: "gm_arrow",
					includeKeys: "gm_inner_mask, gm_outer"
				},{
					key: "gw_inner_mask",
					isMask: true
				},{
					key: "gw_arrow",
					includeKeys: "gw_inner_mask, gw_outer"
				},{
					key: "dj_inner_mask",
					isMask: true
				},{
					key: "dj_outer",
					onMouseover: null
				},{
					key: "dj_arrow",
					includeKeys: "dj, dj_inner_mask, dj_outer"
				},{
					key: "ad_arrow",
					includeKeys: "ad"
				},{
					key: "sm_arrow",
					includeKeys: "sm"
				},{
					key: "va_arrow",
					includeKeys: "va"
				},{
					key: "mt_arrow",
					includeKeys: "mt"
				},{
					key: "li_arrow",
					includeKeys: "li"
				},{
					key: "mc_arrow",
					includeKeys: "mc"
				},{
					key: "gq_inner_mask",
					isMask: true
				},{
					key: "gq",
					includeKeys: "gq_outer, gq_inner_mask"
				}]
			});

			world_map$.mapster('resize', 494, 0, zoom_time);
				

				$(document).keydown(function(e){

						 if (e.keyCode === 37)//right 
						 {
							map_wrap$.animate({
								left: '+=' + move_unit
							}, ani_time, move_ease);
						 }
			 
						 if (e.keyCode === 39) 
						 {
							map_wrap$.animate({
								left: '-=' + move_unit
							}, ani_time, move_ease);
						 }
			 
						 if (e.keyCode === 38) 
						 {
						 e.preventDefault();
							map_wrap$.animate({
								top: '+=' + move_unit
							}, ani_time, move_ease);
						 }
			 
						 if (e.keyCode === 40) 
						 {
						 e.preventDefault();
							map_wrap$.animate({
								top: '-=' + move_unit
							}, ani_time, move_ease);
						 }
					})			
			
			
// 			Select a continent menu
// todo  - make single function to accept
// resize value, top, left, game_name
			$('select#quiz_select').change(function(){ // on menu change event
				
				$('#game_save_message').hide();
				
				if ($(this).val() == 'africa') {
					
					quiz.game_name = 'africa';
					
					world_map$.mapster('resize', 1942, 0, zoom_time);

					map_wrap$.animate({top: -230, left: -750}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/prepare_quiz/africa');// prepares 'start quiz' form with proper action				
				}
				
				if ($(this).val() == 'europe') {
				
					quiz.game_name = 'europe';

					world_map$.mapster('resize', 3500, 0, zoom_time);

					map_wrap$.animate({top: -100, left: -1550}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/prepare_quiz/europe');// prepares 'start quiz' form with proper action		
				}
				
				if ($(this).val() == 'south_america') {
				
					quiz.game_name = 'south_america';

					world_map$.mapster('resize', 2300, 0, zoom_time);

					map_wrap$.animate({top: -480, left: -450}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/prepare_quiz/south_america');// prepares 'start quiz' form with proper action		
				}

				if ($(this).val() == 'southeast_asia') {

					$('img.mapster_el').attr({src: "<?= asset_url() ?>/img/world_map_for_quiz.gif"});

					world_map$.mapster('resize', 2400, 0, zoom_time);

					map_wrap$.animate({top: -300, left: -1600}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/prepare_quiz/southeast_asia');// prepares 'start quiz' form with proper action		
				}

				$('#start_quiz_form').show();
				$('#start_quiz_form').animate({opacity: 100, height: 50},1000);

			});
			
// 			Start Quiz actions-------------------------------
			
			var form$ = $('#start_quiz_form');
			
			form$.submit(function(){

				$.post(form$.attr('action'), form$.serialize(), function(data){
					quiz.quiz_data = data;
					quiz.num_questions = data.length;
					quiz.correct_answers = 0;
					quiz.game_id = data[0].game_id;		

					$('#num_questions').html(quiz.num_questions);

					print_question();
			
// 				Hiding and showing various buttons------------
					
					$('#quiz_select_form').animate({opacity: 0, height: 0},1000);
					$('#quiz_select_form').hide();

					$('#start_quiz_form').animate({opacity: 0, height: 0},1000);
					$('#start_quiz_form').hide();
			
					$('#question_box').show();	
					$('#question_box').animate({opacity: 100, height: 130},1000);
				
					$('#flag_division').show();
					$('#flag_division').animate({opacity: 100, height: 123},1000);
				
					$('#correct_questions').html("score: 0");
					$('#score_stats').show();
					$('#score_stats').animate({opacity: 100, height: 60},1000);
				
					$('#stop_quiz_form').show();
					$('#stop_quiz_form').animate({opacity: 100, height: 50},1000);

					$('#start_over_quiz_form').show();
					$('#start_over_quiz_form').animate({opacity: 100, height: 50},1000);
				
					$('img.mapster_el').attr({src: "<?= asset_url() ?>/img/world_map_for_quiz.gif"});
					
				}, 'json');

				
				return false;
								
			});// end of start quiz form submission



			function print_question() {
				
				$('#flag_area').removeClass();
				
				if (quiz.quiz_data.length < 1)
				{
					quiz_over();
					return false;
				}	
				
				current_num = (quiz.num_questions + 1) - quiz.quiz_data.length;
				
				question_count = current_num + " out of " + quiz.num_questions + " questions";
				
				var flag_class = "flags-" + quiz.quiz_data[0]['code'] + " center";

				$('#flag_area').addClass(flag_class);

				$('#flag_area').css({
					"height": "123",
					"width": quiz.quiz_data[0]['flag_width']
				});	

				$('#flag_area').animate({opacity: 100});
								
				$('#question_count').html(question_count);
				$('#response_message').html("");// clear out previous response
				$('#question').html("Where is <h3>" + quiz.quiz_data[0]['name'] + "?</h3>");
				$('#two_letter_code').html(quiz.quiz_data[0]['code']);
			}
			
// 			user clicks on a country
			$('area').click(function(){
			
				code$ = $(this).attr('href');
				
				ask_question(code$);// pass the clicked-on country code to answer checker
			});

				var guess = 1;

			function ask_question(code$) {
				
				if (code$ == ($('#two_letter_code').html()))
				{
					quiz.correct_answers++;
					quiz.score = Math.floor((quiz.correct_answers * 100) / quiz.num_questions);
					$('#response_message').html("Correct!");
					$('#correct_questions').html("score: " + quiz.score + "<p id='percent'>%</p>");
					quiz.quiz_data.shift();// remove top question from array
					guess = 1; // reset guesses
					setTimeout(function(){print_question()}, 2000); // wait a couple seconds before showing next question
				}
				else if (guess == 3)
				{
					
					$('#response_message').html("No more tries! moving on...");
					quiz.quiz_data.shift();// remove top question from array
					guess = 1;

					setTimeout(function(){print_question()}, 2000);
					

				}
				else
				{
					if (guess == 1)
						$('#response_message').html("Nope, Try again!");
					if (guess == 2)	
						$('#response_message').html("Sorry - one more guess");
					
					guess++;
				}
			}			


			$('#stop_quiz_form').submit(function(){

				if(confirm('Are you sure you want to stop?'))
				{
					quiz_over();
				}
				return false;
			});


			$('#start_over_quiz_form').submit(function(){
			
				if(confirm('Are you sure you want to start over?'))
					form.submit();
				
				return false;
			});

// ----------------------------------------End of quiz procedures

			function quiz_over() {

				$('#question').html("");//  clear out question field
				$('#question_count').html("");//  clear out question_count field
				$('#correct_questions').html("Final score: " + quiz.score + "<p id='percent'>%</p>");// print final score
				
				$('#question_box').animate({opacity: 0, height: 0},1000);
				$('#question_box').hide();

				$('#flag_area').animate({opacity: 0, height: 0},1000);
				$('#flag_division').hide();

				$('#stop_quiz_form').animate({opacity: 0, height: 0}, 1000);
				$("input[value='Stop Quiz']").css("display", "none");
				
				$('#start_over_quiz_form').animate({opacity: 0, height: 0},1000);
				$("input[value='Start Over']").css("display", "none");
				
				world_map$.mapster('resize', 494, 0, zoom_time);
				
				map_wrap$.animate({top: 100, left: 0}, ani_time, zoom_ease);
				
				$('#save_score').show();
				$('[name=game_name]').val(quiz.game_name);
				$('[name=score]').val(quiz.score);
				$('[name=game_id]').val(quiz.game_id);
			}
			
		}; // end of window.onload

 	</script>