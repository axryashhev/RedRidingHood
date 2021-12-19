<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>RedRidingHood</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="fonts/fonts.css"/>
		<link rel="stylesheet" href="css/game_menu.css"/>
	</head>
<body>

		<h1 class="main-font title">Red Riding Hood</h1>
		<ul id="main-menu"></ul>
		<div id="loading">
			<img id="loading-img" width="360" src="Background/giphy%20(2).gif"/>
			<h2 class="main-font">Loading...</h2>
		</div>

		<div id="credits" style="display:none;margin-left:40px;margin-top:60px;">

            <?php
            // Соединение, выбор базы данных
            $dbconn = pg_connect("host=localhost dbname=postgres user=artemhrasev password=")
            or die('Не удалось соединиться: ' . pg_last_error());

            // Выполнение SQL-запроса
            $query = 'SELECT * FROM web.game';
            $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

            // Вывод результатов в HTML
            echo "<table>\n";
            echo "\t\t <tr>id &nbsp;&nbsp; name &nbsp;&nbsp; points</tr><br>\n";
            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                echo "\t<tr>\n";
                foreach ($line as $col_value) {
                    echo "\t\t<td>$col_value&nbsp;&nbsp;</td>\n";
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";

            // Очистка результата
            pg_free_result($result);

            // Закрытие соединения
            pg_close($dbconn);
            ?>

			<ul class="sub-menu" id="back-credits" style="top:0px;">
				<li class="back">Back</li>
			</ul>

		</div>

		<div id="assets">
			<audio id="sfx-background" loop>
				<source src="Audio/Breakfast_On_Pluto.ogg"></source>
				<source src="Audio/Breakfast_On_Pluto.mp3"></source>
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
<script src="game_menu.js"></script>

</html>
