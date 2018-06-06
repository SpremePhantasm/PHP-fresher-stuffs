<?php
/*check số chẵn*/
class testEven {
	function isEven($a) {
		if (($a%2)==0) {return true;}
		else {return false;}
	}
};
$testEven = new testEven;
return $testEven->isEven(314);

/*check số nguyên tố*/
class testPrime {
	function isPrime($b) {
		for ($x=3;$x<($b/2);$x++) {
			if (($b%$x)==0) {return false;}
			else {return true;}
		};
	}
};
$testPrime = new testPrime;
return $testPrime->isPrime(87);