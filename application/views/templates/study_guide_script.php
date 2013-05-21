	<script>

		//Script reference!
		window.onload = function(){

		var country_codes;

		$.post('get_country_array',function(data){
		
			country_codes = data;
						
		},'json');


			var world_map$ = $('#world_map'),
			map_wrap$ = $('.world_map_div'),
			question_box$ = $('#question_box'),
			flag_division$ = $('#flag_division'),
			quiz_select$ = $('select#quiz_select'),
			game_save_message$ = $('#game_save_message'),

			
			ani_time = 500,
			move_unit = 100,
			move_ease = 'easeOutQuart',
			zoom_ease = 'easeOutQuart',
			zoom_unit = 600,
			zoom_time = 200;
			
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
			
			var mapster_element$ = $('img.mapster_el');
				
			var map_adjust = { // coordinates for map positioning and zooming
			
				africa: {
					resize: 1942,
					top: -230,
					left: -750,
					},
					
				europe: {
					resize: 3500,
					top: -100,
					left: -1550,
				},
				
				south_america: {
					resize: 2300,
					top: -480,
					left: -450,				
				},
				
				southeast_asia: {
					resize: 2400,
					top: -300,
					left: -1600,
				}
			};
			
			
			question_box$.show();
			question_box$.css({'opacity': 100, 'height': 80},1000);	
			
			flag_division$.show();

			$(document).keydown(function(e){

				 if (e.keyCode === 37) //left 
				 {
				 	map_wrap$.animate({
				 		left: '+=' + move_unit
					}, ani_time, move_ease);
				 }
				 
				 if (e.keyCode === 39) 
				 {
				 	map_wrap$.animate({ //right
						left: '-=' + move_unit
					}, ani_time, move_ease);
				 }
				 
				 if (e.keyCode === 38) 
				 {
				 e.preventDefault(); // prevent scroll action
				 	map_wrap$.animate({ //up
						top: '+=' + move_unit
					}, ani_time, move_ease);
				 }
				 
				 if (e.keyCode === 40) 
				 {
				 e.preventDefault(); // prevent scroll action
				 	map_wrap$.animate({ // down
						top: '-=' + move_unit
					}, ani_time, move_ease);
				 }
			})
			
			
// 			Select a continent from dropdown menu

			quiz_select$.change(function(){
				
				game_save_message$.hide();
				
				var continent_choice = $(this).val();
				
				mapster_element$.attr({src: "<?= asset_url() ?>/img/world_map_for_quiz.gif"});

				world_map$.mapster('resize', map_adjust[continent_choice].resize, 0, zoom_time);

				map_wrap$.animate({top: map_adjust[continent_choice].top, left: map_adjust[continent_choice].left}, ani_time, zoom_ease);					

			});	
			
		

			$('area').mouseover(function(){

				code = $(this).attr('href');
				
				var flag_class = "flags-" + code + " center";

				$('#question').html("<h3>" + country_codes[code][0] + "</h3>");

				$('#flag_area').addClass(flag_class);

				$('#flag_area').css({
					"height": "123",
					"width": country_codes[code][1]
				});
				
			});

			$('area').mouseout(function(){
				
				$('#question').html("");

				$('#flag_area').removeClass();

				$('#flag_area').css({
					"height": "0",
					"width": "0"
				});
			});

			
		}; // end of window onload

 	</script>