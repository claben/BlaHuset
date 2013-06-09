<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="sv">
<head>
	<title>Blå Huset</title>
	<link rel="stylesheet" type="text/css" href="css/StyleSheet.css"/>
	<script src="css/JavaScript.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqCpTEQciJTJtvab0vX_ucZeyvgCS-53I&sensor=false"></script>
	<meta charset="UTF-8">
</head>
<body>
	<div class="content">
		<header>
			<div style="height:120px;">
			 <a href="/home"><img src="css/banner3.jpg"/></a>
			</div>
			 <div class="menu">
                    <button class="menuButton" onclick="location.href='home' ">Hem</button>
                    <button class="menuButton" onclick="location.href='konstnarer'">Konstnärer</button>
                    <button class="menuButton" onclick="location.href='utstallningar'">Utställningar</button>
                    <button class="menuButton" onclick="location.href='galleri'">Bildgalleri</button>
                    <button class="menuButton" onclick="location.href='hitta'">Hitta</button>
                    <button class="menuButton" onclick="location.href='kontakt'">Kontakt</button>
             </div>
		</header>
		<section class="page">
			<?php include($_GET['page'].'.php'); ?>
		</section>
		<footer style="height:25px;">
		Copyright © Blå Huset 2013
		</footer>
	</div>
</body>
</html>
