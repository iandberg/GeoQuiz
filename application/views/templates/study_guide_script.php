	<script>

		//Script reference!
		$(document).ready(function(){



		$.post('get_country_array',function(data){
		
			document.country_codes = data;
						
		},'json');

			



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
					
					$('img.mapster_el').attr({src: "<?= asset_url() ?>/img/world_map_for_quiz.gif"});

					world_map.mapster('resize', 1942, 0, zoom_time);

					map_wrap.animate({top: -230, left: -750}, ani_time, zoom_ease);					
				}
				
				if ($(this).val() == 'europe') {
				
					world_map.mapster('resize', 3500, 0, zoom_time);

					map_wrap.animate({top: -100, left: -1550}, ani_time, zoom_ease);
				}
			});
			

			$('#question_box').show();
			$('#question_box').css({'opacity': 100, 'height': 80},1000);			

			$('#flag_division').show();
			$('#flag_division').animate({opacity: 100, height: 123},1000);
		

			$('area').mouseover(function(){

				code = $(this).attr('href');
				
				var flag_class = "flags-" + code + " center";

				$('#question').html("<h3>" + document.country_codes[code][0] + "</h3>");

				$('#flag_area').addClass(flag_class);

				$('#flag_area').css({
					"height": "123",
					"width": document.country_codes[code][1]
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

			
		}); // end of document ready

 	</script>