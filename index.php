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
/* получение исходных параметров */
$input = file($data);
/* var_dump($input[1]); */
echo $input[1];
?>
</body>
</html>
