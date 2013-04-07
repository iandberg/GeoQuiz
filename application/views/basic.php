<!DOCTYPE HTML>
<html>
<head>
	<title>MY Title</title>
	<link href='<?= asset_url() ?>/css/quiz.css' rel='stylesheet' />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?= asset_url() ?>/js/jquery.imagemapster.min.js">
	</script>



	<script>

		
		$(document).ready(function(){
		
			var world_map = $('#test');
			var map_wrap = $('.world_map_div');
			
			world_map.mapster({
				scaleMap: true
			});

				
				var ani_time = 500;
				var move_unit = 100;
				var move_ease = 'easeOutQuart';
// 				alert(e.which);
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
			
			

		});

	
	
	
	</script>
</head>
<body>
<div id='wrapper'>
	<div id='header'>
		<div id='logo'>
			<a href='home'>GeoQuiz</a> 
		</div>
		<ul>
			<li><a href='#'>Log In</a></li>
			<li><a href='#'>Register</a></li>
			<li><a href='#'>High Scores</a></li>
			<li><a href='#'>Quizzes</a></li>
		</ul>
	</div>
	<div id='quiz'>
	<div id='login_greeting'>Welcome Ian</div>
		<div class='world_map_wrap' style="width: 600px; height: 500px;">
			<div class='world_map_div' style="width: 1942; height: 985; top: -220px; left: -700px; ">
				<img id="test" src="<?= asset_url() ?>/img/world_map.gif" usemap="#world_map_img_map" style="width: 1942; height: 985;"> 
			</div>
		</div>
		<div id='quiz_area'>
		<form>
			<label>Choose a quiz:</label>
			<select>
				<option>Africa</option>
				<option>Europe</option>
			</select>
		</form>
		<a class='button' href='#'>Start Quiz!</a>
			
		<div id='questions'>
			<p>Where is</p>
			<h1>Mauritania?</h1>
		</div>
		<a class='button' href='#'>Start Over</a>
		<a class='button' href='#'>End Quiz</a>
		</div>
			<map name="world_map_img_map">
				<area shape="poly" alt="" coords="922,427, 922,425, 923,424, 924,423, 926,423, 928,422, 930,421, 930,419, 930,417, 932,417, 934,418, 935,419, 937,421, 936,422, 937,424, 937,426, 938,429, 937,429, 937,431, 935,433, 935,434, 934,436, 933,437, 932,438, 932,439, 932,444, 932,447, 932,449, 932,451, 932,453, 929,454, 926,454,927,454, 926,452, 925,450, 926,448, 926,440, 925,436, 924,432, 922,429, 922,427, 922,427" href="bj">
				<area shape="poly" alt="" coords="1052,601, 1054,601, 1056,602, 1057,602, 1059,603, 1062,601, 1065,597, 1067,595, 1069,594, 1071,591, 1074,589, 1077,588, 1080,588, 1080,590, 1082,590, 1086,591, 1089,593, 1092,594, 1093,594, 1093,597, 1093,600, 1093,603, 1093,605, 1093,607, 1092,608, 1092,609, 1092,610, 1092,611, 1092,613,1093,612, 1092,615, 1091,618, 1090,620, 1090,623, 1087,625, 1084,628, 1083,630, 1079,629, 1076,628, 1073,628, 1072,627, 1072,626, 1069,625, 1066,624, 1065,620, 1062,618, 1061,614, 1057,611, 1054,606, 1053,603, 1052,601, 1052,601" href="zw">
				<area shape="poly" alt="" coords="1044,435, 1043,438, 1044,437, 1044,439, 1047,439, 1047,440, 1048,442, 1051,442, 1053,444, 1053,446, 1054,448, 1056,449, 1058,451, 1059,452, 1060,454, 1061,456, 1062,457, 1064,459, 1065,462, 1062,461, 1061,461, 1060,461, 1059,461, 1057,460, 1055,460, 1054,461, 1052,462, 1050,462, 1048,461,1045,463, 1042,464, 1040,464, 1039,465, 1038,467, 1034,466, 1032,466, 1031,466, 1028,465, 1027,463, 1023,461, 1021,461, 1019,463, 1018,465, 1017,466, 1018,468, 1017,471, 1014,471, 1012,470, 1009,471, 1006,472, 1006,475, 1004,479, 1004,475, 1001,473, 999,470, 999,468, 997,465, 996,461, 995,460, 996,458, 996,456, 995,455,996,454, 997,452, 1000,447, 1001,446, 1003,446, 1005,446, 1006,444, 1008,446, 1010,445, 1014,443, 1018,443, 1020,439, 1019,438, 1020,437, 1022,437, 1029,434, 1032,431, 1034,429, 1035,427, 1038,425, 1041,427, 1044,431, 1044,435" href="cf">
				<area shape="poly" alt="" coords="855,450, 857,448, 860,445, 860,443, 862,441, 862,441, 862,440, 863,441, 865,440, 866,441, 866,442, 866,443, 866,447, 868,448, 870,446, 871,445, 872,447, 872,451, 871,452, 871,453, 872,453, 873,454, 875,454, 876,456, 877,458, 877,461, 877,466, 874,465, 872,464, 867,461, 862,456, 860,455,859,453, 857,452, 855,450, 855,450" href="lr">
				<area shape="poly" alt="" coords="850,323, 851,322, 855,321, 860,319, 864,315, 868,311, 869,308, 869,306, 868,305, 869,302, 871,297, 872,294, 874,292, 878,288, 883,286, 887,281, 889,276, 891,274, 892,273, 893,274, 895,276, 900,277, 903,277, 905,276, 905,277, 906,277, 908,278, 909,279, 911,280, 911,282, 911,283, 911,286,911,288, 912,290, 912,292, 914,293, 913,295, 913,296, 908,296, 904,297, 901,299, 900,299, 900,300, 900,302, 901,303, 898,304, 896,305, 894,306, 892,309, 888,310, 885,311, 883,311, 881,312, 879,313, 878,314, 876,316, 874,318, 874,323, 868,324, 857,323, 850,323, 850,323" href="ma">
				<area shape="poly" alt="" coords="1092,576, 1094,573, 1094,571, 1095,569, 1097,568, 1096,566, 1096,563, 1096,560, 1097,558, 1097,554, 1096,553, 1096,552, 1094,551, 1094,550, 1096,550, 1097,551, 1099,552, 1101,555, 1101,557, 1101,560, 1101,563, 1100,565, 1100,567, 1101,571, 1101,572, 1102,575, 1103,576, 1103,579, 1104,578,1106,580, 1106,579, 1105,576, 1104,575, 1106,577, 1108,580, 1109,584, 1109,589, 1108,590, 1106,591, 1105,593, 1106,596, 1106,597, 1104,597, 1104,595, 1101,591, 1101,589, 1102,587, 1102,585, 1101,581, 1099,581, 1098,581, 1096,579, 1094,578, 1092,576, 1092,576" href="mw">
				<area shape="poly" alt="" coords="877,231, 877,231, 877,230, 878,229, 882,227, 882,227, 882,227, 883,226, 884,226, 885,225, 886,226, 888,227, 890,226, 893,227, 895,227, 899,227, 903,227, 906,228, 908,227, 911,228, 914,228, 915,229, 915,230, 916,229, 920,231, 921,231, 922,232, 925,232, 925,231, 928,232, 929,233, 930,233,932,234, 933,233, 935,234, 937,233, 938,234, 937,235, 937,236, 936,238, 933,239, 932,240, 929,241, 925,243, 924,245, 922,248, 920,251, 921,254, 921,257, 918,258, 917,260, 917,262, 917,262, 916,263, 914,263, 911,266, 910,267, 909,268, 907,268, 905,268, 899,268, 897,269, 894,270, 893,272, 892,272, 890,271, 889,270, 888,269,889,267, 888,267, 887,266, 886,265, 885,265, 883,265, 883,263, 884,262, 884,260, 886,259, 884,257, 886,254, 885,252, 884,251, 884,250, 886,250, 886,249, 887,247, 887,246, 888,245, 888,243, 887,242, 889,241, 891,238, 889,238, 889,236, 886,236, 884,237, 882,237, 881,237, 882,236, 881,235, 880,236, 878,237, 880,234, 878,235,879,233, 878,233, 879,232, 878,233, 879,231, 877,231, 877,231" href="fr">
				<area shape="poly" alt="" coords="916,424, 920,425, 922,425, 922,429, 924,432, 925,436, 926,439, 926,448, 925,450, 926,452, 927,454, 924,455, 922,454, 920,452, 921,448, 920,446, 920,444, 920,442, 921,441, 919,439, 920,436, 920,435, 918,435, 919,434, 919,431, 918,429, 917,426, 917,425, 916,424, 916,424" href="tg">
				<area shape="poly" alt="" coords="825,402, 824,403, 826,401, 829,397, 830,394, 832,392, 835,392, 837,391, 840,391, 842,392, 845,394, 847,397, 848,398, 849,400, 851,401, 853,403, 852,404, 853,406, 853,408, 853,409, 854,410, 854,411, 855,411, 856,412, 856,414, 856,417, 854,417, 851,417, 848,416, 847,415, 846,415, 837,415,835,416, 832,416, 829,417, 828,417, 827,416, 829,416, 831,415, 833,416, 834,416, 835,414, 834,415, 832,415, 830,415, 828,414, 828,416, 828,415, 828,413, 830,412, 833,412, 833,411, 836,411, 837,410, 842,411, 843,410, 841,410, 839,409, 838,408, 836,408, 835,408, 834,409, 829,409, 828,409, 829,408, 829,407, 828,408, 830,406,828,408, 825,402, 825,402" href="sn">
				<area shape="poly" alt="" coords="1073,508, 1074,504, 1077,501, 1078,500, 1079,501, 1081,499, 1082,502, 1084,506, 1081,507, 1079,506, 1077,509, 1075,509, 1074,509, 1073,508, 1073,508" href="rw">
				<area shape="poly" alt="" coords="977,516, 979,514, 980,514, 981,515, 981,513, 980,512, 980,510, 979,510, 979,507, 981,507, 982,507, 984,506, 984,504, 986,504, 987,507, 990,507, 991,505, 992,508, 994,506, 994,504, 995,502, 995,499, 995,496, 993,495, 993,494, 992,493, 992,492, 993,489, 995,488, 994,486, 992,484, 988,485,988,482, 989,479, 991,479, 995,479, 997,479, 998,480, 1004,482, 1004,480, 1005,478, 1006,475, 1006,473, 1007,471, 1009,471, 1012,470, 1015,471, 1017,471, 1017,472, 1015,477, 1015,482, 1014,485, 1013,488, 1013,490, 1013,492, 1012,497, 1008,501, 1007,504, 1004,507, 1004,512, 1004,515, 1002,517, 1000,518, 999,519, 997,522,995,522, 995,520, 994,519, 993,519, 991,519, 991,521, 989,522, 988,520, 987,520, 986,520, 984,521, 982,523, 981,522, 981,521, 977,516, 977,516" href="cg">
				<area shape="poly" alt="" coords="1074,509, 1075,508, 1076,509, 1079,506, 1080,507, 1082,507, 1082,509, 1082,510, 1083,511, 1083,513, 1082,514, 1081,514, 1081,516, 1080,517, 1078,519, 1077,519, 1075,516, 1075,513, 1075,511, 1074,509, 1074,509" href="bi">
				<area shape="poly" alt="" coords="1059,673, 1060,676, 1061,678, 1063,679, 1064,679, 1066,677, 1068,676, 1070,675, 1071,673, 1072,671, 1070,669, 1068,667, 1066,668, 1065,669, 1063,669, 1061,672, 1059,673, 1059,673" href="ls">
				<area shape="poly" alt="" coords="969,483, 969,483, 969,482, 970,481, 970,478, 972,479, 978,479, 978,486, 972,486, 970,486, 970,486, 967,485, 969,483, 969,483" href="gq">
				<area shape="poly" alt="" coords="1077,525, 1078,523, 1077,522, 1077,519, 1079,518, 1081,516, 1081,514, 1082,514, 1083,512, 1083,511, 1082,509, 1082,507, 1083,506, 1082,502, 1081,500, 1082,499, 1089,499, 1089,501, 1088,502, 1088,504, 1088,506, 1088,507, 1089,509, 1090,509, 1090,508, 1091,506, 1092,507, 1093,507, 1094,508,1094,510, 1094,510, 1095,510, 1094,508, 1097,508, 1099,506, 1099,505, 1098,506, 1096,505, 1098,505, 1097,504, 1097,504, 1098,503, 1098,503, 1099,502, 1099,501, 1100,502, 1100,500, 1100,500, 1100,500, 1101,499, 1117,509, 1120,512, 1120,513, 1121,515, 1125,518, 1127,520, 1128,521, 1127,526, 1126,528, 1126,529, 1126,530, 1127,532,1129,534, 1130,535, 1129,536, 1128,540, 1129,540, 1129,542, 1129,544, 1129,547, 1130,548, 1130,549, 1131,551, 1131,552, 1131,553, 1132,555, 1133,555, 1134,557, 1128,561, 1126,561, 1124,562, 1121,561, 1119,564, 1116,563, 1115,563, 1113,564, 1111,563, 1109,563, 1105,563, 1104,562, 1103,560, 1103,558, 1103,554, 1101,551, 1099,552,1097,551, 1095,550, 1092,549, 1092,548, 1091,548, 1089,548, 1088,547, 1088,547, 1087,546, 1085,545, 1084,542, 1082,539, 1081,535, 1079,532, 1078,532, 1077,531, 1078,528, 1077,525, 1077,525" href="tz">
				<area shape="poly" alt="" coords="1048,309, 1048,307, 1048,304, 1048,302, 1049,299, 1051,300, 1055,300, 1060,301, 1061,302, 1063,302, 1064,302, 1065,303, 1069,304, 1073,302, 1074,301, 1076,302, 1075,301, 1076,300, 1079,300, 1077,301, 1079,300, 1079,299, 1082,300, 1084,300, 1085,301, 1084,300, 1084,302, 1085,303, 1086,302,1086,301, 1089,303, 1090,303, 1093,302, 1096,301, 1100,312, 1099,318, 1098,320, 1097,323, 1096,322, 1094,320, 1092,317, 1090,314, 1088,309, 1087,312, 1089,316, 1092,320, 1093,321, 1094,322, 1093,322, 1094,324, 1096,327, 1096,328, 1096,329, 1097,331, 1098,333, 1102,341, 1104,344, 1107,346, 1105,346, 1106,351, 1105,352, 1104,353,1103,353, 1102,355, 1101,356, 1099,357, 1097,360, 1093,358, 1084,358, 1084,357, 1083,358, 1081,358, 1078,358, 1050,358, 1049,320, 1049,314, 1048,309, 1048,309" href="eg">
				<area shape="rect" alt="" coords="1004,627,1091,705" href="za">
				<area shape="poly" alt="" coords="980,598, 982,597, 984,598, 989,596, 992,598, 997,599, 1014,599, 1017,600, 1021,601, 1027,602, 1029,602, 1031,602, 1033,602, 1045,600, 1047,599, 1049,599, 1052,601, 1050,601, 1048,602, 1045,603, 1043,605, 1041,602, 1036,603, 1030,604, 1029,627, 1024,627, 1023,665, 1022,666, 1021,667, 1020,668,1019,669, 1017,669, 1013,669, 1009,667, 1009,665, 1009,665, 1007,664, 1006,666, 1004,667, 1001,663, 999,660, 998,658, 998,656, 997,653, 997,652, 997,650, 996,648, 996,645, 995,641, 995,637, 994,634, 995,632, 995,631, 993,627, 992,625, 991,623, 987,615, 983,606, 980,598, 980,598" href="na">
				<area shape="poly" alt="" coords="958,284, 959,283, 961,282, 962,280, 963,275, 962,273, 963,271, 962,269, 964,268, 964,267, 965,266, 968,265, 970,264, 970,265, 970,265, 972,266, 972,267, 972,268, 973,268, 975,267, 976,266, 976,268, 973,271, 975,274, 976,276, 974,281, 972,283, 972,285, 973,287, 974,287, 975,288, 976,287,977,288, 977,289, 979,290, 979,293, 978,295, 974,297, 974,298, 972,301, 972,305, 969,308, 967,300, 964,295, 962,292, 961,290, 959,289, 959,287, 958,284, 958,284" href="tn">
				<area shape="poly" alt="" coords="932,444, 932,437, 934,437, 935,434, 936,432, 937,430, 937,429, 938,428, 937,426, 937,424, 936,423, 937,420, 937,417, 938,415, 940,411, 941,409, 944,408, 947,408, 949,408, 952,410, 954,412, 955,413, 956,412, 959,411, 962,412, 962,412, 963,413, 966,414, 969,414, 971,412, 978,411, 981,412,984,412, 986,410, 988,410, 988,409, 990,409, 992,411, 993,412, 993,415, 994,417, 995,417, 996,419, 996,421, 995,423, 993,423, 991,425, 990,428, 990,430, 989,432, 988,434, 986,435, 986,438, 984,440, 983,441, 983,443, 981,447, 981,448, 980,450, 979,452, 978,453, 977,453, 977,451, 975,450, 974,449, 973,450, 971,450, 969,453,966,455, 965,457, 964,461, 963,464, 962,463, 961,462, 962,464, 960,465, 958,465, 958,464, 957,464, 955,464, 955,465, 955,464, 954,464, 955,466, 954,463, 954,466, 953,465, 953,464, 953,465, 953,465, 953,466, 952,465, 952,466, 951,465, 950,465, 949,465, 947,464, 946,461, 946,461, 946,460, 947,459, 946,459, 945,459, 947,458,946,458, 946,457, 945,458, 946,456, 944,457, 940,453, 938,453, 935,453, 938,452, 936,452, 935,453, 932,454, 932,451, 932,449, 932,444, 932,444" href="ng">
				<area shape="poly" alt="" coords="837,425, 838,422, 841,421, 843,421, 844,420, 842,418, 844,417, 844,415, 846,415, 847,415, 848,416, 850,417, 851,417, 853,417, 856,417, 856,419, 859,418, 860,419, 861,419, 863,418, 865,419, 866,418, 867,417, 867,416, 868,416, 869,417, 870,419, 870,420, 871,421, 872,423, 872,424, 871,425,872,425, 873,427, 874,429, 875,430, 874,431, 873,433, 874,434, 875,435, 876,437, 874,439, 876,441, 873,441, 874,443, 873,444, 874,445, 873,446, 872,446, 871,445, 870,447, 868,448, 866,447, 867,445, 866,443, 866,443, 866,441, 865,440, 864,440, 863,440, 861,441, 860,442, 861,439, 860,438, 860,437, 860,436, 858,432, 854,431,852,432, 850,433, 848,435, 847,437, 846,437, 846,436, 846,436, 846,436, 846,435, 845,435, 845,434, 844,434, 844,432, 843,433, 844,432, 842,432, 842,430, 841,431, 840,430, 839,428, 838,428, 839,426, 839,427, 838,427, 839,425, 837,425, 837,425" href="gn">
				<area shape="poly" alt="" coords="989,404, 990,404, 991,402, 992,400, 997,393, 1000,387, 1001,377, 1002,369, 1001,366, 1001,366, 1001,364, 999,361, 998,358, 997,353, 997,352, 1003,349, 1045,373, 1046,396, 1043,396, 1040,397, 1040,400, 1038,403, 1038,406, 1036,408, 1037,410, 1036,412, 1035,413, 1035,415, 1037,415, 1038,416,1038,419, 1038,419, 1038,421, 1039,422, 1041,424, 1040,426, 1038,425, 1037,426, 1036,427, 1034,428, 1034,429, 1031,432, 1029,435, 1025,437, 1021,437, 1019,438, 1019,438, 1020,440, 1018,442, 1017,443, 1014,443, 1010,445, 1008,446, 1006,444, 1005,445, 1004,446, 1001,446, 1000,444, 999,440, 996,438, 994,435, 993,433, 995,431,998,431, 1000,432, 1001,431, 998,424, 998,422, 998,420, 998,419, 997,418, 997,415, 996,415, 995,413, 994,412, 993,412, 990,409, 989,404, 989,404" href="td">
				<area shape="poly" alt="" coords="828,366, 828,360, 829,357, 832,355, 833,352, 833,351, 834,349, 835,347, 834,348, 839,343, 841,336, 845,331, 849,327, 850,324, 850,323, 874,323, 873,333, 856,334, 855,349, 851,351, 849,355, 849,359, 849,362, 829,362, 828,363, 828,366, 828,366" href="eh">
				<area shape="poly" alt="" coords="1095,444, 1096,442, 1098,441, 1101,440, 1101,437, 1101,432, 1101,431, 1101,428, 1102,426, 1104,427, 1105,426, 1105,424, 1105,422, 1106,420, 1108,416, 1109,415, 1111,415, 1111,411, 1112,410, 1113,406, 1114,405, 1115,405, 1117,404, 1118,406, 1120,401, 1121,403, 1122,403, 1124,404, 1126,404,1126,403, 1127,404, 1129,404, 1131,404, 1135,406, 1139,410, 1141,412, 1143,414, 1144,418, 1142,423, 1143,425, 1146,425, 1148,425, 1147,429, 1149,432, 1151,435, 1152,435, 1155,438, 1165,442, 1170,443, 1175,443, 1160,461, 1157,462, 1153,462, 1149,465, 1147,466, 1144,467, 1142,468, 1138,468, 1137,467, 1135,467, 1132,469, 1130,472,1127,471, 1125,470, 1123,470, 1121,469, 1116,466, 1112,465, 1110,463, 1110,460, 1107,460, 1106,458, 1105,454, 1104,452, 1103,451, 1103,450, 1102,450, 1101,449, 1099,446, 1097,445, 1095,444, 1095,444" href="et">
				<area shape="poly" alt="" coords="1035,591, 1035,574, 1036,572, 1038,572, 1046,571, 1046,569, 1046,566, 1046,559, 1048,560, 1048,562, 1050,562, 1053,561, 1054,564, 1056,564, 1058,565, 1061,565, 1062,564, 1063,564, 1064,565, 1065,567, 1067,567, 1069,568, 1071,571, 1073,574, 1074,574, 1076,573, 1076,574, 1077,573, 1077,567,1076,567, 1075,568, 1074,568, 1072,567, 1070,564, 1070,561, 1071,557, 1071,554, 1071,551, 1070,549, 1072,547, 1073,544, 1082,543, 1081,544, 1081,545, 1083,545, 1085,545, 1087,547, 1088,547, 1089,548, 1092,549, 1093,549, 1094,550, 1094,551, 1095,551, 1096,552, 1096,553, 1097,555, 1098,557, 1096,558, 1096,560, 1096,563, 1096,566,1097,568, 1094,571, 1094,573, 1092,576, 1093,577, 1095,578, 1079,584, 1079,586, 1080,588, 1078,588, 1075,588, 1071,591, 1071,593, 1069,594, 1065,597, 1063,601, 1059,603, 1058,602, 1056,602, 1054,601, 1052,601, 1050,599, 1047,599, 1044,600, 1042,600, 1038,596, 1036,594, 1035,591, 1035,591" href="zm">
				<area shape="poly" alt="" coords="919,404, 919,401, 922,401, 924,400, 927,399, 931,399, 933,399, 934,398, 934,398, 936,398, 938,396, 939,393, 940,387, 940,378, 942,375, 948,374, 952,370, 959,364, 973,354, 980,350, 984,349, 988,350, 993,354, 994,354, 997,352, 998,360, 1000,363, 1001,364, 1001,366, 1002,368, 1001,371, 1001,381,1000,385, 1000,389, 998,392, 995,395, 991,402, 990,404, 990,404, 990,409, 989,409, 988,410, 985,412, 981,412, 975,411, 971,412, 969,414, 968,414, 963,412, 959,411, 957,412, 956,412, 954,413, 953,411, 950,409, 947,408, 945,408, 940,410, 940,411, 939,414, 937,417, 937,419, 937,421, 935,419, 932,417, 932,417, 930,418, 930,420,929,418, 929,416, 929,415, 926,415, 924,414, 923,411, 924,411, 922,410, 921,409, 920,407, 919,404, 919,404" href="ne">
				<area shape="poly" alt="" coords="980,598, 981,590, 980,589, 982,588, 982,586, 982,585, 983,581, 984,577, 985,574, 987,572, 988,569, 990,567, 991,559, 990,556, 989,553, 988,551, 988,549, 988,547, 987,548, 988,546, 989,545, 988,542, 987,537, 986,535, 985,533, 984,531, 984,529, 986,529, 988,528, 1000,528, 1005,528, 1007,530,1007,532, 1008,535, 1009,537, 1010,539, 1011,541, 1012,542, 1015,542, 1016,541, 1017,541, 1021,541, 1021,539, 1022,538, 1022,535, 1026,535, 1027,535, 1028,535, 1028,536, 1029,537, 1034,537, 1035,539, 1034,541, 1035,543, 1034,549, 1036,553, 1037,558, 1036,559, 1037,561, 1038,560, 1041,560, 1044,559, 1046,559, 1046,562, 1046,565,1046,568, 1046,571, 1039,572, 1036,572, 1035,574, 1035,577, 1035,584, 1035,591, 1038,595, 1043,600, 1033,602, 1030,602, 1029,602, 1027,602, 1018,601, 1016,599, 1013,599, 993,599, 991,598, 987,596, 983,598, 980,598, 980,598" href="ao">
				<area shape="poly" alt="" coords="1077,499, 1077,496, 1077,492, 1079,489, 1079,488, 1080,486, 1084,482, 1086,480, 1084,478, 1083,478, 1083,476, 1084,472, 1083,471, 1084,470, 1086,469, 1087,470, 1089,470, 1091,471, 1092,470, 1095,469, 1098,469, 1100,467, 1101,469, 1102,469, 1103,471, 1104,475, 1105,477, 1106,479, 1106,482,1105,484, 1104,485, 1102,488, 1101,489, 1100,491, 1099,490, 1098,491, 1098,491, 1097,489, 1096,490, 1096,490, 1095,491, 1094,492, 1093,492, 1093,491, 1092,492, 1092,492, 1091,492, 1089,493, 1089,495, 1088,497, 1089,499, 1087,499, 1087,499, 1085,498, 1080,500, 1078,501, 1078,500, 1076,501, 1077,499, 1077,499" href="ug">
				<area shape="poly" alt="" coords="900,454, 900,449, 901,446, 903,443, 903,438, 903,437, 903,436, 902,432, 902,429, 902,427, 902,425, 911,425, 914,425, 916,425, 917,425, 918,429, 919,430, 919,432, 919,434, 918,435, 920,434, 920,436, 920,438, 919,439, 921,441, 921,442, 920,445, 921,448, 920,449, 920,452, 922,454, 924,455,923,456, 921,457, 920,456, 918,455, 920,456, 920,457, 919,457, 914,460, 910,461, 908,462, 907,463, 905,463, 903,462, 901,461, 902,461, 902,459, 901,458, 900,454, 900,454" href="gh">
				<area shape="poly" alt="" coords="1138,478, 1138,475, 1140,473, 1144,467, 1149,465, 1154,462, 1157,462, 1160,462, 1175,443, 1170,443, 1164,441, 1157,439, 1152,436, 1151,435, 1150,433, 1148,431, 1147,427, 1149,422, 1153,427, 1159,428, 1162,427, 1165,426, 1169,426, 1172,424, 1175,424, 1177,423, 1180,424, 1183,422, 1187,422,1189,419, 1191,420, 1192,421, 1192,425, 1191,429, 1192,428, 1193,428, 1192,429, 1191,430, 1190,435, 1188,438, 1186,443, 1185,444, 1185,446, 1183,450, 1181,456, 1177,461, 1174,467, 1170,472, 1160,481, 1156,484, 1151,489, 1147,494, 1145,497, 1144,498, 1143,498, 1141,503, 1139,499, 1138,494, 1138,478, 1138,478" href="so">
				<area shape="poly" alt="" coords="983,528, 984,527, 984,524, 985,522, 988,520, 989,522, 991,521, 991,519, 993,519, 995,519, 994,520, 995,522, 997,522, 999,519, 1000,518, 1002,517, 1004,514, 1004,510, 1004,507, 1006,504, 1008,501, 1010,499, 1012,496, 1013,493, 1013,490, 1013,486, 1014,483, 1015,479, 1017,473, 1017,469, 1017,468,1017,466, 1018,465, 1020,462, 1023,461, 1024,462, 1028,465, 1030,465, 1031,466, 1032,466, 1034,466, 1035,467, 1038,467, 1039,465, 1041,463, 1042,464, 1044,464, 1046,463, 1048,461, 1050,462, 1054,461, 1054,460, 1056,460, 1058,461, 1059,461, 1061,461, 1064,461, 1066,463, 1067,464, 1069,466, 1071,465, 1074,465, 1076,464, 1078,465,1079,467, 1081,468, 1082,470, 1083,471, 1084,472, 1083,473, 1083,477, 1084,478, 1086,480, 1082,485, 1080,487, 1079,487, 1078,490, 1077,493, 1077,495, 1077,498, 1077,501, 1075,502, 1074,505, 1073,507, 1074,510, 1075,513, 1074,516, 1074,519, 1074,518, 1075,517, 1074,522, 1075,525, 1075,528, 1074,529, 1077,534, 1079,536, 1080,540,1081,541, 1082,543, 1073,544, 1072,547, 1070,549, 1071,551, 1071,554, 1071,557, 1071,559, 1070,561, 1070,564, 1073,567, 1075,568, 1077,567, 1077,573, 1077,574, 1076,573, 1074,574, 1072,574, 1071,572, 1070,570, 1069,568, 1067,567, 1065,567, 1064,565, 1063,564, 1062,564, 1061,566, 1058,565, 1056,564, 1055,564, 1053,563, 1053,561,1050,562, 1048,562, 1048,560, 1047,559, 1046,559, 1044,559, 1042,560, 1039,560, 1038,560, 1037,561, 1036,559, 1037,558, 1036,553, 1034,549, 1035,543, 1034,541, 1035,538, 1033,537, 1029,537, 1028,536, 1028,535, 1027,535, 1026,535, 1022,535, 1022,537, 1021,539, 1021,541, 1018,541, 1015,542, 1012,542, 1009,538, 1009,537, 1008,535,1007,532, 1007,529, 1005,528, 995,528, 988,528, 985,529, 983,528, 983,528" href="cd">
				<area shape="poly" alt="" coords="852,402, 854,401, 855,398, 857,398, 859,400, 863,398, 866,398, 867,397, 870,398, 873,398, 884,398, 888,398, 889,395, 889,392, 888,389, 884,340, 893,340, 921,361, 924,365, 925,366, 926,366, 927,368, 929,369, 930,369, 931,370, 935,371, 935,374, 935,376, 940,375, 940,389, 940,392, 940,392,939,394, 938,396, 937,397, 936,398, 934,398, 930,399, 927,399, 925,399, 923,400, 921,401, 919,401, 919,401, 917,401, 915,401, 913,401, 910,403, 907,404, 907,405, 906,406, 904,405, 902,408, 902,409, 900,409, 900,411, 899,412, 896,410, 895,412, 895,413, 895,414, 893,415, 892,419, 890,419, 888,420, 889,421, 889,424, 888,425,888,428, 886,429, 885,430, 884,429, 884,427, 883,428, 882,427, 881,429, 880,430, 877,429, 876,429, 874,430, 874,429, 873,428, 873,425, 871,425, 872,423, 871,421, 870,420, 869,418, 869,416, 867,416, 867,417, 865,419, 863,418, 861,419, 860,419, 859,418, 857,419, 856,418, 856,416, 856,414, 856,411, 854,411, 853,409, 853,407,853,405, 852,404, 852,402, 852,402" href="ml">
				<area shape="poly" alt="" coords="846,437, 847,437, 848,436, 850,433, 853,432, 857,432, 859,434, 860,436, 860,437, 860,437, 861,439, 860,442, 861,441, 862,442, 860,444, 859,446, 857,447, 855,450, 853,449, 850,447, 850,447, 852,446, 850,445, 849,445, 848,445, 847,442, 846,440, 847,441, 848,440, 848,439, 846,439, 846,440,847,438, 846,437, 846,437" href="sl">
				<area shape="poly" alt="" coords="1101,499, 1101,497, 1103,495, 1103,494, 1105,494, 1103,493, 1102,494, 1101,493, 1100,491, 1101,489, 1104,485, 1105,484, 1106,482, 1106,480, 1105,477, 1104,474, 1103,472, 1103,471, 1103,470, 1102,469, 1101,469, 1100,467, 1101,465, 1106,464, 1109,464, 1111,464, 1112,465, 1116,466, 1121,469,1123,470, 1126,470, 1130,472, 1132,469, 1136,467, 1139,468, 1141,468, 1143,468, 1140,473, 1138,477, 1138,490, 1138,495, 1140,500, 1141,503, 1138,504, 1138,505, 1137,504, 1138,507, 1137,506, 1137,507, 1135,508, 1134,510, 1133,513, 1132,515, 1131,517, 1129,521, 1128,521, 1126,519, 1120,514, 1120,513, 1120,511, 1118,510, 1101,499,1101,499" href="ke">
				<area shape="poly" alt="" coords="1023,644, 1024,627, 1029,627, 1030,604, 1034,604, 1038,603, 1041,602, 1043,605, 1047,602, 1048,602, 1050,601, 1052,601, 1052,602, 1054,605, 1055,607, 1056,609, 1060,614, 1062,615, 1062,618, 1064,618, 1065,620, 1065,622, 1067,624, 1071,625, 1072,627, 1073,628, 1071,629, 1067,631, 1064,634,1063,635, 1061,636, 1060,639, 1058,642, 1055,643, 1054,645, 1053,648, 1050,650, 1047,650, 1045,649, 1043,648, 1039,648, 1037,651, 1036,653, 1034,655, 1033,655, 1033,656, 1031,657, 1029,656, 1027,657, 1027,654, 1027,650, 1026,646, 1023,644, 1023,644" href="bw">
				<area shape="poly" alt="" coords="963,463, 964,461, 965,458, 966,456, 968,453, 970,452, 971,450, 973,450, 974,449, 976,451, 977,452, 978,453, 979,451, 981,449, 981,447, 983,443, 983,441, 984,440, 985,440, 986,438, 986,435, 988,433, 989,431, 990,430, 990,428, 991,426, 992,423, 994,423, 996,422, 996,420, 996,418, 994,417,993,415, 993,412, 995,413, 996,415, 997,418, 998,418, 998,422, 998,425, 1001,431, 999,431, 997,432, 993,432, 994,435, 998,439, 999,441, 1001,445, 1000,447, 998,450, 998,452, 997,454, 995,455, 995,456, 996,458, 995,460, 996,461, 997,464, 998,466, 999,468, 999,470, 1001,473, 1004,474, 1004,475, 1004,479, 1004,481, 1004,482,1001,481, 999,480, 997,480, 996,479, 993,479, 990,479, 989,479, 988,478, 985,479, 982,478, 978,478, 978,479, 976,479, 972,479, 970,476, 970,472, 970,470, 969,469, 969,468, 969,467, 968,467, 968,468, 968,469, 967,468, 966,467, 965,464, 964,464, 964,465, 963,464, 963,463, 963,463" href="cm">
				<area shape="poly" alt="" coords="873,326, 874,318, 875,316, 878,314, 880,313, 882,311, 884,312, 885,311, 887,310, 890,309, 894,306, 897,305, 899,303, 900,303, 900,302, 900,300, 900,299, 901,299, 904,297, 908,296, 913,296, 913,295, 914,293, 912,292, 911,290, 911,288, 911,286, 911,284, 911,282, 911,280, 909,278, 912,277,914,276, 915,274, 916,274, 918,273, 919,274, 921,273, 924,270, 928,269, 933,269, 936,268, 937,268, 939,268, 944,267, 946,268, 948,268, 949,267, 952,267, 953,266, 954,266, 957,267, 958,266, 960,267, 961,267, 964,267, 962,269, 963,271, 962,274, 962,280, 959,284, 959,287, 960,290, 962,292, 963,294, 966,296, 967,300, 969,308,968,308, 968,309, 970,313, 970,318, 970,321, 970,324, 970,328, 968,331, 968,334, 970,336, 973,342, 975,342, 978,343, 981,348, 981,349, 952,370, 949,374, 945,374, 941,375, 937,376, 935,375, 935,373, 935,371, 931,370, 930,369, 927,368, 926,366, 924,366, 924,364, 922,362, 919,360, 911,354, 881,331, 873,326, 873,326" href="dz">
				<area shape="poly" alt="" coords="871,453, 872,451, 872,449, 872,446, 873,446, 874,445, 874,443, 873,441, 874,441, 876,441, 874,439, 876,437, 875,435, 873,434, 874,431, 875,430, 876,429, 877,429, 880,430, 881,429, 882,427, 883,428, 884,427, 885,430, 885,429, 888,428, 888,429, 889,429, 891,432, 894,434, 897,432, 900,432,902,435, 903,434, 902,437, 903,439, 904,442, 902,444, 901,447, 900,451, 901,455, 901,458, 902,459, 902,461, 901,461, 902,461, 900,461, 900,460, 898,461, 897,460, 896,460, 897,460, 897,460, 896,460, 894,460, 891,461, 893,460, 895,460, 891,461, 890,461, 888,461, 890,461, 885,462, 881,464, 878,465, 876,465, 876,463, 877,460,876,456, 875,455, 873,454, 872,453, 871,453, 871,453" href="ci">
				<area shape="poly" alt="" coords="1146,627, 1147,632, 1148,635, 1148,637, 1148,641, 1149,644, 1152,646, 1151,646, 1152,647, 1153,647, 1156,649, 1159,648, 1162,646, 1163,646, 1165,646, 1166,644, 1167,642, 1168,638, 1170,632, 1173,624, 1176,617, 1176,614, 1177,613, 1179,608, 1181,601, 1181,598, 1182,595, 1183,593, 1183,592,1183,591, 1183,588, 1183,587, 1185,590, 1187,588, 1187,586, 1186,584, 1186,579, 1184,570, 1183,571, 1183,570, 1183,569, 1181,567, 1181,567, 1182,566, 1181,566, 1179,569, 1179,572, 1177,574, 1176,575, 1176,577, 1175,575, 1174,576, 1174,578, 1174,579, 1174,579, 1173,580, 1173,581, 1174,583, 1173,582, 1171,584, 1171,582, 1170,583,1169,585, 1170,586, 1168,587, 1168,586, 1166,587, 1165,588, 1165,589, 1166,590, 1164,589, 1163,589, 1161,589, 1161,590, 1159,591, 1159,590, 1157,591, 1155,591, 1154,593, 1154,596, 1152,598, 1152,600, 1152,604, 1153,607, 1153,610, 1153,613, 1154,615, 1152,617, 1150,620, 1149,622, 1148,624, 1146,627, 1146,627" href="mg">
				<area shape="poly" alt="" coords="968,309, 969,307, 971,305, 972,303, 972,300, 974,298, 976,296, 979,294, 979,293, 979,290, 982,291, 985,292, 989,292, 992,292, 995,294, 997,294, 999,297, 1000,300, 1006,302, 1013,305, 1018,307, 1023,303, 1022,300, 1022,297, 1025,294, 1028,292, 1031,291, 1034,291, 1037,293, 1038,295, 1041,296,1044,297, 1047,297, 1049,299, 1048,301, 1048,304, 1047,307, 1048,311, 1049,317, 1050,370, 1045,370, 1045,373, 1003,349, 994,354, 991,352, 985,349, 982,349, 980,346, 977,343, 975,342, 973,342, 971,340, 970,336, 968,334, 968,332, 970,330, 970,328, 970,324, 970,321, 970,317, 970,312, 968,309, 968,309" href="ly">
				<area shape="poly" alt="" coords="888,429, 888,425, 889,424, 889,422, 888,420, 890,419, 892,419, 894,415, 894,414, 895,413, 895,412, 896,410, 899,412, 900,411, 900,409, 902,409, 902,407, 904,405, 906,406, 907,405, 908,404, 911,402, 913,401, 915,401, 917,400, 918,401, 919,403, 919,404, 920,407, 921,409, 924,411, 923,411,924,413, 926,415, 928,415, 929,416, 929,418, 930,419, 929,421, 928,422, 926,423, 924,423, 922,425, 918,425, 916,424, 914,426, 913,425, 908,425, 902,425, 902,427, 902,430, 902,433, 902,435, 900,432, 897,432, 894,434, 891,432, 891,432, 889,430, 888,429, 888,429" href="bf">
				<area shape="poly" alt="" coords="1047,440, 1047,441, 1050,442, 1051,443, 1052,444, 1053,445, 1053,447, 1057,449, 1058,451, 1059,452, 1059,453, 1060,454, 1062,456, 1064,458, 1064,460, 1065,462, 1066,463, 1068,465, 1069,466, 1072,465, 1075,465, 1076,464, 1077,464, 1078,466, 1079,467, 1081,468, 1082,470, 1083,471, 1086,469,1087,470, 1089,469, 1091,471, 1092,470, 1095,469, 1097,469, 1099,468, 1103,464, 1111,464, 1110,462, 1110,460, 1109,460, 1107,460, 1107,458, 1106,457, 1105,454, 1104,451, 1102,450, 1100,447, 1098,445, 1095,445, 1095,444, 1096,443, 1097,441, 1099,441, 1101,439, 1101,436, 1101,434, 1099,434, 1099,432, 1100,431, 1097,427, 1095,426,1096,425, 1095,422, 1095,420, 1096,417, 1093,417, 1093,418, 1089,419, 1091,420, 1091,422, 1091,424, 1089,427, 1088,429, 1085,432, 1084,432, 1083,432, 1082,433, 1081,431, 1078,429, 1076,430, 1076,432, 1074,433, 1072,434, 1072,435, 1068,435, 1067,433, 1064,433, 1063,433, 1060,434, 1059,434, 1058,432, 1058,431, 1057,431, 1057,430,1056,429, 1054,429, 1052,429, 1052,431, 1051,432, 1050,433, 1049,434, 1048,434, 1048,434, 1045,434, 1044,436, 1043,438, 1044,437, 1044,439, 1047,440, 1047,440" href="ss">
				<area shape="poly" alt="" coords="1050,433, 1051,432, 1052,431, 1052,429, 1054,429, 1056,429, 1057,430, 1057,431, 1058,431, 1058,432, 1059,434, 1060,434, 1063,433, 1064,433, 1067,433, 1068,435, 1072,435, 1072,434, 1074,433, 1076,432, 1076,430, 1078,429, 1081,431, 1082,433, 1083,432, 1084,432, 1085,432, 1088,429, 1089,427,1091,424, 1091,422, 1091,420, 1089,419, 1093,418, 1093,417, 1096,417, 1095,420, 1095,422, 1096,425, 1095,426, 1097,427, 1100,431, 1099,432, 1099,434, 1101,434, 1101,432, 1101,432, 1102,429, 1102,426, 1104,427, 1105,426, 1105,424, 1105,423, 1106,420, 1108,416, 1111,415, 1111,412, 1112,409, 1112,404, 1112,400, 1114,395, 1115,393,1115,391, 1115,388, 1117,388, 1119,386, 1122,385, 1123,382, 1121,381, 1120,380, 1118,378, 1116,376, 1115,373, 1115,367, 1114,364, 1115,364, 1113,360, 1112,357, 1109,354, 1106,351, 1104,353, 1102,354, 1100,357, 1098,358, 1096,360, 1094,358, 1089,358, 1084,358, 1084,357, 1084,357, 1081,358, 1071,358, 1050,358, 1050,370, 1045,370,1046,396, 1043,396, 1041,397, 1040,398, 1040,400, 1038,403, 1038,406, 1036,408, 1036,410, 1036,412, 1034,414, 1036,415, 1037,415, 1037,417, 1038,419, 1038,419, 1038,421, 1040,423, 1040,426, 1042,428, 1045,433, 1045,434, 1046,434, 1048,434, 1048,434, 1049,434, 1050,433, 1050,433" href="sd">
			</map>
	</div>
	<div id='footer'>
		&copy; 2013 Ian Dahlberg 
	</div>
</div>

<!-- end wrapper -->
</body>
</html>
