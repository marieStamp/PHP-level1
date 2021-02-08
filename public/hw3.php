<?php
//Задание 5

function change($word) {
	echo str_replace(" ", "_", $word);
}
change("Под лежачий камень и вода не течет");

?>

<?php
//Задание 4

function transliterate($word){
	$dictionary = [
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'yo',
		'ж' => 'zh',
		'з' => 'z',
		'и' => 'i',
		'й' => 'j',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'h',
		'ц' => 'ts',
		'ч' => 'ch',
		'ш' => 'sh',
		'щ' => 'csh',
		'ъ' => '',
		'ь' => "'",
		'э' => 'e',
		'ю' => 'yu',
		'я' => 'ya',
	];
	$newWord = preg_split('//u', $word, 0, PREG_SPLIT_NO_EMPTY);
	$word = '';
foreach($newWord as $value) {
    $word .= (isset($dictionary[$value])) ? $dictionary[$value] : $value;
}
return $word;
}

echo transliterate('счастье всеобъемлеще');

?>

<?php
//Задание 3

$cities = [
'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
'Рязанская область' => ['Рязань', 'Касимов', 'Ряжск', 'Скопин', 'Михайлов', 'Щацк',],
];

foreach($cities as $district => $city){
	echo '<br>' . "$district:" . '<br>';
	foreach ($cities[$district] as $city) {
		echo " $city" . ',';
	}
}

?>

<?php
//Задание 2

 $i = 0;
   do {
     if ($i === 0){
       echo "$i " . "- ноль" . "<br>";
     } elseif($i % 2 === 0){
       echo "$i " . "- четное число" . "<br>";
     } else {
       echo "$i " . "- нечетное число" . "<br>";
     }
     $i++;
     } while ($i <= 10);

?>

<?php
//Задание 1

$i = 0;
  while($i <= 100){
  	if($i % 3 === 0){
  		echo $i . "<br>";
  	}
  	$i++;
  }

 ?>

 <?php
 //Задание 7

 for($i = 0; $i < 10; print $i++){};

 ?>