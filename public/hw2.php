<?php
//Задание 1

$a = 7;
$b = 10;
if($a >= 0 && $b >= 0)
	echo $a - $b;
elseif($a < 0 && $b < 0)
	echo $a * $b;
else
	echo $a + $b;

?>


<?php
//Задание 3

function sum($a, $b){
	return $a + $b;
}

function subtraction($a, $b){
	return $a - $b;
}

function multiple($a, $b){
	return $a * $b;
}

function division($a, $b){
	return $a / $b;
}

?>

<?php
//Задание 4

function mathOperation($arg1, $arg2, $operation){
	switch($operation){
		case 'sum':
		return $arg1 + $arg2;
		break;
		case 'subtraction':
		return $arg1 - $arg2;
		break;
		case 'multiple':
		return $arg1 * $arg2;
		break;
		case 'division':
		return $arg1 / $arg2;
		break;
	}
}
echo mathOperation(5, 8, 'multiple');

?>

<?php
// Задание 5
    $head = 'Lesson 1';
    $content = 'Hello, world!';

 ?>

<title><?php echo ($head); ?></title>
<style type="text/css">
	footer {
		display: flex;
		background-color: D3D3D3;
        height: 50px;
        align-items: center;
        justify-content: center;
	}
</style>
<h1><?php echo ($content); ?></h1>
<footer><?php echo (date("Y")); ?></footer>

<?php
//Задание 6

function power($val, $pow){
	if($pow === 0)
		return 1;
	else
		return $val * power($val, $pow - 1);
}
echo power(5, 3)

?>