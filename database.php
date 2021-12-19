<?php

$user_name = get_current_user();

$points = $_GET["points"];

$dbconn = pg_connect("host=localhost dbname=postgres user=artemhrasev password=")
or die('Не удалось соединиться: ' . pg_last_error());

// INSERT INTO web.game (id, name, points) VALUES (0, 'test', 32);

// Выполнение SQL-запроса
$query = "INSERT INTO web.game (name, points) VALUES ('".$user_name."', $points)";


$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

// Очистка результата
pg_free_result($result);

// Закрытие соединения
pg_close($dbconn);

?>
