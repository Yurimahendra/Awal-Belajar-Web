<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Post pre increment & decrement</title>
</head>

<body>
	<h2>Post / Pre Increment & Decrement</h2>
	<?php

	$a = 11;
	echo 'Pre Increment<br>';
	echo '<br> Nilai awal $a = ' . $a;
	echo '<br> Nilai ++$a = ' . ++$a;
	$a = 11;
	echo '<br><br>Post Increment<br>';
	echo '<br> Nilai awal $a = ' . $a;
	echo '<br> Nilai  $a++ = ' . $a++;

	$a = 11;
	echo '<br><br>Pre Decrement<br>';
	echo '<br> Nilai awal $a = ' . $a;
	echo '<br> Nilai --$a = ' . --$a;
	$a = 11;
	echo '<br><br>Post Decrement<br>';
	echo '<br> Nilai awal $a = ' . $a;
	echo '<br> Nilai  $a-- = ' . $a--;

	?>
</body>

</html>