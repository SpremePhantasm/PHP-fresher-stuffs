<?php
/*check số chẵn*/
class testEven {
	function isEven($a) {
		if (($a%2)==0) {echo "là số chẵn";}
		else {echo "là số lẻ";}
	}
};
$testEven = new testEven;
echo $testEven->isEven(314);

/*check số nguyên tố*/
class testPrime {
	function isPrime($b) {
		for ($x=3;$x<($b/2);$x++) {
			if (($b%$x)==0) {echo "không phải số nguyên tố"; break;}
			else {echo "là số nguyên tố";}
		};
	}
};
$testPrime = new testPrime;
echo $testPrime->isPrime(66);