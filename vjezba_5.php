<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak 5</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Rjesenje cetvrtog zadatka">
		<meta name="keywords" content="Igra, pogodi, broj">
		<meta name="author" content="Zvonimir Cosic">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
	<body style="margin: 20px;">

       <?php
		$random = rand(1,9);
       //$num = $_POST ['num'];
		print '
		<h1 style="margin: 20px;px;font: size 18px;px;">Igra (pogodi broj)</h1>
		<form action="" method="post" id="pogodi broj">		    
		    <label style="font-weight: bold;">Upiši jedan broj od 1 do 9*</label>
		    <input type="number" name="num" id="num" required="required" value="'. $num . '" autofocus>
		    
		</form>';
		    if (isset($_POST['num'])) {
				if ($_POST['num'] == $random) {
					print '<p style="background-color: MediumSeaGreen; width: fit-content">Pogodak, pokušaj ponovno!</p>';			    
			}
            
			else if($_POST['num'] != $random) {
			    print '<p style="background-color: crimson; width: fit-content">Krivo, pokušaj ponovno!</p>';
			}
			print '<p style="margin-top:10px;">Zamišljeni broj je '.$random.'</p>';
		    }
    	?>
    </body>
</html>