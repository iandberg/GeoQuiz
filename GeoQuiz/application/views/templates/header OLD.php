<!DOCTYPE HTML>
<html>
<head>
	<title>GeoQuiz</title>

<!-- 	<link rel="stylesheet" media="screen" href="../../assets/css/superfish.css" />  -->
<!-- 	<link rel="stylesheet" href="../../assets/css/tweet.css" media="all"  /> -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../../assets/js/jquery.imagemapster.min.js"></script>
	<script src="../../assets/js/jquery.easing.1.3.js"></script>

	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" media="screen" href="../../assets/css/geoquiz_style.css" /> 
<!-- 	<link rel="stylesheet" media="all" href="../../assets/css/lessframework.css"/> -->

	<script type="text/javascript" src="../../assets/js/cssrefresh.js"></script>

	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- scripts concatenated and minified via build script -->
<!-- 	<script src="../../assets/js/custom.js"></script> -->
	
	<!-- superfish -->
<!-- 	<script  src="../../assets/js/superfish-1.4.8/js/hoverIntent.js"></script> -->
<!-- 	<script  src="../../assets/js/superfish-1.4.8/js/superfish.js"></script> -->
<!-- 	<script  src="../../assets/js/superfish-1.4.8/js/supersubs.js"></script> -->
	<!-- ENDS superfish -->
	
<!-- 	<script src="../../assets/js/tweet/jquery.tweet.js" ></script> -->
<!-- 	<script src="../../assets/js/jquery.isotope.min.js"></script> -->
<!-- 	<script src="../../assets/js/css3-mediaqueries.js"></script> -->
<!-- 	<script src="../../assets/js/tabs.js"></script> -->
<!-- 	<script  src="../../assets/js/poshytip-1.1/src/jquery.poshytip.min.js"></script> -->
	<!-- end scripts -->


	<script>

		
		$(document).ready(function(){
		
// 			turn off for production		
// 			$('#start_quiz_form').fadeIn();
						
						
			var world_map = $('#test');
			var map_wrap = $('.world_map_image').add('.world_map_image');
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
				areas: [{
					key: "za-mask",
					isMask: true
				},{
					key: "za",
					includeKeys: "za-mask"
				},{
					key: "gw-arrow",
					includeKeys: "gw"
				},{
					key: "gm-arrow",
					includeKeys: "gm"
				},{
					key: "dj-arrow",
					includeKeys: "dj"
				}]
			});

			world_map.mapster('resize', 494, 0, zoom_time);
				

			$(document).keypress(function(e){

				 if (e.keyCode === 106) 
				 {
				 	map_wrap.animate({
				 		left: '+=' + move_unit
					}, ani_time, move_ease);
				 }
				 
				 if (e.keyCode === 108) 
				 {
				 	map_wrap.animate({
						left: '-=' + move_unit
					}, ani_time, move_ease);
				 }
				 
				 if (e.keyCode === 105) 
				 {
				 	map_wrap.animate({
						top: '+=' + move_unit
					}, ani_time, move_ease);
				 }
				 
				 if (e.keyCode === 107) 
				 {
				 	map_wrap.animate({
						top: '-=' + move_unit
					}, ani_time, move_ease);
				 }
			})
			
			
			
// 			
// 			$('.zoom-in').click(function(){
// 
// 				map_wrap.animate({
// 	
// 					top: '-=' + zoom_unit/2,
// 					left: '-=' + zoom_unit/2
// 				
// 				}, ani_time, zoom_ease, function(){ //callback to mapster resize function
// 				
// 					x = world_map.prop('width');
// 				
// 					world_map.mapster('resize', (x + zoom_unit), 0, zoom_time);
// 				});
// 			});
// 
// 			$('.zoom-out').click(function(){
// 
// 				map_wrap.animate({
	
// 					top: '+=' + zoom_unit/2,
// 					left: '+=' + zoom_unit/2
				
// 				}, ani_time, zoom_ease, function(){
// 				
// 					x = world_map.prop('width');
// 				
// 					world_map.mapster('resize', (x - zoom_unit), 0, zoom_time);
// 				});
// 			});				
			
// 			outputting country data
			
			
// 			Select a continent menu
			$('select#quiz_select').change(function(){
			
				if ($(this).val() == 'africa') {
				
					world_map.mapster('resize', 1942, 0, zoom_time);

					map_wrap.animate({top: -230, left: -750}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/africa');// prepares 'start quiz' form with proper action
					
					$('#start_quiz_form').animate({opacity: 100, height: 50},1000);
					
				}
				
				if ($(this).val() == 'europe') {
				
					world_map.mapster('resize', 3000, 0, zoom_time);

					map_wrap.animate({top: -30, left: -1250}, ani_time, zoom_ease);
					
					$('#start_quiz_form').attr('action', 'quiz/europe');// prepares 'start quiz' form with proper action
					
					$('#start_quiz_form').animate({opacity: 100, height: 50},1000);
					
				}
			});
			
// 			Start Quiz actions-------------------------------
			
			var form = $('#start_quiz_form');
			
			form.submit(function(){
// 				alert('form was submitted');
				$.post(form.attr('action'), form.serialize(), function(data){
					
					console.log(data);

				document.quiz = data;
				document.num_questions = data.length;
				document.correct_answers = 0;
				
				$('#num_questions').html(document.num_questions);
				
				print_question();
				
				}, 'json');
				
// 				Various animations when starting quiz------------
				$('#quiz_select_form').animate({opacity: 0, height: 0},1000);
				
				$('#stop_quiz_form').show();
				$('#start_over_quiz_form').show();
				$('#start_quiz_form').hide();
				$('#question_box').animate({opacity: 100, height: 110},1000);
				$('#correct_questions').html("score: &#37;");
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
				
				$('#question_count').html(question_count);
				$('#response_message').html("");// clear out previous response
				$('#question').html("Where is <h3>" + document.quiz[0][0] + "?</h3>");
				$('#two_letter_code').html(document.quiz[0][1]);
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
					$('#correct_questions').html("score: " + document.score + "&#37;");
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
				$('#correct_questions').html("Final score: " + document.correct_answers);// print final score
				
				$('#question_box').animate({opacity: 0, height: 0},1000);

				$('#stop_quiz_form').animate({opacity: 0, height: 0}, 1000);
				
				$('#start_over_quiz_form').animate({opacity: 0, height: 0},1000);
				
				world_map.mapster('resize', 494, 0, zoom_time);
				
				map_wrap.animate({top: 100, left: 0}, ani_time, zoom_ease);

			}
			
		}); // end of document ready

 	</script>
</head>
<body>

	<header>		
		<!-- header wrapper -->

		<div class="wrapper cf">
			<div id="logo">
				<a href="index.html" ><img src="../../assets/img/logo.png" alt="" /></a>
			</div>
		</div><!--  ENDS header wrapper  -->

		
		<!-- nav -->
		<nav class="cf">
			<div class="wrapper cf">
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="home">HOME<i><b></b></i></a></li>
					<li><a href="quiz">QUIZ<i><b></b></i></a></li>
					<li><a href="scores">HIGH SCORES<i><b></b></i></a></li>
					<li><a href="register">REGISTER<i><b></b></i></a></li>
					<li><a href="login">LOG IN<i><b></b></i></a></li>
				</ul>
				<div id="combo-holder"></div>
			</div>
		</nav>
 

		<!-- ends nav -->
	</header>

