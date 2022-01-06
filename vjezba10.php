<!DOCTYPE HTML>
<html>
	<head>
        <title>Vjezba 10</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje vjezbe 10">
		<meta name="keywords" content="">
		<meta name="author" content="Zvonimir Ćosić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
	<body>
		<h1>ISPIS BROJA RIJEČI U REČENICI</h1>
		<form action="" method="post">
			<label for="ulaz">ULAZNI NIZ: </label>
            <br>
			<input type="text" name="ulaz" size="100" value="">
            <br><br>
			<input type="submit" name="submit" value="ISPIŠI BROJ RIJEČI">
            <br><br>
		</form>
		<?php
        //Drugi nacin je---> if ($SERVER[REQUEST_METHOD"] == "POST")
			if(isset($_POST['submit']))
			{ 	$ulaz =$_POST['ulaz'];
				$br = str_word_count($ulaz);
				echo "Ulazni niz: ". $ulaz . ". sadrži ". $br ." riječi.";
			    return 0;
			}
		?>
	</body>
</html>