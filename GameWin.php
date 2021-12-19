<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>You VICTORY!</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="fonts/fonts.css"/>
		<link rel="stylesheet" href="css/game_win.css"/>

		<script language="javascript" type="text/javascript">
			function OnLoad() {
				const paramValue = window.location.href.split("?")[1].split("=")[1];
				// document.getElementById("points").innerHTML = paramValue;
                fetch('database.php?points='+paramValue);
			}
		</script>

	</head>
    <body onload="OnLoad()">

    <div class="div-title">
		<h1 class="main-font title">You VICTORY!</h1>
    </div>

	<h1 class="sub-menu">You points:

    <?php
        error_reporting(0);

        $points = $_GET["points"];

        $points = is_numeric($points) ? $points : 0;

        echo '<b id="points">'. $points .'</b>';
    ?>

    </h1><br>
    <br>

	<a class="sub-menu" href="game.html">Try again!</a><br>
    <a class="sub-menu" href="index.php">Go to main menu!</a>

	<div id="assets">
		<audio id="sfx-background">
			<source src="sound/victory.ogg"></source>
			<source src="sound/victory.mp3"></source>
		</audio>
		<audio id="sfx-select">
			<source src="sound/menu_select_1.ogg"></source>
			<source src="sound/menu_select_1.mp3"></source>
		</audio>
		<audio id="sfx-move">
			<source src="sound/menu_move_1.ogg"></source>
			<source src="sound/menu_move_1.mp3"></source>
		</audio>
	</div>

</body>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="game_over.js"></script>

</html>
