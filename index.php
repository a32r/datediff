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
var_dump($month);
/* получение исходных параметров */
$input = fopen($data,"rt") or die("Ошибка открытия файла");
?>
</body>
</html>
