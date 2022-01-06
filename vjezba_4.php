<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>
<!DOCTYPE HTML>
<html>
	<head>
        <title>Zadatak 4</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Rjesenje cetvrtog zadatka">
		<meta name="keywords" content="vrijednost,a,b,pošalji">
		<meta name="author" content="Zvonimir Cosic">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
<body>
	<form action="Vjezba_4.php" method="POST">
		<p><label for="a">VRIJEDNOST A:</label><input type="number" name="a"></p>
		<p><label for="b">VRIJEDNOST B:</label><input type="number" name="b"></p>
		<p><input type="submit" value="POSALJI"></p>
	</form>
	<?php
		$_a=$_POST['a'];
		$_b=$_POST['b'];
		$c=(3*$_a-$_b)/2;
		print '
		<p>A ='.$_a .'</p>
		<p>B ='.$_b .'</p>
		<p>C =(3*'.$_a.'-'.$_b.')/2 = '.$c .'</p>'
			
	?>
</body>
</html>