<?php
// Задание 2
$name = "Maria";
$question = "How are You? <br>";
$userAge = "How old are You?";
echo "Hello, $name! $question $userAge <br>";

define('MY_CONST', 100);
echo MY_CONST;
?>

<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "<br> Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>

<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3 <br>";
?>

<?php
$a = 1;
echo "$a";
echo '$a';
?>

<?php
$a = 10;
$b = (boolean) $b;
?>

<?php
$a = '<br> Hello,';
$b = 'world <br>';
$c = $a . $b;
echo $c;
?>

<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
?>

<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' .$a;
$a = 0;
echo $a++;  // Постинкремент
echo ++$a;  // Преинкремент
echo $a--;  // Постдекремент
echo --$a . '<br>';  // Предекремент
?>

<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно
?>



<?php
// Задание 3
$a = 5;
$b = '05';
var_dump($a == $b);                    // Почему true?  Потому что == не сравнивакет типы данных, а только их значения
var_dump((int)'012345');               // Почему 12345? Потому что при приведении строки к целому числу (int - целое число) оно теряет начальные нули ('012345' => 12345)
var_dump((float)123.0 === (int)123.0); // Почему false? Потому что при приведении к целому числу (int) получается 123, а число с плавающей точкой будет равно 123.0. При сравнении 123.0 === 123, выдает false, потому что они не равны для Php, так как числа с плавающей запятой не являются точными, это число может представлять примерно 123.00001.
var_dump((int)0 === (int)'hello, world'); // Почему true? Потому что при приведении строки к целому числу (int) она преобразуется в 0, если строка не начинается с цифры, те 0 === 0 => true
?>



<?php
// Задание 4
    $head = 'Lesson 1';
    $content = 'Hello, world!';
    $year = 2021;
 ?>
<title><?php echo ($head); ?></title>
<h1><?php echo ($content); ?></h1>
<p><?php echo ($year); ?></p>


<?php
// Задание 5
  $a = 1;
  $b = 2;

  $a = $b + $a; // $a = 3
  $b = $a - $b; //$b = 1
  $a = $a - $b; //$a = 2

  echo $a . '<br>';
  echo $b;
  ?>
