<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Тестовое задание Яндекс</title>
</head>
<body>

<?php

/* определение переменных */
$data = "input.txt";
/* массив месяцев года по количеству дней */
$month = [
	1 => 31,
	2 => 28,
	3 => 31,
	4 => 30,
	5 => 31,
	6 => 30,
	7 => 31,
	8 => 31,
	9 => 30,
	10 => 31,
	11 => 30,
	12 => 31,
];

/* определение функций */
function getSeconds($str) {
	global $month;
	$input = array_map('intval', explode(" ",$str));
	$year2seconds = $input[0] * 365 * 24 * 60 * 60;
	$month2seconds = array_sum(array_slice($month, 0, $input[1] - 1)) * 24 * 60 * 60;
	$days2seconds = $input[2] * 24 * 60 * 60;
	$hours2seconds = $input[3] * 60 * 60;
	$minutes2seconds = $input[4] * 60;
	$seconds = $input[5];
	return $year2seconds + $month2seconds + $days2seconds + $hours2seconds + $minutes2seconds + $seconds;
}

/* получение исходных параметров */
$input = file($data);

$secondsDiff = getSeconds($input[1]) - getSeconds($input[0]);
$days = intdiv($secondsDiff, 86400);
$remainder = $secondsDiff % 86400;

echo $days . " " . $remainder;

?>

</body>
</html>
