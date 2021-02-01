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

