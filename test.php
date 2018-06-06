<?php
/*check số chẵn*/
class testEven {
	function isEven($a) {
		if (($a%2)==0) {echo $a." là số chẵn";}
		else {echo $a." là số lẻ";}
	}
};
$testEven = new testEven;
echo $testEven->isEven(314);
/*check số nguyên tố*/
class testPrime {
	function isPrime($b) {
		if (is_int($b) and $b>0) {
		for ($x=3;$x<($b/2);$x++) {
			if (($b%$x)==0) {echo $b." không phải là số nguyên tố"; break;}
		};
		echo $b." là số nguyên tố";
	}
	else { echo $b."không phải là số nguyên tố";}
	}
};
$testPrime = new testPrime;
echo $testPrime->isPrime(-152);