<!DOCTYPE HTML>
<html>
	<head>
		<title>GeoQuiz</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../../assets/js/jquery.imagemapster.min.js"></script>
	<script src="../../assets/js/jquery.easing.1.3.js"></script>

	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" media="screen" href="../../assets/css/geoquiz_style.css" /> 

	<script type="text/javascript" src="../../assets/js/cssrefresh.js"></script>

<?php
	if(isset($quiz) && $quiz) require('script.php');
	if(isset($study_guide) && $study_guide) require('study_guide_script.php');
?>

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
					<li <? if (uri_string() == 'home') echo "class='current-menu-item'"; ?>><a href="<? echo base_url('home'); ?>">HOME<i><b></b></i></a></li>
					<li <? if (uri_string() == 'quiz') echo "class='current-menu-item'"; ?>><a href="<? echo base_url('quiz'); ?>">QUIZ<i><b></b></i></a></li>
					<li <? if (uri_string() == 'scores') echo "class='current-menu-item'"; ?>><a href="<? echo base_url('scores'); ?>">HIGH SCORES<i><b></b></i></a></li>
					<li <? if (uri_string() == 'quiz/study_guide') echo "class='current-menu-item'"; ?>><a href="<? echo base_url('quiz/study_guide'); ?>">STUDY GUIDE<i><b></b></i></a></li>
<?php				
				if($this->session->userdata('logged_in') == 1)
				{	
					echo "<li ";
					if (uri_string() == 'login') echo "class='current-menu-item'";
					echo "><a href='" . base_url('login/logout') . "'>LOG OUT<i><b></b></i></a></li>";
				}	
				else
				{
					echo "<li ";
					if (uri_string() == 'register') echo "class='current-menu-item'";
					echo "><a href='" . base_url('register') . "'>REGISTER<i><b></b></i></a></li>";
					echo "<li ";
					if (uri_string() == 'login') echo "class='current-menu-item'";
					echo "><a href='" . base_url('login') . "'>LOG IN<i><b></b></i></a></li>";
				}	
?>					
				</ul>
				<div id="combo-holder"></div>
			</div>
		</nav>
		<!-- ends nav -->
		
	</header>
