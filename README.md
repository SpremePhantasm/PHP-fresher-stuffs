# PHP-fresher-stuffs
For PHP stuffs
<?php
/*Check số chẵn*/
class testEven {
  function isEven($a) {
    if (($a%2)==0) {return true;}
    else {return false;}
  };
};
$testEven = new testEven;
$testEven->isEven(123);
/*Check số nguyên tố */
class testEven {
  function isPrime($a) {
    for ($x=3;$x<$b/2;$x++) {
      if (($b%$x)==0) {return false;}
      else {return true;}
  };
};
$testPrime = new testPrime;
$testPrime->isPrime(123);
