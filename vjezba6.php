<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
	<head>
        <title>Vjezba 6</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Rjesenje vjezbe 6">
		<meta name="keywords" content="kalkulator, ">
		<meta name="author" content="Zvonimir Ćosić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
<body style="margin: 20px;">
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
            $result = '';
        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operator) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    $result = $num1 / $num2;
                }
            }
    print '
    <h1 style="margin-bottom:10px;font-size:20px;">KALKULATOR</h1>
    <form action="" method="post" id="calculator">
	<label for="fname">Unesite broj:</label>
    <input type="number" name="num1" id="" required="required" value="'. $num1 . '">
    <br>
    <label for="fname">Unesite broj:</label>
    <input type="number" name="num2" id="" required="required" value="'. $num2 . '"> 
    <br>
    <br>
    <p> Rezultat: '.$result.' </p> 
    <br>
    <br>
    <input type="submit" name="operator" value=" + " class="">
    <input type="submit" name="operator" value=" - " class="">
    <input type="submit" name="operator" value=" * " class="">
    <input type="submit" name="operator" value=" / " class="">
    </form>';
    ?>
</body>
</html>