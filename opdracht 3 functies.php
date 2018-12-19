<?php

//som 1

$cijfers = array(1, 2, 3, 4);
function  som(array $lijst){
	$som = 0;
	$aantal = count($lijst);
	for ($t=0; $t < $aantal; $t++){
		$som = $som + $lijst[$t];
		
	}
	return $som;
}
echo som($cijfers);
echo "<br>";

//gem

function  Gem(array $cijfer){
    $result = 0;
    $aantal2 = count($cijfer);
	for ($l=0; $l < $aantal2; $l++){
		$result = $result + $cijfer[$l];
		
	
}
    return $result/$aantal2;
}

$cijfer = array(1, 2, 3, 4);
echo gem($cijfer);

echo "<br>";

//Som 2


function  Som2(array $cijfer, int $uitkomst){

		$uitkomst = som($lijst);		
}

$cijfer = Array(1, 2, 3, 4);
$uit = 3
echo som(cijfers);
echo "<br>Gemiddelde:" . Gem($cijfers);
som2($cijfers, $uit)
echo $uit;


/*
$cijfer2 = array(1, 2, 3, 4);
function  som2(array $lijst2){
	$som2 = 0;
	$aantal3 = count($lijst2);
	for ($g=0; $g < $aantal3; $g++){
		$som2 = $som2 + $lijst2[$g];
		
	}
	return $som2;
}
echo som($cijfer2);
echo "<br>";
*/
?>