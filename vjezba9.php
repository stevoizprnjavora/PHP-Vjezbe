<!DOCTYPE HTML>
<html>
	<head>
    <title>Vjezba 9</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje vjezbe 9">
		<meta name="keywords" content="">
		<meta name="author" content="Zvonimir Ćosić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
<body>
<?php

function daliradi()
{
    $currentDate = (new DateTime())->format('l H:i:s');
    if(date('N', $currentDate)<=5 && date('H', $currentDate) >=8 && date('H', $currentDate) <=20)
    {
        
    }
    else if (date('N', $currentDate)==6 && date('H', $currentDate) >=8 && date('H', $currentDate) <=15)
    {

    }
    else if (date('N', $currentDate)==7)
    {

    }
    else
    {
        $result = "Ne radi";
    }
    return $result;
}



$a = 8;
$b = 20;
$c = 15;
$x = "Saturday";
$y = "Sunday";

function getDatetimeNow() {
  $datetime = new DateTime();
  return $datetime->format('l H:i:s');
}
$currentDate = getDatetimeNow();
$currentDate = (new DateTime()) -> format ('l H:i:s');
echo "<h1>Radno vrijeme</h1>
<p>Radno vrijeme trgovine je svaki dan od 8:00 do 20:00</p>
<p>Radno vrijeme trgovine subotom od 8:00 do 15:00</p>
<p>Nedjeljom ne radimo</p>
<p>Sada je $currentDate</p>";
If($currentDate == $y){
    echo "<p>ZATVORENO</p>";
}
elseif($currentDate == $x || $currentDate >= $a || $currentDate <= $c ){
    echo "<p>OTVORENO</p>";
}

elseif ( $currentDate >= $a || $currentDate <= $b ){
	echo "<p>OTVORENO</p>";
}
else{
    echo "<p>ZATVORENO</p>";
}
	?>
</body>
</html>