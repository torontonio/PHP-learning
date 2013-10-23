<?php 
/* programa para calcular el numero combinatorio de 2 numeros. 
	para calcularlo aplicaremos la formula:
	
	   n!
	--------
	m!(n-m)!
*/


function factorial($var){
	// funcion que recibe un numero y devuelve su factorial
	$temp = 1;
	for($i=1 ; $i<=$var ; $i++){
		$temp = $temp * $i;
	}
	return $temp;
}// fin function factorial --------------------------------

// numeros a combinar  
$n = 5;
$m = 3;
$resta = $n - $m;	// esta variable se usa en la formula

echo "Combinatoria de los numeros " . $n . " sobre " . $m;
echo "<br/>";
$n1 = factorial($n);
$m1 = factorial($m);
$r1 = factorial($resta);

$comb = $n1 / ($m1 * $r1);

echo "la combinatoria de ". $n. " sobre ". $m . " es = " . $comb;

?>
