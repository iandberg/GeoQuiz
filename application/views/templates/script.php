	<script>

		
		$(document).ready(function(){




// 			turn off for production		
// 			$('#start_quiz_form').fadeIn();

			var world_map = $('#world_map');
			var map_wrap = $('.world_map_div');
			var ani_time = 500;
			var move_unit = 100;
			var move_ease = 'easeOutQuart';
			var zoom_ease = 'easeOutQuart';
			var zoom_unit = 600;
			var zoom_time = 200;
			
// 			initialize map zoom out

			world_map.mapster({
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
					key: "ad_inner_mask",
					isMask: true
				},{
					key: "ad_arrow",
					includeKeys: "ad, ad_inner_mask, ad_outer"
				},{
					key: "mt_inner_mask",
					isMask: true
				},{
					key: "mt_arrow",
					includeKeys: "mt, mt_inner_mask, mt_outer"
				},{
					key: "va_inner_mask",
					isMask: true
				},{
					key: "va_outer",
					includeKeys: "va, va_inner_mask"
				},{
					key: "li_inner_mask",
					isMask: true
				},{
					key: "li_outer",
					includeKeys: "li, li_inner_mask"
				},{
					key: "mc_inner_mask",
					isMask: true
				},{
					key: "mc",
					includeKeys: "mc_outer, mc_inner_mask"
				},{
					key: "gq_inner_mask",
					isMask: true
				},{
					key: "gq",
					includeKeys: "gq_outer, gq_inner_mask"
				}]
			});

			world_map.mapster('resize', 494, 0, zoom_time);
				

				$(document).keydown(function(e){

						 if (e.keyCode === 37)//right 
						 {
							map_wrap.animate({
								left: '+=' + move_unit
							}, ani_time, move_ease);
						 }
			 
						 if (e.keyCode === 39) 
						 {
							map_wrap.animate({
								left: '-=' + move_unit
							}, ani_time, move_ease);
						 }
			 
						 if (e.keyCode === 38) 
						 {
						 e.preventDefault();
							map_wrap.animate({
								top: '+=' + move_unit
							}, ani_time, move_ease);
						 }
			 
						 if (e.keyCode === 40) 
						 {
						 e.preventDefault();
							map_wrap.animate({
								top: '-=' + move_unit
							}, ani_time, move_ease);
						 }
					})			
			
// 			Select a continent menu
			$('select#quiz_select').change(function(){
				
				$('#game_save_message').hide();
				
				if ($(this).val() == 'africa') {
					
					document.game_name = 'africa';
					
					world_map.mapster('resize', 1942, 0, zoom_time);

					map_wrap.animate({top: -230, left: -750}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/africa');// prepares 'start quiz' form with proper action
					
// 					$('#start_quiz_form').show();
// 					$('#start_quiz_form').animate({opacity: 100, height: 50},1000);
					
				}
				
				if ($(this).val() == 'europe') {
				
					world_map.mapster('resize', 3500, 0, zoom_time);

					map_wrap.animate({top: -100, left: -1550}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/europe');// prepares 'start quiz' form with proper action		
				}
					$('#start_quiz_form').show();
					$('#start_quiz_form').animate({opacity: 100, height: 50},1000);
			});
			
// 			Start Quiz actions-------------------------------
			
			var form = $('#start_quiz_form');
			
			form.submit(function(){

				$.post(form.attr('action'), form.serialize(), function(data){
// 				console.log(data);
					document.quiz = data;
					document.num_questions = data.length;
					document.correct_answers = 0;
					document.game_id = data[0].game_id;		

					$('#num_questions').html(document.num_questions);

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
			
				if (document.quiz.length < 1)
				{
					quiz_over();
					return false;
				}	
				
				current_num = (document.num_questions + 1) - document.quiz.length;
				
				question_count = current_num + " out of " + document.num_questions + " questions";
				
				var flag_class = "flags-" + document.quiz[0]['code'] + " center";

				$('#flag_area').addClass(flag_class);

				$('#flag_area').css({
					"height": "123",
					"width": document.quiz[0]['flag_width']
				});
				
						

				$('#flag_area').animate({opacity: 100});
				
// 				$('#flag_division').animate({height: image_height, width: image_width},1000);

				
// 				$('#flag_area').css({
// 					'background-image': "url('../../<?= asset_url() ?>/img/flags/" + document.quiz[0]['code'] + ".png')",
// 					'background-repeat': 'no-repeat',
// 					'background-size': 'contain'
// 					'width': '140',
// 					'height': '92'
// 					});
				
				$('#question_count').html(question_count);
				$('#response_message').html("");// clear out previous response
				$('#question').html("Where is <h3>" + document.quiz[0]['name'] + "?</h3>");
				$('#two_letter_code').html(document.quiz[0]['code']);
			}
			
// 			user clicks on a country
			$('area').click(function(){
			
				code = $(this).attr('href');
				
				ask_question(code);// pass the clicked-on country code to answer checker
			});

				var guess = 1;

			function ask_question(code) {
				
				if (code == ($('#two_letter_code').html()))
				{
					document.correct_answers++;
					document.score = Math.floor((document.correct_answers * 100) / document.num_questions);
					$('#response_message').html("Correct!");
					$('#correct_questions').html("score: " + document.score + "<p id='percent'>%</p>");
// 					$('#correct_questions').after("<p id='percent'>&#37;</p>");
					document.quiz.shift();// remove top question from array
					guess = 1;
					setTimeout(function(){print_question()}, 2000);
				}
				else if (guess == 3)
				{
					$('#response_message').html("No more tries! moving on...");
					document.quiz.shift();// remove top question from array
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
				$('#correct_questions').html("Final score: " + document.score);// print final score
				
				$('#question_box').animate({opacity: 0, height: 0},1000);
				$('#question_box').hide();

				$('#flag_area').animate({opacity: 0, height: 0},1000);
				$('#flag_division').hide();

				$('#stop_quiz_form').animate({opacity: 0, height: 0}, 1000);
				$("input[value='Stop Quiz']").css("display", "none");
				
				$('#start_over_quiz_form').animate({opacity: 0, height: 0},1000);
				$("input[value='Start Over']").css("display", "none");
				
				world_map.mapster('resize', 494, 0, zoom_time);
				
				map_wrap.animate({top: 100, left: 0}, ani_time, zoom_ease);
				
				$('#save_score').show();
				$('[name=game_name]').val(document.game_name);
				$('[name=score]').val(document.score);
				$('[name=game_id]').val(document.game_id);
			}
			
		}); // end of document ready

 	</script>